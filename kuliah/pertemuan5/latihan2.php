<!-- <?php
// Array Multidimensi
// Array di dalam array

$array1 = [10, "nabila", true, [1,[2],3]];
print_r($array1);
echo "<hr>";
// untuk mencetak angka 2
echo $array1[3][1][0];
echo "<hr>";

// matriks
/*
1 2 3
4 5 6
7 8 9
*/
$matriks = [
    [1,2,3], 
    [4,5,6], 
    [7,8,9]
];

foreach($matriks as $baris) {
    foreach($baris as $kolom) {
        echo $kolom;
    }
    echo "<br>";
}

?> -->

<?php
// Pengulangan pada array
// for / foreach
$angka = [3,2,15,20,11,77,89,8];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            float: left;
            margin: 3px;
        }
        .clear { clear: both; }
    </style>
</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class= "clear"></div>

<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a) : ?>
<div class="kotak"><?php echo $a; ?></div>
<?php endforeach; ?> 

</body>
</html>