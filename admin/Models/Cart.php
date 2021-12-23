<?php 
class Cart extends Database {
   
    public $row;
    public $result;
    public $db_table='cart';
    public $user_result;

    //get all
    public  function get_all(){
        
        $this->result=$this->mysqli->query("SELECT * FROM cart INNER JOIN product ON cart.cart_product_id=product.product_id");
        return $this->result;
       
      }
      // find by id

      public function findbyid($id){

        $this->result=$this->mysqli->query("SELECT * FROM ".$this->db_table." Where cart_product_id= $id" );

        return $this->result;


      }
      public function findbyproductid($id){

        $this->result=$this->mysqli->query("SELECT * FROM cart INNER JOIN product ON cart.cart_product_id=product.product_id Where cart_item_id= $id" );

        return $this->result;
      }
        

      //create

       public function create($id,$cart_product_qty,$cart_item_price,$cart_item_subtotal,$cart_items_total)
       {

         $this->result=$this->mysqli->query("INSERT INTO  " .$this->db_table. " (cart_product_id,cart_product_qty,cart_item_price,cart_item_subtotal,cart_items_total) VALUES('{$id}','{$cart_product_qty}','{$cart_item_price}','{$cart_item_subtotal}','{$cart_items_total}')" );
        // if(!$this->result){
        //   echo 'query  failed';
        // }
        }

        // update

        public function update($key,$value,$cart_item_subtotal){

         $this->result=$this->mysqli->query("UPDATE ".$this->db_table." SET	cart_product_qty='{$value}',cart_item_subtotal='{$cart_item_subtotal}' WHERE cart_item_id=$key;" );        
         
        //  if($this->result){
        //     echo 'Updated Successfully';
        //   }else{
        //     echo 'query failed';
        //   }
  
          }

        
      // delete by id
      public function delete($id){
        $this->result=$this->mysqli->query("DELETE FROM ".$this->db_table." Where cart_item_id= $id" );
        // if($this->result){
        //   echo 'Removed Successfully';
        // }

      }

    
      
     


    
}


?>