// Ambil elemen2 yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');


// Tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
    // Buat objek AJAX
    var xhr = new XMLHttpRequest();

    // Cek kesiapan AJAX
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            container.innerHTML = xhr.responseText;
        }
    }

    // Eksekusi AJAX
    xhr.open('GET', 'ajax/artis.php?keyword=' + keyword.value, true);
    xhr.send();
});