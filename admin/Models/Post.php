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

        $this->result=$this->mysqli->query("SELECT * FROM ".$this->db_table." Where post_id= $id" );

        return $this->result;


      }
        // find cate_name by id


      //create

       public function create($post_title,$create_time,$category_id,$post_content,$uploadfile){
        // echo $uploadfile;

        $user_id=$_SESSION['user_id'];

         $imagepath=$this->mysqli->real_escape_string($uploadfile);

         $this->result=$this->mysqli->query("INSERT INTO  " .$this->db_table. " (post_title,featured_image,post_content,create_time,user_id,category_id  ) VALUES('{$post_title}','{$imagepath}','{$post_content}','{$create_time}','{$user_id}','{$category_id}')" );
        if(!$this->result){
          echo 'query  failed';
        }
        }

        // update

        public function update($post_title,$create_time,$category_id,$post_content,$id,$uploadfile){
           $imagepath=$this->mysqli->real_escape_string($uploadfile);


          $this->result=$this->mysqli->query("UPDATE ".$this->db_table." SET post_title='{$post_title}',featured_image='{$imagepath}', create_time='{$create_time}',category_id='{$category_id}',post_content='{$post_content}' WHERE post_id=$id;" );
          if($this->result){
            echo 'Updated Successfully';
          }else{
            echo 'query failed';
          }
  
          }

        
      // delete by id
      public function delete($id){
        $this->result=$this->mysqli->query("DELETE FROM ".$this->db_table." Where post_id= $id" );
        if($this->result){
          echo 'Removed Successfully';
        }

      }
      //login

    
      
     


    
}


?>