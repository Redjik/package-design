<?php


namespace Packages\MailProviderAppTransport\DirectAdapter;


use Packages\MailProviderAppTransport\EmailDto;
use Packages\MailProviderAppTransport\EmailDtoProvider;

class DirectMonorepoAdapter implements EmailDtoProvider
{

    /**
     * @var EmailDtoProvider
     */
    private EmailDtoProvider $provider;

    public function __construct(EmailDtoProvider $provider)
    {
        $this->provider = $provider;
    }

    public function getEmail(string $uuid): EmailDto
    {
        return $this->provider->getEmail($uuid);
    }
}
