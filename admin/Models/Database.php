<?php 
class Database{
    //msql-connection

    public $mysqli;
  public function __construct() {
  
    $this->db_connection();
}

//conection registor


public function db_connection() {

  $this->mysqli= new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//  $this->mysqli= new mysqli('127.0.0.1:3308', 'root', '', 'fertilizer_solution');
 
}

//check connection
public function check_db_connection(){

    if ($this->mysqli->connect_error) {
        /* Use your preferred error logging method here */
        echo ('Connection error: ' . $this->mysqli->connect_error);
    }
  
}


  
    
}

new database();




?>