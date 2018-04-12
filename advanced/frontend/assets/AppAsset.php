<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/allelica';
    public $css = [
        'css/style.css',
        'css/manualstyle.css',
        'css/responsive.css',
        'fonts/flaticon.css',
        'css/themefisher-fonts.css',
        //'css/web-bootstrap.css',
    ];
    public $js = [
        'js/vendor/jquery-2.1.1.min.js',
        'js/main.js',
        /*'js/biometric.js',*/
    ];
    public $ourJs = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
