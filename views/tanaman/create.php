<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var app\models\Tanaman $tanaman */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGreen</title>
    <link rel="stylesheet" href="<?= Yii::getAlias('@web/css/add_tanaman.css') ?>">
    <link rel="icon" href="<?= Yii::getAlias('@web/images/logo.webp') ?>">
</head>

<body>
    <div class="kontener">
        <div class="kiri">
            <?= Html::a('<', ['index'], ['class' => 'panah']) ?>
            <h1 class="register">ADD TANAMAN</h1>
            <img src="<?= Yii::getAlias('@web/images/1easy.png') ?>" alt="logo CoGuide">
            <p>Butuh bantuan? <?= Html::a('Get Help', ['help/index', 'view' => 'managing-plants'], ['target' => 'blank']) ?></p>
        </div>
        <div class="kanan">
            <?php $form = ActiveForm::begin(); ?>
            <div class="inp0">
                <div class="inp1">
                    <label for="nata">Nama Tanaman</label> <br>
                    <?= $form->field($tanaman, 'nama')->textInput(['placeholder' => 'Nama Tanaman', 'class' => 'isi'])->label(false) ?>
                    <label for="kategori">Kategori</label> <br>
                    <?= $form->field($tanaman, 'kd_kategori')->dropDownList([
                        '2' => 'Tanaman Sayur',
                        '3' => 'Tanaman Buah',
                        '4' => 'Tanaman Bunga',
                        '5' => 'Tanaman Obat',
                        '6' => 'Tanaman Umbi',
                    ])->label(false) ?>
                    <label for="pass">Jumlah </label> <br>
                    <?= $form->field($tanaman, 'jumlah')->textInput(['placeholder' => 'Jumlah', 'class' => 'isi', 'type' => 'number'])->label(false) ?>
                </div>
                <div class="inp2">
                    <label for="deskripsi">Deskripsi</label> <br>
                    <?= $form->field($tanaman, 'deskripsi')->textarea(['placeholder' => 'Masukan deskripsi anda di sini...', 'class' => 'isi1'])->label(false) ?>
                </div>
            </div>
            <?= $form->field($tanaman, 'username')->hiddenInput(['value' => Yii::$app->user->identity->username])->label(false) ?>
            <?= Html::submitButton('TAMBAH', ['class' => 'kirim']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</body>

</html>