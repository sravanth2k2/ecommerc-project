<?php

$id = $_GET['id'];
$data = array();
  $con = mysqli_connect('localhost', 'root', '', 'ecommerce2');
  if($con){
    $sql = "SELECT * FROM categories WHERE id='{$id}'";
    $result = mysqli_query($con,$sql);
    if($result->num_rows != 0){
      while($row = mysqli_fetch_array($result)){
        $data = $row;
      };
    }
  }

include('header.php');
include('sidebar.php');
 ?>
   
    <main class="app-content">
      
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="tile">
            <h3 class="tile-title">Edit Category Form</h3>
            <div class="tile-body">
              <form action="update_category.php?id=<?php echo $data['id'] ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Enter name">
                </div>
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <label class="control-label">Image</label>
                      <input class="form-control" type="file" name="image">
                      <input type="hidden" name="existing_image" value="<?php echo $data['image'] ?>">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <img src="<?php echo $data['image'] ?>" height="200" width="200">
                  </div>
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
   