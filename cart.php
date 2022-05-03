<?php 
include('config.php');
$total_price = 0;
// Getting Categories
if(isset($_SESSION['cart'])){
	$cart = $_SESSION['cart'];
}else{
	$cart = [];
}

  include('header.php');
?>

<?php if($cart != []){ ?>

<div class="container">
	<section class="section-content padding-y">
	   <div class="container">
	      <div class="row">
	         <main class="col-md-9">
	            <div class="card">
	               <table class="table table-borderless table-shopping-cart">
	                  <thead class="text-muted">
	                     <tr class="small text-uppercase">
	                        <th scope="col">Product</th>
	                        <th scope="col" width="240">Quantity</th>
	                        <th scope="col" width="120">Price</th>
	                        <th scope="col" width="120">Total</th>
	                        <th scope="col" class="text-right" width="200"> </th>
	                     </tr>
	                  </thead>
	                  <tbody>
	                  	<?php foreach($cart AS $product_id=>$data){ ?>
	                  		<tr>
		                        <td>
		                           <figure class="itemside">
		                              <div class="aside"><img src="<?php echo 'admin/'. $data['product_image'] ?>" class="img-sm"></div>
		                              <figcaption class="info">
		                                 <a href="#" class="title text-dark">
		                                 	<?php echo $data['product_name'] ?>
		                                 </a>
		                                 <p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
		                              </figcaption>
		                           </figure>
		                        </td>
		                        <td>
		                           <div class="form-group col-md flex-grow-0">
				                     <div class="input-group mb-3 input-spinner">
				                        <div class="input-group-prepend">
				                           <a href="add_to_cart.php?id=<?php echo $product_id ?>&type=increment" style="cursor: pointer;" class="btn btn-light" type="button" id="button-plus"> + </a>
				                        </div>
				                        <input type="text" class="form-control cart_quantity" style="padding: 10px;" value="<?php echo $data['product_qty'] ?>" disabled>
				                        <div class="input-group-append">
				                           <a href="add_to_cart.php?id=<?php echo $product_id ?>&type=decrement" style="cursor: pointer;" class="btn btn-light" type="button" id="button-minus"> &minus; </a>
				                        </div>
				                     </div>
				                  </div>
				                  <!-- col.// -->
		                        </td>
		                        <td>
		                           <div class="price-wrap"> 
		                              <var class="price">₹ <?php echo $data['product_price'] ?></var> 
		                           </div>
		                           <!-- price-wrap .// -->
		                        </td>
		                        <td>
		                           <div class="price-wrap"> 
		                              <var class="price">₹ <?php echo $total =  $data['product_price'] * $data['product_qty'] ?></var> 
		                           </div>
		                           <!-- price-wrap .// -->
		                        </td>
		                        <td class="text-right"> 
		                           <a href="add_to_cart.php?id=<?php echo $product_id ?>&type=remove" class="btn btn-light"> Remove</a>
		                        </td>
		                     </tr>
	                     <?php $total_price+=$total; } ?>
	                  </tbody>
	               </table>
	               <div class="card-body border-top">
	                  <a href="checkout.php" class="btn btn-primary float-md-right"> Make Purchase <i class="fa fa-chevron-right"></i> </a>
	                  <a href="checkout.php" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continue shopping </a>
	               </div>
	            </div>
	            <!-- card.// -->
	            <div class="alert alert-success mt-3">
	               <p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within 1-2 weeks</p>
	            </div>
	         </main>
	         <!-- col.// -->
	         <aside class="col-md-3">
	            	
	            <!-- card .// -->
	            <div class="card">
	               <div class="card-body">
	                  <dl class="dlist-align">
	                     <dt>Total price:</dt>
	                     <dd class="text-right">INR <?php echo $total_price ?></dd>
	                  </dl>
	                  <dl class="dlist-align">
	                     <dt>Discount:</dt>
	                     <dd class="text-right">INR 0</dd>
	                  </dl>
	                  <dl class="dlist-align">
	                     <dt>Total:</dt>
	                     <dd class="text-right  h5"><strong>₹ <?php echo $total_price ?></strong></dd>
	                  </dl>
	                  <hr>
	                  <p class="text-center mb-3">
	                     <img src="images/misc/payments.png" height="26">
	                  </p>
	               </div>
	               <!-- card-body.// -->
	            </div>
	            <!-- card .// -->
	         </aside>
	         <!-- col.// -->
	      </div>
	   </div>
	   <!-- container .//  -->
	</section>
</div> 

<?php }else{
	 	echo "<div style='margin: 100px;text-align:center'>
	 		<span style='font-size: 20px;font-weight: bold;color: #ff6a00;'>No Products Found..</span>
	 	</div>";
	 } ?>


<?php
include('footer.php');
?>