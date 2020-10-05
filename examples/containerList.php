<?php

use Tnhnclskn\Docker\Docker;

require_once(dirname(__DIR__) . '/vendor/autoload.php');

$docker = Docker::create();
$containers = $docker->containerList();

foreach ($containers as $container) {
    var_dump($container->getNames());
}
