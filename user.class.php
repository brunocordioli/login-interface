<?php

include("MySQL.class.php");

class User{
    
    
    private $id;
    private $status;
    private $name;
    private $email;
    private $username;
    private $password;
    
    private $connection;
    private $table;
    
    public function __construct() {
        $mysql = new MySQL();
        $this->set_connection($mysql->get_connection());
        $this->set_table($mysql->get_table());
    }	
    
    public function get_id(){
        return $this->id;
    }
    public function get_status(){
        return $this->status;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_email(){
        return $this->email;
    }
    public function get_username(){
        return $this->username;
    }
    public function get_password(){
        return $this->password;
    }
    public function get_connection(){
        return $this->connection;
    }
    public function get_table(){
        return $this->table;
    }

    public function set_id($id){
        return $this->id = $id;
    }
    public function set_status($status){
        return $this->status = $status;
    }
    public function set_name($name){
        return $this->name = $name;
    }
    public function set_email($email){
        return $this->email = $email;
    }
    public function set_username($username){
        return $this->username = $username;
    }
    public function set_password($password){
        return $this->password = $password;
    }
    
    public function set_connection($connection){
        return $this->connection = $connection;
    }
    public function set_table($table){
        return $this->table = $table;
    }
    
    public function add_user(){
        $table = $this->get_table();              
        $query = "INSERT INTO $table (name, email,username,password,status) VALUES ('$this->name','$this->email', '$this->username', '$this->password','$this->status');";          
        $con = $this->get_connection();
        if ($con->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $con->error;
        }
        $con->close();
        
        return "inserted";
    }
    public function get_user(string $username, string $password){
        $table = $this->get_table();
        $query = "SELECT username, password, status from $table";          
        $con = $this->get_connection();
        $result = $con->query($query);
        if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                $row3 = "status";
                $row4 = "username";
                $row5 = "password";
                if ($row[$row4] == $username && $row[$row5] == $password && $row[$row3] == "A"){
                    return "Found";
                } 
            }
        }
    }
    public function edit_user(string $user_id) {
        $table = $this->get_table();
        $query = "UPDATE $table set name='$this->name', email='$this->email', username='$this->username', password='$this->password', status='$this->status' where id = $user_id;";
        $con = $this->get_connection();
        if ($con->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $con->error;
        }
        $con->close();
        
        return "updated";
    }
    public function del_user(string $user_id){
        $table = $this->get_table();
        $query = "UPDATE `$table` SET status= 'I' WHERE `id` = $user_id";
        $con = $this->get_connection();
        if ($con->query($query) === TRUE) {
            return "not deleted";
        } else {
            return "deleted";
        }
    }
}

