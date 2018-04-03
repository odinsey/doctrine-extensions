<?php

/** @var ClassLoader $loader */
use Composer\Autoload\ClassLoader;

$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->add('Odinsey\\Tests', __DIR__, true);
