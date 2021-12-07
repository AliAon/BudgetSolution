<?php
require_once 'config.php';

class Budget extends db_conntection {
   
    public $row;
    //get all
    public function get_all(){
        $this->result=$this->mysqli->query("SELECT * FROM  fertilizer");
       
      }
    
}


?>