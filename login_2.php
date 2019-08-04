<!--
 Projected and made by Bruno Cordioli Machado
 Please access my website "brunocordioli.tk" to know more about me!
 --> 

<?php

include("User.class.php");

$username = $_GET['username'];
$password = $_GET['password'];

$user = new User();
$msg = $user->get_user($username, $password);
    echo "$msg";
    if ($msg == "Found") {
        header("Location: welcome.php?username=$username");
    } else {
        $msg = "Not Found";
        header("Location: index.php?msg=$msg");
    }
               
?>