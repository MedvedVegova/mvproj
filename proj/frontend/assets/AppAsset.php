<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;


Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);
/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes'; 

    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
