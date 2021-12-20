<?php include('includes/header.php')?>


          

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Products 
                            <small>Dashboard</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Products 
                            </li>
                        </ol>
                        <h2 class="page-header">
                        <a href="add_product.php">
                        <button class="btn btn-outline-danager" type="submit" id="button-addon4">Add New Product</button>
    </a>                    
                        </h2>
                           <!-- Page Content -->

                           <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                
                                <th scope="col">Product ID</th>
                                <th scope="col">Product Title</th>
                                <th scope="col">Featured Image</th>
                                <th scope="col">Date</th>
                                <th scope="col">Category ID</th>
                                <th scope="col">Short Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                        $product=new Product();
                        $result=$product->get_all();
                      
                        while($row=$result->fetch_object()){
                        
                            ?>
                           
                                <tr>
                                
                                 <td><?php echo $row->product_id?></td>
                                <td><?php echo $row->product_title ?></td>
                                
                                <td><img src="<?php echo $row->product_image?>" alt="" width="100px" class="img-thumbnail"></td>
                            
                               
                                <td><?php echo $row->create_time ?></td>
                                <td><?php echo$row->product_category_name ?></td>
                                <td><?php echo$row->product_short_description ?></td>
                                <td>
                                <a href="add_product.php?id=<?php echo $row->product_id?>">
           <button class="btn btn-outline-danager" type="submit" id="button-addon4">Edit</button></a> 
           <a href="delete_product.php?id=<?php echo $row->product_id?>">
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
