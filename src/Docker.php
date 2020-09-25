<?php

namespace Tnhnclskn\Docker;

use Tnhnclskn\Docker\API\Client;
use GuzzleHttp\Client as HttpClient;
use Psr\Http\Client\ClientInterface;

class Docker
{
    const VERSION = 'v1.40';

    public static function create(?ClientInterface $httpClient = null): Client
    {
        if (is_null($httpClient)) {
            $httpClient = static::unixSocketClient();
        }
        return Client::create($httpClient);
    }

    public static function unixSocketClient($unixSocket = '/var/run/docker.sock'): ClientInterface
    {
        $version = static::VERSION;
        $httpClient = new HttpClient([
            'base_uri' => "http://{$version}/",
            'curl' => [
                CURLOPT_UNIX_SOCKET_PATH => $unixSocket
            ],
        ]);
        return $httpClient;
    }
}
