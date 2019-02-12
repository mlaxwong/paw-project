<?php
return [
    'basePath' => PATH_BASE,
    'modules' => [
        'admin' => paw\cp\Module::class
    ],
    'aliases' => [
        '@runtime' => PATH_ROOT . '/runtime',
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'NrhetzCJL9wRQemdpHT4GL3zyvZmAuTc'
        ],
        'view' => [
            'defaultExtension' => 'twig',
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
                    'uses' => ['yii\bootstrap'],
                ],
            ],
        ],
    ]
];