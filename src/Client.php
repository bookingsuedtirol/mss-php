<?php
namespace MssPhp;

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

use MssPhp\Schema\Request;
use MssPhp\Schema\Response;

class Client
{
    /**
     * @var JMS\Serializer
     */
    private $serializer;

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
        $this->serializer = \JMS\Serializer\SerializerBuilder::create()
            ->setCacheDir(__DIR__ . '/Cache')
            ->build();
        $this->config = $this->configureDefaults($config);
    }

    /**
     * Makes a request to the MSS Endpoint
     *
     * @param callback $setup to modify request
     *
     * @return MssPhp\Schema\Response\Root
     */
    public function request($setup)
    {
        $req = clone($this->config['request']);
        $setup($req);

        $xmlReq = $this->serializer->serialize($req, 'xml');
        $rawRes = $this->config['client']->post(null, ['body' => $xmlReq]);
        $xmlRes = $rawRes->getBody();
        $res = $this->serializer->deserialize($xmlRes, Response\Root::class, 'xml');
        return $res;
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

        $req = new Request\Root();
        $req->header = new Request\Header();
        $req->request = new Request\Request();
        $req->request->search = new Request\Search();
        $req->request->options = new Request\Options();

        $defaults = [
            'user' => getenv('MSS_USER'),
            'password' => getenv('MSS_PASSWORD'),
            'source' => getenv('MSS_SOURCE'),
            'client' => $client,
            'request' => $req
        ];

        $config = $userConfig + $defaults;

        $req->header->credentials = new Request\Credentials();
        $req->header->credentials->user = $config['user'];
        $req->header->credentials->password = $config['password'];
        $req->header->credentials->source = $config['source'];

        return $config;
    }
}
