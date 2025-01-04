<?php
require "function.php";
$database = new buku;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Database</title>
</head>
<body>
    <!-- Menampilkan data buku -->
    <h1>Tabel Data Buku  Perpustakaan</h1>
    <a href="tambah.php">Tambah data</a>
    <?php $database->hapus(); ?>
    <table class="blueTable">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Penulis</th>
                <th>Genre</th>
                <th>Tebal</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
    </thead>
        <?PHP if(!empty($_SESSION["buku"])): ?>
        <?php foreach($_SESSION['buku'] as $key => $value): ?>
        <tr>
            <td><?= $value['nama']?></td>
            <td><?= $value['penulis']?></td>
            <td><?= $value['genre']?></td>
            <td><?= $value['tebal']?></td>
            <td><?= $value['tahun']?></td>
            <td><a class="edit" href='edit.php?edit=<?=$key?>'>EDIT</a> <a class="hapus" href='?hapus=<?=$key?>' onclick="return confirm('Anda yakin ingin menghapus data ini?')">HAPUS</a></td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>

    </table>

</body>
</html>