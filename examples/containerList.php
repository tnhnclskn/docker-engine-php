<?php

use Tnhnclskn\Docker\Docker;

require_once(dirname(__DIR__) . '/vendor/autoload.php');

// $client = Docker::sshProxiedClient('root@docker.example.com');
$client = Docker::unixSocketClient();
$docker = Docker::create($client);
$containers = $docker->containerList();

foreach ($containers as $container) {
    var_dump($container->getNames());
}
