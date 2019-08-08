<!--
 Projected and made by Bruno Cordioli Machado
 Please access my website "brunocordioli.tk" to know more about me!
 --> 
<?php 
$User = $_GET['username'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My App</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="nav-box">
        <div class="nav-boxed">
            <h1><a class="title-app" href="welcome.php?<?php echo "username=$User" ?>">MY APP</a></h1>
            <div id="list">
                <ul>
                    <li><a class="link" href="add_user.php?<?php echo "username=$User" ?>">ADD USER</a></li>
                    <li><a class="link" href="list_user.php?<?php echo "username=$User" ?>">LIST OF USERS</a></li>
                    <li><a class="link" href="index.php">LOGOUT</a></li>
                    <h3 style="display: inline-block">ACCOUNT: <?php echo"$User" ?></h3>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>