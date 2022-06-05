<?php
require '../functions.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM artis 
            WHERE
            nama LIKE '%$keyword%' OR
            jenis_kelamin LIKE '%$keyword%' OR
            tanggal_lahir LIKE '%$keyword%' OR
            pekerjaan LIKE '%$keyword%' OR
            gambar LIKE '%$keyword%'
            ";
$artis = query($query);
?>

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