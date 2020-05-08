<?php
/**
 * Created by JetBrains PhpStorm.
 * User: STRIKER
 * Date: 5/7/20
 * Time: 7:01 PM
 * To change this template use File | Settings | File Templates.
 */
namespace frontend\components;
use yii\base\Widget;
class FeatureWidget extends Widget{
    public $product;
    public function init()
    {
        return parent::init();
    }
    public function run()
    {
        return $this->render("feature");
    }
}
