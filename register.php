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
    <title>Resgister page</title>

    <style>
        #error {
            color: red;
            font-family: Arial;
        }
    </style>
</head>
<body>
    <h1>Register</h1>

    <!-- <?php if($error) { ?>
        <p id="error">Your email or password is wrong</p>
    <?php } ?> -->

    <form action="controllers/registerSubmit.php" method="post">
        <input type="text" name="name" placeholder="Type your name" required />
        <input type="text" name="email2" placeholder="Type your email" required />
        <input type="password" name="pass2" placeholder="Type your password" required/>
        <input type="submit" value="Login"/>
    </form>
</body>
</html>