<?php
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Nav;

NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
]);
$menuItems = [
    ['label' => 'Home', 'url' => ['/site/index']],
];
if (Yii::$app->user->isGuest) {
    $menuItems[]=['label'=>'Login','url'=>['/site/login']];
} else {
    $menuItems[] = [
        'label'=>"Logout(".Yii::$app->user->identity->username.")",
        'url'=>['/site/logout'],
        'linkOptions'=>['data-method'=>'post'],
    ];
}
echo Nav::widget([
    'options' => ['class' => 'navbar-nav ml-auto'],
    'items' => $menuItems,
]);
NavBar::end();
?>