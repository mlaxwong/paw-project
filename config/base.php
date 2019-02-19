<?php
return [
    'basePath' => PATH_BASE,
    'vendorPath' => PATH_VENDOR,
    'aliases' => [
        '@root' => PATH_ROOT,
        '@runtime' => PATH_ROOT . '/runtime',
    ],
    'components' => [
        'db' => [
            'class' => yii\db\Connection::class,
            'dsn' => env('DB_DSN', 'mysql:host=localhost;port=3306;dbname=database_v1'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'tablePrefix' => env('DB_TABLE_PREFIX', 'prefix_'),
            'charset' => 'utf8',
            'enableSchemaCache' => YII_ENV_PROD,
        ],
        'resource' => [
            'class' => paw\services\Resource::class,
            'namespaces' => [
                'paw\\cp\\resources'
            ],
        ]
    ],
];