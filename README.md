# mss-php
MSS API wrapper for PHP projects

## Available services
- [x] getHotelList
- [x] getSpecialList

## Example
```php
require __DIR__ . '/vendor/autoload.php';

use Crutches\Bitmask;
use MssPhp\Client;
use MssPhp\Bitmask\Hotel as HOT;

$client = new Client([
    'user' => 'username',
    'password' => 'password',
    'source' => 'source'
]);

$res = $client->request(function($req) {
    $req->header->method = 'getHotelList';
    $req->request->search->id[] = '11230';
    $req->request->options->hotel_details = (new Bitmask(
        HOT::BASE_DATA|
        HOT::ONLINE_PAYMENT
    ))->getBitmask();
});

$hotel = $res->result->hotel[0];
var_dump($hotel->name); // => string(18) "Hotel Lichtenstern"
var_dump($hotel->stars); // => float(3)
var_dump($hotel->online_payment->bank->iban); // => string(27) "IT28K0818758740000001021022"
```
