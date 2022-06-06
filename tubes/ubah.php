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
$pekerjaan = query("SELECT * FROM pekerjaan");

if( isset($_POST["submit"]) ) {
    
        // Cek data apakah berhasil diubah atau tidak
        if( ubah($_POST) > 0 ) {
            echo "
                <script>
                alert('Data berhasil diubah!');
                document.location.href = 'admin.php';
                </script>
                ";
        } else {
            echo "
                <script>
                alert('Data gagal diubah!');
                document.location.href = 'admin.php';
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

    <title>Change Artist Data</title>
</head>
<body>
    <div class="container">
    <h1>Change Artist Data</h1>
    <a href="index.php" class="btn btn-secondary">Go Back</a>

    <div class="row mt-3">
    <div class="col-8">
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $art["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $art["gambar"]; ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Full Name: </label>
            <input type="text" class="form-control" id="nama" name="nama" required value="<?= $art['nama']; ?>">
        </div>
        <form action="" method="post">
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Gender: </label>
            <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?= $art["jenis_kelamin"]; ?>">
        </div>
        <form action="" method="post">
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Date of Birth: </label>
            <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?= $art["tanggal_lahir"]; ?>">
        </div>
        <form action="" method="post">
        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Profession: </label>
            <select name="pekerjaan_id" id="pekerjaan_id" class="form-control">
                <?php foreach($pekerjaan as $row): ?>
                    <?php if($row['id'] == $art['pekerjaan_id']) : ?>
                        <option value="<?= $row['id'] ?>" selected><?= $row['pekerjaan'] ?></option>
                    <?php else : ?>
                        <option value="<?= $row['id'] ?>"><?= $row['pekerjaan'] ?></option>
                    <?php endif; ?>
                <?php endforeach ; ?>
            </select>
        </div>
        <form action="" method="post">
        <div class="mb-3">
            <label for="gambar" class="form-label">Picture: </label>
            <img src="img/<?= $art["gambar"]; ?>" width="40"> <br>
            <input type="file" class="form-control" name="gambar" id="gambar">
        </div>
            <button type="submit" class="btn btn-secondary" name="submit">Change Artist Data</button>

    </form>
</div>
</div>
</div>  

</body>
</html>