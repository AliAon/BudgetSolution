<?php 
class Comments extends Database {
   
    public $row;
    public $result;
    public $db_table='cmmments';
    public $user_result;

    //get all
    public  function get_all(){
        
        
        $this->result=$this->mysqli->query("SELECT * FROM cmmments
        INNER JOIN posts ON cmmments.cmmment_post_id =posts.post_id");

        return $this->result;
       
      }

       // find by post_id
       public function findbyid($id){

        $this->result=$this->mysqli->query("SELECT * FROM ".$this->db_table." Where post_id= $id" );

        return $this->result;


      }

      // delete by id
      public function delete($id){
        $this->result=$this->mysqli->query("DELETE FROM ".$this->db_table." Where cmmment_id= $id" );
        if($this->result){
          echo 'Removed Successfully';
        }

      }
      //login

    
      
     


    
}


?>