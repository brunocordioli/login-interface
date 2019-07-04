<!DOCTYPE html>
<?php
    $id = $_GET['id'];
    $con = mysqli_connect("localhost", "root", "gtt123", "curso-db");
    $sql = "SELECT id, name, email, username, password, status from finalproject";
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
<html lang="pt-bet">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper">
        <div class="wrapped-div">
            <form method="post" action="edit_user_2.php?id=<?php echo "$id"?>">
                <a id="voltar" href="list_user.php">Voltar</a><br><br> <br>
                <label for="name">Nome: <br>
                    <input type="text" name="name" value="<?php echo "$valueName"?>"> <br>
                </label>
                <label for="email">Email: <br>
                    <input type="text" name="email" value="<?php echo "$valueEmail"?>"> <br>
                </label>
                <label for="username">Username: <br>
                    <input type="text" name="username" value="<?php echo "$valueUsername"?>"> <br>
                </label>
                <label for="password">Password: <br>
                    <input type="password" name="password" value="<?php echo "$valuePassword"?>"> <br> <br>
                </label>
                <button type="submit">Submit</button> <br> <br>
                <p style="margin-right: 1.5vw;"><?php $msg = $_GET['msg']; echo $msg;?></p>
            </form>
        </div>
    </div>
</body>
</html>

