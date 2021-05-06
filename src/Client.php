<?php
namespace MssPhp;

use MssPhp\Schema\Request;
use MssPhp\Schema\Response;
use MssPhp\Exception;
use MssPhp\Handler\CustomDateHandler;
use GuzzleHttp\Psr7;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistry;
use Psr\Http\Client\ClientInterface;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Client\Common\Plugin;
use Http\Client\Common\PluginClient;
use Http\Client\Common\Plugin\DecoderPlugin;

final class Client
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var ClientInterface|PluginClient
     */
    private $httpClient;

    /**
     *  Default request options
     *
     * @var array $config
     */
    private $config;

    public function __construct(array $config = [])
    {
        $this->setConfig($config);
        $this->httpClient = $this->createConfiguredClient();
        $this->serializer = SerializerBuilder::create()
            ->addDefaultHandlers()
            ->configureHandlers(function (HandlerRegistry $registry) {
                CustomDateHandler::register($registry);
            })
            ->build();
    }

    public function setConfig(array $config): void
    {
        $default = [
            "user" => $_ENV["MSS_USER"],
            "password" => $_ENV["MSS_PASSWORD"],
            "source" => $_ENV["MSS_SOURCE"],
            "client" => Psr18ClientDiscovery::find(),
        ];

        $this->config = $config + $default;
    }

    private function createConfiguredClient(): PluginClient
    {
        $plugins = [
            new Plugin\HeaderDefaultsPlugin([
                "Accept-Encoding" => "gzip",
                "Content-Type" => "text/xml; charset=UTF8",
            ]),
            new DecoderPlugin(),
        ];

        return new PluginClient($this->config["client"], $plugins);
    }

    public function deserialize(
        string $xmlString,
        string $type = Response\Root::class
    ) {
        return $this->serializer
            ->deserialize($xmlString, $type, "xml")
            ->toArrayWithoutNull();
    }

    /**
     * Makes a request to the MSS Endpoint
     *
     * @param callable $setup to modify request
     * @param string $type deserialization root class
     *
     * @return array
     */
    public function request($setup, $type = Response\Root::class)
    {
        $xmlReq = $this->createNewXmlRequest();
        $setup($xmlReq);

        // If result_id has a value, the request node must be empty
        if ($xmlReq->header->result_id) {
            $xmlReq->request->search = null;
        }

        $reqBody = $this->serializer->serialize($xmlReq, "xml");

        $stream = Psr17FactoryDiscovery::findStreamFactory()->createStream(
            $reqBody
        );

        $request = Psr17FactoryDiscovery::findRequestFactory()
            ->createRequest(
                "POST",
                "https://www.easymailing.eu/mss/mss_service.php"
            )
            ->withBody($stream);

        $response = $this->httpClient->sendRequest($request);
        $resBody = $response->getBody();

        $res = $this->deserialize($resBody, $type);

        $error = $res["header"]["error"];
        $errorCode = (int) $error["code"];

        if ($errorCode > 0) {
            throw new Exception\MssException(
                $error["message"],
                $request,
                $response,
                null,
                $errorCode
            );
        }

        return $res;
    }

    /**
     * Creates a new request instance
     *
     * @return Request\Root
     */
    private function createNewXmlRequest()
    {
        $req = new Request\Root();
        $req->header = new Request\Header();
        $req->request = new Request\Request();
        $req->request->search = new Request\Search();
        $req->request->options = new Request\Options();
        $req->header->credentials = new Request\Credentials();
        $req->header->credentials->user = $this->config["user"];
        $req->header->credentials->password = $this->config["password"];
        $req->header->credentials->source = $this->config["source"];

        return $req;
    }
}
