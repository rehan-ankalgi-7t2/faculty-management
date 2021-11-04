<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home page of website</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- <nav>
        <div>
            <img src="logo.png" alt="">
        </div>
    </nav> -->
    <main>
        <h1>Admin login form</h1>
        <div class="admin__form">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="admin-email" placeholder="example@mail.com">
                <input type="password" name="admin-login-pwd" placeholder="login password">
                <button type="submit" name="admin-login-submit">login</button>
            </form>
            <a href="signup.php">signup</a>
        </div>
    </main>

    
</body>
</html>








