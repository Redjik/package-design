<?php

namespace Packages\MailProviderAppTransport\HttpAdapter;

use Packages\MailProviderAppTransport\EmailDtoProvider;

class HttpServer
{
    /**
     * @var EmailDtoProvider
     */
    private EmailDtoProvider $provider;

    public function __construct(EmailDtoProvider $provider)
    {
        $this->provider = $provider;
    }

    public function getEmail(Request $request): Response
    {
        return new Response($this->provider->getEmail($request->param->uuid));
    }
}
