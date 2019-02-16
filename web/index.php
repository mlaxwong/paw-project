<?php
define('PATH_ROOT', dirname(__DIR__));
define('PATH_VENDOR', PATH_ROOT . '/vendor');
define('PATH_BASE', PATH_ROOT . '/src');

require PATH_VENDOR . '/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

(Dotenv\Dotenv::create(PATH_ROOT . '/config'))->load();

define('YII_ENV', 'dev');
define('YII_DEBUG', true);

$config  = \yii\helpers\ArrayHelper::merge(
    require PATH_VENDOR . '/mlaxwong/paw/bootstrap/web.php',
    require PATH_ROOT . '/config/base.php',
    require PATH_ROOT . '/config/web.php'
);
$app = Yii::createObject($config);
$app->run();