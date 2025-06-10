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
        <h1>Managing Harvest</h1>
        <p class="intro">Tanaman pasti ada yang memiliki hasil. Maka ini adalah salah satu fitur website ini, yaitu adalah mengelola hasil panen.</p>

        <div class="section">
            <h2>Kenapa ada pengelolaan hasil panen?</h2>
            <div class="step">
                <div class="step-icon">A</div>
                <p>Tanaman pasti ada yang memiliki hasil panennya sendiri, maka daripada menulis di kertas lagi yang pasti rentan salah. Kita bisa menulisnya di sini yang pasti datanya aman.</p>
            </div>
            <div class="step">
                <div class="step-icon">B</div>
                <p>Lebih fleksible dan mudah, lalu hasil sesuai dengan tanaman yang kita tambah.</p>
            </div>
        </div><br>

        <h1>What can be done to manage the harvest</h1>
        <div class="section">
            <h2>Increase the harvest data</h2>
            <div class="step">
                <p>Yang bisa anda lakukan pertama adalah menambah data hasil panen yang anda punya.</p>
            </div>
            <p>Selebihnya tentang <?= Html::a('Increase the harvest data', ['help/load-view', 'view' => 'increase-harvest']) ?></p>
        </div>
        <div class="section">
            <h2>Update the harvest quantity</h2>
            <div class="step">
                <p>Hal kedua yang bisa anda lakukan adalah memperbarui jumlah dari hasil panen yang sudah ada.</p>
            </div>
            <p>Selebihnya tentang <?= Html::a('Update the harvest quantity', ['help/load-view', 'view' => 'update-harvest']) ?></p>
        </div>
        <div class="section">
            <h2>Delete the harvest</h2>
            <div class="step">
                <p>Hal terakhir yang bisa anda lakukan adalah menghapus hasil panen yang sudah tidak digunakan.</p>
            </div>
            <p>Selebihnya tentang <?= Html::a('Delete the harvest', ['help/load-view', 'view' => 'delete-harvest']) ?></p>
        </div>

        <div class="feedback-section">
            <p>Was this page helpful?</p>
            <div class="feedback-buttons">
                <button onclick="alert('Syukurlah kalau membantu')">Yes</button>
                <button onclick="alert('Kami akan berusaha lebih baik')">No</button>
            </div>
        </div>

        <div class="navigation-bar">
            <?= Html::a('Increase the harvest ᯓ➤', ['help/load-view', 'view' => 'increase-harvest']) ?>
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