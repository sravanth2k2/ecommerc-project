<?php

  $product = array();
  include('config.php');
  if($con){
    $sql = 'SELECT * FROM product ORDER BY id DESC';
    $result = mysqli_query($con,$sql);
    if($result->num_rows!=0)
    {
      while($row = mysqli_fetch_array($result))
      {
        $product[] = $row;
      };
    }

  }
  ?>

 <!-- Navbar-->
   <?php include('header.php') ?>
    <!-- Sidebar menu-->
    <?php include('sidebar.php') ?>
    <main class="app-content">
      
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            
            <div class="row">
              <div class="col-md-6 text-left">
                <h3 class="tile-title">product Table</h3>
              </div>
              <div class="col-md-6 text-right">
                <a href="add-product.php" class="btn btn-primary btn-sm">Add</a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category_name</th>
                    <th>Created Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $id=1;
                   foreach($product AS $data){ 
                      $category_id = $data['category_id'];
                      $category_data = array();
                        if($con){
                          $sql = "SELECT * FROM categories WHERE id='{$category_id}'";
                          $result = mysqli_query($con,$sql);
                          if($result->num_rows != 0){
                            while($row = mysqli_fetch_array($result)){
                              $category_data = $row;
                            };
                          }
                        }

                          $subcategory_id = $data['subcategory_id'];
	                      $subcategory_data = array();
	                        if($con){
	                          $sql = "SELECT * FROM subcategories WHERE id='{$subcategory_id}'";
	                          $result = mysqli_query($con,$sql);
	                          if($result->num_rows != 0){
	                            while($row = mysqli_fetch_array($result)){
	                              $subcategory_data = $row;
	                            };
	                          }
	                        }
                    ?>
                  <tr>
                    <td><?php echo $id;?></td>
                    <td><img src="<?php echo $data['image'] ?>" height='100' width='100'></td>
                    <td><?php echo $data['name'] ?></td>
                    <td><?php echo $category_data['name'] ?></td>
                    <td><?php echo $subcategory_data['name'] ?></td>
                    <td>
                      <a href="edit-product.php?id=<?php echo $data['id'] ?>" class="btn btn-primary">Edit</a>
                      <a onclick="return confirm('Are you sure to delete this ?')" href="delete-product.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                <?php $id+=1; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
   <?php include('footer.php') ?>