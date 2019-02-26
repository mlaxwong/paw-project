<?php
namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Block extends Widget
{
    public $key = null;
    public $isBase = false;

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();
        if ($this->isBase) {
            return isset($this->view->blocks[$this->key]) ? $this->view->blocks[$this->key] : $content;
        } else {
            $this->view->blocks[$this->key] = $content;
        }
        // return Html::encode($content);
    }
}