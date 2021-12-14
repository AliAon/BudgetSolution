<?php 
class Categories extends Database {
   
    public $row;
    public $result;
    public $db_table='category';
    public $user_result;

    //get all
    public  function get_all(){
        
        $this->result=$this->mysqli->query("SELECT * FROM ".$this->db_table);
        return $this->result;
       
      }
      // find by id

      public function findbyid($id){

        $this->result=$this->mysqli->query("SELECT * FROM ".$this->db_table." Where category_id= $id" );

        return $this->result;


      }
        // find cate_name by id


      //create

       public function create($name){

         $this->result=$this->mysqli->query("INSERT INTO  " .$this->db_table. " (name) VALUES('{$name}')" );
        if(!$this->result){
          echo 'query  failed';
        }
        }

        // update

        public function update($name,$id){

         
          $this->result=$this->mysqli->query("UPDATE ".$this->db_table." SET name='{$name}' WHERE category_id=$id;" );
          if($this->result){
            echo 'Updated Successfully';
          }else{
            echo 'query failed';
          }
  
          }

        
      // delete by id
      public function delete($id){
        $this->result=$this->mysqli->query("DELETE FROM ".$this->db_table." Where category_id= $id" );
        if($this->result){
          echo 'Removed Successfully';
        }

      }

    
      
     


    
}


?>