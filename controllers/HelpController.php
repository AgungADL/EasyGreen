<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class HelpController extends Controller {
    public $layout = 'help';

    public function actionIndex($view) {
        return $this->render($view);
    }
    public function actionLoadView($view) {
        $this->layout = false; 
        return $this->render($view);
    }
}