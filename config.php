<?php

class db_conntection{
    //msql-connection

    public $mysqli;
    public $result;
  public function __construct() {
  
    $this->registor();
}

//conection registor


public function registor() {


  $this->mysqli= new mysqli('localhost', 'root', '', 'fertilizer_solution');
 
}

//check connection
public function checkcon_db(){

    if ($this->mysqli->connect_error) {
        /* Use your preferred error logging method here */
        echo ('Connection error: ' . $this->mysqli->connect_error);
    }
  
}


  
    
}

new db_conntection();




?>