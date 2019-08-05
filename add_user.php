<!--
 Projected and made by Bruno Cordioli Machado
 Please access my website "brunocordioli.tk" to know more about me!
 --> 

<!DOCTYPE html>
<html lang="pt-br">
<body>
    <?php include_once('pattern/nav.php')?>
    <div id="add-content">
        <div class="wrapper">
            <div class="wrapped-div">
                <form method="post" action="add_user_2.php">
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
