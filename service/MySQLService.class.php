
<?php
    class MySQL {
  	
    private $connection;
    private $table;
	
    
     public function __construct() {
        
        $host  = "localhost";
        $user  = "root";
        $pass  = "gtt123";
        $db    = "db";
        $table = "phpdb";
        $this->set_table($table);
        
        $mysqli = new mysqli($host, $user, $pass, $db);
        $this->set_connection($mysqli);
        
        if ($mysqli->connect_errno) {
                printf("Conexão falhou: %s\n", $mysqli->connect_error);
                exit();
        }
		
    }	
    
    function get_table() {
        return $this->table;
    }

    function set_table($table) {
        $this->table = $table;
    }
	
    public function get_connection(){
        return $this->connection;
    }
    public function set_connection($connection){
        $this->connection = $connection;
    }
	
}
