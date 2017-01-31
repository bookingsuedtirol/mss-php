<?php
namespace MssPhp;

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

use MssPhp\Schema\Request;
use MssPhp\Schema\Response;
use MssPhp\Exception;
use GuzzleHttp\Psr7;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\XmlSerializationVisitor;

class Client
{
    /**
     * @var JMS\Serializer
     */
    public $serializer;

    /**
     *  Default request options
     *
     * @var array $config
     */
    private $config;

    /**
     * Clients accept an array of constructor parameters.
     *
     * @param array $config Client configuration settings.
     */
    public function __construct(array $config = [])
    {
        $this->config = $this->configureDefaults($config);
        $serializer = \JMS\Serializer\SerializerBuilder::create();

        $namingStrategy = new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy());
        $xmlVisitor = new XmlSerializationVisitor($namingStrategy);
        $xmlVisitor->setFormatOutput(false);
        $serializer->setSerializationVisitor('xml', $xmlVisitor);

        if ($this->config['cache'] == true) {
            $serializer->setCacheDir(__DIR__ . '/Cache');
        }

        $this->serializer = $serializer->build();
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
        $req = $this->createNewRequest();
        $setup($req);

        $xmlReq = $this->serializer->serialize($req, 'xml');
        $rawReq = new Psr7\Request('POST', null, [], $xmlReq);
        $rawRes = $this->config['client']->send($rawReq, ['body' => $xmlReq]);
        $xmlRes = $rawRes->getBody();
        $res = $this->serializer->deserialize($xmlRes, $type, 'xml');
        $res = json_decode($this->serializer->serialize($res, 'json'), true);

        $statusCode = (int) $res['header']['error']['code'];

        if ($statusCode > 0) {
            throw new Exception\MssException($res['header']['error']['message'], $rawReq, $rawRes);
        }

        return $res;
    }

    /**
     * Creates a new request instance
     *
     * @return MssPhp\Schema\Request\Root
     */
    private function createNewRequest() {
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

    /**
     * Configures the default options for a client.
     *
     * @param array $config
     */
    private function configureDefaults(array $userConfig)
    {
        $client = new \GuzzleHttp\Client([
            'base_uri' => 'https://www.easymailing.eu/mss/mss_service.php',
            'defaults' => [
                'headers'  => ['Content-Type' => 'text/xml; charset=UTF8']
            ],
            'timeout'  => 10,
            'verify' => false
        ]);

        $defaults = [
            'user' => getenv('MSS_USER'),
            'password' => getenv('MSS_PASSWORD'),
            'source' => getenv('MSS_SOURCE'),
            'client' => $client,
            'cache' => false
        ];

        return $userConfig + $defaults;
    }
}
