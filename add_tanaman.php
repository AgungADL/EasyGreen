<?php
    session_start();
    if(empty ($_SESSION ["login"])){
        header ("Location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGreen</title>
    <link rel="stylesheet" href="css/add_tanaman.css">
    <link rel="icon" href="img/logo.webp">
</head>

<body>
    <div class="kontener">
        <div class="kiri">
            <a href="halaman_tanaman.php" class="panah"><</a>
                    <h1 class="register">ADD TANAMAN</h1>
                    <img src="img/1.png" alt="logo CoGuide">
        </div>
        <div class="kanan">
            <form action="#" method="post">
                <div class="inp0">
                    <div class="inp1">
                        <label for="nata">Nama Tanaman</label> <br>
                        <input type="text" id="nata" name="nata" placeholder="Nama Tanaman" required class="isi"> <br>
                        <label for="kategori">Kategori</label> <br>
                        <select name="kategori" id="kategori" required>
                            <option disabled selected>Pilih Kategori</option>
                            <option value="2">Tanaman Sayur</option>
                            <option value="3">Tanaman Buah</option>
                            <option value="4">Tanaman Bunga</option>
                            <option value="5">Tanaman Obat</option>
                            <option value="6">Tanaman Umbi</option>
                        </select> <br>
                        <label for="pass">Jumlah </label> <br>
                        <input type="number" id="jumlah" name="jumlah" placeholder="Jumlah" required class="isi"> <br>
                    </div>
                    <div class="inp2">
                        <label for="deskripsi">Deskripsi</label> <br>
                        <textarea name="deskripsi" id="deskripsi" placeholder="Masukan deskipsi anda di sini..." class="isi1"></textarea>
                        <!-- <input type="text" id="deskripsi" name="deskripsi" placeholder="Deskripsi" class="isi1"> -->
                    </div>
                </div>
                <input type="submit" name="kirim" class="kirim" value="TAMBAH">
            </form>
        </div>
    </div>
</body>

</html>

<?php

        include "php/koneksi.php";

        if(!$koneksi){
            echo "Tidak konek";
        } else {

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['kirim'])){
                $nama = isset($_POST['nata'])? $_POST['nata'] : '';
                $kategori = isset($_POST['kategori'])? $_POST['kategori'] : '';
                $jumlah = isset($_POST['jumlah'])? $_POST['jumlah'] : '';
                $deskripsi = isset($_POST['deskripsi'])? $_POST['deskripsi'] : '';
                $username = $_SESSION["nm_pengguna"];
                    
                if (!empty($nama) && $kategori != null && !empty($jumlah) && !empty($deskripsi)){
                    $SQL="insert into tanaman values('', '$nama', '$kategori', '$jumlah', '$deskripsi', '$username')";
                        
                    if($koneksi->query($SQL) === false){
                        echo "Error: " . $SQL . "<br>" . $koneksi->error;
                    } else {
                        header("Location: halaman_tanaman.php");
                        exit;
                    }
                } else {
                    echo "<script> alert('harap isi semua file.');</script>";
                }
            }
        }
?>