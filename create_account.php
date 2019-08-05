<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My App</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>  
<body>
    <div id="add-content">
        <div class="wrapper">
            <div class="wrapped-div">
                <div class="div-voltar">
                    <a class="voltar" href="index.php">Voltar</a><br><br> <br>
                </div>
                <form method="post" action="create_account_2.php">
                    <label for="name"><p class="text">Nome:</p>
                        <input type="text" name="name"> <br>
                    </label>
                    <label for="email"><p class="text">Email:</p>
                        <input type="text" name="email"> <br>
                    </label>
                    <label for="username"><p class="text">Username:</p>
                        <input type="text" name="username"> <br>
                    </label>
                    <label for="password"><p class="text">Password:</p>
                        <input type="password" name="password"> <br> <br>
                    </label>
                    <button type="submit">Submit</button> <br> <br>
                    <p class="response">
                        <?php 
                        include_once("pattern/response.php")
                        ?>   
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

