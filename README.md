# mss-php

[![Packagist Version (including pre-releases)](https://img.shields.io/packagist/v/hgv/mss-php.svg?include_prereleases&style=flat-square)](https://packagist.org/packages/hgv/mss-php)

MSS API Client for PHP projects.
Only supports MSS 2.0!

## Installation

The MSS API Client is not hard coupled to Guzzle, Buzz or any other library that sends
HTTP messages. Instead, it uses the [PSR-18](https://www.php-fig.org/psr/psr-18/) client abstraction.
This will give you the flexibility to choose what
[PSR-7 implementation and HTTP client](https://packagist.org/providers/php-http/client-implementation)
you want to use.

```bash
composer require hgv/mss-php kriswallsmith/buzz nyholm/psr7
```

## Available methods

- [x] getHotelList
- [x] getSpecialList
- [x] getRoomList
- [x] getPriceList
- [x] getRoomAvailability
- [x] prepareBooking
- [x] getBooking
- [x] createInquiry
- [x] getUserSources
- [x] getLocationList
- [x] getMasterpackagesList
- [x] getThemeList
- [x] getSeoTexts
- [x] validateCoupon

## Example

```php
<?php
require __DIR__ . "/vendor/autoload.php";

use Crutches\Bitmask;
use MssPhp\Client;
use MssPhp\Bitmask\HotelDetails;

$client = new Client([
  "user" => "username",
  "password" => "password",
  "source" => "source",
]);

$res = $client->request(function ($req) {
  $req->header->method = "getHotelList";
  $req->request->search->id = ["11230"];
  $req->request->options->hotel_details = (new Bitmask(
    HotelDetails::BASIC_INFO | HotelDetails::COORDINATES
  ))->getBitmask();
});

$hotel = $res["result"]["hotel"][0];
$hotel["name"]; // => string(18) "Hotel Lichtenstern"
$hotel["stars"]; // => float(3)
$hotel["geolocation"]["latitude"]; // => float(46.53063158978)
```

Check out the `examples` directory for more advanced usage.

## Exception handling

If the MSS returns an error response, a `MssException` exception is thrown.

```php
<?php
use MssPhp\Exception;
// ...

try {
  $res = $client->request(function ($req) {
    // ...
  });
} catch (Exception\MssException $e) {
  $e->getMessage(); // => string(50) "Invalid value '2016-04-08' for parameter 'arrival'"
  $e->getCode(); // => int(32)
  $e->getResponse()->getStatusCode(); // => int(400)
}
```

## Development

Run `docker-compose run cli bash`.

If you experience permission issues with some files in this folder,
change the `USER_ID` and `GROUP_ID` values inside Dockerfile.

## Automated tests

Run `composer test` inside the Docker container.
