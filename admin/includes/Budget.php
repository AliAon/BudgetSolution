<?php 
require_once 'database.php';
class Budget extends database {
   
    public $row;
    public $result;
     

    //get all
    public  function get_all(){
        $this->result=$this->mysqli->query("SELECT * FROM  fertilizer");

        return $this->result;
       
      }
      // find by id

      public function findbyid($id){

        $this->result=$this->mysqli->query("SELECT * FROM  fertilizer Where id= $id" );

        return $this->result;


      }

      //create

       public function create($item,$quantity,$price){
        $this->result=$this->mysqli->query("INSERT INTO fertilizer (item,quantity,price) VALUES('{$item}','{$quantity}','{$price}')" );
        if(!$this->result){
          echo 'query Successfully failed';
        }
        }

        // update

        public function update($item,$quantity,$price,$id){
          $this->result=$this->mysqli->query("UPDATE fertilizer SET item='{$item}', quantity='{$quantity}',price='{$price}' WHERE id=$id;" );
          if($this->result){
            echo 'Updated Successfully';
          }else{
            echo 'query failed';
          }
  
          }

        
      // delete by id
      public function delete($id){
        $this->result=$this->mysqli->query("DELETE FROM  fertilizer Where id= $id" );
        if($this->result){
          echo 'Removed Successfully';
        }

      }


    
}


?>