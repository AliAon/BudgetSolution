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

                           <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                
                                <th scope="col">Image</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php 
                           
                           $user=new User();
                           $result=$user->get_all();
                           while($row=$result->fetch_object()){
                            ?>
                           
                                <tr>
                                
                                <td><img src="<?php echo $row->user_image?>" alt="" width="100px" class="img-thumbnail"></td>
                                <td><?php echo $row->username?></td>
                                <td><?php echo $row->user_email ?></td>
                                <td>
                                <a href="add_user.php?id=<?php echo $row->user_id?>">
           <button class="btn btn-outline-danager" type="submit" id="button-addon4">Edit</button></a> 
           <a href="delete_user.php?id=<?php echo $row->user_id?>">
           <button class="btn btn-outline-danager" type="submit" id="button-addon4">Delete</button></a>
                </td>
                                </tr>


                                <tr>
                                     <?php
   }
 ?>
                              
                                
                            </tbody>
                            </table>

                         

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
