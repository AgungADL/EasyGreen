<?php
include 'php/koneksi.php';

session_start();
    if(empty ($_SESSION ["login"])){
        header ("Location:index.php");
    }

// Mengambil data berdasarkan ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cari = "SELECT * FROM tanaman WHERE kd_tanaman = $id";
    $hasil = mysqli_query($koneksi, $cari);

    if (mysqli_num_rows($hasil) == 1) {
        $data = mysqli_fetch_assoc($hasil);
    } else {
        echo "<script>alert('Data tidak ditemukan!'); window.location='halaman_desc_tanaman.php';</script>";
        exit;
    }
}

// proses update data
if (isset($_POST['update'])) {
    $id_tn = $_POST['id'];
    $nama = mysqli_real_escape_string($koneksi, $_POST['nata']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $jumlah = mysqli_real_escape_string($koneksi, $_POST['jumlah']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);

    $update = "UPDATE tanaman 
                  SET nama = '$nama', 
                      kd_kategori = $kategori, 
                      jumlah = $jumlah,
                      deskripsi = '$deskripsi'
                WHERE kd_tanaman = $id_tn";

    if (mysqli_query($koneksi, $update)) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='halaman_desc_tanaman.php?id=$id_tn';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data!');</script>";
        echo "Error: " . mysqli_error($koneksi);
    }
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
            <a href="halaman_desc_tanaman.php?id=<?php echo $id; ?>" class="panah"><</a>
                    <h1 class="register">UPDATE TANAMAN</h1>
                    <img src="img/1.png" alt="logo CoGuide">
        </div>
        <div class="kanan">
            <form action="update_tanaman.php" method="post">
                <div class="inp0">
                    <div class="inp1">
                        <input type="hidden" name="id" value="<?php echo $data['kd_tanaman']; ?>">

                        <label for="nata">Nama Tanaman</label> <br>
                        <input type="text" id="nata" name="nata" value="<?php echo $data['nama']; ?>" required class="isi"> <br>
                        <label for="kategori">Kategori</label> <br>
                        <select name="kategori" id="kategori" required>
                            <option disabled selected>Pilih Kategori</option>
                            <option value="2" <?php echo ($data['kd_kategori'] == 2) ? 'selected' : ''; ?>>Tanaman Sayur</option>
                            <option value="3" <?php echo ($data['kd_kategori'] == 3) ? 'selected' : ''; ?>>Tanaman Buah</option>
                            <option value="4" <?php echo ($data['kd_kategori'] == 4) ? 'selected' : ''; ?>>Tanaman Bunga</option>
                            <option value="5" <?php echo ($data['kd_kategori'] == 5) ? 'selected' : ''; ?>>Tanaman Obat</option>
                            <option value="6" <?php echo ($data['kd_kategori'] == 6) ? 'selected' : ''; ?>>Tanaman Umbi</option>
                        </select>  <br>
                        <label for="pass">Jumlah </label> <br>
                        <input type="number" id="jumlah" name="jumlah" value="<?php echo $data['jumlah']; ?>" required class="isi"> <br>
                    </div>
                    <div class="inp2">
                        <label for="deskripsi">Deskripsi</label> <br>
                        <textarea name="deskripsi" id="deskripsi" class="isi1"><?php echo $data['deskripsi']; ?></textarea>
                        <!-- <input type="text" id="deskripsi" name="deskripsi" placeholder="Deskripsi" class="isi1"> -->
                    </div>
                </div>
                <input type="submit" name="update" class="kirim" value="UPDATE">
            </form>
        </div>
    </div>
</body>

</html>