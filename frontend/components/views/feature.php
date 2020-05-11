<?php
/**
 * Created by JetBrains PhpStorm.
 * User: STRIKER
 * Date: 5/7/20
 * Time: 7:06 PM
 * To change this template use File | Settings | File Templates.
 *
 * @var $model common\models\Product
 */?>
<?php foreach($model as $mod):?>
<div class="col-sm-6 col-md-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img src="<?=$mod->getImageLink()?>" alt="" class="img-fluid" />
                <h2><?=$mod->price?></h2>
                <p><?=$mod->name?></p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach?>