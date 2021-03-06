<?php
return [
    'layoutPath' => '@app/views/_layouts',
    // 'layout' =>'@app/views/_layouts/main.twig',
    'bootstrap' => ['globalContactForm'],
    'modules' => [
        // 'admin' => paw\cp\Module::class,
        // 'test' => app\modules\site\Module::class,
    ],
    'components' => [
        'globalContactForm' => [
            'class' => app\components\GlobalContactForm::class,
        ],
        'assetManager' => [
            'linkAssets' => true,
        ],
        'request' => [
            'cookieValidationKey' => 'k1224gG8jzgLGVP0Psvt3I-s8_3OvWdd',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'view' => [
            'theme' => [
                'asset' => \app\assets\AppAsset::class,
            ],
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
                        'url' => ['class' => \yii\helpers\Url::class],
                        'string' => ['class' => \paw\helpers\StringHelper::class],
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
                        },
                        'beginBlock' => function ($key, $isBase = false) {
                            \app\widgets\Block::begin(compact('key', 'isBase'));
                        },
                        'endBlock' => function () {
                            \app\widgets\Block::end();
                        },
                    ],
                    'filters' => [
                        't' => function ($message, $category = 'app', $params = []) {
                            return Yii::t($category, $message, $params);
                        }
                    ],
                    'uses' => ['yii\bootstrap'],
                ],
            ],
        ],
        'urlManager' => [
            'rules' => [
                // '<handle:^((?!admin)(?!test))[\w-\/]+>' => 'site/index',
                // '<action:^((?!admin)(?!test))[\w-\/]+>' => 'site/<action>',
                // '<controller:^((?!admin)(?!test))[\w-\/]+>/<action>' => '<controller>/index',
                // '<module:^((?!admin)(?!test))[\w-\/]+>/<controller>/<action>' => 'site/index',
                [
                    'pattern' => '/',
                    'route' => 'site/index',
                ],
                [
                    'pattern' => '/website',
                    'route' => 'site/website',
                ],
                [
                    'pattern' => '/mobile-app',
                    'route' => 'site/mobile-app',
                ],
                [
                    'pattern' => '/hosting',
                    'route' => 'site/hosting',
                ],
                [
                    'pattern' => '/contact',
                    'route' => 'site/contact',
                ],
                '<action^((?!admin)(?!test))[\w-]+>' => 'site/<action>',
                '<controller>/<action>' => '<controller>/<action>',
                '<controller>/<action:()>' => 'site/<controller>',
                '<module>/<controller>/<action>' => '<module>/<controller>/<action>',

            ],
        ],
    ],
];
