<?php 
include('config.php');

// Getting Categories
$category = array();
$popular_category = array();
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

// Getting Popular Categories
  foreach($category As $key=>$data){
  	if($key < 3){
	  	$popular_category[] = $data;
	  }
	}

$regular_category =  array();

foreach($category AS $key=>$data){
	if($key < 2){
		$subcategories = array();
		$sql_subcat = "SELECT * FROM subcategories WHERE category_id = '{$data["id"]}' ORDER BY id DESC";
		$result = mysqli_query($con,$sql_subcat);
		if($result->num_rows!=0)
	    {
	      while($row = mysqli_fetch_array($result))
	      {
	        $subcategories[] = $row;
	      }
	    }

	    $regular_category[] = [
	    	'category' => $data,
	    	'subcategories' => $subcategories
	    ];
	}
}

  include('header.php');
?>
<div class="container">
<!-- ========================= SECTION MAIN  ========================= -->
<section class="section-main padding-y">
<main class="card">
	<div class="card-body">

<div class="row">
	<aside class="col-lg col-md-3 flex-lg-grow-0">
		<nav class="nav-home-aside">
			<h6 class="title-category">CATEGORIES <i class="d-md-none icon fa fa-chevron-down"></i></h6>
			<ul class="menu-category">
				<?php 
					foreach($category AS $data){ ?>
					<li><a href="products.php?id=<?php echo $data['id'] ?>&url_type=category"><?php echo $data['name'] ?></a></li>
				<?php }
				?>
			</ul>
		</nav>
	</aside> <!-- col.// -->
	<div class="col-md-9 col-xl-7 col-lg-7">

<!-- ================== COMPONENT SLIDER  BOOTSTRAP  ==================  -->
<div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1_indicator" data-slide-to="1"></li>
    <li data-target="#carousel1_indicator" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banners/slide1.jpg" alt="First slide"> 
    </div>
    <div class="carousel-item">
      <img src="images/banners/slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="images/banners/slide3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
<!-- ==================  COMPONENT SLIDER BOOTSTRAP end.// ==================  .// -->	

	</div> <!-- col.// -->
	<div class="col-md d-none d-lg-block flex-grow-1">
		<aside class="special-home-right">
			<h6 class="bg-blue text-center text-white mb-0 p-2">Popular category</h6>
		
			<?php
			foreach($popular_category AS $data){ ?>
				<div class="card-banner border-bottom">
				  <div class="py-3" style="width:80%">
				    <h6 class="card-title"><?php echo $data['name'] ?></h6>
				    <a href="products.php?id=<?php echo $data['id'] ?>&url_type=category" class="btn btn-secondary btn-sm"> Source now </a>
				  </div> 
				  <img src="<?php echo 'admin/' .$data['image'] ?>" height="80" class="img-bg">
				</div>
			<?php }
			?>
		</aside>
	</div> <!-- col.// -->
</div> <!-- row.// -->

	</div> <!-- card-body.// -->
</main> <!-- card.// -->

</section>
<!-- ========================= SECTION MAIN END// ========================= -->



<!-- =============== SECTION DEAL =============== -->
<!-- =============== SECTION DEAL // END =============== -->

<!-- =============== SECTION 1 =============== -->
<?php

