<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Main backend application asset bundle.
 */
class TagsAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/tagsinput/tagsinput.css',
    ];
    public $js = [
        'css/tagsinput/tagsinput.js',
    ];
    public $depends = [
      JqueryAsset::class
    ];
}
