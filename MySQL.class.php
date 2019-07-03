<?php

class MySQL {

    public function __construct(){
        $host = "localhost"; 
        $user = "root";
        $pass = "gtt123";
        $db   = "curso-db";

        $connection = mysqli_connect("localhost", "root", "gtt123", "curso-db");
    }
}