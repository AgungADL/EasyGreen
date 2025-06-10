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
        <h1>Managing Plants</h1>
        <p class="intro">Salah satu fitur utama dari website ini adalah pengelolaan tanaman. Lalu bagaimana cara kita mengelola tanaman?</p>

        <div class="section">
            <h2>Kenapa ada pengelolaan tanaman?</h2>
            <div class="step">
                <div class="step-icon">A</div>
                <p>Website di buat agar anda tidak harus mencatat lagi di kertas yang pasti rentan akan kesalahan.</p>
            </div>
            <div class="step">
                <div class="step-icon">B</div>
                <p>Lebih fleksible dan mudah.</p>
            </div>
        </div><br>

        <h1>What can be done to manage plants</h1>
        <div class="section">
            <h2>Add plant data</h2>
            <div class="step">
                <p>Yang bisa anda lakukan pertama adalah menambah data tanaman yang anda.</p>
            </div>
            <p>Selebihnya tentang <?= Html::a('Add plant data', ['help/load-view', 'view' => 'create-plant']) ?></p>
        </div>
        <div class="section">
            <h2>Search plant data by category</h2>
            <div class="step">
                <p>Hal kedua yang bisa anda lakukan adalah mencari data yang ada berdasarkan kategori.</p>
            </div>
            <p>Selebihnya tentang <?= Html::a('Search plant data by category', ['help/load-view', 'view' => 'search-category']) ?></p>
        </div>
        <div class="section">
            <h2>See plant data</h2>
            <div class="step">
                <p>Hal ketiga yang bisa anda lakukan adalah melihat data tanaman.</p>
            </div>
            <p>Selebihnya tentang <?= Html::a('See plant data', ['help/load-view', 'view' => 'view-plant']) ?></p>
        </div>
        <div class="section">
            <h2>Update plant data</h2>
            <div class="step">
                <p>Dalam pengelolaan juga, anda bisa memperbarui data tanaman yang sudah ada.</p>
            </div>
            <p>Selebihnya tentang <?= Html::a('Update plant data', ['help/load-view', 'view' => 'update-plant']) ?></p>
        </div>
        <div class="section">
            <h2>Delete plant data</h2>
            <div class="step">
                <p>Yang terakhir, anda juga bisa menghapus data tanaman yang sudah tidak diperlukan.</p>
            </div>
            <p>Selebihnya tentang <?= Html::a('Delete plant data', ['help/load-view', 'view' => 'delete-plant']) ?></p>
        </div>

        <div class="feedback-section">
            <p>Was this page helpful?</p>
            <div class="feedback-buttons">
                <button onclick="alert('Syukurlah kalau membantu')">Yes</button>
                <button onclick="alert('Kami akan berusaha lebih baik')">No</button>
            </div>
        </div>

        <div class="navigation-bar">
            <?= Html::a('Add Plants ᯓ➤', ['help/load-view', 'view' => 'create-plant']) ?>
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