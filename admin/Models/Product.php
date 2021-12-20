<?php 
class Product extends Database {
   
    public $row;
    public $result;
    public $db_table='product';
    public $user_result;

    //get all
    public  function get_all(){
        
        $this->result=$this->mysqli->query("SELECT * FROM product
        INNER JOIN product_category ON product.product_category_id=product_category.product_category_id");

        return $this->result;
       
      }
      // find by id

      public function findbyid($id){

        $this->result=$this->mysqli->query("SELECT * FROM ".$this->db_table." Where product_id= $id" );

        return $this->result;


      }
        // find cate_name by id


      //create
     
       public function create($product_title,$uploadfile,$create_time,$product_short_description,$product_description,$product_category_id){
        // echo $uploadfile;

         $imagepath=$this->mysqli->real_escape_string($uploadfile);

         $this->result=$this->mysqli->query("INSERT INTO  " .$this->db_table. " (product_title,product_image,create_time,product_short_description,product_description,product_category_id) VALUES('{$product_title}','{$imagepath}','{$create_time}','{$product_short_description}','{$product_description}','{$product_category_id}')" );
        if(!$this->result){
          echo 'query  failed';
        }
        }

        // update

        public function update($product_title,$uploadfile,$create_time,$product_short_description,$product_description,$product_category_id,$id){
           $imagepath=$this->mysqli->real_escape_string($uploadfile);


          $this->result=$this->mysqli->query("UPDATE ".$this->db_table." SET product_title='{$product_title}',product_image='{$imagepath}', create_time='{$create_time}',product_short_description='{$product_short_description}',product_description='{$product_description}',product_category_id='{$product_category_id}' WHERE product_id=$id;" );
          if($this->result){
            echo 'Updated Successfully';
          }else{
            echo 'query failed';
          }
  
          }

        
      // delete by id
      public function delete($id){
        $this->result=$this->mysqli->query("DELETE FROM ".$this->db_table." Where product_id= $id" );
        if($this->result){
          echo 'Removed Successfully';
        }

      }

    
      
     


    
}


?>