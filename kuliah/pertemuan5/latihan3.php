<!-- <?php
// Representasi Data Mahasiswa

$mahasiswa = [
    ["Nabila Putri Aisyah Insirawati", "213040144", "lllalanabila300@gmail.com", "Teknik Informatika"],
    ["Moch. Daffa Dhiya Ulhaq", "213040006", "bisma04bdg@gmail.com", "Teknik Informatika"],
    ["Nadia Tri Naifa Lestari", "213020129", "nadiatrinaifa@gmail.com", "Teknologi Pangan"],
    ["Fathia Maulida", "213040130", "fathiamaulida@gmail.com", "Teknik Informatika"]
];


?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs[0] ?></li>
    <li>NPM : <?php echo $mhs[1] ?></li>
    <li>Email : <?php echo $mhs[2] ?></li>
    <li>Jurusan : <?php echo $mhs[3] ?></li>
</ul>
<?php } ?>
 -->


 <?php 
 $mahasiswa = [
     ["Nabila Putri Aisyah Insirawati", "213040144", "Teknik Informatika", "lllalanabila300@gmail.com"],
     ["Moch. Daffa Dhiya Ulhaq", "213040006", "bisma04bdg@gmail.com", "Teknik Informatika"],
     ["Nadia Tri Naifa Lestari", "213020129", "nadiatrinaifa@gmail.com", "Teknologi Pangan"],
     ["Fathia Maulida", "213040130", "fathiamaulida@gmail.com", "Teknik Informatika"]
 ];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <title>Daftar Mahasiswa</title>
 </head>
 <body>
 
 <h1>Daftar Mahasiswa</h1>

 <?php foreach($mahasiswa as $mhs) { ?>
 <ul>
     <li>Nama : <?php echo $mhs[0] ?></li>
     <li>NRP : <?php echo $mhs[1] ?></li>
     <li>Jurusan : <?php echo $mhs[2] ?></li>
     <li>Email : <?php echo $mhs[3] ?></li>
 </ul>
 <?php } ?>

 </body>
 </html>