<?php
require "function.php";
$database  = new buku();
$database->raw();
if(isset($_GET['edit'])){
    $key = $_GET['edit'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
</head>
<body>
    <form action="" method="post">
        <h1>Form isian data buku</h1>
        <?php if(!empty($pesan)):?>
            <p style="color: green;"><?= $pesan; ?></p>
        <?php endif; ?>
        <label for="nama" >Nama     : </label>
        <input type="text" name="nama" id="nama" value="<?= $_SESSION["buku"][$key]["nama"]?>"><br>
        
        <label for="penulis" >Penulis   : </label>
        <input type="text" name="penulis" id="penulis" value="<?= $_SESSION["buku"][$key]["penulis"]?>" ><br>
        
        <label for="genre" >Genre   : </label>
        <input type="text" name="genre" id="genre" value="<?= $_SESSION["buku"][$key]["genre"]?>"><br>
        
        <label for="tebal" >Tebal   : </label>
        <input type="text" name="tebal" id="tebal" value="<?= $_SESSION["buku"][$key]["tebal"]?>"><br>
        
        <label for="tahun" >Tahun   : </label>
        <input type="text" name="tahun" id="tahun" value="<?= $_SESSION["buku"][$key]["tahun"]?>"><br>
        <button type="submit" name="submit">Masukkan data!</button>
        <?= $pesan; ?>
        <?php 
        if(isset($_POST["submit"])){
            $database->update($key, $_POST);
            header("location: database.php");
        }
            ?>
    </form>
</body>
</html>