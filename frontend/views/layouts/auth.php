<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginContent("@frontend/views/layouts/base.php") ?>


    <?php echo $this->render("_header") ?>
    <?= $content ?>

<?php $this->endContent() ?>
