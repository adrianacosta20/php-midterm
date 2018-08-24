<?php
    // get values from the url
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);

    $users = unserialize(file_get_contents('../users.db')); 
    // print_r($users);
    // exit;
    // validate user values
    if( ! filter_var($email, FILTER_VALIDATE_EMAIL)) die('Invalid email');

    // check if email/pass are valid
    if($users[$email] == $pass)
    {
        // pull user info from the file
        // $session = ['name'=>'', 'email'=>$email, 'class'=>''];
        // if(file_exists('users.db')) {
        //     $session = unserialize(file_get_contents('users.db'));
        // }

        // start the session
        session_start();
        $_SESSION = $session;

        // send to home
        header("Location: ../a.php");
    } else {
        // send back with error
        header('Location: ../login.php');
    }
?>
