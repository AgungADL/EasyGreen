<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

class HalamanController extends Controller {
    public $layout = 'blank';
    // public function behaviors() {
    //     return [
    //         'akses' => [
    //             'class' => AccessControl::class,
    //             'only' => ['index'],
    //             'rules' => [
    //                 [
    //                     'allow' => true,
    //                     'roles' => ['@'],
    //                 ],
    //             ],
    //         ],
    //     ];
    // }

    public function actionIndex() {
        return $this->render('index');
    }
}