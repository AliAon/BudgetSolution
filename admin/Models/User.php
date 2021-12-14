<?php 
session_start();
class User extends Database {
   
    public $row;
    public $result;
    public $db_table='user';
    public $user_result;

    //get all
    public  function get_all(){
        $this->result=$this->mysqli->query("SELECT * FROM ".$this->db_table);

        return $this->result;
       
      }
      // find by id

      public function findbyid($id){

        $this->result=$this->mysqli->query("SELECT * FROM ".$this->db_table." Where user_id= $id" );

        return $this->result;


      }

      //create

       public function create($username,$user_email,$user_pass,$uploadfile){
         echo $uploadfile;
         $imagepath=$this->mysqli->real_escape_string($uploadfile);

         $this->result=$this->mysqli->query("INSERT INTO  " .$this->db_table. " (username,user_image,user_email,user_password) VALUES('{$username}','{$imagepath}','{$user_email}','{$user_pass}')" );
        if(!$this->result){
          echo 'query  failed';
        }
        }

        // update

        public function update($username,$email,$password,$uploadfile,$id){

          $imagepath=$this->mysqli->real_escape_string($uploadfile);


          $this->result=$this->mysqli->query("UPDATE ".$this->db_table." SET username='{$username}', user_image='{$imagepath}',user_email='{$email}',user_password='{$password}' WHERE user_id=$id;" );
          if($this->result){
            echo 'Updated Successfully';
          }else{
            echo 'query failed';
          }
  
          }

        
      // delete by id
      public function delete($id){
        $this->result=$this->mysqli->query("DELETE FROM ".$this->db_table." Where user_id= $id" );
        if($this->result){
          echo 'Removed Successfully';
        }

      }
      //login

      public function login($user_email,$user_pass){
   

        $this->result=$this->mysqli->query("SELECT * FROM ".$this->db_table." Where user_email='{$user_email}'" );
        $row=$this->result->fetch_object();
        // echo $row->user_password;
        
        // echo $user_pass;
        if($row->user_email==$user_email && $row->user_password==$user_pass){
          $_SESSION['user_id']=$row->user_id;
          header('Location:index.php');
     //    
        }else{
          header('Location:login.php');
        }
      }
      
      public function logout($id){
        $this->result=$this->mysqli->query("DELETE FROM ".$this->db_table." Where user_id= $id" );
        

      }
      


    
}


?>