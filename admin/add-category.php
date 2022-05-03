 <?php
include('header.php');
include('sidebar.php');
 ?>
   
    <main class="app-content">
      
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Category Form</h3>
            <div class="tile-body">
              <form action="insert_category.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" type="text" name="name" placeholder="Enter name">
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
   