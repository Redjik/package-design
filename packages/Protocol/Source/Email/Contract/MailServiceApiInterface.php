<?php

namespace Skyeng\Protocol\Source\Email\Contract;
use Skyeng\Protocol\Source\Email\Contract\Dto\EmailDto;

interface MailServiceApiInterface
{
    public function getEmail(string $uuid): EmailDto;
}
