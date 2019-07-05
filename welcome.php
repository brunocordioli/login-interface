<!--
 Projected and made by Bruno Cordioli Machado
 Please access my website "brunocordioli.tk" to know more about me!
 --> 

<?php 
$user = $_GET['username'];
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php include('nav.php')?>
    <div class="wrapper">
        <div class="wrapped-div">
            <div class="response">
                <h1>Welcome <?php  echo "$user";?> =)</h1>
            </div>
        </div>
    </div>
</body>
</html>