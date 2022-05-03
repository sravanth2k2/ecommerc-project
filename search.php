<?php 
include('config.php');

$name = $_POST['name'];



// Getting Categories
$products = array();
  if($con){
      $sql = "SELECT * FROM PRODUCT where name like '%$name%'";
    

    $result = mysqli_query($con,$sql);
    if($result->num_rows!=0)
    {
      while($row = mysqli_fetch_array($result))
      {
        $products[] = $row;
      }
    }
  }

  include('header.php');
?>


<header class="mb-3">
    <div class="form-inline">
      
      
    </div>
</header><!-- sect-heading -->

<div class="container">
  <?php if(count($products) > 0){ 
    ?>  
    <div class="row">

    <?php foreach($products AS $data){ 
      if($data['name'])
      {
      ?>
      <div class="col-md-3">
      <figure class="card card-product-grid">
        <a href="product_singlepage.php?id=<?php echo $data['id'] ?>">
          <div class="img-wrap" style="padding: 20px;"> 
            <span class="badge badge-danger"> NEW </span>
            <img src="<?php echo 'admin/' . $data['image'] ?>" style="cursor: pointer;">
          </div> 
        </a>
        <figcaption class="info-wrap">
            <a href="#" class="title mb-2">
              <?php echo ucwords($data['name']) ?>
            </a>
            <div class="price-wrap">
              <span class="price">₹<?php echo $data['price'] ?> </span> 
              <small class="text-muted">/per item</small>
            </div> <!-- price-wrap.// -->
            
            <p class="mb-2"> 2 Pieces  <small class="text-muted">(Min Order)</small></p>
            
            <p class="text-muted ">Guangzhou Yichuang Electronic Co</p>
            
        </figcaption>
      </figure>
    </div>
    <?php } }?> <!-- col.// -->
    
  </div> <!-- row end.// -->
   <?php }else{
    echo "<div style='margin: 100px;text-align:center'>
      <span style='font-size: 20px;font-weight: bold;color: #ff6a00;'>No Products Found..</span>
    </div>";
   } ?>
  
</div>


<?php
include('footer.php');
?>