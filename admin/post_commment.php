<?php include('includes/header.php')?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Comments 
                            <small>Dashboard</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Comments 
                            </li>
                        </ol>
                        <h2 class="page-header">
                              
                        </h2>
                           <!-- Page Content -->

                           <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                
                                <th scope="col">Comment</th>
                                <th scope="col">Post Name</th>
                                <th scope="col">User Email</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php 
                           
                           $Comment=new Comments();
                           $result=$Comment->get_all();
                           while($row=$result->fetch_object()){
                            ?>
                           
                                <tr>
                                
                                <td><?php echo $row->comment_content?></td>
                                <td><?php echo $row->post_title  ?></td>
                                <td><?php echo $row->comment_user_email ?></td>
                                <td>
                               
           <a href="delete_comment.php?id=<?php echo $row->cmmment_id?>">
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
