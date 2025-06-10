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
        <h1>Search plant data by category</h1>
        <p class="intro">Fitur search by category ini adalah salah satu fitur unggulan di website ini.</p>

        <div class="section">
            <h2>Mengapa unggul?</h2>
            <div class="step">
                <div class="step-icon">A</div>
                <p>Jika data tanaman sudah banyak kita bisa dengan mudah mencarinya berdasarkan kategori.</p>
            </div>
            <div class="step">
                <div class="step-icon">B</div>
                <p>Memudahkan pengelolaan dengan pencarian yang mudah dilakukan.</p>
            </div>
        </div><br>

        <h1>Steps to search data plant by category</h1>
        <div class="section">
            <h2>Ke halaman tanaman</h2>
            <div class="step">
                <p>Langkah pertama yang harus anda lakukan untuk mencari data tanaman berdasarkan kategori adalah masuk ke halaman tanaman.</p>
            </div>
            <p>Kalau anda bingung, anda bisa masuk ke halaman sementara lalu click tulisan tanaman di bagian atas. Nanti akan otomatis ke halaman tanaman.</p>
            <p>Halaman yang tampil :<img src="<?= Yii::getAlias('@web/images/halTanaman2.png') ?>" alt="Halaman tanaman"></p>
        </div>
        <div class="section">
            <h2>Click dropdown kategori</h2>
            <div class="step">
                <p>Jika sudah berada di halaman tanaman. Sekarang anda tinggal click dropdown kategori yang ada di kiri atas. Lalu pilih kategori yang anda mau cari.</p>
            </div>
            <p>Untuk defaut biasanya dropdown bertuliskan "All".</p>
        </div>
        <div class="section">
            <h2>Cari</h2>
            <div class="step">
                <p>Langkah terakhir adalah, anda tinggal click icon search di sebelah kanan dropdown. Maka data akan otomatis berubah sesuai kategori yang anda pilih.</p>
            </div>
            <p>Apabila data tidak ada, maka nanti akan muncul tulisan "Data belum ada".</p>
        </div>

        <div class="feedback-section">
            <p>Was this page helpful?</p>
            <div class="feedback-buttons">
                <button onclick="alert('Syukurlah kalau membantu')">Yes</button>
                <button onclick="alert('Kami akan berusaha lebih baik')">No</button>
            </div>
        </div>

        <div class="navigation-bar">
            <?= Html::a('See plants ᯓ➤', ['help/load-view', 'view' => 'view-plant']) ?>
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