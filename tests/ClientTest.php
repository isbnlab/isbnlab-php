<?php

declare(strict_types=1);

namespace ISBNLab\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use ISBNLab\Api\AuthorsApi;
use ISBNLab\Api\BooksApi;
use ISBNLab\Api\GenresApi;
use ISBNLab\Api\IsbnApi;
use ISBNLab\Api\PublishersApi;
use ISBNLab\Api\SubjectsApi;
use ISBNLab\ApiException;
use ISBNLab\Configuration;
use ISBNLab\Model;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * Each SDK method against a mocked HTTP client: the request it sends and the
 * typed result it returns. Fixtures are the example responses from the API
 * documentation, in plain JSON.
 */
final class ClientTest extends TestCase
{
    /** @var list<array{request: RequestInterface}> */
    private array $history = [];

    public function testGetBookByIsbn(): void
    {
        $book = (new BooksApi($this->client('book.json'), $this->config()))->getBookByIsbn('9780765302304');

        $this->assertRequest('/api/book/isbn/9780765302304');
        self::assertInstanceOf(Model\Book::class, $book);
        self::assertSame('The Gathering Storm', $book->getTitle());
        self::assertSame(15596406, $book->getId());
        self::assertSame('9780765302304', $book->getIsbn13());
        self::assertSame('Robert Jordan', $book->getAuthors()[0]->getName());
        self::assertInstanceOf(\DateTime::class, $book->getPublishDate());
        self::assertInstanceOf(Model\Series::class, $book->getSeries());
        self::assertSame(12, $book->getSeries()->getNumber());
        self::assertInstanceOf(Model\EditionRef::class, $book->getOtherEditions()[0]);
        self::assertInstanceOf(Model\IsbnDetails::class, $book->getIsbnModel());
    }

    public function testABookWithMostFieldsEmptyStillLoads(): void
    {
        $book = (new BooksApi($this->client('book-sparse.json'), $this->config()))->getBookByIsbn('9780000000002');

        self::assertSame('A Sparse Book', $book->getTitle());
        self::assertNull($book->getRatings());
        self::assertNull($book->getContributors());
        self::assertNull($book->getPublishDate());
        self::assertSame([], $book->getAuthors());
    }

    public function testSearchBooksSendsPagingParameters(): void
    {
        $books = (new BooksApi($this->client('book-search.json'), $this->config()))->searchBooks('gathering storm', 5, 2);

        $this->assertRequest('/api/search/book/gathering%20storm', 'limit=5&page=2&max_results=100');
        self::assertNotEmpty($books);
        self::assertContainsOnlyInstancesOf(Model\Book::class, $books);
    }

    public function testBookCoverAndEditions(): void
    {
        $cover = (new BooksApi($this->client('book-cover.json'), $this->config()))->getBookCoverByIsbn('9780765302304');
        $this->assertRequest('/api/book/cover/isbn/9780765302304');
        self::assertStringStartsWith('https://', $cover->getCovers()[0]);

        $editions = (new BooksApi($this->client('book-editions.json'), $this->config()))->getEditionsByIsbn('9780765302304');
        $this->assertRequest('/api/editions/isbn/9780765302304');
        self::assertContainsOnlyInstancesOf(Model\EditionRef::class, $editions->getOtherEditions());
    }

    public function testAuthorPublisherSubjectGenre(): void
    {
        $author = (new AuthorsApi($this->client('author.json'), $this->config()))->findAuthor('Robert Jordan');
        $this->assertRequest('/api/author/search/Robert%20Jordan');
        self::assertSame('Robert Jordan', $author->getName());
        self::assertInstanceOf(Model\AuthorPhoto::class, $author->getPhotos()[0]);
        self::assertSame(330, $author->getPhotos()[0]->getWidth());

        $publishers = (new PublishersApi($this->client('publishers-by-prefix.json'), $this->config()))->getPublishersByPrefix('978-0-7653');
        $this->assertRequest('/api/publisher/prefix/978-0-7653');
        self::assertContainsOnlyInstancesOf(Model\Publisher::class, $publishers);

        $subject = (new SubjectsApi($this->client('subject.json'), $this->config()))->getSubject('1');
        $this->assertRequest('/api/subject/1');
        self::assertNotNull($subject->getName());

        $genre = (new GenresApi($this->client('genre.json'), $this->config()))->findGenre('FIC009000');
        $this->assertRequest('/api/genre/search/FIC009000');
        self::assertNotNull($genre->getBisacCode());
    }

    public function testIsbnConversion(): void
    {
        $details = (new IsbnApi($this->client('isbn-details.json'), $this->config()))->isbn10ToIsbn13('0765302306');

        $this->assertRequest('/api/isbn/isbn10-to-isbn13/0765302306');
        self::assertSame('9780765302304', $details->getIsbn13());
    }

    public function testAnErrorResponseThrowsApiExceptionWithTheStatus(): void
    {
        $client = $this->client(null, new Response(404, ['Content-Type' => 'application/problem+json'], '{"title":"An error occurred","detail":"Not Found","status":404}'));

        try {
            (new BooksApi($client, $this->config()))->getBookByIsbn('9780000000000');
            self::fail('Expected an ApiException.');
        } catch (ApiException $e) {
            self::assertSame(404, $e->getCode());
            self::assertStringContainsString('Not Found', (string) $e->getResponseBody());
        }
    }

    private function config(): Configuration
    {
        return Configuration::getDefaultConfiguration()->setAccessToken('test-token');
    }

    private function client(?string $fixture, ?Response $response = null): Client
    {
        $response ??= new Response(200, ['Content-Type' => 'application/json'], (string) file_get_contents(__DIR__.'/fixtures/'.$fixture));
        $stack = HandlerStack::create(new MockHandler([$response]));
        $this->history = [];
        $stack->push(Middleware::history($this->history));

        return new Client(['handler' => $stack]);
    }

    private function assertRequest(string $path, string $query = ''): void
    {
        $request = $this->history[0]['request'];
        self::assertSame('GET', $request->getMethod());
        self::assertSame('www.isbnlab.com', $request->getUri()->getHost());
        self::assertSame($path, $request->getUri()->getPath());
        if ('' !== $query) {
            self::assertSame($query, $request->getUri()->getQuery());
        }
        self::assertSame('Bearer test-token', $request->getHeaderLine('Authorization'));
        self::assertSame('application/json', $request->getHeaderLine('Accept'));
    }
}
