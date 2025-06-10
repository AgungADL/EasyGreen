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
        <h1>See Plants</h1>
        <p class="intro">Dalam mengelola tanaman, kita pasti mau melihat detail dari tanaman kita kan?.</p>

        <div class="section">
            <h2>Apa yang ada pada detail data tanaman?</h2>
            <div class="step">
                <div class="step-icon">A</div>
                <p>Data yang sudah di tambah sebelumnya.</p>
            </div>
            <div class="step">
                <div class="step-icon">B</div>
                <p>Hasil panen pada tanaman yang di lihat.</p>
            </div>
        </div><br>

        <h1>Steps to see plants</h1>
        <div class="section">
            <h2>Ke halaman tanaman</h2>
            <div class="step">
                <p>Langkah pertama yang harus anda lakukan untuk melihat detail data tanaman adalah masuk ke halaman tanaman.</p>
            </div>
            <p>Kalau anda bingung, anda bisa masuk ke halaman sementara lalu click tulisan tanaman di bagian atas. Nanti akan otomatis ke halaman tanaman.</p>
            <p>Halaman yang tampil :<img src="<?= Yii::getAlias('@web/images/halTanaman2.png') ?>" alt="Halaman tanaman"></p>
        </div>
        <div class="section">
            <h2>Click data tanaman</h2>
            <div class="step">
                <p>Setelah ada di halaman tanaman, sekarang anda tinggal click data tanaman yang mau anda lihat detailnya. Nanti anda akan langsung diarahkan he halaman detail tanaman.</p>
            </div>
            <p>Halaman yang tampil :<img src="<?= Yii::getAlias('@web/images/detailTanaman.png') ?>" alt="Halaman detail tanaman"></p>
        </div>

        <div class="feedback-section">
            <p>Was this page helpful?</p>
            <div class="feedback-buttons">
                <button onclick="alert('Syukurlah kalau membantu')">Yes</button>
                <button onclick="alert('Kami akan berusaha lebih baik')">No</button>
            </div>
        </div>

        <div class="navigation-bar">
            <?= Html::a('Update Plants ᯓ➤', ['help/load-view', 'view' => 'update-plant']) ?>
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