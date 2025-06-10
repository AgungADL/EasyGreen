<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGreen</title>
    <link rel="stylesheet" href="<?= Yii::getAlias('@web/css/help_content.css') ?>">
    <link rel="icon" href="<?= Yii::getAlias('@web/images/logo.webp') ?>">
</head>

<body>
    <main>
        <h1>Increase the harvest</h1>
        <p class="intro">Dalam mengelola hasil panen, tentu hal yang paling penting adalah anda harus menambahkan data hasil panen milik anda terlebih dahulu.</p>

        <div class="section">
            <h2>Apa yang ada pada data hasil panen?</h2>
            <div class="step">
                <div class="step-icon">A</div>
                <p>Nama hasil panen.</p>
            </div>
            <div class="step">
                <div class="step-icon">B</div>
                <p>Jumlah hasil panen dalam kilogram(kg).</p>
            </div>
            <div class="step">
                <div class="step-icon">C</div>
                <p>Deskripsi hasil panen.</p>
            </div>
        </div><br>

        <h1>Steps to increase the harvest</h1>
        <div class="section">
            <h2>Ke halaman detail tanaman</h2>
            <div class="step">
                <p>Langkah pertama yang harus anda lakukan untuk menambah data hasil panen adalah masuk ke halaman detail tanaman.</p>
            </div>
            <p>Kalau anda bingung, anda bisa masuk ke halaman tanaman lalu click data tanaman yang ingin anda tambah hasilnya. Nanti akan otomatis ke halaman detail tanaman.</p>
            <p>Halaman yang tampil :<img src="<?= Yii::getAlias('@web/images/detailTanaman3.png') ?>" alt="Halaman detail tanaman"></p>
        </div>
        <div class="section">
            <h2>Click tombol tambah</h2>
            <div class="step">
                <p>Setelah ada di halaman detail tanaman, sekarang anda tinggal click tombol "+" yang ada pada bagian hasil di bawah. nanti anda akan otomatis menuju ke halaman menambah hasil panen.</p>
            </div>
            <p>Halaman yang tampil :<img src="<?= Yii::getAlias('@web/images/increaseHasil.png') ?>" alt="Halaman menambah hasil panen"></p>
        </div>
        <div class="section">
            <h2>Isi data</h2>
            <div class="step">
                <p>Jika sudah berada di halaman menambah hasil panen, sekarang anda tinggal isi semua field data hasil panen yang sudah kami sediakan sesuai dengan tanaman yang anda punya.</p>
            </div>
        </div>
        <div class="section">
            <h2>Submit</h2>
            <div class="step">
                <p>Tahap terakhir jika anda sudah mengisi seluruh field data nya, anda tinggal click saja tombol tambah. Lalu nanti anda akan diarahkan ke halaman tanaman.</p>
            </div>
            <p>Jika ada data yang kurang sesuai dengan prosedur maka akan ada pemberi tahuan dan anda harus mengisi data yang lebih valid. </p>
        </div>

        <div class="feedback-section">
            <p>Was this page helpful?</p>
            <div class="feedback-buttons">
                <button onclick="alert('Syukurlah kalau membantu')">Yes</button>
                <button onclick="alert('Kami akan berusaha lebih baik')">No</button>
            </div>
        </div>

        <div class="navigation-bar">
            <?= Html::a('Update the harvest ᯓ➤', ['help/load-view', 'view' => 'update-harvest']) ?>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-links">
            <a href="https://www.youtube.com/channel/UCxSCPL_5c6QMMfuIlSoh0Kg" target="_blank"><img
                    src="<?= Yii::getAlias('@web/images/youtube.png') ?>" alt="Youtube" class="yt"></a>
            <a href="https://www.instagram.com/ardwpl/" target="_blank"><img
                    src="<?= Yii::getAlias('@web/images/instagram.png') ?>" alt="Instagram" class="ig"></a>
        </div>
        <div>
            <p>© 2025 EasyGreen | Young Develop</p>
        </div>
        <div>
            <img src="<?= Yii::getAlias('@web/images/1easy.png') ?>" alt="EasyGreen Logo" class="footer-logo">
        </div>
    </footer>

</html>