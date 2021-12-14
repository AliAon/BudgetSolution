<?php include('includes/header.php')?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Users 
                            <small>Dashboard</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Users 
                            </li>
                        </ol>
                        <h2 class="page-header">
                        <a href="add_user.php">
                        <button class="btn btn-outline-danager" type="submit" id="button-addon4">Add New User</button>
    </a>                    
                        </h2>
                           <!-- Page Content -->
                           
<?php 

if(isset($_GET['id'])){
  $id=$_GET['id'];
  $User=new User();
  $result=$User->findbyid($id);
  $row=$result->fetch_object();
} ?>


         <form action='upload.php'  method="post" enctype="multipart/form-data"> 
                      <div class="form-group">
                      <input type="hidden" aria-label="Item" name="id" placeholder="Item Name" value='<?php if(isset($row)){echo $row->user_id;}?>' class="form-control">
                     <label for="exampleInputEmail1">Username</label>
                      <input type="text" name="user_name" class="form-control" value='<?php if(isset($row)){echo $row->username;}?>' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                 <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                 </div>
         
  <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file" name="user_image" id="exampleFormControlFile1">
  </div>

      <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="user_email" value='<?php if(isset($row)){echo $row->user_email;}?>' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name="user_pass" value='<?php if(isset($row)){echo $row->user_password;}?>'  id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Add</button>
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
