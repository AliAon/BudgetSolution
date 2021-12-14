<?php include('includes/header.php')?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Categories 
                            <small>Dashboard</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Categories 
                            </li>
                        </ol>
                        <h2 class="page-header">
                        <a href="add_category.php">
                        <button class="btn btn-outline-danager" type="submit" id="button-addon4">Add New Category</button>
    </a>                    
                        </h2>
                           <!-- Page Content -->
                           
<?php 

if(isset($_GET['id'])){
  $id=$_GET['id'];
  $Category=new Categories();
   $result=$Category->findbyid($id);
   $row=$result->fetch_object();
} ?>


         <form action='upload_category.php'  method="post" enctype="multipart/form-data"> 
         <input type="hidden" aria-label="Item" name="id" placeholder="Item Name" value='<?php if(isset($row)){echo $row->category_id;}?>' class="form-control">

                      <div class="form-group">
                      <label for="exampleInputTitle">Category Title</label>
                      <input type="text" name="name" class="form-control" value='<?php if(isset($row)){echo $row->name;}?> ' id="exampleInputTitle" aria-describedby="emailHelp" placeholder="Enter Title">
                  </div>
         
 

  
  <button type="submit" class="btn btn-primary" name="submit">Add Category</button>
</form>

                         

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
