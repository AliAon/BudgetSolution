<?php include('includes/header.php')?>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="Users.php">All User</a>
                            </li>
                            <li>
                                <a href="add_user.php">Add New User</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li class="active">
                        <a href="Users-page.html"><i class="fa fa-fw fa-file"></i> Users Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

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
                   echo var_dump($_SESSION);
                  ?>
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
