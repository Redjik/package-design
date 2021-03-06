<?php

namespace Test\MailConsumerApp;

use Skyeng\Protocol\Source\Email\Contract\Dto\EmailDto;
use Skyeng\Protocol\Source\Email\Contract\MailServiceApiInterface;

class MailConsumerService
{
    /**
     * @var MailServiceApiInterface
     */
    private MailServiceApiInterface $adapter;

    public function __construct(MailServiceApiInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function processEmail(string $id): EmailDto
    {
        $email = $this->adapter->getEmail($id);
        $this->process($email);
    }
}
