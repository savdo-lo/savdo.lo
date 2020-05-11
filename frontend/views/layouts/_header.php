<?php
/**
 * Created by JetBrains PhpStorm.
 * User: STRIKER
 * Date: 5/7/20
 * Time: 6:06 PM
 * To change this template use File | Settings | File Templates.
 */
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Html;
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand navbar-light bg-light shadow-sm',
        ],
    ]);

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '<i class="fa fa-user"></i> Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] =['label'=>'<i class="fa fa-user"></i> Logout('.Yii::$app->user->identity->username.")",'url'=>'site/logout','linkOptions'=>['data-method'=>'post']];



    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'encodeLabels'=>false,
        'items' => $menuItems,
    ]);
    NavBar::end();
?>
