<?php
namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex($handle = null)
    {
        return $this->render('index');
    }
}