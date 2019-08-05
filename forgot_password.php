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
            <form method="get" action="forgot_password_2.php">
                <div class="div-voltar">
                    <a class="voltar" href="index.php">Voltar</a><br><br> <br>
                </div>
                <h2>What's your username and email?</h2>
                <label for="username"><p class="text">Username:</p>
                    <input type="text" name="username" value=""> 
                </label>
                <label for="email"><p class="text">Email:</p>
                    <input type="email" name="email" value=""> 
                </label>
                <button type="submit">Submit</button> <br> <br>
        </div>
    </div>
</body>
</html>