<?php include('includes/header.php')?>

<!-- end header -->
<div class="container ">
<h2 class='mt-5 mb-5 text-center'> Budget Solution </h2>
<!-- table start -->
<?php
// $budget=new Budget();
// $budget->update('khal',2,1200,10);
// $row=$result->fetch_assoc();
// echo $row['item'];
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Title</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Total</th>
      <th scope="col">Action</th>
      

    </tr>
  </thead>
  <tbody>
  <div class="overflow-auto">

  <?php
  $budget=new Budget();
  $result=$budget->get_all();
  
  while($row=$result->fetch_object()){
    $total=$row->quantity*$row->price;
   ?>
<tr>
     
      <td><?php echo $row->item?></td>
      <td><?php echo $row->quantity?></td>
      <td><?php echo $row->price?></td>  
      <td><?php echo  $total?></td>  
      <td class='text-center'>
                <div class="input-group mb-2" >
<a href="index.php?id=<?php echo $row->id?>">
           <button class="btn btn-outline-danager" type="submit" id="button-addon4">Edit</button></a> 
                </div>
            
          
                <div class="input-group" >
                <a href="admin/delete.php?id=<?php echo $row->id?>">
           <button class="btn btn-outline-danager" type="submit" id="button-addon4">Delete</button></a>
                </div>
             </td>
    </tr>
 <?php
 $total=0;
   }
 ?>
    </div>

  </tbody>
</table>
<!-- end table -->
<!--insert Budget -->
<?php
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $budget=new Budget();
  $result=$budget->findbyid($id);
  $row=$result->fetch_object(); 
}



?>
<form action="admin/add.php" method="post">
          <div class="input-group">
          <input type="hidden" aria-label="Item" name="id" placeholder="Item Name" value='<?php if(isset($row)){echo $row->id;}?>' class="form-control">

            <input type="text" aria-label="Item" name="item" placeholder="Item Name" value='<?php if(isset($row)){echo $row->item;}?>' class="form-control">
            <input type="number" aria-label="Price"  name="quantity" placeholder="Quantity" value='<?php if(isset($row)){ echo $row->quantity;}?>'class="form-control">
            <input type="number" aria-label="Total Price" name="price" placeholder="Price" value='<?php  if(isset($row)){ echo $row->price;}?>' class="form-control">
            <button class="btn btn-outline-secondary" type="submit" name="submit" id="button-addon2">Add Item</button>
        </div>
            </form>
<!-- end_insert -->
<!-- reset -->
<form action="" method="" name="reset">
                <div class="input-group pt-5" >
            <button class="btn btn-outline-secondary" type="submit" id="button-addon4">Reset</button>
                </div>
             </form>

<!-- end reset -->
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>