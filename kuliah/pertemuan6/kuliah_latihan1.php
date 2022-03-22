<?php 
// Array Associative
// Array yang key nya ber-asosiasi / berpasangan dengan string

$mahasiswa = [
    [
    "nama" => "Nabila Putri Aisyah Insirawati", 
    "npm" => "213040144", 
    "email" => "lllalanabila300@gmail.com",
    "jurusan" => "Teknik Informatika" 
    ],

    [
    "nama" => "Moch. Daffa Dhiya Ulhaq", 
    "npm" => "213040006", 
    "email" => "bisma04bdg@gmail.com",
    "jurusan" => "Teknik Informatika" 
    ],

    [
    "nama" => "Nadia Tri Naifa Lestari", 
    "npm" => "213020129", 
    "email" => "nadiatrinaifa@gmail.com",
    "jurusan" => "Teknologi Pangan" 
    ],

    [
    "nama" => "Fathia Maulida", 
    "npm" => "213040130", 
    "email" => "fathiamaulida@gmail.com",
    "jurusan" => "Teknik informatika"
    ]
];

// var_dump($mahasiswa[2]);

?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
    <li>Nama : <?php echo $mhs["nama"] ?></li>
    <li>NRP : <?php echo $mhs["npm"] ?></li>
    <li>Email : <?php echo $mhs["email"] ?></li>
    <li>Jurusan : <?php echo $mhs["jurusan"] ?></li>
    </ul>
 <?php } ?>