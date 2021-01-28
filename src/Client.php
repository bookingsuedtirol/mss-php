<?php
namespace MssPhp;

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

use MssPhp\Schema\Request;
use MssPhp\Schema\Response;
use MssPhp\Exception;
use MssPhp\Handler;
use GuzzleHttp\Psr7;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\XmlSerializationVisitor;
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
     * @var JMS\Serializer
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
        $serializer = SerializerBuilder::create();
        $serializer->addDefaultSerializationVisitors();
        $serializer->addDefaultDeserializationVisitors();
        // Add custom handlers
        $serializer->configureHandlers(function(HandlerRegistry $registry) {
            $registry->registerSubscribingHandler(new Handler\NullableDateHandler());
        });
        // Configure XML serializer to not format xml output
        $namingStrategy = new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy());
        $xmlVisitor = new XmlSerializationVisitor($namingStrategy);
        $xmlVisitor->setFormatOutput(false);
        $serializer->setSerializationVisitor('xml', $xmlVisitor);
        $this->serializer = $serializer->build();
    }

    public function setConfig(array $config)
    {
        $default = [
            'user' => $_ENV['MSS_USER'],
            'password' => $_ENV['MSS_PASSWORD'],
            'source' => $_ENV['MSS_SOURCE'],
            'client' => Psr18ClientDiscovery::find()
        ];

        $this->config = $config + $default;
    }

    private function createConfiguredClient(): PluginClient
    {
        $plugins = [
            new Plugin\HeaderDefaultsPlugin([
                'Accept-Encoding' => 'gzip',
                'Content-Type' => 'text/xml; charset=UTF8'
            ]),
            new DecoderPlugin()
        ];

        return new PluginClient($this->config['client'], $plugins);
    }

    /**
     * Makes a request to the MSS Endpoint
     *
     * @param callback $setup to modify request
     * @param string $type deserialization root class
     *
     * @return array
     */
    public function request($setup, $type = Response\Root::class)
    {
        $xmlReq = $this->createNewXmlRequest();
        $setup($xmlReq);
        
        $reqBody = $this->serializer->serialize($xmlReq, 'xml');
        
        $stream = Psr17FactoryDiscovery::findStreamFactory()
            ->createStream($reqBody);

        $request = Psr17FactoryDiscovery::findRequestFactory()
            ->createRequest('POST', 'https://www.easymailing.eu/mss/mss_service.php')
            ->withBody($stream);

        $response = $this->httpClient->sendRequest($request);
        $resBody = $response->getBody();

        $res = $this->serializer->deserialize($resBody, $type, 'xml');
        $res = json_decode($this->serializer->serialize($res, 'json'), true);
        $error = $res['header']['error'];
        $errorCode = (int) $error['code'];

        if ($errorCode > 0) {
            throw new Exception\MssException(
                $errorCode,
                $error['message'],
                $request,
                $response
            );
        }

        return $res;
    }

    /**
     * Creates a new request instance
     *
     * @return MssPhp\Schema\Request\Root
     */
    private function createNewXmlRequest() {
        $req = new Request\Root();
        $req->header = new Request\Header();
        $req->request = new Request\Request();
        $req->request->search = new Request\Search();
        $req->request->options = new Request\Options();
        $req->header->credentials = new Request\Credentials();
        $req->header->credentials->user = $this->config['user'];
        $req->header->credentials->password = $this->config['password'];
        $req->header->credentials->source = $this->config['source'];

        return $req;
    }
}
