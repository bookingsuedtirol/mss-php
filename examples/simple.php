<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use Crutches\Bitmask;
use MssPhp\Client;
use MssPhp\Bitmask\HotelDetails;

$client = new Client();

$res = $client->request(function($req) {
    $req->header->method = 'getHotelList';
    $req->request->search->id[] = '11230';
    $req->request->options->hotel_details = (new Bitmask(
        HotelDetails::BASIC_INFO|
        HotelDetails::COORDINATES
    ))->getBitmask();
});

$hotel = $res['result']['hotel'][0];
var_dump($hotel['name']); // => string(18) "Hotel Lichtenstern"
var_dump($hotel['stars']); // => float(3.5)
var_dump($hotel["geolocation"]["latitude"]); // => float(46.53063158978)
