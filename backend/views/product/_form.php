<?php

use yii\helpers\Html;
use common\models\Category;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\product */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="product-form" xmlns="http://www.w3.org/1999/html">

    <?php $form = ActiveForm::begin([
    'options'=>['enctype'=>'multipart/form-data'],
]); ?>

    <div class="row">
        <div class="col-sm-8">


            <?= $form->field($model, 'count')->textInput() ?>

            <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(),'id','name')) ?>

            <?= $form->field($model, 'hit')->textInput() ?>



            <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'new')->dropDownList([ '0'=>"Bu tovar bor", '1'=>"Yangi", ], ['prompt' => 'Tanlang']) ?>

            <?= $form->field($model, 'sale')->dropDownList([ '0'=>"Chegirma yo'q", '1'=>"Chegirma mavjud", ], ['prompt' => 'Tanlang']) ?>

            <?= $form->field($model, 'price')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="<?=$model->getImageLink()?>" class="card-img-top img-thumbnail" alt="Mahsulot rasmi">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="imgFile" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Rasm yuklash</label>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?></h5>
                    <p class="card-text"><?= $form->field($model, 'description')->textarea(['rows' => 2]) ?></p>
                </div>
            </div>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
