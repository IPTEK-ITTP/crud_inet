<?php
    include "../config/koneksi.php";

    $nama = $_POST ['nama'];
    $kelas = $_POST ['kelas'];
    $alamat = $_POST ['alamat'];

    $sql = "INSERT into data(nama,kelas,alamat) values('$nama','$kelas','$alamat')";
    $q = $conn->query($sql);

    if($q) {
        alert('Berhasil');
        redir('../');
    } else {
        alert('Gagal');
        redir('../');
    }
?>