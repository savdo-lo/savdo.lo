<?php
/**
 * Created by JetBrains PhpStorm.
 * User: STRIKER
 * Date: 5/7/20
 * Time: 7:06 PM
 * To change this template use File | Settings | File Templates.
<<<<<<< HEAD
 *
 * @var $model common\models\Product
 */?>
<?php foreach($model as $mod):?>
=======
 */?>
<?php for($i=0;$i<3;$i++):?>
>>>>>>> 32230e75dce3d0499fe85ffd52ec4daeaa4f894e
<div class="col-sm-6 col-md-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
<<<<<<< HEAD
                <img src="<?=$mod->getImageLink()?>" alt="" class="img-fluid" />
                <h2><?=$mod->price?></h2>
                <p><?=$mod->name?></p>
=======
                <img src="images/home/product2.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
>>>>>>> 32230e75dce3d0499fe85ffd52ec4daeaa4f894e
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
<?php endforeach?>
=======
<?php endfor?>
>>>>>>> 32230e75dce3d0499fe85ffd52ec4daeaa4f894e
