<!--
 Projected and made by Bruno Cordioli Machado
 Please access my website "brunocordioli.tk" to know more about me!
 --> 

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
    <div class="content">
        <div class="wrapper">
            <div class="wrapped-div">
                <form method="get" action="login_2.php">
                    <h1 id="sign-in">Sign In</h1>
                    <label for="username"><p class="text">Username:</p> 
                        <input id="input" type="text" name="username"> <br>
                    </label>
                    <label for="password"><p class="text">Password:</p> 
                        <input type="password" name="password"> <br> <br>
                    </label>
                    <button type="submit">Sign In</button> <br> <br>
                    <p id="response"><?php $msg = $_GET['msg']; echo $msg;?></p>
                </form>
            </div>
        </div>
    </div>
    <script src="myscript.js"></script>
</body>
</html>