<?php
// Pertemuan 2, belaja mengenal sintaks PHP
// echo untuk mencetak nilai ke laya
echo "<hr>";

//OPERATOR
// Aritmatika
// +, -, *, /, %
echo 5 % 2; // sisa bagi
echo "<hr>";

// Perbandingan 
// <, >, <=, >=, ==, !=
echo 10 != 20;
echo "<hr>";

// Variabel
// Tempat menampung nilai
// tidak boleh mengandung spasi
// boleh mengandung angka, tapi tidak boleh diawal
// snake_case : $nama_depan_mahasiswa
// camelCase : namaDepanMahasiswa
// kebab-case : nama-depan-mahasiswa
$nama = 'nabila';
$nama = 'putri';
echo $nama;
echo "<hr>";

// Penugasan / Assigment
// =, +=, -=, *=, /=, %=
$a = 10;
$a = 20;
$a = 30;
echo $a;
echo "<hr>";

// Increment & Decrement
// ++, --
$b = 10;
$b--;
echo $b;
echo "<hr>";

// Identitas 
// ===, !==
echo 10 === "10";
?>

' back tick
~ tilde
# pound
^ caret 
| pipe
\ backslash
/ slash 
echo "<hr>";

<?php  
// melanjutkan tugas pertemuan2
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// Var_dump

echo "Nabila Putri Aisyah Insirawati";
echo "<hr>";
print "Nabila Putri Aisyah I";
echo "<hr>";

// Penulisan Sintaks PHP
// 1. PHP di dalam html
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
$nama = "Nabila Putri";

echo "Halo, nama saya $nama";
echo "<hr>";

// Operator
// aritmatika
// + - * / %
echo 1 + 1;
$x = 10;
$y = 20;
echo $x + $y;
echo "<hr>";

// Penggabung string / concattenation / concat
// .
$nama_depan = "Nabila";
$nama_belakang = "Putri";
echo $nama_depan . $nama_belakang;
echo "<hr>";

// Operator Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 5;
echo $x;
echo "<hr>";

$nama = "Nabila";
$nama .= " ";
$nama .= "Putri";
echo $nama;
echo "<hr>";

// Operator Perbandingan
// <, >, <=, >=, ==
var_dump(1 < 5);
echo "<hr>";

// Operator Identitas
// ===, !==
var_dump(1 === "1")

// Operator Logika
// &&, ||, !
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?php "ini adalah paragraf"; ?></p>
</body>
</html>