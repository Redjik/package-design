<?php


namespace Skyeng\Protocol\Source\Email\HttpAdapter;

class HttpClient
{

    public function sendRequestGetEmail(string $uuid): Response
    {
        return $this->httpClient->sendRequest($uuid);
    }
}
