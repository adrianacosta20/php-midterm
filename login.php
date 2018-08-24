<?php 
    session_start();
    if(count($_SESSION)) header("Location: a.php");
    $error = isset($_GET['error']);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>

    <style>
        #error {
            color: red;
            font-family: Arial;
        }
    </style>
</head>
<body>
    <h1>Login</h1>

    <?php if($error) { ?>
        <p id="error">Your email or password is wrong</p>
    <?php } ?>

    <form action="controllers/loginSubmit.php" method="post">
        <input type="text" name="email" placeholder="Type your email" required />
        <input type="password" name="pass" placeholder="Type your password" required/>
        <input type="submit" value="Login"/>
    </form>
    <form action="register.php" method="post">
        <input type="submit" value="Register"/>
    </form>
</body>
</html>