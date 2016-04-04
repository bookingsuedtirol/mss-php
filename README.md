# mss-php
MSS API wrapper for PHP projects

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
echo $hotel->name; // => Hotel Lichtenstern
echo $hotel->online_payment->bank->iban; // => IT28K0818758740000001021022
```
