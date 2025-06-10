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
        <h1>Delete the Harvest</h1>
        <p class="intro">Data pasti ada yang sudah tidak di gunakan lagi. Maka di kemanakan? tentu saja kita hapus.</p>

        <div class="section">
            <h2>Kenapa harus di hapus?</h2>
            <div class="step">
                <p>Agar anda tidak pusing dalama mengelola tanaman. Jika ada data yang salah penulisan atau ada data yang sudah tidak digunakan, maka akan lebih baik untuk kita hapus.</p>
            </div>
        </div>

        <h1>Steps to delete the harvest</h1>
        <div class="section">
            <h2>Ke halaman detail tanaman</h2>
            <div class="step">
                <p>Langkah pertama yang harus anda lakukan untuk melakukan penghapusan data hasil panen adalah masuk ke halaman detail tanaman.</p>
            </div>
            <p>Kalau anda bingung, anda bisa masuk ke halaman tanaman, lalu click data yang mau anda hapus hasil panennya. Nanti akan otomatis ke halaman detail tanaman.</p>
            <p>Halaman yang tampil :<img src="<?= Yii::getAlias('@web/images/detailTanaman2.png') ?>" alt="Halaman detail tanaman"></p>
        </div>
        <div class="section">
            <h2>Click icon sampah</h2>
            <div class="step">
                <p>Setelah ada di halaman detail tanaman, sekarang anda tinggal click icon sampah yang berada di samping kanan setiap data hasil panen. Maka data akan automatis terhapus.</p>
            </div>
            <p>Penghapusan akan menyesuaikan dengan dimana icon tersebut berada.</p>
        </div>

        <div class="feedback-section">
            <p>Was this page helpful?</p>
            <div class="feedback-buttons">
                <button onclick="alert('Syukurlah kalau membantu')">Yes</button>
                <button onclick="alert('Kami akan berusaha lebih baik')">No</button>
            </div>
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