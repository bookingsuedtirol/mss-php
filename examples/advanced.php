<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

use Crutches\Bitmask;
use MssPhp\Client;
use MssPhp\Schema\Request;
use MssPhp\Bitmask\HotelDetails;
use MssPhp\Bitmask\OfferDetails;

$client = new Client();

$res = $client->request(function($req) {
    $req->request->search->id = ['9002'];
    $req->request->options->offer_details = (new Bitmask(
        OfferDetails::BASIC_INFO|
        OfferDetails::ROOM_TITLE|
        OfferDetails::CANCEL_POLICIES|
        OfferDetails::PAYMENT_TERMS
    ))->getBitmask();

    $offer = $req->request->search->search_offer = new Request\SearchOffer();
    $offer->arrival = new DateTime();
    $offer->departure = (new DateTime())->modify('+1 week');
    $offer->service = 0;
    $offer->room[] = new Request\Room();
    $offer->room[0]->room_seq = 1;
    $offer->room[0]->room_type = 0;
    $offer->room[0]->person[] = 18;
    $offer->room[0]->person[] = 18;
});

$hotel = $res['result']['hotel'][0];

var_dump($hotel);