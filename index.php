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
            <form method="get" action="login_2.php">
                <label for="username">Username: <br>
                    <input type="text" name="username"> <br>
                </label>
                <label for="password">Password: <br>
                    <input type="password" name="password"> <br> <br>
                </label>
                <button type="submit">Enter</button> <br> <br>
                <p style="margin-right: 1.5vw;"><?php $msg = $_GET['msg']; echo $msg;?></p>
            </form>
        </div>
    </div>
</body>
</html>