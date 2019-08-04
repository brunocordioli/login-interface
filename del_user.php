<!--
 Projected and made by Bruno Cordioli Machado
 Please access my website "brunocordioli.tk" to know more about me!
 --> 

<?php
include("User.class.php");

$id = $_GET['id'];

$user = new User();
$user->del_user($id);

header("Location: list_user.php?msg=$msg");

