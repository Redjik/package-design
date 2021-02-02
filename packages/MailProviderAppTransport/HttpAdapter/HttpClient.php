<?php


namespace Packages\MailProviderAppTransport\HttpAdapter;


use Packages\MailProviderAppTransport\EmailDto;
use Packages\MailProviderAppTransport\EmailDtoProvider;
use Packages\MailProviderAppTransport\SerializerInterface;

class HttpClient
{
    /**
     * @var SerializerInterface
     */
    private SerializerInterface $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function sendRequestGetEmail(string $uuid): Response
    {
        return $this->httpClient->sendRequest($uuid);
    }
}
