<?php
namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex($handle = null)
    {
        echo \paw\cp\collections\Product::find()->one()->id;
        $model = new \paw\cp\collections\Product;
        $model->save();
        print_r($model->errors);
        return $this->render('index');
    }
}