<?php
namespace MssPhp\Bitmask;

class HotelDetails
{
    const BASIC_INFO = 1;
    const THEMES = 2;
    const HOTEL_FACILITIES = 4;
    const SHORT_DESCRIPTION = 8;
    const FULL_DESCRIPTION = 16;
    const GEOGRAPHIC_INFORMATION = 32;
    const COORDINATES = 64;
    const ADDRESS = 128;
    const CONTACTS = 256;
    const PAYMENT_OPTIONS_FOR_ONLINE_BOOKING = 512;
    const PAYMENT_OPTIONS_AT_HOTEL = 1024;
    const LOGO = 2048;
    const HEADER_IMAGES = 4096;
    const GALLERY = 8192;
    const HOTEL_MATCHING = 16384;
    const GEOGRAPHICAL_INFORMATION_AS_TEXT = 32768;
    const HOTEL_NAVIGATOR_DATA = 65536;
    const DETAILED_HOTEL_FACILITIES = 131072;
    const SALES_POINT = 524288;
    const LTS_SPECIFIC_PARAMETERS = 262144;
}
