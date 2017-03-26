<?php
$app = new Silex\Application();

// Application Configuration
$app['smarty.cacheDir'] = APP_DIR . '/smarty/cache/';
$app['smarty.configDir'] = APP_DIR . '/smarty/config/';
$app['smarty.compileDir'] = APP_DIR . '/smarty/compile/';
$app['smarty.templateDir'] = APP_DIR . '/views/';

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