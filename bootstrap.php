<?php
$app = new Silex\Application();

// Application Configuration
$app['debug'] = true;

// Smarty configuration
$app['smarty.cacheDir']    = APP_DIR . '/smarty/cache/';
$app['smarty.configDir']   = APP_DIR . '/smarty/config/';
$app['smarty.compileDir']  = APP_DIR . '/smarty/compile/';
$app['smarty.templateDir'] = APP_DIR . '/views/';

// Database configuration / Doctrine configuration
$app['config.db.host']     = 'localhost';
$app['config.db.user']     = 'web';
$app['config.db.dbname']   = 'webshop';
$app['config.db.password'] = 'web123';

// Setup Classes
// add Smarty to Silex
$app['smarty'] = function () use ($app)
{
    $smarty = new Smarty();
    $smarty->setCacheDir($app['smarty.cacheDir']);
    $smarty->setConfigDir($app['smarty.configDir']);
    $smarty->setCompileDir($app['smarty.compileDir']);
    $smarty->setTemplateDir($app['smarty.templateDir']);
    return $smarty;
};

// add Doctrine Database Abstraction Layer
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'host'     => $app['config.db.host'],
        'user'     => $app['config.db.user'],
        'dbname'   => $app['config.db.dbname'],
        'password' => $app['config.db.password'],
    ),
));

// add Session support
$app->register(new Silex\Provider\SessionServiceProvider());
