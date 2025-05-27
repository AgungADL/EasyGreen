<?php
include "php/koneksi.php";

if(!$koneksi){
    echo "Tidak konek";
}

session_start();
if(empty ($_SESSION ["login"])){
    header ("Location:index.php");
}

$username = $_SESSION['nm_pengguna'];

$kategori = isset($_POST['kategori']) ? $_POST['kategori'] : null;

// Filter data berdasarkan kategori jika kategori dipilih
if ($kategori && $kategori != 1) {
    $ambil = "SELECT * FROM tanaman WHERE kd_kategori = '$kategori'";
} else {
    $ambil = "SELECT * FROM tanaman where username = '$username'"; // Menampilkan semua data jika tidak ada kategori yang dipilih
}

$hasil = $koneksi->query($ambil);
$nomer = 0;
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGreen</title>
    <link rel="stylesheet" href="css/halaman_tanaman.css">
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
        <form action="#" method="post">
        <select name="kategori" id="kategori" required>
            <option disabled selected>Pilih Kategori</option>
            <option value="1" <?php echo ($kategori == 1 ? 'selected' : ''); ?>>All</option>
            <option value="2" <?php echo ($kategori == 2 ? 'selected' : ''); ?>>Tanaman Sayur</option>
            <option value="3" <?php echo ($kategori == 3 ? 'selected' : ''); ?>>Tanaman Buah</option>
            <option value="4" <?php echo ($kategori == 4 ? 'selected' : ''); ?>>Tanaman Bunga</option>
            <option value="5" <?php echo ($kategori == 5 ? 'selected' : ''); ?>>Tanaman Obat</option>
            <option value="6" <?php echo ($kategori == 6 ? 'selected' : ''); ?>>Tanaman Umbi</option>
        </select> 

            <button type="submit"><img src="img/search.png" alt="search"></button>
        </form>
        <div class="inti">
            <div class="Tdata">
                <?php
                if ($hasil->num_rows > 0) {
                    while ($baris = $hasil->fetch_assoc()) {
                        $nomer ++;
                        ?>
                        <div class="data0" style="display: flex;">
                            <button style="padding: 0; margin-left: -90px; margin-right: 50px; margin-top: 10px;" onclick="hapus('<?php echo $baris['kd_tanaman']; ?>')"><img src="img/tong_sampah_tutup-removebg-preview.png" alt="delete" style="width: 40px; height: 40px;"></button>
                            <div class="data" onclick="window.location.href='halaman_desc_tanaman.php?id=<?php echo $baris['kd_tanaman']; ?>'">
                                <p><?php echo $nomer ?>.</p>
                                <p style='margin-left: 0px; width: 400px; font-size: 18px;'><a><?php echo $baris['nama']; ?></a></p>
                                <p>jumlah : <?php echo $baris['jumlah'] ?></p>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
                }
                ?>
            </div>
            <button onclick="window.location.href='add_tanaman.php'">+</button>
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
            window.location.href = "php/delete_tanaman.php?id=" + id;
        } else {
            alert ("Menghapus data dibatalkan.");
        }
    }
</script>