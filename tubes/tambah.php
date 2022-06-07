<?php
require 'functions.php';
$pekerjaan = query("SELECT * FROM pekerjaan");

session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

if( isset($_POST["submit"]) ) {


    
        // Cek data apakah berhasil ditambahkan atau tidak
        if( tambah($_POST) > 0 ) {
            echo "
                <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'admin.php';
                </script>
                ";
        } else {
            echo "
                <script>
                alert('Data gagal ditambahkan!');
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
    <title>Add Artist Data</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&family=Poppins:wght@100;700&display=swap");
        h1 {
            font-size:50px;
            font-family:'poppins';
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Add Artist Data</h1>
    <a href="index.php" class="btn btn-primary">Go Back</a>

    <div class="row mt-3">
        <div class="col-8">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <form action="" method="post">
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Gender: </label>
            <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin">
        </div>
        <form action="" method="post">
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Date of Birth: </label>
            <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
        </div>
        <form action="" method="post">
        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Profession: </label>
            <select name="pekerjaan_id" id="pekerjaan_id" class="form-control">
                <?php foreach($pekerjaan as $row): ?>
                    <option value="<?= $row['id']; ?>"><?= $row['pekerjaan']; ?></option>
                <?php endforeach ; ?>
            </select>
        </div>
        <form action="" method="post">
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar: </label>
            <input type="file" class="form-control" name="gambar" id="gambar">
        </div>

            <button type="submit"  class="btn btn-primary" name="submit">Tambah Data Artis</button>

</div>
</div>
</div>

</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>
</html>