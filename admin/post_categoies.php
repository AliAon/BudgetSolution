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

                           <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                
                                <th scope="col">Category Title</th>
                                <th scope="col">Post Count</th>
                        
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php 
                           
                           $Category=new Categories();
                           $result=$Category->get_all();
                           while($row=$result->fetch_object()){
                            ?>
                           
                                <tr>
                                
                                <td><?php echo $row->name?></td>
                                <td></td>
                                <td>
                                <a href="add_category.php?id=<?php echo $row->category_id?>">
           <button class="btn btn-outline-danager" type="submit" id="button-addon4">Edit</button></a> 
           <a href="delete_category.php?id=<?php echo $row->category_id?>">
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
