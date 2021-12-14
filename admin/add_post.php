<?php include('includes/header.php')?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Posts 
                            <small>Dashboard</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Posts 
                            </li>
                        </ol>
                        <h2 class="page-header">
                        <a href="add_post.php">
                        <button class="btn btn-outline-danager" type="submit" id="button-addon4">Add New Post</button>
    </a>                    
                        </h2>
                           <!-- Page Content -->
                           
<?php 

if(isset($_GET['id'])){
  $id=$_GET['id'];
  $post=new Post();
  $result=$post->findbyid($id);
 $row_by_id=$result->fetch_object();
  
} 

 ?>




         <form action='upload_post.php'  method="post" enctype="multipart/form-data"> 
         <input type="hidden" aria-label="Item" name="id" placeholder="Item Name" value='<?php if(isset($row_by_id)){echo $row_by_id->post_id;}?>' class="form-control">

                      <div class="form-group">
                      <label for="exampleInputTitle">Post Title</label>
                      <input type="text" name="post_title" class="form-control" value='<?php if(isset($row_by_id)){echo $row_by_id->post_title;}?>'  id="exampleInputTitle" aria-describedby="emailHelp" placeholder="Enter Title">
                  </div>
         
  <div class="form-group">
    <label for="exampleFormControlPublished">Published At</label>
    <input type="date" class="form-control" name="create_time"  id="exampleFormControlPublished" placeholder="Date">
  </div>

      <div class="form-group">
    <label for="exampleInputCategory">Categories</label>
    <select class="form-control form-select"  name="category_id" aria-label=".form-select-sm example">
        <?php
        $Category=new Categories();
        $result=$Category->get_all();
        while($row=$result->fetch_object()){
        ?>
        
        <option value="<?php echo $row->category_id;?>"><?php echo $row->name ?></option>
       
        
        <?php    
        }
        ?>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputContent">Content</label>
    <textarea class="form-control"  name="post_content"   id="exampleFormControlTextarea1" rows="5"><?php if(isset($row_by_id)){echo $row_by_id->post_content;}?></textarea>
 </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Add Post</button>
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
