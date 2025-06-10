<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\Hasil;
use app\models\Tanaman;
use yii\web\Response;

class HasilController extends Controller {
    public $layout = 'blank';

    public function actionDelete($id, $kd) {
        $tanaman = $this->findModelPlant($kd);

        $this->findModelResult($id)->delete();
        return $this->redirect(['tanaman/view', 'id' => $tanaman->kd_tanaman]);
    }

    public function actionCreate($id) {
        $tanaman = $this->findModelPlant($id);
        $hasil = new Hasil();

        if ($hasil->load(Yii::$app->request->post()) && $hasil->save()) {
            return $this->redirect(['tanaman/view', 'id' => $tanaman->kd_tanaman]);
        }

        return $this->render('create', ['tanaman' => $tanaman, 'hasil' => $hasil]);
    }

    public function actionUpdateJumlah($id, $operation) {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $hasil = $this->findModelResult($id);

        if ($hasil === null) {
            return ['success' => false, 'message' => 'Data tidak ditemukan'];
        }

        if ($operation === 'increment') {
            $hasil->jumlah += 1;
        } elseif ($operation === 'decrement' && $hasil->jumlah > 0) {
            $hasil->jumlah -= 1;
        } else {
            return ['success' => false, 'message' => 'Operasi tidak valid atau jumlah sudah 0'];
        }

        if ($hasil->save()) {
            return ['success' => true, 'jumlah' => $hasil->jumlah];
        } else {
            return ['success' => false, 'message' => 'Gagal menyimpan data'];
        }
    }

    protected function findModelPlant($id) {
        if (($tanaman = Tanaman::findOne($id)) !== null) {
            return $tanaman;
        }

        throw new NotFoundHttpException('Data tidak ditemukan');
    } 

    protected function findModelResult($id) {
        if (($hasil = Hasil::findOne($id)) !== null) {
            return $hasil;
        }

        throw new NotFoundHttpException('Data tidak ditemukan');
    }
}