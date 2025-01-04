<?php
require "function.php";
$login = new login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Perpustakaan</title>
</head>
<body>
    <section>
        <div class="login">
            <form action="login.php" method="POST">
                <h1>Login</h1>
                    <div class="input">
                        <input type="text" name="username" placeholder="username">
                        <input type="password" name="password" placeholder="password">
                        <button type="submit" name="login" role="status">Login</button>
                        <?php if(isset($_POST['login'])){
                            $login->login();
                        }?>
                    </div>
                <a href="?password=true">Do you forgot your password?</a>
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </form>
        </div>
    </section>
</body>
</html>