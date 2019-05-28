<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD | iNET</title>
</head>
<body>
    <h1>Tambah</h1>
    <form action="inc/tambah.php" method="post">
        <table>
            <tr>
                <th>Nama</th>
                <td>
                    <input type="text" name="nama" placeholder="Nama">
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>
                    <input type="text" name="kelas" placeholder="Kelas">
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>
                    <input type="text" name="alamat" placeholder="Alamat">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Tambah">
                </td>
            </tr>
        </table>
    </form>

    <h1>Tampil</h1>

    <table border="1px" width="800px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php
            include "config/koneksi.php";

            $sql = "SELECT * FROM data";
            $q = $conn->query($sql);
            $no = 1;
            while($v = $q->fetch_array()) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $v ['nama']; ?></td>
            <td><?= $v ['kelas']; ?></td>
            <td><?= $v ['alamat']; ?></td>
            <td>
                <a onclick="return confirm('Yakin?')" href="inc/del.php?id=<?= $v ['id']; ?>">Hapus</a>
                <a href="inc/edit.php?id=<?= $v ['id']; ?>">Edit</a>
            </td>
        </tr>
            <?php } ?>
    </table>
</body>
</html>