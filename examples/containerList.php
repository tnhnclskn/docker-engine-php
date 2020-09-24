<?php

use Tnhnclskn\Docker\Docker;

require_once(dirname(__DIR__) . '/vendor/autoload.php');

$docker = Docker::create();

var_dump($docker->containerList());