foreach($regular_category AS $data){ ?>
	
<section class="padding-bottom">
   <header class="section-heading heading-line">
      <h4 class="title-section text-uppercase"><?php echo $data['category']['name'] ?></h4>
   </header>
   <div class="card card-home-category">
      <div class="row no-gutters">
         <div class="col-md-3">
            <div class="home-category-banner bg-light-orange">
               <h5 class="title">Best trending clothes only for summer</h5>
               <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
               <img src="<?php echo 'admin/' .$data['category']['image'] ?>" class="img-bg">
            </div>
         </div>
         <!-- col.// -->
         <div class="col-md-9">
            <ul class="row no-gutters bordered-cols">
               <?php 
                 foreach($data['subcategories'] AS $data){ ?>
                 <li class="col-6 col-lg-3 col-md-4">
	                  <a href="products.php?id=<?php echo $data['id'] ?>&url_type=subcategory" class="item">
	                     <div class="card-body">
	                        <h6 class="title"><?php echo $data['name'] ?></h6>
	                        <img class="img-sm float-right" src="<?php echo 'admin/' . $data['image'] ?>"> 
	                        <p class="text-muted"><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
	                     </div>
	                  </a>
	               </li>
             	<?php }
               ?>
            </ul>
         </div>
         <!-- col.// -->
      </div>
      <!-- row.// -->
   </div>
   <!-- card.// -->
</section>

<?php }
?>

<!-- =============== SECTION REQUEST =============== -->



<!-- =============== SECTION REQUEST .//END =============== -->


<!-- =============== SECTION ITEMS =============== -->


<!-- =============== SECTION SERVICES =============== -->
<section  class="padding-bottom">

<header class="section-heading heading-line">
	<h4 class="title-section text-uppercase">Trade services</h4>
</header>

<div class="row">
	<div class="col-md-3 col-sm-6">
		<article class="card card-post">
		  <img src="images/posts/1.jpg" class="card-img-top">
		  <div class="card-body">
		    <h6 class="title">Trade Assurance</h6>
		    <p class="small text-uppercase text-muted">Order protection</p>
		  </div>
		</article> <!-- card.// -->
	</div> <!-- col.// -->
	<div class="col-md-3 col-sm-6">
		<article class="card card-post">
		  <img src="images/posts/2.jpg" class="card-img-top">
		  <div class="card-body">
		    <h6 class="title">Pay anytime</h6>
		    <p class="small text-uppercase text-muted">Finance solution</p>
		  </div>
		</article> <!-- card.// -->
	</div> <!-- col.// -->
	<div class="col-md-3 col-sm-6">
		<article class="card card-post">
		  <img src="images/posts/3.jpg" class="card-img-top">
		  <div class="card-body">
		    <h6 class="title">Inspection solution</h6>
		    <p class="small text-uppercase text-muted">Easy Inspection</p>
		  </div>
		</article> <!-- card.// -->
	</div> <!-- col.// -->
	<div class="col-md-3 col-sm-6">
		<article class="card card-post">
		  <img src="images/posts/4.jpg" class="card-img-top">
		  <div class="card-body">
		    <h6 class="title">Ocean and Air Shipping</h6>
		    <p class="small text-uppercase text-muted">Logistic services</p>
		  </div>
		</article> <!-- card.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->

</section>
<!-- =============== SECTION SERVICES .//END =============== -->

<!-- =============== SECTION REGION =============== -->
<section  class="padding-bottom">

<header class="section-heading heading-line">
	<h4 class="title-section text-uppercase">Choose region</h4>
</header>

<ul class="row mt-4">
	<li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/CN.png"> <span>China</span> </a></li>
	<li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/DE.png"> <span>Germany</span> </a></li>
	<li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/AU.png"> <span>Australia</span> </a></li>
	<li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/RU.png"> <span>Russia</span> </a></li>
	<li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/IN.png"> <span>India</span> </a></li>
	<li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/GB.png"> <span>England</span> </a></li>
	<li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/TR.png"> <span>Turkey</span> </a></li>
	<li class="col-md col-6"><a href="#" class="icontext"> <img class="icon-flag-sm" src="images/icons/flags/UZ.png"> <span>Uzbekistan</span> </a></li>
	<li class="col-md col-6"><a href="#" class="icontext"> <i class="mr-3 fa fa-ellipsis-h"></i> <span>More regions</span> </a></li>
</ul>
</section>
<!-- =============== SECTION REGION .//END =============== -->

<article class="my-4">
	<img src="images/banners/ad-sm.png" class="w-100">
</article>
</div>  
<!-- container end.// -->


<?php
include('footer.php');
?>