<?php
namespace app\models;

use paw\behaviors\IpBehavior;
use paw\behaviors\SerializeBehavior;
use paw\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class ContactForm extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%contact_form}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            IpBehavior::class,
            [
                'class' => SerializeBehavior::class,
                'serializeMethod' => SerializeBehavior::METHOD_JSON,
                'attributes' => ['interest'],
            ],
        ];
    }

    public function rules()
    {
        return [
            [['name', 'location', 'contact', 'email'], 'required'],
            [['name', 'message', 'location', 'contact'], 'string'],
            [['email'], 'email'],
            [['interest'], 'safe'],
        ];
    }
}
