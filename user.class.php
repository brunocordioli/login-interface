<?php

class User{
    private $id;
    private $status;
    private $name;
    private $email;
    private $username;
    private $password;


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
}

