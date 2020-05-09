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
<?php $this->beginContent("@backend/views/layouts/base.php") ?>

<div class="wrap h-100 d-flex flex-column">

    <?php echo $this->render("_header") ?>
            <?= $content ?>
</div>

<?php $this->endContent() ?>
