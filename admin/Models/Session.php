<?php 
class Session{
   public $signedin=false;
public function signedin(){

if($_SESSION['user_id']){
    return $signedin=true;
}


}

      


    
}


?>