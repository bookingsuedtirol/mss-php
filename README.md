# mss-php

[![Latest Stable Version](https://img.shields.io/packagist/v/hgv/mss-php.svg?style=flat-square)](https://packagist.org/packages/hgv/mss-php)

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

## Available services

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
- [x] validateCoupon

## Example

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Crutches\Bitmask;
use MssPhp\Client;
use MssPhp\Bitmask\HotelDetails;

$client = new Client([
    'user' => 'username',
    'password' => 'password',
    'source' => 'source'
]);

$res = $client->request(function($req) {
    $req->header->method = 'getHotelList';
    $req->request->search->id = ['11230'];
    $req->request->options->hotel_details = (new Bitmask(
        HotelDetails::BASIC_INFO|
        HotelDetails::COORDINATES
    ))->getBitmask();
});

$hotel = $res['result']['hotel'][0];
var_dump($hotel['name']); // => string(18) "Hotel Lichtenstern"
var_dump($hotel['stars']); // => float(3)
var_dump($hotel["geolocation"]["latitude"]); // => float(46.53063158978)
```

Check out the `examples` directory for more advanced usage.

## Exception handling

If the MSS returns an error response, a `MssException` exception is thrown.

```php
<?php
use MssPhp\Exception;
// ...

try {
    $res = $client->request(function($req) {
    // ...
    });
} catch (Exception\MssException $e) {
    var_dump($e->getMessage()); // => string(50) "Invalid value '2016-04-08' for parameter 'arrival'"
    var_dump($e->getCode()); // => int(32)
    die();
}
```
