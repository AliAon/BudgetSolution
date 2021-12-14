<?php 
class Post extends Database {
   
    public $row;
    public $result;
    public $db_table='posts';
    public $user_result;

    //get all
    public  function get_all(){
        
        $this->result=$this->mysqli->query("SELECT * FROM posts
        INNER JOIN category ON posts.category_id=category.category_id INNER JOIN user ON posts.user_id=user.user_id");

        return $this->result;
       
      }
      // find by id

      public function findbyid($id){

        $this->result=$this->mysqli->query("SELECT * FROM ".$this->db_table." Where user_id= $id" );

        return $this->result;


      }
        // find cate_name by id


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

    
      
     


    
}


?>