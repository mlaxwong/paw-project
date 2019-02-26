<?php
namespace app\assets;

use yii\web\AssetBundle;

class FontAwsomeAsset extends AssetBundle
{
    public $sourcePath = '@npm/font-awesome';

    public $css = [
        'css/all.css',
    ];

    public $publishOptions = [
        'only' => [
            'webfonts/*',
            'css/*',
        ]
    ];
}