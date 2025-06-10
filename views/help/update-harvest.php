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
        <h1>Update the Harvest</h1>
        <p class="intro">Pembaruan pada hasil panen hanya dilakukan pada jumlah hasil panen saja.</p>

        <h1>Steps to update plants</h1>
        <div class="section">
            <h2>Ke halaman detail tanaman</h2>
            <div class="step">
                <p>Langkah pertama yang harus anda lakukan untuk melakukan pembaruan data tanaman adalah masuk ke halaman detail tanaman.</p>
            </div>
            <p>Kalau anda bingung, anda bisa masuk ke halaman tanaman lalu click data tanaman yang anda mau. Nanti akan otomatis berpindah ke halaman detail tanaman.</p>
            <p>Halaman yang tampil :<img src="<?= Yii::getAlias('@web/images/detailTanaman2.png') ?>" alt="Halaman detail tanaman"></p>
        </div>
        <div class="section">
            <h2>Click tombol "+" atau "-"</h2>
            <div class="step">
                <p>Setelah ada di halaman detail tanaman, sekarang anda tinggal click tombol "+" atau "-" yang ada di samping kanan hasil panen anda.</p>
            </div>
            <p>Jika click tombol "+" maka jumlah hasil tanaman akan menambah. Jika click tombol "-" maka jumlah hasil tanaman akan mengurang.</p>
        </div>

        <div class="feedback-section">
            <p>Was this page helpful?</p>
            <div class="feedback-buttons">
                <button onclick="alert('Syukurlah kalau membantu')">Yes</button>
                <button onclick="alert('Kami akan berusaha lebih baik')">No</button>
            </div>
        </div>

        <div class="navigation-bar">
            <?= Html::a('Delete the harvest ᯓ➤', ['help/load-view', 'view' => 'delete-harvest']) ?>
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