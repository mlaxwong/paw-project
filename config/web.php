<?php
return [
    'layoutPath' => '@app/views/_layouts',
    'modules' => [
        'admin' => paw\cp\Module::class
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
                        'setTitle' => function ($title) {
                            Yii::$app->view->title = $title;
                        },
                        'setParams' => function ($key, $value) {
                            Yii::$app->view->params[$key] = $value;
                        },
                        'getParams' => function ($key, $defaultValue = null) {
                            return isset(Yii::$app->view->params[$key]) ? Yii::$app->view->params[$key] : $defaultValue;
                        }
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
    ],
];