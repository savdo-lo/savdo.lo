<?php
/**
 * Created by JetBrains PhpStorm.
 * User: STRIKER
 * Date: 5/9/20
 * Time: 7:26 AM
 * To change this template use File | Settings | File Templates.
 */
use yii\helpers\Url;
use yii\bootstrap4\Nav;

?>
<?php
echo Nav::widget([
    'items'=>[
        [
            'label'=>'Home',
            'url'=>['/site/index']
        ],
        [
            'label'=>'Product',
            'url'=>['/site/product']
        ],
        [
            'label'=>'View',
            'url'=>['/site/view']
        ],
    ],
    'options'=>[
        'class'=>'d-flex flex-column nav-pills'
    ]

]);
?>