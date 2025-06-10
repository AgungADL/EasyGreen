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
        <h1>Logout</h1>
        <p class="intro">Logout digunakan hanya ketika anda sudah selesai menggunakan web.</p>

        <div class="section">
            <h2>Kenapa harus logout?</h2>
            <div class="step">
                <p>Logout akan membuat data anda aman, Dan meminimalisir error pada data anda.</p>
            </div>
        </div><br>

        <h1>Steps to Logout</h1>
        <div class="section">
            <h2>Ke Halaman yang memiliki tombol logout</h2>
            <div class="step">
                <p>Langkah pertama yang harus anda lakukan untuk logout adalah masuk ke halaman yang memiliki tombol logout.</p>
            </div>
            <p>Halaman yang memiliki tombol logout -> halaman sementara dan halaman tanaman.</p>
        </div>
        <div class="section">
            <h2>Click tombol logout</h2>
            <div class="step">
                <p>Di bagian atas kanan akan ada tombol logout, tinggal click saja. Anda akan otomatis dialihkan ke halaman sementara.</p>
            </div>
        </div>
        
        <div class="feedback-section">
            <p>Was this page helpful?</p>
            <div class="feedback-buttons">
                <button onclick="alert('Syukurlah kalau membantu')">Yes</button>
                <button onclick="alert('Kami akan berusaha lebih baik')">No</button>
            </div>
        </div>

        <div class="navigation-bar">
            <?= Html::a('Managing Plants ᯓ➤', ['help/load-view', 'view' => 'managing-plants']) ?>
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