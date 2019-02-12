<?php
define('PATH_ROOT', dirname(__DIR__));
define('PATH_VENDOR', PATH_ROOT . '/vendor');
define('PATH_BASE', PATH_ROOT . '/src');

require PATH_VENDOR . '/autoload.php';

define('YII_ENV', 'dev');
define('YII_DEBUG', true);

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$config  = require PATH_VENDOR . '/mlaxwong/paw/bootstrap/web.php';
$app = Yii::createObject(\yii\helpers\ArrayHelper::merge($config, require PATH_ROOT . '/config/config.php'));
$app->run();