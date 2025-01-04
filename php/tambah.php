<?php
require "function.php";
$database  = new buku();
$database->tambah();
// $database->raw();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tambah.css">
    <title>Perpustakaan</title>
</head>

<body>
    <form action="" method="post">
        <h1>Form isian data buku</h1>
        <?php if(!empty($pesan)):?>
            <p style="color: green;"><?= $pesan; ?></p>
        <?php endif; ?>
        <label for="nama" >Nama     : </label><br>
        <input type="text" name="nama" id="nama"><br>
        
        <label for="penulis" >Penulis   : </label><br>
        <input type="text" name="penulis" id="penulis "><br>
        
        <label for="genre" >Genre   : </label><br>
        <input type="text" name="genre" id="genre"><br>
        
        <label for="tebal" >Tebal   : </label><br>
        <input type="text" name="tebal" id="tebal" ><br>
        
        <label for="tahun" >Tahun   : </label><br>
        <input type="text" name="tahun" id="tahun" ><br>
        <button type="submit" name="submit">Masukkan data!</button>
        <?php if(isset($_POST["submit"])){
            header("location: database.php");
        }
            ?>
    </form>
</body>
</html>