<?php 
// $_GET
$mahasiswa = [
    [
        "gambar" => "bila.jpg",
        "nama" => "Nabila Putri Aisyah Insirawati", 
        "npm" => "213040144", 
        "email" => "lllalanabila300@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],

    [
        "gambar" => "dapdap.jpg",
        "nama" => "Moch. Daffa Dhiya Ulhaq", 
        "npm" => "213040006", 
        "email" => "bisma04bdg@gmail.com",
        "jurusan" => "Teknik Informatika"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
          <li>
              <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
          </li>  
    <?php endforeach; ?>
    </ul>
</body>
</html>