<?php
use frontend\components\FeatureWidget;

/**
 * Created by JetBrains PhpStorm.
 * User: STRIKER
 * Date: 5/10/20
 * Time: 8:31 PM
 * To change this template use File | Settings | File Templates.
 */
/*
 *@var $model common\models\Product
 * */
?>
<?php
 if(!empty($model)):?>
<div class="d-flex">
    <?=FeatureWidget::widget(['model'=>$model]) ?>
</div>
<?php endif; ?>