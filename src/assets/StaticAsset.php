<?php
namespace app\assets;

use yii\web\AssetBundle;

class StaticAsset extends AssetBundle
{
    public $sourcePath = '@root/static';

    public $js = [
        ['js/vue.js', 'position' => \yii\web\View::POS_HEAD],
    ];

    public $css = [
        'css/floating-labels.css',
    ];
}