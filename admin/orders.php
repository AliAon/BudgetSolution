<?php include('includes/header.php')?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Orders 
                            <small>Dashboard</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Orders 
                            </li>
                        </ol>
                        <h2 class="page-header">
                              
                        </h2>
                           <!-- Page Content -->

                           <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                
                                <th scope="col">Order Id</th>
                                <th scope="col">Customer ID</th>
                                <th scope="col">Cart Items</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php 
                           
                           $Orders=new Orders();
                           $result=$Orders->get_all();
                           while($row=$result->fetch_object()){
                            ?>
                           
                                <tr>
                                
                                <td><?php echo $row->order_id?></td>
                                <td><?php echo $row->customer_id ?></td>
                                <td><?php echo $row->cart_item_id  ?></td>
                                <td>
                               
           <a href="delete_comment.php?id=<?php echo $row->order_id?>">
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
