<?php require_once 'crud.php';?>

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
  <a class="navbar-brand" href="#">Budget Solution</a>
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

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $crud=new crud();
  // $crud->checkcon_db();
  $crud->get_all();
  while($row=$crud->result->fetch_assoc()){
   ?>
<tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['item']?></td>
      <td><?php echo $row['quantity']?></td>
      <td><?php echo $row['price']?></td>
    </tr>
 <?php
   }
 ?>
    
  </tbody>
</table>

<!-- end table -->
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