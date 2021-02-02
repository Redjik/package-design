<?php

namespace Test\MailProviderApp;

use Packages\MailProviderAppTransport\EmailDto;
use Packages\MailProviderAppTransport\EmailDtoProviderInterface;
use Packages\MailProviderAppTransport\SerializerInterface;

class MailService implements EmailDtoProviderInterface
{
    public function getEmail(string $uuid): EmailDto
    {
        return new EmailDto();
    }
}
