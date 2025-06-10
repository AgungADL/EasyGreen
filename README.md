_Perhatian!!_

**ctrl + shift + v** _untuk visual yang lebih nyaman_

##

<div align="center">
    <img  src="web/images/1easy.png" alt="Coguide Logo" width="300" height="300" style="border-radius: 50%; object-fit: cover;">

# Easy Green 🌱

**A Sustainable Management System**  
_Built with Yii Framework & MySQL_

</div>

## 📌 Table of Contents

- [Introduction](#-introduction)
- [Features](#-features)
- [Requirements](#-requirements)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Usage](#-usage)
- [Database Structure](#-database-structure)

## 🌟 Introduction

EasyGreen adalah aplikasi berbasis website yang ada karena pengelolaan tanaman yang ribet dan rentan salah. Inilah EasyGreen, sebuah website tentang pengelolaan tanaman sekaligus pengelolaan hasil panen dengan fitur yang mudah di gunakan dan fleksible.

Alasan kami membuat website ini karena adanya kesulian dalam mengelola tanaman. Pengelola biasanya menulis data di kertas yang pasti rentan akan kesalahan, tetapi di sini data akan aman dan pengelolaan akan lebih rapih.

## ✨ Features

- ✅ Data tanaman berdasarkan akun
- ✅ Pengelolaan tanaman
  - Menambah data tanaman
  - Melihat detai data tanaman
  - Memperbarui data tanaman
  - Menghapus data tanaman
- ✅ Mencari tanaman berdasarkan karegori
- ✅ Pengelolaan hasil panen
  - Menambah hasil panen
  - Memperbarui jumlah hasil panen secara real time
  - Menghapus hasil panen

## ⚙️ Requirements

- PHP 7.4 or higher
- MySQL 5.7+
- Composer
- Yii Framework 2.0
- Web server (Apache)

## 🛠️ Installation

1. Masuk ke folder projectnya
   ```bash
   cd EasyGreen-Yii
   ```
2. Install dependencies:
   ```bash
   composer install
   ```
3. Setup database (lihat [Configuration](#️-configuration))

## ⚙️ Configuration

1. Buat database baru di mysql phpmyadmin dengan nama:
   ```bash
   easygreen
   ```
2. Import file sql easygreen di dalamnya.
3. Pergi ke file config/db.php lalu ganti bagian ini:
   ```bash
   'dsn' => 'mysql:host=localhost;dbname=yiibasic',
   ```
   Menjadi seperti ini :
   ```bash
   'dsn' => 'mysql:host=localhost;dbname=easygreen',
   ```

## 🚀 Usage

**Development Server**

```bash
php yii serve
```

Lalu akses **http://localhost:8080** di browser kamu.

## 🗃️ Database Structure

Tabel utama :

- **pengguna** - akun pengguna
- **tanaman** - pengelolaan tanaman
- **hasil** - pengelolaan hasil panen

## 💚 Easy Management with EasyGreen!! 💚
