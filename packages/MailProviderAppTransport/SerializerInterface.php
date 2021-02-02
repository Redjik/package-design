<?php

namespace Packages\MailProviderAppTransport;

interface SerializerInterface
{
    public function serializeEmail(EmailDto $emailDto): string | EmailDto;

    public function deserializeEmail(string | EmailDto $serialized): EmailDto;
}
