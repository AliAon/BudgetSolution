<?php require_once 'database.php';

class Budget extends database {
   
    public $row;
    //get all
    public function get_all(){
        $this->result=$this->mysqli->query("SELECT * FROM  fertilizer");
       
      }
    
}


?>