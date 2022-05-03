<?php
include('header.php');
  $cart = $_SESSION['cart'];
  $total_price = 0;

  foreach ($cart as $key => $value) {
  	$total_price+= $value['product_price'] * $value['product_qty'];
  }
  
?>
<div class="container">
<!-- ========================= SECTION MAIN  ========================= -->
<form action="checkoutsubmit.php" method="POST">
	<section class="section-main padding-y" style="margin:50px;">
		<h2 class="text-center mb-4">Checkout</h2>
		<div class="row justify-content-center">
			<aside class="col-md-6">
			   <!-- ============================ COMPONENT FEEDBACK  ================================= -->
			   <div class="card mb-4">
			      <div class="card-body">
			        <h4 class="card-title mb-4">SHIPPING DETAILS</h4>
		            <div class="form-group">
		               <label>Name</label>
		               <input type="text" class="form-control" placeholder="" name="name" required="">
		            </div>
		            <!-- form-group end.// -->
		            <div class="form-group">
		               <label>Mobile</label>
		               <input type="number" class="form-control" placeholder="" name="mobile" required="">
		            </div>
		            <div class="form-group">
		               <label>Email</label>
		               <input type="text" class="form-control" placeholder="" name="email" required="">
		            </div>
		            <div class="form-group">
		               <label>Address</label>
		               <textarea class="form-control" name="address" required=""></textarea>
		            </div>
			      </div>
			      <!-- card-body.// -->
			   </div>
			   <!-- card .// -->
			   <!-- ============================ COMPONENT FEEDBACK END.// ================================= -->
			</aside>
			<aside class="col-md-4">
			   <!-- ============================ COMPONENT PAYMENT  ================================= -->
			   
			   <div class="card mb-4">
			      <div class="card-body">
			         <h4 class="card-title mb-4">YOUR ORDER</h4>
			         <form>
			            <div class="form-group">
			               <label>Total Price: ₹<?php echo $total_price ?></label>
			            </div>
			            <!-- form-group// -->
			            <div class="form-group">
			               <label>Discount : 0</label>
			            </div>
			            <!-- form-group// --> 
			            <div class="form-group">
			               <label>Total : ₹<?php echo $total_price ?></label>
			            </div>  
			         </form>
			         <button type="submit" href="#" class="btn btn-facebook btn-block mb-2"> <i class="fas fa-cash-register"></i> &nbsp Cash On Delivery</button type="submit">
       				<a href="#" class="btn btn-google btn-block mb-4"> <i class="fa fa-credit-card"></i> &nbsp  Pay Online</a>
			      </div>
			      <!-- card-body.// -->
			   </div>
			   <!-- ============================ COMPONENT PAYMENT END.// ================================= -->
			</aside>
			
		</div>
	</section>
</form>
</div> <!-- row.// -->
</section>
<!-- container end.// -->


<?php
include('footer.php');
?>