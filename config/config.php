<?php
return [
    'basePath' => PATH_BASE,
    'vendorPath' => PATH_VENDOR,
    'layoutPath' => '@app/views/_layouts',
    'modules' => [
        'admin' => paw\cp\Module::class
    ],
    'aliases' => [
        '@runtime' => PATH_ROOT . '/runtime',
    ],
    'components' => [
        'assetManager' => [
            'linkAssets' => true,
        ],
        'request' => [
            'cookieValidationKey' => 'k1224gG8jzgLGVP0Psvt3I-s8_3OvWdd'
        ],
        'view' => [
            'renderers' => [
                'twig' => [
                    'class' => \paw\cp\twig\ViewRenderer::class,
                    'cachePath' => '@runtime/Twig/cache',
                    'options' => YII_DEBUG ? [
                        'debug' => true,
                        'auto_reload' => true,
                    ] : [],
                    'extensions' => YII_DEBUG ? ['\Twig_Extension_Debug'] : [],
                    'globals' => [
                        'html' => ['class' => \yii\helpers\Html::class],
                    ],
                    'functions' => [
                        't' => 'Yii::t',
                    ],
                    'uses' => ['yii\bootstrap'],
                ],
            ],
        ],
        'urlManager' => [
            'rules' => [
                '<handle:^((?!admin)(?!test))[\w-\/]+>' => 'site/index',
            ],
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => env('DB_DSN', 'mysql:host=localhost;port=3306;dbname=database_v1'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'tablePrefix' => env('DB_TABLE_PREFIX', 'prefix_'),
            'charset' => 'utf8',
            'enableSchemaCache' => YII_ENV_PROD,
        ],
    ],
];