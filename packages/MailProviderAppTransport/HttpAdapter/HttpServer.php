<?php

namespace Packages\MailProviderAppTransport\HttpAdapter;

use Packages\MailProviderAppTransport\EmailDtoProviderInterface;

class HttpServer
{
    /**
     * @var EmailDtoProviderInterface
     */
    private EmailDtoProviderInterface $provider;

    public function __construct(EmailDtoProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    public function getEmail(Request $request): Response
    {
        return new Response($this->provider->getEmail($request->param->uuid));
    }
}
