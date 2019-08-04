<!--
 Projected and made by Bruno Cordioli Machado
 Please access my website "brunocordioli.tk" to know more about me!
 --> 

<?php

    echo "<table>";
    include("User.class.php");
    $user = new User();
    $table = $user->get_table();
    $query = "SELECT id, name, email, username, status from $table";
    $con = $user->get_connection();
    $result = $con-> query($query);

    if ($result-> num_rows > 0){
        echo "<tr><td>". "ID" ."</td><td>". "NAME". "</td><td>". 
             "EMAIL"."</td><td>". "</td><td>". "USERNAME"."</td><td>";
        while($row = $result-> fetch_assoc()){
            $row1 = "id";
            $row2 = "name";
            $row3 = "email";
            $row4 = "username";
            if ($row['status'] != 'I'){
                echo "<tr><td>". $row[$row1] ."</td><td>". $row[$row2]. "</td><td>". 
                $row[$row3]."</td><td>". "</td><td>". $row[$row4]."</td><td>". "</td><td>".
                "<a href='edit_user.php?id=$row[$row1]'>Edit User</a>". "</td><td>".
                "<a href='del_user.php?id=$row[$row1]'>Apagar</a>". "</td></tr>";  
            }
        }
        echo "</table>";
    } else {
        echo "0 result";
    }
    $con-> close();
