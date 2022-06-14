<?php
// session_start();
//     if( !isset($_SESSION["login"]) ) {
//         header("Location: login.php");
//         exit;
//     }

require 'functions.php';
$artis = query("SELECT artis.*, pekerjaan.pekerjaan AS nama_pekerjaan FROM artis JOIN pekerjaan ON artis.pekerjaan_id = pekerjaan.id");

if( isset($_POST["cari"]) ) {
    $artis = cari($_POST["keyword"]);
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

    <title>Admin Page</title>
    
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&family=Poppins:wght@100;700&display=swap");
        * {
            text-align: center;
            background-color:#D0C9C0;
            color: black;
        }
        
        body {
            background-color:#D0C9C0;
        }
        

        h1 {
            text-align: center;
            font-size: 50px;
            font-family: 'Poppins', sans-serif;
            color: black;
            margin-top: 5%;
            font-weight: bold;
        }

        .add-artist a {
            font-family: 'Poppins';
            font-weight: bold;
            border: 2px solid rgb(204, 204, 204);
            border-radius: 10px;
            padding: 15px;
            display: block;
            width: 15%;
            text-align: center;
            margin-right: auto;
            margin-left: auto;
        }

        .search {
            font-family: 'Poppins', sans-serif;
        }

        .search button {
            border-radius: 5px;
        }

        .table {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            color: black;
            position: relative;
            border-radius: 5px;
        }

        .table img {
            border-radius: 35%;
        }

        tr {
            font-family:'poppins';
            font-size: 15px;
        }
        
    </style>
</head>
<body>

    <h1>Hello, Admin Nabila!</h1>
    
    <!-- TULISAN ADD ARTIST -->
    <div class="add-artist">
    <br>
    <a href="tambah.php" class="btn btn-primary">Add Artist Data</a>
    <br>
    <a href="index.php" class="btn btn-primary">Home Page</a>
    </div>
    <br><br>

    <!-- TOMBOL SEARCH -->
    <div class="search">
    <form action="" method="post">
    <input type="text" name="keyword" class="btn" size="65" placeholder="What do you looking for?" autocomplete="off" id="keyword">
    <button type="submit" name="cari" class="btn btn-primary" id="tombol-cari">Search</button>
    </form>
    </div>
    
    <br>

    <!-- TABEL -->
    <div id="container">
    <table class="table table-success table-striped" style="margin-left: auto; margin-right: auto" width="35" border="1" cellpadding="65" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Picture</th>
            <th>Full Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Profession</th>
            <th>Action</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $artis as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="85"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["jenis_kelamin"]; ?></td>
            <td><?= $row["tanggal_lahir"]; ?></td>
            <td><?= $row["nama_pekerjaan"]; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn badge bg-primary">Change</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn badge bg-warning" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>
    <script src="js/scriptadmin.js"></script>
    
    <br>
    <a href="logout.php" class="btn btn-primary">Log Out</a>
    <br>
    <body>
        <div class="container">
            <button class="btn btn-danger mt-3" onclick="window.print()">
        <i class="bi bi-journal-plus">Print PDF</i>
        </button>
        </div>
    </body>

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