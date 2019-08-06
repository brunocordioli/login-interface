<!--
 Projected and made by Bruno Cordioli Machado
 Please access my website "brunocordioli.tk" to know more about me!
 --> 
<?php include('pattern/nav.php')?>
<?php
    $id = $_GET['id'];
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
            if ($row[$row1] == $id){
                $valueName     = $row[$row2];
                $valueEmail    = $row[$row3];
                $valueUsername = $row[$row4];
                $valuePassword = $row[$row5];
            }
        }       
    }
    $con-> close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<body>
    <div class="wrapper">
        <div class="wrapped-div">
            <form method="post" action="edit_user_2.php?id=<?php echo "$id&username=$User"?>">
                <div class="div-voltar">
                    <a class="voltar" href="list_user.php?username=<?php echo "$User" ?>">Voltar</a><br><br> <br>
                </div>
                <label for="name"><p class="text">Nome:</p> 
                    <input type="text" name="name" value="<?php echo "$valueName"?>">
                </label>
                <label for="email"><p class="text">Email:</p>
                    <input type="text" name="email" value="<?php echo "$valueEmail"?>"> 
                </label>
                <label for="username"><p class="text">Username:</p>
                    <input type="text" name="username" value="<?php echo "$valueUsername"?>">
                </label>
                <label for="password"><p class="text">Password:</p>
                    <input type="text" name="password" value="<?php echo "$valuePassword"?>">
                </label>
                <button type="submit">Submit</button> <br> <br>
                <p class="response"><?php include_once("pattern/response.php")?></p>
            </form>
        </div>
    </div>
</body>
</html>

