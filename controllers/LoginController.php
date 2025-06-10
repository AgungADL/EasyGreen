<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\Pengguna;
use yii\helpers\Url;

class LoginController extends Controller {
    public $layout = 'blank';

    public function actionIndex() {
        $login = new LoginForm();

        if ($login->load(Yii::$app->request->post())) {
            if ($login->login()) {
                return $this->redirect(['halaman/index']);
            } else {
                Yii::$app->session->setFlash('error', 'Username atau password salah.');
            }
        }

        return $this->render('index', [
            'login' => $login,
        ]);
    }

    public function actionRegister() {
        $user = new Pengguna();

        if ($user->load(Yii::$app->request->post())) {
            if ($user->save()) {
                return $this->redirect(['index']);
            } else {
                Yii::$app->session->setFlash('error', 'Registrasi gagal. Username mungkin sudah digunakan.');
            }
        }

        return $this->render('register', [
            'user' => $user,
        ]);
    }

    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->redirect(['halaman/index']);
    }
}