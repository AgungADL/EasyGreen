<?php
include "php/koneksi.php";
session_start();

if(empty ($_SESSION ["login"])){
    header ("Location:index.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $cari = "SELECT * FROM tanaman WHERE kd_tanaman = '$id'";
    $hasil = $koneksi->query($cari);

    if (mysqli_num_rows($hasil) > 0) {
        $data = $hasil->fetch_assoc();
    } else {
        echo "Data tidak ditemukan!";
        exit;
    }
} else {
    echo "ID tidak valid!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGreen</title>
    <link rel="stylesheet" href="css/add_hasil.css">
    <link rel="icon" href="img/logo.webp">
</head>

<body>
    <div class="kontener">
        <div class="kiri">
            <a href="halaman_desc_tanaman.php?id=<?php echo $id; ?>" class="panah"><</a>
                    <h1 class="register">ADD HASIL</h1>
                    <img src="img/1.png" alt="logo CoGuide">
        </div>
        <div class="kanan">
            <form action="#" method="post">
                <div class="inp0">
                    <div class="inp1">
                        <label for="naha">Nama Hasil</label> <br>
                        <input type="text" id="naha" name="naha" placeholder="Nama Hasil" required class="isi"> <br>
                        <!-- <label for="kategori">Kategori</label> <br> -->
                        <!-- <select name="kategori" id="kategori" name="kategori">
                            <option value="0">Kategori</option>
                            <option value="1">Sayuran</option>
                            <option value="2">Buah</option>
                            <option value="3">Hama</option>
                        </select> <br> -->
                        <label for="pass">Jumlah(kg) </label> <br>
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
                $nama = isset($_POST['naha'])? $_POST['naha'] : '';
                $jumlah = isset($_POST['jumlah'])? $_POST['jumlah'] : '';
                $deskripsi = isset($_POST['deskripsi'])? $_POST['deskripsi'] : '';
                    
                if (!empty($nama) && !empty($jumlah) && !empty($deskripsi)){
                    $SQL="insert into hasil values('', '$id', '$nama', '$jumlah', '$deskripsi')";
                        
                    if($koneksi->query($SQL) === false){
                        echo "Error: " . $SQL . "<br>" . $koneksi->error;
                    } else {
                        header("Location: halaman_desc_tanaman.php?id=" . $id);
                        exit;
                    }
                } else {
                    echo "<script> alert('harap isi semua file.');</script>";
                }
            }
        }
?>