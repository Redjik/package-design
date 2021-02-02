<?php


namespace Test\MailConsumerApp;


use Packages\MailProviderAppTransport\EmailDtoProviderInterface;
use Packages\MailProviderAppTransport\EmailDto;

class MailConsumerService
{
    /**
     * @var EmailDtoProviderInterface
     */
    private EmailDtoProviderInterface $provider;

    public function __construct(EmailDtoProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    public function getEmail(string $id): EmailDto
    {
        return $this->provider->getEmail($id);
    }
}
