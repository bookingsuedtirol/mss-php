<?php

require __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use Crutches\Bitmask;
use MssPhp\Client;
use MssPhp\Bitmask\HotelDetails;

$client = new Client();

$res = $client->request(function ($req) {
    $req->header->method = "getHotelList";
    $req->request->search->id[] = "9002";
    $req->request->options->hotel_details = (new Bitmask(
        HotelDetails::BASIC_INFO |
            HotelDetails::THEMES |
            HotelDetails::HOTEL_FACILITIES |
            HotelDetails::SHORT_DESCRIPTION |
            HotelDetails::FULL_DESCRIPTION |
            HotelDetails::GEOGRAPHIC_INFORMATION |
            HotelDetails::COORDINATES |
            HotelDetails::ADDRESS |
            HotelDetails::CONTACTS |
            HotelDetails::PAYMENT_OPTIONS_FOR_ONLINE_BOOKING |
            HotelDetails::PAYMENT_OPTIONS_AT_HOTEL |
            HotelDetails::LOGO |
            HotelDetails::HEADER_IMAGES |
            HotelDetails::GALLERY |
            HotelDetails::HOTEL_MATCHING |
            HotelDetails::GEOGRAPHICAL_INFORMATION_AS_TEXT |
            HotelDetails::HOTEL_NAVIGATOR_DATA |
            HotelDetails::DETAILED_HOTEL_FACILITIES |
            HotelDetails::SALES_POINT |
            HotelDetails::LTS_SPECIFIC_PARAMETERS |
            HotelDetails::CHECK_IN_OUT |
            HotelDetails::SOURCE_DATA |
            HotelDetails::BOARD_DATA |
            HotelDetails::COUPON_SERVICE_DATA
    ))->getBitmask();
});

echo json_encode($res->result->hotel[0]->features_view, JSON_PRETTY_PRINT);
