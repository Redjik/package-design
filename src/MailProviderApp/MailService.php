<?php

namespace Test\MailProviderApp;

use Skyeng\Protocol\Source\Email\Contract\Dto\EmailDto;
use Skyeng\Protocol\Source\Email\Contract\MailServiceApiInterface;

class MailService implements MailServiceApiInterface
{


    public function doSomethingWIthEmail(): void
    {

    }

    public function getEmail(string $uuid): EmailDto
    {
        return new EmailDto();
    }
}
