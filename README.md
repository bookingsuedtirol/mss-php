# mss-php
MSS API wrapper for PHP projects

## Available services
- [x] getHotelList
- [x] getSpecialList
- [x] getRoomList
- [x] getRoomAvailability
- [x] prepareBooking
- [x] getBooking
- [x] createInquiry
- [x] getUserSources

## Example
```php
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
    $req->request->search->id[] = '11230';
    $req->request->options->hotel_details = (new Bitmask(
        HotelDetails::BASIC_INFO|
        HotelDetails::PAYMENT_OPTIONS_FOR_ONLINE_BOOKING
    ))->getBitmask();
});

$hotel = $res['result']['hotel'][0];
var_dump($hotel['name']); // => string(18) "Hotel Lichtenstern"
var_dump($hotel['stars']); // => float(3)
var_dump($hotel['online_payment']['bank']['iban']); // => string(27) "IT28K0818758740000001021022"
```

## More complex example
```php
use MssPhp\Schema\Request;
// ...

$res = $client->request(function($req) {
    $req->request->search->id[] = '11230';
    $req->request->options->offer_details = (new Bitmask(
        OfferDetails::BASIC_INFO|
        OfferDetails::ROOM_TITLE
    ))->getBitmask();

    $offer = $req->request->search->search_offer = new Request\SearchOffer();
    $offer->arrival = new DateTime('2016-04-06');
    $offer->departure = new DateTime('2016-04-13');
    $offer->service = 0;
    $offer->room[] = new Request\Room();
    $offer->room[0]->room_seq = 1;
    $offer->room[0]->room_type = 0;
    $offer->room[0]->person[] = 18;
    $offer->room[0]->person[] = 18;
});

$offer = $res['result']['hotel'][0]['channel']['offer_description']['offer'][0];

var_dump($offer['offer_id']); // => string(5) "40444"
var_dump($offer['title']); // => string(11) "Tagespreise"
```

## Exception handling
If the MSS returns an error response, a `MssException` exception is thrown.

```php
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
