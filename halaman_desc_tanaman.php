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
        echo "Data tanaman tidak ditemukan!";
        exit;
    }

    $cariH = "SELECT hasil.nama as nama, hasil.deskripsi as keterangan, hasil.jumlah as jumlah, hasil.kd_hasil as kd_hasil 
              from hasil inner join tanaman 
              on hasil.kd_tanaman = tanaman.kd_tanaman and tanaman.kd_tanaman = $id";
    $hasilH = $koneksi->query($cariH);
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
    <link rel="stylesheet" href="css/halaman_desc_tanaman.css">
    <link rel="icon" href="img/logo.webp">
</head>

<body>
    <header>
        <div class="landn">
            <img src="img/1.png" alt="logo EasyGreen" class="poto1">
            <div class="EgUname">
                <h1>EasyGreen</h1>
                <p><?php echo $_SESSION['nm_pengguna']; ?></p>
            </div>
        </div>
        <nav>
            <a href="halaman_utama.php" class="a1">BERANDA</a> |
            <a href="#" class="a2">TANAMAN</a>
        </nav>
        <button onclick="logout()">LOGOUT</button>
    </header>
    <main>
        <div class="desc">
            <div class="atas">
                <h3 style="font-size: 30px; text-decoration: underline;"><?php echo $data['nama']; ?></h3>
                <a href="update_tanaman.php?id=<?php echo $id; ?>">Update</a>
                <p><?php echo $data['jumlah']; ?></p>
            </div>

            <h2 style="text-align : center;">Deskripsi</h2>
            <p><?php echo $data['deskripsi']; ?></p>
        </div>
        <div class="inti">
            <button onclick="window.location.href='halaman_tanaman.php'" style="margin-left: -20px; margin-top: 15px; height: 50px;" class="butt">back</button>
            <h1>Hasil :</h1>
            <div class="Tdata">
                <?php
                    if ($hasilH->num_rows > 0) {
                        $nomer = 0;
                        while ($baris = $hasilH->fetch_assoc()) {
                            $nomer ++;
                            ?>
                                <div class="data">
                                    <p><?php echo $nomer ?>.</p>
                                    <p style="margin-left: 0px; width: 100px; font-size: 18px; text-align: left;"><?php echo $baris['nama']; ?></p>
                                    <p style="margin-left: 0px; width: 270px; font-size: 18px; text-align: left;"><?php echo $baris['keterangan']; ?></p>
                                    <p>jumlah : <?php echo $baris['jumlah'] ?> kg</p>
                                    <button onclick="window.location.href='php/kurang_jml.php?id=<?php echo $baris['kd_hasil']; ?>'">-</button>
                                    <button style="margin-left: -20px; margin-right: 0px;" onclick="window.location.href='php/tambah_jml.php?id=<?php echo $baris['kd_hasil']; ?>'">+</button>
                                    <button style="margin-left: 10px; margin-right: 0px;" onclick="hapus('<?php echo $baris['kd_hasil']; ?>')"><img src="img/tong_sampah_tutup-removebg-preview.png" alt="delete" style="width: 30px; height: 30px; padding: 0px 0px; "></button>
                                </div>

                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
                    }
                ?>
            </div>
            <button onclick="window.location.href='add_hasil.php?id=<?php echo $id; ?>'" class="but">+</button>
        </div>
    </main>
    <footer>
        <p>
            Hak cipta &copy 2024 <br><br>
            Agung coy
        </p>
        <img src="img/1.png" alt="logo EasyGreen" class="poto2">
        <div class="NamaYW">
            <p>Ikuti kami :</p>
            <a href="https://www.youtube.com/channel/UCxSCPL_5c6QMMfuIlSoh0Kg" target="_blank"><img
                    src="img/youtube.png" alt="Youtube" class="yt"></a>
            <a href="https://www.instagram.com/ardwpl/" target="_blank"><img src="img/instagram.png" alt="Instagram"
                    class="ig"></a>
        </div>
    </footer>
</body>

</html>

<script>
    function logout(){
        var konfirm = confirm("Apakah anda yakin ingin log out?");
        if (konfirm){
            window.location.href = "php/logout.php";
        } else {
            console.log("Log out dibatalkan.");
        }
    }

    function hapus(id){
        var konfirm = confirm("Apakah anda yakin ingin menghapus data ini?");
        if (konfirm){
            window.location.href = "php/delete_hasil.php?id=" + id;
        } else {
            alert ("Menghapus data dibatalkan.");
        }
    }
</script>