<?php

$name = $_POST['name'];
$email2 = $_POST['email2'];
$pass2 = md5($_POST['pass2']);

if( ! filter_var($email2, FILTER_VALIDATE_EMAIL)) die('Invalid email');

if(file_exists('../users.db')){
    $users = unserialize(file_get_contents('../users.db'));
    $users[$email2] = $pass2;
    $users = serialize($users);
    file_put_contents('../users.db', $users);
}else{
    $users = [$email2 => $pass2];
    $users = serialize($users);
    file_put_contents('../users.db', $users);
};

session_start();
$_SESSION['email2'] = $email2;
header('Location: ../a.php');

?>