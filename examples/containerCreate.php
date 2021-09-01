<?php

use Tnhnclskn\Docker\Docker;
use Tnhnclskn\Docker\API\Model\ContainersCreatePostBody;

require_once(dirname(__DIR__) . '/vendor/autoload.php');

try {
    $docker = Docker::create();

    var_dump($docker->imageCreate('-', [
        'fromImage' => 'alpine',
        'tag' => 'latest',
    ]));

    $containerConfig = new ContainersCreatePostBody();
    $containerConfig->setImage('alpine:latest');
    $containerConfig->setCmd(['echo', 'I am running a command']);
    var_dump($docker->containerCreate($containerConfig));
} catch (Exception $e) {
    exit($e->getMessage());
}
