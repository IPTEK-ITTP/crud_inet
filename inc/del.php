<?php
    include "../config/koneksi.php";

    $id = $_GET ['id'];

    $sql = "DELETE FROM data WHERE id = '$id'";
    $q = $conn->query($sql);

    if($q) {
        alert('Berhasil');
        redir('../');
    } else {
        alert('Gagal');
        redir('../')
    }
?>