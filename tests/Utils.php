<?php declare(strict_types=1);

namespace MssPhp\Tests;

use MssPhp\Client;
use Dotenv\Dotenv;

final class Utils
{
    public static function getClient(): Client
    {
        $dotenv = Dotenv::createImmutable(__DIR__, ".env.test");
        $dotenv->load();
        return new Client();
    }

    public static function getXmlFileContents(string $fileName)
    {
        return file_get_contents(__DIR__ . "/xml/$fileName");
    }

    public static function getJsonFilePath(string $fileName)
    {
        return __DIR__ . "/json/$fileName";
    }
}
