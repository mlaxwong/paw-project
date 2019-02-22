<?php
namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $sourcePath = '@root/dist';

    public $css = [
    ];

    public $js = [
    ];

    public $depends = [
        \paw\bootstrap4\BootstrapAsset::class,
        \app\assets\StaticAsset::class,
        \app\assets\FontAwsomeAsset::class,
    ];
}