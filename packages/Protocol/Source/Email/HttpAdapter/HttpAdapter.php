<?php


namespace Skyeng\Protocol\Source\Email\HttpAdapter;


use Skyeng\Protocol\Source\Email\Contract\Dto\EmailDto;
use Skyeng\Protocol\Source\Email\Contract\MailServiceApiInterface;

class HttpAdapter implements MailServiceApiInterface
{

    /**
     * @var HttpClient
     */
    private HttpClient $client;
    /**
     * @var SerializerInterface
     */
    private SerializerInterface $serializer;

    public function __construct(HttpClient $client, SerializerInterface $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function getEmail(string $uuid): EmailDto
    {
        $response = $this->client->sendRequestGetEmail($uuid);
        return $this->serializer->deserialize($response->getContents());
    }

}
