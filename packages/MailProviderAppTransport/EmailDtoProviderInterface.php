<?php

namespace Packages\MailProviderAppTransport;

interface EmailDtoProviderInterface
{
    public function getEmail(string $uuid): EmailDto;
}
