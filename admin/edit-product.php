 <?php

    $product_id = $_GET['id'];
    $product = array();
  include('config.php');
  if($con){
    $sql = "SELECT * FROM product WHERE id='{$product_id}'";
    $result = mysqli_query($con,$sql);
    if($result->num_rows!=0)
    {
      while($row = mysqli_fetch_array($result))
      {
        $product = $row;
      };
    }

  }

  $category = array();
  include('config.php');
  if($con){
    $sql = 'SELECT * FROM categories ORDER BY id DESC';
    $result = mysqli_query($con,$sql);
    if($result->num_rows!=0)
    {
      while($row = mysqli_fetch_array($result))
      {
        $category[] = $row;
      };
    }

  }

   $subcategory = array();
  include('config.php');
  if($con){
    $sql = 'SELECT * FROM subcategories ORDER BY id DESC';
    $result = mysqli_query($con,$sql);
    if($result->num_rows!=0)
    {
      while($row = mysqli_fetch_array($result))
      {
        $subcategory[] = $row;
      };
    }

  }
  // echo "<pre>";
  // print_r($subcategory);exit;

  include('header.php');
include('sidebar.php');
 ?>
   
    <main class="app-content">
      
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Product Form</h3>
            <div class="tile-body">
              <form action="update-product.php?id=<?php echo $product['id']; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" type="text" name="name" placeholder="Enter name" value="<?php echo $product['name'] ?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Category name</label>
                  <select class = "form-control" name = "category_id">
                    <option value = ''>Select</option>
                    <?php foreach ($category as $key => $value) { ?>
                      # code...
                      <option <?php echo $value['id'] == $product['category_id'] ? 'selected' : '' ?> 
                      value="<?php echo $value['id'] ?>">
                        <?php echo $value['name'] ?>
                      </option>
                    <?php }
                    ?>
                  </select>

                </div>
                <div class="form-group">
                  <label class="control-label">Subcategory name</label>
                  <select class = "form-control" name = "subcategory_id">
                    <option value = ''>Select</option>
                    <?php foreach ($subcategory as $key => $value) { ?>
                      # code...
                      <option <?php echo $value['id'] == $product['subcategory_id'] ? 'selected' : '' ?> 
                      value="<?php echo $value['id'] ?>">
                      <?php echo $value['name'] ?></option>
                    <?php }
                    ?>
                  </select>

                </div>
                
                <div class="form-group">
                  <label class="control-label">Price</label>
                  <input class="form-control" type="number" name="price" placeholder="Enter number" value="<?php echo $product['price'] ?>">
                </div>

                <div class="form-group">
                  <label class="control-label">Image</label>
                  <input class="form-control" type="file" name="image">
                  <input class="form-control" type="hidden" name="existing_image" value="<?php echo $product['image'] ?>">
                </div>
                <div class="tile-footer">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </main>
<?php
include('footer.php');
 ?>
   