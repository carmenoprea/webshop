<?php
define('APP_DIR', __DIR__);
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__ . '/bootstrap.php';

/**
 * @var Silex\Application $app defined in bootstrap.php
 */

$app->get('/', function () use ($app) {
    $products = $app['db']->fetchAll('SELECT productID, name , description, price,in_stock, thumbnail FROM products WHERE enabled=1;');

    $app['smarty']->assign('products', $products);
    return $app['smarty']->fetch('main.tpl');
});

$app->run();