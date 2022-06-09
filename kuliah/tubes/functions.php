<?php
$conn = mysqli_connect("localhost", "root", "", "tubes");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $pekerjaan = htmlspecialchars($data["pekerjaan_id"]);
    // $gambar = htmlspecialchars($data["gambar"]);
    // Upload GAMBAR
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }
    
    $query = "INSERT INTO artis 
                VALUES
                ('', '$nama', '$jenis_kelamin', '$tanggal_lahir', '$pekerjaan', '$gambar')
            ";
            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
}

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // Cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
              </script>";
              return false;
    }

    // Cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('Mohon masukkan gambar');
              </script>";
              return false;
    }

    // // Cek jika ukuran file gambar terlalu besar
    // if( $ukuranFile > 100000 ) {
    //     echo "<script>
    //             alert('Ukuran file terlalu besar!');
    //           </script>";
    //           return false;
    // }

    // Lolos pengecekan, gambar siap diupload
    // Generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM artis WHERE id = $id");
    return mysqli_affected_rows($conn);
}



function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $pekerjaan = htmlspecialchars($data["pekerjaan_id"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // Cek apakah user pilih gambar lama atau tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE artis SET 
                nama = '$nama',
                jenis_kelamin = '$jenis_kelamin',
                tanggal_lahir = '$tanggal_lahir',
                pekerjaan_id = '$pekerjaan',
                gambar = '$gambar'
                WHERE id = $id
                ";
            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT artis.*, pekerjaan.pekerjaan AS nama_pekerjaan FROM artis 
                JOIN pekerjaan ON artis.pekerjaan_id = pekerjaan.id
                WHERE
                nama LIKE '%$keyword%' OR
                jenis_kelamin LIKE '%$keyword%' OR
                tanggal_lahir LIKE '%$keyword%' OR
                pekerjaan.pekerjaan LIKE '%$keyword%' OR
                gambar LIKE '%$keyword%'
                ";
        return query($query);
}

// function registrasi($data) {
//     global $conn;

    
//     $username = strtolower(stripslashes($data["username"]));
//     $email = strtolower(stripslashes($data["email"]));
//     $nomor_hp = strtolower(stripslashes($data["nomor_hp"]));
//     $password = mysqli_real_escape_string($conn, $data["password"]);
//     $password2 = mysqli_real_escape_string($conn, $data["password2"]);

//     // Cek username udah ada atau belum
//     $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

//     if( mysqli_fetch_assoc($result) ) {
//         echo "<script>
//               alert('Username telah terdaftar!');
//               </script>";

//         return false;
//     }

//     // Cek konfirmasi password
//     if( $password !== $password2 ) {
//         echo "<script>
//               alert('Konfirmasi password tidak sesuai!');
//               </script>";
//               return false;
//     }

//     // Esnkripsi Password
//     $password = password_hash($password, PASSWORD_DEFAULT);


//     // Tambahkan user ke database
//     mysqli_query($conn, "INSERT INTO users VALUE('', '$username', '$email', '$nomor_hp', '$password')");

//     return mysqli_affected_rows($conn);

// }

// register akun
function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower(stripslashes($data["email"]));
    $nomor_hp = strtolower(stripslashes($data["nomor_hp"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek email
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Your Email Already Registered, Please Try Another Email');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
    }

    //cek konfrimasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('Sorry your Password not correct!');
                document.location.href = 'registrasi.php';
                </script>";

        return false;
    }
//enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

//tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('','$username', '$email', '$nomor_hp', '$password', 'user')");

    return mysqli_affected_rows($conn);
}


?>