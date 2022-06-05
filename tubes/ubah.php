<?php
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// Ambil data dari URL
$id = $_GET["id"];

// Query data artis berdasarkan ID
$art = query("SELECT * FROM artis WHERE id = $id")[0]; 

if( isset($_POST["submit"]) ) {
    
        // Cek data apakah berhasil diubah atau tidak
        if( ubah($_POST) > 0 ) {
            echo "
                <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
                </script>
                ";
        } else {
            echo "
                <script>
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
                </script>
                ";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ubah Data Artis</title>
</head>
<body>
    <h1>Ubah Data Artis</h1>

<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $art["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $art["gambar"]; ?>">
    <ul>
        <li>
            <label for="nama">Nama Lengkap: </label>
            <input type="text" name="nama" id="nama" required value="<?= $art["nama"]; ?>">
        </li>
        <li>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?= $art["jenis_kelamin"]; ?>">
        </li>
        <li>
            <label for="tanggal_lahir">Tanggal Lahir: </label>
            <input type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?= $art["tanggal_lahir"]; ?>">
        </li>
        <li>
            <label for="pekerjaan">Pekerjaan: </label>
            <input type="text" name="pekerjaan" id="pekerjaan" value="<?= $art["pekerjaan"]; ?>">
        </li>
        <li>
            <label for="gambar">Gambar: </label>
            <img src="img/<?= $art["gambar"]; ?>" width="40"> <br>
            <input type="file" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Ubah Data Artis</button>
        </li>
    </ul>

</form>

</body>
</html>