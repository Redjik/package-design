<?php


namespace Skyeng\Protocol\Source\Email\DirectMonorepoAdapter;

use Skyeng\Protocol\Source\Email\Contract\Dto\EmailDto;
use Skyeng\Protocol\Source\Email\Contract\MailServiceApiInterface;

class DirectMonorepoAdapter implements MailServiceApiInterface
{

    /**
     * @var MailServiceApiInterface
     */
    private MailServiceApiInterface $adapter;

    public function __construct(MailServiceApiInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function getEmail(string $uuid): EmailDto
    {
        return $this->adapter->getEmail($uuid);
    }
}
