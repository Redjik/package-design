<?php

namespace Packages\MailProviderAppTransport;

interface EmailDtoProvider
{
    public function getEmail(string $uuid): EmailDto;
}
