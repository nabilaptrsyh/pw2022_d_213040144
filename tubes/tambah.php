<?php
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
if( isset($_POST["submit"]) ) {


    
        // Cek data apakah berhasil ditambahkan atau tidak
        if( tambah($_POST) > 0 ) {
            echo "
                <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
                </script>
                ";
        } else {
            echo "
                <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'index.php';
                </script>
                ";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Artis</title>
</head>
<body>
    <h1>Tambah Data Artis</h1>

<form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="nama">Nama Lengkap: </label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin">
        </li>
        <li>
            <label for="tanggal_lahir">Tanggal Lahir: </label>
            <input type="text" name="tanggal_lahir" id="tanggal_lahir">
        </li>
        <li>
            <label for="pekerjaan">Pekerjaan: </label>
            <input type="text" name="pekerjaan" id="pekerjaan">
        </li>
        <li>
            <label for="gambar">Gambar: </label>
            <input type="file" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data Artis</button>
        </li>
    </ul>

</form>

</body>
</html>