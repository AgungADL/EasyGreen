<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var app\models\Tanaman $tanaman */
/** @var app\models\Hasil $hasils */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGreen</title>
    <link rel="stylesheet" href="<?= Yii::getAlias('@web/css/halaman_desc_tanaman.css') ?>">
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
            <?= Html::a('BERANDA', ['halaman/index'], ['class' => 'a2']) ?> |
            <?= Html::a('TANAMAN', ['view', 'id' => $tanaman->kd_tanaman], ['class' => 'a1']) ?> |
            <?= Html::a('BANTUAN', ['help/index', 'view' => 'managing-harvest'], ['class' => 'a2','target' => 'blank']) ?>
        </nav>
        <?= Html::beginForm(['login/logout'], 'post') . Html::submitButton('LOGOUT', ['class' => 'a2']) . Html::endForm() ?>
    </header>
    <main>
        <div class="desc">
            <div class="atas">
                <h3 style="font-size: 30px; text-decoration: underline;"><?= Html::encode($tanaman->nama) ?></h3>
                <?= Html::a('Update', ['update', 'id' => $tanaman->kd_tanaman]) ?>
                <p><?= Html::encode($tanaman->jumlah) ?></p>
            </div>

            <h2 style="text-align : center;">Deskripsi</h2>
            <p><?= Html::encode($tanaman->deskripsi) ?></p>
        </div>
        <div class="inti">
            <button onclick="window.location.href='<?= Url::to(['index']) ?>'"
                style="margin-left: -20px; margin-top: 15px; height: 50px;" class="butt">back</button>
            <h1>Hasil :</h1>
            <div class="Tdata">
                <?php if (!empty($hasils)): ?>
                    <?php $no = 1;
                    foreach ($hasils as $hasil):?>
                        <div class="data">
                            <p><?= $no ?>.</p>
                            <p style="margin-left: 0px; width: 100px; font-size: 18px; text-align: left;">
                                <?= $hasil->nama ?></p>
                            <p style="margin-left: 0px; width: 270px; font-size: 18px; text-align: left;">
                                <?= $hasil->deskripsi ?></p>
                            <p id="jumlah-<?= $hasil->kd_hasil ?>">jumlah : <?= $hasil->jumlah ?> kg</p>

                            <button
                                onclick="updateJumlah(<?= $hasil->kd_hasil ?>, 'decrement')">-</button>
                            <button style="margin-left: 0px; margin-right: 0px;"
                                onclick="updateJumlah(<?= $hasil->kd_hasil ?>, 'increment')">+</button>
                            <button style="margin-left: 10px; margin-right: 0px;"
                                onclick="window.location.href='<?= Url::to(['hasil/delete', 'id' => $hasil->kd_hasil, 'kd' => $tanaman->kd_tanaman]) ?>'"><img
                                    src="<?= Yii::getAlias('@web/images/tong_sampah_tutup-removebg-preview.png') ?>" alt="delete"
                                    style="width: 30px; height: 30px; padding: 0px 0px; "></button>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Tidak ada data</p>
                <?php endif; ?>
            </div>
            <button onclick="window.location.href='<?= Url::to(['hasil/create', 'id' => $tanaman->kd_tanaman]) ?>'" class="but">+</button>
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
            <a href="https://www.instagram.com/ardwpl/" target="_blank"><img src="<?= Yii::getAlias('@web/images/instagram.png') ?>" alt="Instagram"
                    class="ig"></a>
        </div>
    </footer>

    <script>
        function updateJumlah(id, operation) {
            fetch('<?= Url::to(['hasil/update-jumlah']) ?>?id=' + id + '&operation=' + operation, {
                method: 'POST',
                headers: {
                    'X-CSRF-Token': '<?= Yii::$app->request->csrfToken ?>',
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('jumlah-' + id).innerText = 'jumlah : ' + data.jumlah + ' kg';
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                alert('Terjadi kesalahan: ' + error);
            });
        }
    </script>
</body>

</html>