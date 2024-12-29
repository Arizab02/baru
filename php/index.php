<?php
// Sistem Managemen Perpustakaan 
session_start();

if (isset($_SESSION['username'])){
    return header( 'location: index.php' );
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
    <section>
        <div class="login">
            <form action="login.php" method="POST">
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <button type="submit" name="login">Login</button>
            </form>
        </div>
    </section>
</body>
</html>