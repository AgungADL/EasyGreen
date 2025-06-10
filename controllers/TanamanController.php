<?php

namespace app\controllers;

use app\models\Hasil;
use Yii;
use yii\web\Controller;
use app\models\Tanaman;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;

class TanamanController extends Controller
{
    public $layout = 'blank';
    public function behaviors()
    {
        return [
            'akses' => [
                'class' => AccessControl::class,
                'only' => ['index'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ]
                ]
            ]
        ];
    }

    public function actionIndex()
    {
        $kategori = Yii::$app->request->post('kategori', 1);
        $username = Yii::$app->user->identity->username;

        $query = Tanaman::find()->where(['username' => $username]);

        if ($kategori != 1) {
            $query->andWhere(['kd_kategori' => $kategori]);
        }

        $tanamans = $query->all();
        
        return $this->render('index', ['tanamans' => $tanamans, 'kategori' => $kategori]);
    }

    public function actionCreate() {
        $tanaman = new Tanaman();

        if ($tanaman->load(Yii::$app->request->post()) && $tanaman->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('create', ['tanaman' => $tanaman]);
    }

    public function actionView($id) {
        $tanaman = $this->findModel($id);
        $hasils = Hasil::find()->where(['kd_tanaman' => $id])->all();

        return $this->render('view', ['tanaman' => $tanaman, 'hasils' => $hasils]);
    }

    public function actionUpdate($id) {
        $tanaman = $this->findModel($id);

        if ($tanaman->load(Yii::$app->request->post()) && $tanaman->save()) {
            return $this->redirect(['view', 'id' => $tanaman->kd_tanaman]);
        }

        return $this->render('update', ['tanaman' => $tanaman]);
    }

    public function actionDelete($id){
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    protected function findModel($id) {
        if (($tanaman = Tanaman::findOne($id)) !== null) {
            return $tanaman;
        }

        throw new NotFoundHttpException('Data tidak ditemukan');
    }
}