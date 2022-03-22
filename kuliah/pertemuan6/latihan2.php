<?php
$mahasiswa = [
    ["Nabila Putri Aisyah Insirawati", "213040144", "lllalanabila300@gmail.com", "Teknik Informatika"],
    ["Moch. Daffa Dhiya Ulhaq", "213040006", "bisma04bdg@gmail.com", "Teknik Informatika"],
    ["Nadia Tri Naifa Lestari", "213020129", "nadiatrinaifa@gmail.com", "Teknologi Pangan"],
    ["Fathia Maulida", "213040130", "fathiamaulida@gmail.com", "Teknik Informatika"]
];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
    ],

    [
    "gambar" => "bila2.jpg",
    "nama" => "Nadia Tri Naifa Lestari", 
    "npm" => "213020129", 
    "email" => "nadiatrinaifa@gmail.com",
    "jurusan" => "Teknologi Pangan" 
    ],

    [
    "gambar" => "bila2.jpg",
    "nama" => "Fathia Maulida", 
    "npm" => "213040130", 
    "email" => "fathiamaulida@gmail.com",
    "jurusan" => "Teknik informatika"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["npm"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>