<?php
	include('header.php');	
?>


    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="images/hero.jpg"></div>

    <div class="container-fluid tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                About Us
            </h2>
        </div>
        <div class="row tm-mb-74 tm-row-1640">            
            <div class="col-lg-5 col-md-6 col-12 mb-3">
                <img src="images/about.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-7 col-md-6 col-12">
                <div class="tm-about-img-text">
                    <p class="mb-4" style="font-size: 20px;">
                  
					Our Operations and award-winning Customer Service teams are at the heart of Alistyle's mission to be Earth’s most customer-centric company. Together, we create, we build and we take ownership for what we do—whether we are developing new technology in-house, launching an ecommerce fulfilment centre or delighting our customers by delivering packages directly to them. We are constantly creating the ideas, services and products that make life easier for millions of customers.
				</p>
                </div>                
            </div>
        </div>
        <div class="row tm-mb-50">
            <div class="col-md-6 col-12">
                <div class="tm-about-2-col">
                    <h2 class="tm-text-primary mb-4">
                        Last Mile Delivery
                    </h2>
                    <p class="mb-4" style="font-size: 20px;">
                        Getting orders from delivery stations to customers’ doorsteps is the “last mile” for delivery. We deliver goods to homes and businesses all over the world. This network is powered by hundreds of small businesses and tens of thousands of drivers that leverage Amazon technology.
                    </p>
                    
                </div>                
            </div> 
            <div class="col-md-6 col-12">
                <div class="tm-about-2-col">
                    <h2 class="tm-text-primary mb-4">
                        Journey of a Package
                    </h2>
                    <p class="mb-4" style="font-size: 20px;">
                       Have you ever wondered how far your package travels to reach you at your doorstep or that of your loved ones? We take you through the journey as we speak with our partners, sellers and delivery associates who make this journey possible.
                    </p>
                    
                </div>                
            </div>     
        </div> <!-- row -->
        <div class="row tm-mb-50">
            <div class="col-md-4 col-12">
                <div class="tm-about-3-col">
                                  
                    <h2 class="tm-text-primary mb-4">How technology enables our Sortation Centres to deliver orders faster</h2>
                    <p class="mb-4" style="font-size: 20px;">With the rapid expansion of Amazon.in and the millions of orders each day, Amazon is building technology to create revolutionary improvements at Sortation Centres so that your orders are delivered faster.</p>
                </div>                
            </div>
            <div class="col-md-4 col-12">
                <div class="tm-about-3-col">
                                
                    <h2 class="tm-text-primary mb-4">AliStyle</h2>
                    <p class="tm-mb-50"style="font-size: 20px;">
					Teams around the world invent on behalf of our customers every day to meet their desire for lower prices, better selection, and convenient services. One way we guarantee a wide selection of products and services for customers is by creating India-specific programs to support the thousands of small and medium businesses in India that sell on Amazon.in.</p>                
                </div>                
            </div>
            <div class="col-md-4 col-12">
                <div class="tm-about-3-col">
                                  
                    <h2 class="tm-text-primary mb-4">Economic Growth</h2>
                    <p class="mb-4" style="font-size: 20px;">
					Amazon has announced an investment in India of $1 billion and committed to digitally enable 10 million micro, small, and medium businesses, drive ecommerce exports worth $10 billion, and create 1 million additional jobs in India between 2020 and 2025. More than 75,000 sellers have registered on the Amazon India marketplace in regional Indian languages.</p>
                </div>                
            </div>
        </div>
    </div> <!-- container-fluid, tm-container-content -->

    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>



<?php
include('footer.php');
?>