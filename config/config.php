<?php
return [
    'basePath' => PATH_BASE,
    'vendorPath' => PATH_VENDOR,
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
    ]
];