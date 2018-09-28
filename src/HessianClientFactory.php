<?php

namespace Icecave\Flax;

use GuzzleHttp\Client;

class HessianClientFactory
{
    /**
     * @param string $url
     */
    public function create($url)
    {
        $httpClient = new Client([
            'base_uri' => $url,
            'headers' => [
                'User-Agent' => sprintf('Flax/%s', PackageInfo::VERSION),
                'Content-Type' => 'x-application/hessian'
            ]
        ]);

        return new HessianClient($httpClient);
    }
}
