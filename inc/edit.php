<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD | iNET</title>
</head>
<body>
    <?php
        include "../config/koneksi.php";

        $id = $_GET ['id'];

        $sql = "SELECT * FROM data WHERE id = '$id'";
        $q = $conn->query($sql);
        $v = $q->fetch_array();
    ?>
    <h1>Edit</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $v ['id']; ?>">
        <table>
            <tr>
                <th>Nama</th>
                <td>
                    <input type="text" name="nama" placeholder="Nama" value="<?= $v ['nama']; ?>">
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>
                    <input type="text" name="kelas" placeholder="Kelas" value="<?= $v ['kelas'] ?>">
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>
                    <input type="text" name="alamat" placeholder="Alamat" value="<?= $v ['alamat'] ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Edit" name="edit">
                </td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST ['edit'])) {
            $id = $_POST ['id'];
            $nama = $_POST ['nama'];
            $kelas = $_POST ['kelas'];
            $alamat = $_POST ['alamat'];

            $ss = "UPDATE data SET nama = '$nama', kelas = '$kelas', alamat = '$alamat' WHERE id = '$id'";
            $qq = $conn->query($ss);

            if($qq) {
                alert('Berhasil');
                redir('../');
            } else {
                alert('Gagal');
                
            }
        }
    ?>
    
</body>
</html>