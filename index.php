
<?php require_once 'admin/init.php';
      

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">

    <title>Budget Solution</title>
  </head>
  <body>
      <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Budget Solution</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About US</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
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
      <th scope="col">Action</th>
      

    </tr>
  </thead>
  <tbody>
  <div class="overflow-auto">

  <?php
  $budget=new Budget();
  $result=$budget->get_all();
  while($row=$result->fetch_object()){
   ?>
<tr>
     
      <td><?php echo $row->item?></td>
      <td><?php echo $row->quantity?></td>
      <td><?php echo $row->price?></td>  
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


<!-- 
footer -->
<div class="container-fluid bg-dark mt-5">
<div class="container ">
  <div class="row pt-5 pb-5">
    <div class="col-xl-4 pt-2 pb-2 text-white text-left">
     <h5>About Us</h5>
   <p>
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolores, fugiat accusantium rem nam vel voluptate iste alias aut perferendis? Facere inventore debitis omnis quam blanditiis explicabo ea reiciendis nemo.
   </p>
    </div>
    <div class="col-xl-5 pt-2 pb-2 text-white text-center ">
    <h5>Qucik Links </h5>
    <ul class="list-group bg-dark">
    <li class="list-group-item bg-dark">Home</li>
    <li class="list-group-item bg-dark">About</li>
    <li class="list-group-item bg-dark">Contact Us</li>

    </ul>
    </div>
    <div class="col-xl-3 pt-2 pb-2 text-white ">
    <h5>Reach Us</h5>   
    <ul class="list-group bg-dark">
    <li class="list-group-item bg-dark pl-0">info@example.com</li>
    <li class="list-group-item bg-dark pl-0">+92105-774-747</li>
    <li class="list-group-item bg-dark pl-0">Georgia,USA</li>

    </ul>
 </div>
  </div>
</div>
</div>
<!-- end-footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>