<!--
 Projected and made by Bruno Cordioli Machado
 Please access my website "brunocordioli.tk" to know more about me!
 --> 

<?php
    $username = $_GET['username'];
    $email    = $_GET['email'];
    
    include("model/User.class.php");
    $user = new User();
    $table = $user->get_table();
    $sql = "SELECT id, name, email, username, password, status from $table";
    $con = $user->get_connection();
    $result = $con-> query($sql);

    if ($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            $row1 = "id";
            $row2 = "name";
            $row3 = "email";
            $row4 = "username";
            $row5 = "password";
            if ($row[$row4] == $username && $row[$row3] == $email){
                $valueEmail    = $row[$row3];
                $valueUsername = $row[$row4];
                $valuePassword = $row[$row5];
                $id = $row[$row1];
                $name = $row[$row2];
            }
        }       
    }
    $con-> close();
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
    <div class="wrapper">
        <div class="wrapped-div">
            <form method="post" action="forgot_password_3.php?id=<?php echo "$id&name=$name"?>">
                <div class="div-voltar">
                    <a class="voltar" href="list_user.php?username=<?php echo "$User" ?>">Voltar</a><br><br> <br>
                </div>
               <label for="email"><p class="text">Email:</p>
                    <input type="text" name="email" value="<?php echo "$valueEmail"?>"> 
                </label>
                <label for="username"><p class="text">Username:</p>
                    <input type="text" name="username" value="<?php echo "$valueUsername"?>">
                </label>
                <label for="password"><p class="text">Password:</p>
                    <input type="text" name="password" value="">
                </label>
                <button type="submit">Submit</button> <br> <br>
                <p class="response"><?php include_once("template/response.php")?></p>
            </form>
        </div>
    </div>
</body>
</html>

