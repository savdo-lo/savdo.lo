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
<aside class="shadow">
    <?php
    echo Nav::widget([
        'items'=>[
            [
                'label'=>'Kategoriya',
                'url'=>['/category/index']
            ],
            [
                'label'=>'Product',
                'url'=>['/product/index']
            ],

        ],
        'options'=>[
            'class'=>'d-flex flex-column nav-pills'
        ]

    ]);
    ?>
</aside>