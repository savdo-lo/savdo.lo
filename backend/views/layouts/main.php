<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

?>
<?php $this->beginContent("@backend/views/layouts/base.php") ?>

<div class="wrap h-100 d-flex flex-column">

    <?php echo $this->render("_header") ?>
    <main class="d-flex">
        <?php echo $this->render("_sidebar") ?>
        <div class="content-wrapper p-3">
            <?= Alert::widget() ?>
            <?= $content ?>

        </div>
    </main>
</div>

<?php $this->endContent() ?>
