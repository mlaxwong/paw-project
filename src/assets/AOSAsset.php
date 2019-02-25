<?php
namespace app\assets;

use yii\web\AssetBundle;

class AOSAsset extends AssetBundle
{
    public $sourcePath = '@npm/aos/dist';

    public $css = [
        'aos.css',
    ];
    
    public $js = [
        'aos.js',
    ];
}