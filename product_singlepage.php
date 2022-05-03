<?php 
include('config.php');

$product_id = $_GET['id'];

// Getting Categories
$product = array();
  if($con){
    $sql = "SELECT * FROM product WHERE id = '{$product_id}'";

    $result = mysqli_query($con,$sql);
    if($result->num_rows!=0)
    {
      while($row = mysqli_fetch_array($result))
      {
        $products = $row;
      }
    }
  }

  include('header.php');
?>

<section class="py-3 bg-light">
   <div class="container">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="#">Home</a></li>
         <li class="breadcrumb-item"><a href="#">Category name</a></li>
         <li class="breadcrumb-item"><a href="#">Sub category</a></li>
         <li class="breadcrumb-item active" aria-current="page">Items</li>
      </ol>
   </div>
</section>
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg-white padding-y">
   <div class="container">
      <!-- ============================ ITEM DETAIL ======================== -->
      <div class="row">
         <aside class="col-md-6">
            <div class="card">
               <article class="gallery-wrap">
                  <div class="img-big-wrap">
                     <div> <a href="#"><img src="<?php echo 'admin/'. $products['image'] ?>"></a></div>
                  </div>
                  <!-- slider-product.// -->
                  
                  <!-- slider-nav.// -->
               </article>
               <!-- gallery-wrap .end// -->
            </div>
            <!-- card.// -->
         </aside>
         <main class="col-md-6">
            <article class="product-info-aside">
               <h2 class="title mt-3">
               	<?php echo ucwords($products['name']) ?>
               </h2>
               <!-- rating-wrap.// -->
               <div class="mb-3"> 
                  <var class="price h4">INR <?php echo $products['price'] ?>.00</var> 
               </div>
               <!-- price-detail-wrap .// -->
               <p>Compact sport shoe for running, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat 
               </p>
               <dl class="row">
                  <dt class="col-sm-3">Manufacturer</dt>
                  <dd class="col-sm-9"><a href="#">Great textile Ltd.</a></dd>
                  <dt class="col-sm-3">Article number</dt>
                  <dd class="col-sm-9">596 065</dd>
                  <dt class="col-sm-3">Guarantee</dt>
                  <dd class="col-sm-9">2 year</dd>
                  <dt class="col-sm-3">Delivery time</dt>
                  <dd class="col-sm-9">3-4 days</dd>
                  <dt class="col-sm-3">Availabilty</dt>
                  <dd class="col-sm-9">in Stock</dd>
               </dl>
               <div class="form-row  mt-4">
                  <!-- <div class="form-group col-md flex-grow-0">
                     <div class="input-group mb-3 input-spinner">
                        <div class="input-group-prepend">
                           <button class="btn btn-light" type="button" id="button-plus" onclick="increaseQuantity()"> + </button>
                        </div>
                        <input type="text" class="form-control cart_quantity" value="1">
                        <div class="input-group-append">
                           <button class="btn btn-light" type="button" id="button-minus" onclick="decreaseQuantity()"> &minus; </button>
                        </div>
                     </div>
                  </div> -->
                  <!-- col.// -->
                  <div class="form-group col-md">
                     <a href="add_to_cart.php?id=<?php echo $products['id'] ?>"  class="btn  btn-primary"> 
                     <i class="fas fa-shopping-cart"></i> <span class="text">Add to cart</span> 
                     </a>
                     <a href="#" class="btn btn-light">
                     <i class="fas fa-envelope"></i> <span class="text">Contact supplier</span> 
                     </a>
                  </div>
                  <!-- col.// -->
               </div>
               <!-- row.// -->
            </article>
            <!-- product-info-aside .// -->
         </main>
         <!-- col.// -->
      </div>
      <!-- row.// -->
      <!-- ================ ITEM DETAIL END .// ================= -->
   </div>
   <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y bg">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <h5 class="title-description">Description</h5>
            <p>
               Lava stone grill, suitable for natural gas, with cast-iron cooking grid, piezo ignition, stainless steel burners, water tank, and thermocouple. Thermostatic adjustable per zone. Comes complete with lava rocks. Adjustable legs. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat. 
            </p>
            <ul class="list-check">
               <li>Material: Stainless steel</li>
               <li>Weight: 82kg</li>
               <li>built-in drip tray</li>
               <li>Open base for pots and pans</li>
               <li>On request available in propane execution</li>
            </ul>
            
         </div>
         <!-- col.// -->
         <aside class="col-md-4">
            <div class="box">
               <h5 class="title-description">Files</h5>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </p>
               <h5 class="title-description">Videos</h5>
               <article class="media mb-3">
                  <a href="#"><img class="img-sm mr-3" src="images/posts/3.jpg"></a>
                  <div class="media-body">
                     <h6 class="mt-0"><a href="#">How to use this item</a></h6>
                     <p class="mb-2"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin </p>
                  </div>
               </article>
               <article class="media mb-3">
                  <a href="#"><img class="img-sm mr-3" src="images/posts/2.jpg"></a>
                  <div class="media-body">
                     <h6 class="mt-0"><a href="#">New tips and tricks</a></h6>
                     <p class="mb-2"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin </p>
                  </div>
               </article>
               <article class="media mb-3">
                  <a href="#"><img class="img-sm mr-3" src="images/posts/1.jpg"></a>
                  <div class="media-body">
                     <h6 class="mt-0"><a href="#">New tips and tricks</a></h6>
                     <p class="mb-2"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin </p>
                  </div>
               </article>
            </div>
            <!-- box.// -->
         </aside>
         <!-- col.// -->
      </div>
      <!-- row.// -->
   </div>
   <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<?php
include('footer.php');
?>
<script type="text/javascript">
	increaseQuantity = () =>{
		var cart_quantity = $('.cart_quantity').val();
		if(cart_quantity != 10){
			$('.cart_quantity').val(parseInt(cart_quantity)+1);
		}
	}

	decreaseQuantity = () =>{
		var cart_quantity = $('.cart_quantity').val();
		if(cart_quantity != 1){
			$('.cart_quantity').val(parseInt(cart_quantity)-1);
		}
	}


</script>