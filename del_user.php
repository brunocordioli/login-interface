<!--
 Projected and made by Bruno Cordioli Machado
 Please access my website "brunocordioli.tk" to know more about me!
 --> 

<?php
include("model/User.class.php");
include_once('template/nav.php');
$id = $_GET['id'];

$user = new User();
$user->del_user($id);

header("Location: list_user.php?msg=$msg&username=$User");

