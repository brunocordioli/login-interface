<!DOCTYPE html>
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
            <form method="post" action="add_user_2.php">
                <a id="voltar" href="index.php">Voltar</a><br><br> <br>
                <label for="name">Nome: <br>
                    <input type="text" name="name"> <br>
                </label>
                <label for="email">Email: <br>
                    <input type="text" name="email"> <br>
                </label>
                <label for="username">Username: <br>
                    <input type="text" name="username"> <br>
                </label>
                <label for="password">Password: <br>
                    <input type="password" name="password"> <br> <br>
                </label>
                <button type="submit">Submit</button> <br> <br>
                <p style="margin-right: 1.5vw;"><?php $msg = $_GET['msg']; echo $msg;?></p>
            </form>
        </div>
    </div>
</body>
</html>