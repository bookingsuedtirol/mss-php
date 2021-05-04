<?php
namespace MssPhp\Exception;

use Http\Client\Exception\HttpException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use MssPhp\Bitmask\ErrorCodes;

final class MssException extends HttpException
{
    public function __construct(
        $message,
        RequestInterface $request,
        ResponseInterface $response,
        \Exception $previous = null,
        int $code = ErrorCodes::GENERIC_ERROR
    ) {
        $statusCode = self::mapErrorToStatusCode($code);
        parent::__construct($message, $request, $response->withStatus($statusCode), $previous);
        $this->code = $code;
    }

    private static function mapErrorToStatusCode(int $code)
    {
        switch ($code) {
            case ErrorCodes::INVALID_XML:
            case ErrorCodes::INVALID_METHOD:
            case ErrorCodes::INVALID_MISSING_PARAMETER:
            case ErrorCodes::BOOKING_VALIDATION_FAILED:
                return 400;
            case ErrorCodes::AUTHENTICATION_ERROR:
                return 401;
            case ErrorCodes::PERMISSIONS_DENIED:
                return 403;
            case ErrorCodes::RESULT_ID_NOT_IN_CACHE:
                return 410;
            default:
                return 502;
        }
    }
}
