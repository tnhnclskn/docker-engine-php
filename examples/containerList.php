<?php

use Tnhnclskn\Docker\Docker;

require_once(dirname(__DIR__) . '/vendor/autoload.php');

require __DIR__ . '/vendor/autoload.php';

$proxy = new Clue\React\SshProxy\SshProcessConnector('root@docker.clskn.net');

$connector = new React\Socket\Connector(array(
    'tcp' => $proxy,
    'dns' => false
));

$browser = new React\Http\Browser($connector);

$browser->get('https://google.com/')->then(function (Psr\Http\Message\ResponseInterface $response) {
    var_dump($response->getHeaders(), (string) $response->getBody());
}, function (Exception $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
});

// $connector = new React\Socket\FixedUriConnector(
//     'unix:///var/run/docker.sock',
//     new React\Socket\UnixConnector()
// );

// $browser = new React\Http\Browser($connector);

// $client->get('http://localhost/info')->then(function (Psr\Http\Message\ResponseInterface $response) {
//     var_dump($response->getHeaders(), (string)$response->getBody());
// });
// $docker = Docker::create();
// $containers = $docker->containerList();

// foreach ($containers as $container) {
//     var_dump($container->getNames());
// }
