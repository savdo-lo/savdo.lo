<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\product */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin([
    'options'=>['enctype'=>'multipart/form-data'],
]); ?>

    <div class="row">
        <div class="col-sm-8">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'count')->textInput() ?>

            <?= $form->field($model, 'category_id')->textInput() ?>

            <?= $form->field($model, 'hit')->textInput() ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'new')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

            <?= $form->field($model, 'sale')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

            <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'price')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <?=$model->getImageLink()?>
                <img src="<?=$model->getImageLink()?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
