<?php
namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }
    public function actionIndex($handle = null)
    {
        // $first = \paw\cp\collections\Product::find()->having(['title' => 'asd'])->one();
        // $first->title = 'asd';
        // $first->body = 'boasddy';
        // $first->save();
        // echo '<pre>';
        // print_r(Yii::$app->resource->get('product')->all());
        // foreach (Yii::$app->resource->get('product')->all() as $product)
        // {
        //     print_r($product->attributes);
        // }
        // die;
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

    public function actionWebsite()
    {
        return $this->render('website');
    }

    public function actionMobileApp()
    {
        return $this->render('mobile-app');
    }

    public function actionHosting()
    {
        return $this->render('hosting');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionThankYou()
    {
        return $this->render('thank-you');
    }
}
