<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coba Get</title>
</head>
<body>
    <!-- mengirim data menggunakan get -->
    <a href="kuliah_latihan3.php?nama=Putri">Kirim Data Nama</a>
    <hr>
    <!-- mengirimkan data menggunakan post -->
    <h1>Login Form</h1>
    <form action="kuliah_latihan3.php" method="">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Kirim</button>
    </form>

</body>
</html>