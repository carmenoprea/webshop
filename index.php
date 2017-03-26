<?php
define('APP_DIR', __DIR__);
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__ . '/bootstrap.php';

/**
 * @var Silex\Application $app defined in bootstrap.php
 */

$app->get('/hello/{name}', function ($name) use ($app) {

});

$app->run();