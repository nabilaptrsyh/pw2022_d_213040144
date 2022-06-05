<?php
session_start();
    if( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }

require 'functions.php';
$artis = query("SELECT * FROM artis");

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
</head>
<body>

<a href="logout.php">Log Out</a>

    <h1>Artist List</h1>
    
    <!-- TULISAN ADD ARTIST -->
    <div class="add-artist">
    <a href="tambah.php" class="btn btn-primary">Add Artist Data</a>
    </div>
    <br><br>

    <!-- TOMBOL SEARCH -->
    <div class="search">
    <form action="" method="post">
    <center>
    <input type="text" name="keyword" size="65" autofocus placeholder="What do you looking for?" autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Search</button>
    </center>
    </form>
    </div>
    
    <br>

    <!-- TABEL -->
    <div id="container">
    <table style="margin-left:auto;margin-right:auto" border="1" cellpadding="15" cellspacing="0">
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
            <td><?= $row["pekerjaan"]; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn badge bg-warning">Change</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn badge bg-danger" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>
    <script src="js/script.js"></script>

    <style>

        * {
            background-color: #fff;
        }

        h1 {
            text-align: center;
            font-size: 50px;
            font-family: 'Poppins', sans-serif;
            color: black;
        }

        .add-artist a {
            font-family: 'Poppins', sans-serif;
            color: #F0F8FF;
            border: 2px solid rgb(204, 204, 204);
            border-radius: 10px;
            padding: 15px;
            display: block;
            width: 15%;
            text-align: center;
            background-color: #696969;
            margin-right: auto;
            margin-left: auto;
        }

        .search {
            font-family: 'Poppins', sans-serif;
        }

        .search button {
            border-radius: 5px;
        }

        .tabel {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            position: relative;
            border-radius: 5px;
        }

        .tabel img {
            border-radius: 35%;
        }
        
    </style>

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