<?php
    // var_dump($result);
    // if(!$result){
    //     echo mysqli_error($conn);
    // }

    // ambil data siswa dari object result (fetch) ada 4 cara
    // 1. mysqli_fetch_row() -> array numeric [0], [1], etc.
    // 2. mysqli_fetch_assoc() -> array assosiatif [id], [nama], etc.
    // 3. mysqli_fetch_array() -> mengeluarkan 2 tipe array, numeric & assosiatif
    // 4. mysqli_fetch_object() -> seperti yang 2 tapi object, manggilnya pake '->'
    // $si = mysqli_fetch_object($result);
    // var_dump($si)

    // while($si = mysqli_fetch_assoc($result)){
    //     var_dump($si);
    // }

    require 'function.php';

    $siswi = query("SELECT * FROM siswi");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswi</h1>

    <a href="tambahdata.php">Tambah Data Siswi</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nis</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>

        <?php $i=1 ?>
        <?php  foreach($siswi as $row) : ?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["nama"] ?></td>
            <td><?php echo $row["nis"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
            <td><img src="img/<?=$row["gambar"] ?>" alt="" width="100"></td>
            <td>
                <a href="">Ubah</a>
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin dihapus?')";>Hapus</a>
            </td>
        </tr>

        <?php $i++ ?>
        <?php endforeach ?>
    </table>
</body>
</html>