<?php include("header.php");?>

	<?php 
if((isset($_POST["name"])) && (isset($_POST["phone"]))&& (isset($_POST["email"]))&& (isset($_POST["subject"])) ) {
extract($_POST);
          mysqli_query($con,"insert into contact_form(con_name,con_email,con_mob,con_sub,con_msg)values ('$name','$email','$phone','$subject','$message')");
			$status="Message Sent...!";
}


?>


<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75" style="background-position: 50% 0px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">

				<h2>
					Third Party Manufacture				</h2>
					<ol class="breadcrumb highlightlinks">
									<li class="first-item">
									<a href="index.php">Homepage</a></li>
																	<li class="last-item">Third Party Manufacture</li>
						</ol>
			</div>
		</div>
	</div>
</section>




<section class="ls page_content section_padding_top_100 section_padding_bottom_100 columns_padding_25">
					<div class="container">
				<div class="row">

					
	<div id="content" class="col-sm-12">
		    <article id="post-233" class="post-233 page type-page status-publish hentry">
		
        <div class="entry-content">
            <div class="fw-page-builder-content">	<h2 class="text-left section_header ">
	<span class="  ">Third Party Manufacture</span>
	</h2>
<p><b>
Pharma contract manufacturer – Penabiotech International . Ltd. is the top pharmaceutical 
contract manufacturing company & third party manufacturer for pharma </b>in India as it 
supplies top quality pharmaceutical products worldwide. Our site is among the best driving 
pharmaceutical organization. An unmistakable provider of pharmaceutical plans as it offers an 
extensive variety of pharmaceutical details. Pharmaceutical Tablets, Capsules, Psychiatry Tablets,
and Injections are all incorporated by us.
    
    
    
    </p><p>
        
        
Third Party Pharmaceutical Manufacturer in <b>Penabiotech International</b> is the top-most pharma 
company in India. We have the capacity for large scale production of pharmaceutical products like 
pellets, tablet, capsule, Syrups, Dry syrup & Dry Injections, etc. Many pharma companies may not 
have own production facilities so, we work for them and provide them Pharmaceutical contract 
manufacturing/ pharma third party manufacturing services. Our company uses computerized 
technology for manufacturing and packing the drug solutions that make us the best pharma third 
party manufacturer in Ahmedabad. We are focused to provide quality, innovative, effective and 
safe medicines to the general masses at affordable range.

        
        
        </p>
	<div class="fw-divider-space " style="padding-top: 30px;"></div>
<h4>Our AIM...</h4><h5 class="highlight">Long term successful business relationship ...</h5>

<p>
    
   Being one of the top third party and contract manufacturing pharmaceutical company, 
Penabiotech is also well experienced in herbal medicine and ayurvedic medicine third party 
manufacturing. We are third party manufacturing pharma and also provide more services 
as medicine supplier, medicine exporter, and pharmaceutical distributor.
</p>

	<div class="fw-divider-space " style="padding-top: 30px;"></div>
<h4>Why we are Best Third Party Manufacturer Of Pharma products?</h4>
<p>
    
  &#8594; Extensive variety of pharmacy items.<br>
&#8594; Guarantee definitions are enabled for Stockroom.<br>
&#8594; Bundling procedure is done carefully to guarantee that the medications ought not be altered amid travel.<br>
&#8594; To advance our items in a moral method.<br>
&#8594; To benefit the moderate medicinal services even at the low strata.

</p>



</div>
        </div><!-- .entry-content -->
        
    </article><!-- #post-## -->

	</div><!--eof #content -->

				</div><!-- eof .row-->
			</div><!-- eof .container -->
		</section>
		
		
			<section id="contact" class="ls section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 text-center">
							<div class="background_cover contact-form-wrapper">
								<h2 class="section_header">Enquiry Form</h2>
								<h6 class="module-header"><?php echo $status;?></h6>
								<form class="contact-form row" method="post" action="">
									<div class="col-sm-6">
										<div class="contact-form-name"> <label for="name">Full Name <span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name" requrired > </div>
									</div>
									<div class="col-sm-6">
										<div class="contact-form-email"> <label for="email">Email address<span class="required">*</span></label> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control " placeholder="Email Address" requrired > </div>
									</div>
									<div class="col-sm-6">
										<div class="contact-form-phone"> <label for="phone">Phone<span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control " placeholder="Phone Number" requrired > </div>
									</div>
									<div class="col-sm-6">
										<div class="contact-form-subject"> <label for="subject">Subject<span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control " placeholder="Your Subject" requrired > </div>
									</div>
									<div class="col-sm-12">
										<div class="contact-form-message"> <label for="message">Message</label> <textarea aria-required="true" rows="4" cols="45" name="message" id="message" class="form-control " placeholder="Message..."></textarea> </div>
									</div>
									<div class="col-sm-12">
										<div class="contact-form-submit topmargin_10"> <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color2 inverse min_width_button">Send Message</button> </div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			
			
	<?php include("footer.php");?>
	
	
	
	
	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
</body>

</html>