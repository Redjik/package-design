<?php

namespace Test\MailProviderApp;

use Packages\MailProviderAppTransport\EmailDto;
use Packages\MailProviderAppTransport\EmailDtoProvider;
use Packages\MailProviderAppTransport\SerializerInterface;

class MailService implements EmailDtoProvider
{
    public function getEmail(string $uuid): EmailDto
    {
        return new EmailDto();
    }
}
