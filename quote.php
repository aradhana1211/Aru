	<?php include"header.php";?>
	
	<?php 
if((isset($_POST["name"])) && (isset($_POST["phone"]))&& (isset($_POST["email"]))&& (isset($_POST["subject"])) ) {
extract($_POST);
          mysqli_query($con,"insert into quote_form(con_name,con_email,con_mob,con_sub,con_msg,con_loc,con_prod,con_quan,con_time)values ('$name','$email','$phone','$subject','$message','$con_loc','$con_prod','$con_quan','$time_stamp')");
			$status="Message Sent...!";
}


?>
			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Contact us</h2>
							<ol class="breadcrumb highlightlinks">
								<li> <a href="./">
							Home
						</a> </li>
								<li class="active">Contact us</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			
			<section class="ls columns_padding_25 section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="module-header">Please Fill The Form</h3>
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
		</div>
		<!-- eof #box_wrapper -->
	</div>


	<?php include"footer.php";?>
	