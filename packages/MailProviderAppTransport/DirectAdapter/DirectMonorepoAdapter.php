<?php


namespace Packages\MailProviderAppTransport\DirectAdapter;


use Packages\MailProviderAppTransport\EmailDto;
use Packages\MailProviderAppTransport\EmailDtoProviderInterface;

class DirectMonorepoAdapter implements EmailDtoProviderInterface
{

    /**
     * @var EmailDtoProviderInterface
     */
    private EmailDtoProviderInterface $provider;

    public function __construct(EmailDtoProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    public function getEmail(string $uuid): EmailDto
    {
        return $this->provider->getEmail($uuid);
    }
}
