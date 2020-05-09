<?php

use yii\helpers\Html;
use common\models\Category;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\product */
/* @var $form yii\bootstrap4\ActiveForm */

$this->title = 'Create Product';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-create m-1">
   <div class="d-flex flex-column justify-content-center align-items-center">

   <div class="upload-icon">
    <i class="fa fa-upload"></i>
   </div>
       <p class="text-muted">Rasimlar yuklanmaguncha mahsulot kiritib bo'lmaydi</p>

      <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
   ])?>
       <?= $form->field($model,'name')->textInput()?>
       <?= $form->field($model,'category_id')->dropDownList(Category::find()->all(),['id','name']) ?>
       <div class="input-group mb-3">

           <div class="custom-file">
               <input type="file" class="custom-file-input" name="imgFile" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
               <label class="custom-file-label" for="inputGroupFile01">Rasm yuklash</label>
           </div>
       </div>
       <div class="form-group">
           <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
       </div>
      <?php ActiveForm::end()?>
   </div>
</div>
