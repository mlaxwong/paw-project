<?php
namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $sourcePath = '@root/dist';

    public $css = [
        'asset.app.css',
    ];
    
    public $js = [
        'asset.app.js',
    ];

    public $depends = [
        \paw\bootstrap4\BootstrapAsset::class,
        \app\assets\StaticAsset::class,
        \app\assets\FontAwsomeAsset::class,
    ];
}