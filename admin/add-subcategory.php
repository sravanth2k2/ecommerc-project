 <?php
include('header.php');
include('sidebar.php');
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
 ?>
   
    <main class="app-content">
      
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">SubCategory Form</h3>
            <div class="tile-body">
              <form action="insert_subcategory.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" type="text" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label class="control-label">Category name</label>
                  <select class = "form-control" name = "category_id">
                    <option value = ''>Select</option>
                    <?php foreach ($category as $key => $value) {
                      # code...
                      echo "<option value=".$value['id'].">".$value['name']."</option>";
                    }
                    ?>
                  </select>

                </div>
                <div class="form-group">
                  <label class="control-label">Image</label>
                  <input class="form-control" type="file" name="image">
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
   