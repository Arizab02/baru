<?php 
require "function.php";
$login = new login;
$login->register();
$login->raw();
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<section>
        <div class="login">
            <form action="" method="post">
                <h1>Sign-in</h1>
                    <div class="input">
                        <input type="text" name="username" placeholder="username">
                        <input type="password" name="password" placeholder="password">
                        <button type="submit" name="register">Register</button>
                        <?php if(isset($_POST['register'])){
                            header("Location:login.php");
                        } ?>
                    </div>
                <p>Already have an account?<a href="login.php">Login</a></p>
            </form>
        </div>
    </section>
</body>
</html>