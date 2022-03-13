<!-- <?php
// Pertemuan 5 - ARRAY
// Array adalah variabel yang dapat menyimpan banyak nilai sekaligus

// $hari = "Senin";
// $hari2 = "Selasa";

// $bulan1 = "Januari";
// $bulan2 = "Februari";

// Membuat array
// $hari = ["Senin", "Selasa", "Rabu", "Kamis"]; // versi baru
// $bulan = array("Januari", "Februari", "Maret"); // versi lama

// mencetak array
// menggunakan indeks, dimulai dari 0
// echo $hari[0];
// echo '<br>';
// echo $bulan[2];
// echo '<br>';

// menggunakan var_dump() atau print_r()
// hanya untuk debugging
// var_dump($hari);
// echo '<br>';
// print_r($bulan);
// echo '<hr>';

// mencetak untuk user
// menggunakan looping
// mencetak semua database bisa menggunakan count, (looping sampai habis)
// for($i = 0; $i < count($hari); $i++) {
//     echo $hari[$i];
//     echo "<br>";
// }
// echo "<hr>";

// // menggunakan foreach
// // pengulangan khusus ARRAY
// foreach($bulan as $b) {
//     echo $b;
//     echo "<br>";
// }
// echo "<hr>";

// // memanipulasi array
// // menambah 1 elemen di akhir
// $hari[] = "Jum'at";
// $hari[] = "Sabtu";
// print_r($hari);
// echo "<br>";

// $bulan[] = "April";
// $bulan[] = "Mei";
// print_r($bulan);
// echo "<br>";

?> -->

<?php
// array
// variabel yang dapat memiliki banyak nilai

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);

// Menampilkan 1 elemen pada array
echo $arr1[0];
echo "<br>";
echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);

?>