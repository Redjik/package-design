<?php


namespace Packages\MailProviderAppTransport\HttpAdapter;


use Packages\MailProviderAppTransport\EmailDto;
use Packages\MailProviderAppTransport\EmailDtoProvider;
use Packages\MailProviderAppTransport\SerializerInterface;

class EmailDtoOverHttpProvider implements EmailDtoProvider
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
        return $this->serializer->deserializeEmail($response->getContents());
    }
}
