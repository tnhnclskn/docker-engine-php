<?php

namespace Tnhnclskn\Docker;

use Tnhnclskn\Docker\API\Client;
use Psr\Http\Client\ClientInterface;
use Clue\React\SshProxy\SshProcessConnector;
use React\Socket;
use React\Http;

class Docker
{
    const VERSION = 'v1.41';

    private static function getBaseUri($type): string
    {
        $version = static::VERSION;
        if ($type === 'UNIX') {
            return "http://localhost/{$version}/";
        }
        if ($type === 'HTTP') {
            return "http://localhost:2375/{$version}/";
        }
        throw new \Exception('Undefined Base Uri Type');
    }

    public static function create(?ClientInterface $httpClient = null): Client
    {
        if (is_null($httpClient)) {
            $httpClient = static::unixSocketClient();
        }
        return Client::create($httpClient);
    }

    public static function unixSocketClient(string $unixSocket = '/var/run/docker.sock'): ClientInterface
    {
        $connector = new Socket\FixedUriConnector(
            'unix://' . $unixSocket,
            new Socket\UnixConnector()
        );

        $browser = new Http\Browser($connector);

        return new ReactBrowserAdapter($browser, static::getBaseUri('UNIX'));
    }

    public static function sshProxiedClient(string $sshUri): ClientInterface
    {
        $proxy = new SshProcessConnector($sshUri);

        $connector = new Socket\Connector(array(
            'tcp' => $proxy,
            'dns' => false
        ));

        $browser = new Http\Browser($connector);
        return new ReactBrowserAdapter($browser, static::getBaseUri('HTTP'));
    }
}
