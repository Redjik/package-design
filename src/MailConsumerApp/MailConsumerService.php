<?php


namespace Test\MailConsumerApp;


use Packages\MailProviderAppTransport\EmailDtoProvider;
use Packages\MailProviderAppTransport\EmailDto;

class MailConsumerService
{
    /**
     * @var EmailDtoProvider
     */
    private EmailDtoProvider $provider;

    public function __construct(EmailDtoProvider $provider)
    {
        $this->provider = $provider;
    }

    public function getEmail(string $id): EmailDto
    {
        return $this->provider->getEmail($id);
    }
}
