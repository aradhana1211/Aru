<?php include("header.php");?>
	
<?php 
if((isset($_POST["name"])) && (isset($_POST["phone"]))&& (isset($_POST["email"]))&& (isset($_POST["message"])) ) {
extract($_POST);
$con_sub="Category: $cat_name <br>Product Name: $prod_name";
          mysqli_query($con,"insert into quote_form(con_name,con_email,con_mob,con_msg,con_sub,con_time)values ('$name','$email','$phone','$message','$con_sub','$time_stamp')");
			$status="Message Sent...!";
}

?>
			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2> Categories</h2>
							<ol class="breadcrumb highlightlinks">
								<li> <a href="index.php">
							Home
						</a> </li>
								<li class="active">Categories</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls page_portfolio section_padding_top_150 ">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							
							<div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" data-filters=".isotope_filters">
							
							
							
							<?php $sql2 = mysqli_query($con, "SELECT * FROM category WHERE cat_status='Active' "); 
				 $procount=mysqli_num_rows($sql2);
				while($row = mysqli_fetch_array($sql2)) { ?>
				
<div class="isotope-item col-lg-3 col-md-6 col-sm-12 medical">
<a href="products.php?pro_cat=<?php echo $row["cat_id"];?>&cat_name=<?php echo $row["cat_name"];?>">
									<div class="vertical-item gallery-item content-absolute text-center ">
										<div class="item-media"> <img src="../img/cat_img/<?php echo $row["cat_image"];?>" style="height:280px!important; width:360px!important;" alt="">
											
										</div>
										<span style="color: red!important; "><b><?php echo $row["cat_name"];?></b></span>
									</div>
									</a>
								</div>
								
				<?php } ?>
								
								
							</div>
							
						</div>
					</div>
				</div>
			</section>
			
			
				<section class="ls columns_padding_25 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="module-header">For Quotation Please Fill The Form</h3>
							<h6 class="module-header"><?php echo $status;?></h6>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 to_animate" data-animation="scaleAppear">
							<form class="contact-form columns_padding_10 bottommargin_40" method="post" action="">
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group bottommargin_0"> <label for="name">Country Name <span class="required">*</span></label> <i class="fa fa-flag highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Country Name" required >											</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group bottommargin_0"> <label for="phone">Phone Number<span class="required">*</span></label> <i class="fa fa-phone highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number" required >											</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group bottommargin_0"> <label for="email">Email address<span class="required">*</span></label> <i class="fa fa-envelope highlight2" aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address" required >											</div>
									</div>
									
									<div class="col-sm-6">
										<div class="form-group bottommargin_0"> <label for="email">Category<span class="required">*</span></label> <i class="fa fa-envelope highlight2" aria-hidden="true"></i> 
										
                            				<select  name="cat_name" id="cat_name" class="form-control"  required >	<?php $sql2 = mysqli_query($con, "SELECT * FROM category WHERE cat_status='Active' "); 
                            				while($row = mysqli_fetch_array($sql2)) { ?>
                            				    <option><?php echo $row["cat_name"];?></option>
                            				
										<?php } ?>	</select>	
										</div>
									</div>
									
									<div class="col-sm-6">
										<div class="form-group bottommargin_0"> <label for="email">Product<span class="required">*</span></label> <i class="fa fa-envelope highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="prod_name" id="prod_name" class="form-control" placeholder="Product Name" required >											</div>
									</div>
									
									
									<div class="col-sm-12">
										<div class="contact-form-message form-group bottommargin_0"> <label for="message">Message</label> <i class="fa fa-comment highlight2" aria-hidden="true"></i> <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea> </div>
									</div>
									<div class="col-sm-12 bottommargin_0">
										<div class="contact-form-submit topmargin_10"> <button type="submit" id="contact_form_submits" name="contact_submits" class="theme_button color2 wide_button margin_0">Send message</button> </div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			
			
			
	<?php include("footer.php");?>
	
	
	
	
	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
</body>

</html>