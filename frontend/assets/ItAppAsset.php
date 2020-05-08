<?php
/**
 * Created by JetBrains PhpStorm.
 * User: STRIKER
 * Date: 5/7/20
 * Time: 9:03 PM
 * To change this template use File | Settings | File Templates.
 */
namespace frontend\assets;

use \yii\web\AssetBundle;

class ItAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js=[
     'js/html5shiv.js',
     'js/respond.min.js'
];
    public $jsOptions=[
        'condition'=>'lte IE9',
        'position' => \yii\web\View::POS_HEAD
    ];
}
