<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'sporto/css/new-age.css',
        'sporto/css/new-age.min.css',
        'sporto/lib/bootstrap/css/bootstrap.min.css',
        'sporto/lib/font-awesome/css/font-awesome.min.css',
        'sporto/lib/simple-line-icons/css/simple-line-icons.css',
        'sporto/lib/device-mockups/device-mockups.min.css',
    ];
    public $js = [
    'sporto/js/new-age.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

 