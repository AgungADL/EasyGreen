<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var app\models\Tanaman $tanamans */


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGreen</title>
    <link rel="stylesheet" href="<?= Yii::getAlias('@web/css/halaman_tanaman.css') ?>">
    <link rel="icon" href="<?= Yii::getAlias('@web/images/logo.webp') ?>">
</head>

<body>
    <header>
        <div class="landn">
            <img src="<?= Yii::getAlias('@web/images/1easy.png') ?>" alt="logo EasyGreen" class="poto1">
            <div class="EgUname">
                <h1>EasyGreen</h1>
                <p><?= Yii::$app->user->identity->username ?></p>
            </div>
        </div>
        <nav>
            <?= Html::a('BERANDA', ['halaman/index'], ['class' => 'a1']) ?> |
            <?= Html::a('TANAMAN', ['index'], ['class' => 'a2']) ?> |
            <?= Html::a('BANTUAN', ['help/index', 'view' => 'managing-plants'], ['class' => 'a1', 'target' => 'blank']) ?>
        </nav>
        <?= Html::beginForm(['login/logout'], 'post') . Html::submitButton('LOGOUT', ['class' => 'a1']) . Html::endForm() ?>
    </header>
    <main>
        <?= Html::beginForm(['tanaman/index'], 'post', ['style' => '
                display: flex;
                gap: 10px;
                align-items: center;
                margin-bottom: 20px;
                flex-wrap: wrap;
        ']) ?>
        <select name="kategori" required>
            <option disabled selected>Pilih Kategori</option>
            <option value="1" <?= ($kategori == 1 ? 'selected' : ''); ?>>All</option>
            <option value="2" <?= ($kategori == 2 ? 'selected' : ''); ?>>Tanaman Sayur</option>
            <option value="3" <?= ($kategori == 3 ? 'selected' : ''); ?>>Tanaman Buah</option>
            <option value="4" <?= ($kategori == 4 ? 'selected' : ''); ?>>Tanaman Bunga</option>
            <option value="5" <?= ($kategori == 5 ? 'selected' : ''); ?>>Tanaman Obat</option>
            <option value="6" <?= ($kategori == 6 ? 'selected' : ''); ?>>Tanaman Umbi</option>
        </select>

        <button type="submit" style="padding: 8px;"><img src="<?= Yii::getAlias('@web/images/search.png') ?>" alt="search" style="
                width: 24px;
                height: 24px;
                transition: transform 0.3s ease;
        "></button>
        <?= Html::endForm() ?>
        <div class="inti">
            <div class="Tdata">
                <?php if (!empty($tanamans)): ?>
                    <?php $no = 1;
                    foreach ($tanamans as $tanaman): ?>
                        <div class="data0" style="display: flex;">
                            <?= Html::beginForm(['delete', 'id' => $tanaman->kd_tanaman], 'post')
                                . Html::submitButton(Html::img('@web/images/tong_sampah_tutup-removebg-preview.png', ['style' => 'width: 40px; height: 40px;']), [
                                    'style' => 'padding: 0; margin-left: -90px; margin-top: 45px',
                                ])
                                . Html::endForm()
                                ?>
                            <div class="data"
                                onclick="window.location.href='<?= Url::to(['tanaman/view', 'id' => $tanaman->kd_tanaman]) ?>'">
                                <p><?= $no++ ?>.</p>
                                <p style='margin-left: 0px; width: 400px; font-size: 18px;'>
                                    <a><?= Html::encode($tanaman->nama) ?></a>
                                </p>
                                <p>jumlah : <?= Html::encode($tanaman->jumlah) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Tidak ada data</p>
                <?php endif; ?>
            </div>
            <button onclick="window.location.href='<?= Url::to(['create']) ?>'">+</button>
        </div>
    </main>
    <footer>
        <p>
            Hak cipta &copy 2024 <br><br>
            Agung coy
        </p>
        <img src="<?= Yii::getAlias('@web/images/1easy.png') ?>" alt="logo EasyGreen" class="poto2">
        <div class="NamaYW">
            <p>Ikuti kami :</p>
            <a href="https://www.youtube.com/channel/UCxSCPL_5c6QMMfuIlSoh0Kg" target="_blank"><img
                    src="<?= Yii::getAlias('@web/images/youtube.png') ?>" alt="Youtube" class="yt"></a>
            <a href="https://www.instagram.com/ardwpl/" target="_blank"><img
                    src="<?= Yii::getAlias('@web/images/instagram.png') ?>" alt="Instagram" class="ig"></a>
        </div>
    </footer>
</body>

</html>