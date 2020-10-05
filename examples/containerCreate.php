<?php

use Tnhnclskn\Docker\Docker;
use Tnhnclskn\Docker\API\Model\ContainersCreatePostBody;

require_once(dirname(__DIR__) . '/vendor/autoload.php');

$docker = Docker::create();

$containerConfig = new ContainersCreatePostBody();
$containerConfig->setImage('alpine:latest');
$containerConfig->setCmd(['echo', 'I am running a command']);

$containerCreateResult = $docker->containerCreate($containerConfig);
var_dump($containerCreateResult);