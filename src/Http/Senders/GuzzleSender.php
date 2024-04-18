<?php

namespace Saloon\Laravel\Http\Senders;

use GuzzleHttp\Client as GuzzleClient;
use Saloon\Http\Senders\GuzzleSender as BaseGuzzleSender;

class GuzzleSender extends BaseGuzzleSender
{
    protected function createGuzzleClient(): GuzzleClient
    {
        return app()->makeWith(GuzzleClient::class, $this->getGuzzleClientConfig());
    }
}
