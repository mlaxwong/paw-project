<?php
namespace app\components;

use app\models\ContactForm;
use Yii;
use yii\base\BootstrapInterface;
use yii\base\Component;

class GlobalContactForm extends Component implements BootstrapInterface
{
    public $completeRoute = ['/thank-you'];

    public function bootstrap($app)
    {
        if (Yii::$app->request->isPost) {
            $model = new ContactForm;
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                Yii::$app->mailer->compose([
                    'html' => 'contact/interest-html',
                    'text' => 'contact/interest-text',
                ], ['model' => $model])
                    ->setFrom('no-reply@trinalusion.my')
                    ->setTo('mlaxwong@gmail.com')
                    ->setSubject($model->name . ' | Trinalusion Contact Form')
                    ->send();

                return $app->response->redirect($this->completeRoute);
                // echo '<pre>';
                // print_r(Yii::$app->request->post());
            }
        }
        // if (Yii::$app->request->isPost) {
        //     Yii::$app->mailer->compose([
        //         'html' => 'contact/interest-html',
        //         'text' => 'contact/interest-text',
        //     ], ['model' => []])
        //         ->setFrom('no-reply@trinalusion.my')
        //         ->setTo('mlaxwong@gmail.com')
        //         ->setSubject('Contact Form')
        //         ->send();
        //     echo '<pre>';
        //     print_r(Yii::$app->request->post());
        //     die;
        // }
    }
}
