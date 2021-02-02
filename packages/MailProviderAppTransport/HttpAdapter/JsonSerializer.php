<?php


namespace Packages\MailProviderAppTransport\HttpAdapter;


use Packages\MailProviderAppTransport\EmailDto;
use Packages\MailProviderAppTransport\SerializerInterface;

class JsonSerializer implements SerializerInterface
{

    public function serializeEmail(EmailDto $emailDto): string|EmailDto
    {
        return json_encode($emailDto);
    }

    public function deserializeEmail(EmailDto|string $serialized): EmailDto
    {
        return json_decode($serialized);
    }
}
