<?php 
include('config.php');


class database{
    //msql-connection

    public $mysqli;
    public $result;
  public function __construct() {
  
    $this->registor();
}

//conection registor


public function registor() {

  $this->mysqli= new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//  $this->mysqli= new mysqli('127.0.0.1:3308', 'root', '', 'fertilizer_solution');
 
}

//check connection
public function checkcon_db(){

    if ($this->mysqli->connect_error) {
        /* Use your preferred error logging method here */
        echo ('Connection error: ' . $this->mysqli->connect_error);
    }
  
}


  
    
}

new database();




?>