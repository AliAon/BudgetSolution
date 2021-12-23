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
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
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
                           
<?php 

if(isset($_GET['id'])){
  $id=$_GET['id'];
  $product=new Product();
  $result=$product->findbyid($id);
 $row_by_id=$result->fetch_object();
  
} 

 ?>




         <form action='upload_product.php'  method="post" enctype="multipart/form-data"> 
         <input type="hidden" aria-label="Item" name="id" placeholder="Item Name" value='<?php if(isset($row_by_id)){echo $row_by_id->product_id;}?>' class="form-control">

                      <div class="form-group">
                      <label for="exampleInputTitle">Product Title</label>
                      <input type="text" name="product_title" class="form-control" value='<?php if(isset($row_by_id)){echo $row_by_id->product_title;}?>'  id="exampleInputTitle" aria-describedby="emailHelp" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputTitle">Product Price</label>
                      <input type="number" name="product_price" class="form-control" value='<?php if(isset($row_by_id)){echo $row_by_id->product_price;}?>'  id="exampleInputTitle" aria-describedby="emailHelp" placeholder="Enter Price">
                  </div>
         
  <div class="form-group">
    <label for="exampleFormControlPublished">Published At</label>
    <input type="date" class="form-control" name="create_time"  id="exampleFormControlPublished" placeholder="Date">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Featured Image</label>
    <input type="file" class="form-control-file" name="product_image" id="exampleFormControlFile1">
  </div>
      <div class="form-group">
    <label for="exampleInputCategory">Product Categories</label>
    <select class="form-control form-select"  name="product_category_id" aria-label=".form-select-sm example">
        <?php
        $ProductCategories=new ProductCategories();
        $result=$ProductCategories->get_all();
        while($row=$result->fetch_object()){
        ?>
        
        <option value="<?php echo $row->product_category_id;?>"><?php  echo $row->product_category_name ?></option>        
        <?php    
        }
        ?>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputContent">Poduct Short Description </label>
    <textarea class="form-control"  name="product_short_description"   id="exampleFormControlTextarea1" rows="2"><?php if(isset($row_by_id)){echo $row_by_id->product_short_description;}?></textarea>
 </div>
  <div class="form-group">
    <label for="exampleInputContent">Poduct Description </label>
    <textarea class="form-control"  name="product_description"   id="exampleFormControlTextarea1" rows="5"><?php if(isset($row_by_id)){echo $row_by_id->product_description;}?></textarea>
 </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Add Product</button>
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
