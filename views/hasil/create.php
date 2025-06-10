<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var app\models\Tanaman $tanaman */
/** @var app\models\Tanaman $hasil */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGreen</title>
    <link rel="stylesheet" href="<?= Yii::getAlias('@web/css/add_hasil.css') ?>">
    <link rel="icon" href="<?= Yii::getAlias('@web/images/logo.webp') ?>">
</head>

<body>
    <div class="kontener">
        <div class="kiri">
            <?= Html::a('<', ['tanaman/view', 'id' => $tanaman->kd_tanaman], ['class' => 'panah']) ?>
            <h1 class="register">ADD HASIL</h1>
            <img src="<?= Yii::getAlias('@web/images/1easy.png') ?>" alt="logo EasyGreen">
            <p>Butuh bantuan? <?= Html::a('Get Help', ['help/index', 'view' => 'managing-harvest'], ['target' => 'blank']) ?></p>
        </div>
        <div class="kanan">
            <?php $form = ActiveForm::begin(); ?>
            <div class="inp0">
                <div class="inp1">
                    <?= $form->field($hasil, 'kd_tanaman')->hiddenInput(['value' => $tanaman->kd_tanaman])->label(false) ?>
                    <label for="naha">Nama Hasil</label> <br>
                    <?= $form->field($hasil, 'nama')->textInput(['placeholder' => 'Nama Hasil', 'class' => 'isi'])->label(false) ?>
                    <label for="pass">Jumlah(kg) </label> <br>
                    <?= $form->field($hasil, 'jumlah')->textInput(['placeholder' => 'Jumlah', 'class' => 'isi', 'type' => 'number'])->label(false) ?>
                </div>
                <div class="inp2">
                    <label for="deskripsi">Deskripsi</label> <br>
                    <?= $form->field($hasil, 'deskripsi')->textarea(['placeholder' => 'Masukan deskripsi anda di sini...', 'class' => 'isi1'])->label(false) ?>
                </div>
            </div>
            <?= Html::submitButton('TAMBAH', ['class' => 'kirim']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</body>

</html>