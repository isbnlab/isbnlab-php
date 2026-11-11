# ISBNLab PHP client

The official PHP client for the [ISBNLab book metadata API](https://www.isbnlab.com/api-information). Look up a book by ISBN and get its title, authors, publishers, series, BISAC genres, formats, page count, description and every other edition, from a catalog of more than 100 million editions. It also validates and converts ISBN-10, ISBN-13, EAN and Amazon ASIN.

## Install

```bash
composer require isbnlab/isbnlab-php
```

PHP 8.1 or later, with the `curl`, `json` and `mbstring` extensions.

## Get an API token

[Create a free ISBNLab account](https://www.isbnlab.com/register) and copy your API token from your profile. The Free plan includes 1,000 calls a day; see [pricing](https://www.isbnlab.com/pricing) for more.

## Quick start

```php
<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use ISBNLab\Api\BooksApi;
use ISBNLab\Configuration;

$config = Configuration::getDefaultConfiguration()
    ->setAccessToken(getenv('ISBNLAB_API_TOKEN'));

$books = new BooksApi(new Client(), $config);

$book = $books->getBookByIsbn('9780765302304');

echo $book->getTitle(), "\n";                  // The Gathering Storm
echo $book->getAuthors()[0]->getName(), "\n";  // Robert Jordan
echo $book->getPublishDate()?->format('Y'), "\n";

foreach ($book->getOtherEditions() ?? [] as $edition) {
    echo $edition->getIsbn13(), ' ', $edition->getTitle(), "\n";
}
```

Many fields are empty for some books, so every getter can return `null`.

Linked records carry ids you can look up directly (author, publisher, subject and genre lookups need a Standard or Pro plan):

```php
use ISBNLab\Api\AuthorsApi;

$authorId = $book->getAuthors()[0]->getId();
$author = (new AuthorsApi(new Client(), $config))->getAuthor((string) $authorId);

echo $author->getBio(), "\n";
```

## Errors

Any response other than 2xx throws `ISBNLab\ApiException`. Its code is the HTTP status:

```php
use ISBNLab\ApiException;

try {
    $book = $books->getBookByIsbn('9780000000000');
} catch (ApiException $e) {
    match ($e->getCode()) {
        404 => print("Not in the catalog\n"),
        429 => print("Daily limit reached\n"),
        403 => print("Your plan does not include this endpoint\n"),
        default => throw $e,
    };
}
```

## What you can call

| Class | Method | Plan |
|---|---|---|
| `BooksApi` | `getBookByIsbn($isbn)`, `getBookByAsin($asin)`, `getBookById($id)` | Free |
| `IsbnApi` | `parseIsbn`, `isbn10ToIsbn13`, `isbn13ToIsbn10`, `isbnToEan`, `eanToIsbn`, `isbnToAsin`, `asinToIsbn` | Free |
| `BooksApi` | `getBookCoverByIsbn($isbn)`, `getBookCoverByAsin($asin)` | Standard |
| `AuthorsApi` | `getAuthor($id)`, `findAuthor($name)` | Standard |
| `PublishersApi` | `getPublisher($id)`, `findPublisher($name)`, `getPublishersByPrefix($prefix)` | Standard |
| `SubjectsApi` | `getSubject($id)`, `findSubject($name)` | Standard |
| `GenresApi` | `getGenre($id)`, `findGenre($nameOrBisacCode)` | Standard |
| `BooksApi` | `searchBooks($query, $limit, $page, $maxResults)` | Pro |
| `BooksApi` | `getEditionsByIsbn($isbn)`, `getEditionsByAsin($asin)` | Pro |

Every method also has an `...Async()` version that returns a Guzzle promise, and a `...WithHttpInfo()` version that also returns the status code and headers (for example the rate-limit headers).

Reference for every method and model: [docs/](docs/). Field-by-field documentation: [API documentation](https://www.isbnlab.com/api-information).

## Development

`lib/` and `docs/` are generated from the API's [OpenAPI document](https://www.isbnlab.com/api/docs.jsonopenapi) with [OpenAPI Generator](https://openapi-generator.tech/), so changes to them are made in the generator and arrive with the next release; please open an issue rather than a pull request for those folders. `README.md`, `composer.json` and `tests/` are maintained by hand.

```bash
composer install
vendor/bin/phpunit
```

## License

MIT. Maintained by [ISBNLab](https://www.isbnlab.com/), the book metadata API.
