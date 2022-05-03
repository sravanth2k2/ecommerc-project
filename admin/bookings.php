
  <?php

  $orders = array();
  include('config.php');
  if($con){
    $sql = 'SELECT * FROM orders ORDER BY id DESC';
    $result = mysqli_query($con,$sql);
    if($result->num_rows != 0){
      while($row = mysqli_fetch_array($result)){
        $orders[] = $row;
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
                <h3 class="tile-title">Orders Table</h3>
              </div>
              <div class="col-md-6 text-right">
                <a href="add-category.php" class="btn btn-primary btn-sm">Add</a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Order ID</th>
                    <th>Total Price</th>
                    <th>User Information</th>
                    <th>Product Information</th>
                    <th>Order Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $id=1;
                   foreach($orders as $data){ 
                    $user_information = json_decode($data['user_information']);
                    $product_information = json_decode($data['product_information']);
                    ?>
                  <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $data['order_id'] ?></td>
                    <td>₹<?php echo $data['total_price'] ?></td>
                    <td>
                      <span>Name : <?php echo $user_information->name ?></span><br/>
                      <span>Mobile : <?php echo $user_information->mobile ?></span><br/>
                      <span>Email : <?php echo $user_information->email ?></span><br/>
                      <span>address : <?php echo $user_information->address ?></span><br/>
                    </td>
                    <td>
                      <?php foreach($product_information AS $pro){
                      ?>
                      <span>Product Name : <?php echo $pro->product_name ?></span><br/>
                      <span>Product Quantity : <?php echo $pro->product_qty ?></span><br/>
                      <span>Product Price : <?php echo $pro->product_price ?></span><br/>
                    <?php } ?>
                    </td>
                    <td>
                      <span class="badge <?php echo $data['order_status'] == Null ? 'bg-danger' : 'bg-info' ?> text-white p-2"><?php echo $data['order_status'] == Null ? 'Pending' : $data['order_status'] ?></span>
                    </td>
                    <td>
                      <a href="booking_update.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Are You Sure ?')" class="btn btn-success">Change Status</a>
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