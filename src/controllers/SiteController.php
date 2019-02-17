<?php
namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex($handle = null)
    {
        // echo \paw\cp\collections\Product::find()->one()->id;
        // $model = new \paw\cp\collections\Product;
        // $model->save();
        // print_r($model->errors);

        // $resources = \paw\cp\resources\Product::getInstance();
        // $products = $resources->limit(3)->all();
        // echo '<pre>';
        // print_r($products);
        // print_r($resources->dataProvider->pagination->page);
        // die;    

        return $this->render('index');
    }
}