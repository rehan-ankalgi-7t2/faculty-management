<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sign up page</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <h1>Sign up with your details</h1>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="full-name" placeholder="your name">
        <input type="text" name="admin-email" placeholder="example@mail.com">
        <input type="password" name="admin-signup-pwd" placeholder="password">
        <input type="password" name="admin-signup-pwd-confirm" placeholder="confirm your password">
        <button type="submit" name="admin-signup-submit">sign up</button>
    </form>
    <a href="index.php">login as admin</a>

    <script>
        var btn = document.querySelector('button');

        btn.addEventListener("click", () => {
            alert("signup successfull! now you can login as an admin");
        });    
    
    </script>
</body>
</html>