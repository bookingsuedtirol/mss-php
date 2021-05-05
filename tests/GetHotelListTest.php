<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use MssPhp\Client;
use MssPhp\Tests\Utils;

final class GetHotelListTest extends TestCase
{
    private $client;

    protected function setUp(): void
    {
        $this->client = Utils::getClient();
    }

    public function testFullHotelList(): void
    {
        $deserialized = $this->client->deserialize(
            Utils::getXmlFileContents("getHotelList.xml")
        );

        $this->assertJsonStringEqualsJsonFile(
            Utils::getJsonFilePath("getHotelList.json"),
            json_encode($deserialized)
        );
    }
}
