	<?php include"header.php";?>
	
	<?php 
if((isset($_POST["name"])) && (isset($_POST["phone"]))&& (isset($_POST["email"]))&& (isset($_POST["subject"])) ) {
extract($_POST);
          mysqli_query($con,"insert into contact_form(con_name,con_email,con_mob,con_sub,con_msg)values ('$name','$email','$phone','$subject','$message')");
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
						<div class="col-md-8 to_animate" data-animation="scaleAppear">
							<form class="contact-form columns_padding_10 bottommargin_40" method="post" action="">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group bottommargin_0"> <label for="name">Full Name <span class="required">*</span></label> <i class="fa fa-user highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name" required >											</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group bottommargin_0"> <label for="phone">Phone Number<span class="required">*</span></label> <i class="fa fa-phone highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number" required >											</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group bottommargin_0"> <label for="email">Email address<span class="required">*</span></label> <i class="fa fa-envelope highlight2" aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address" required >											</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group bottommargin_0"> <label for="subject">Subject<span class="required">*</span></label> <i class="fa fa-flag highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject" required >											</div>
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
						<div class="col-md-4 to_animate" data-animation="scaleAppear">
							<ul class="list1 no-bullets no-top-border no-bottom-border">
								<li>
									<div class="media">
										<div class="media-left"> <i class="fa fa-map-marker highlight2 fontsize_18"></i> </div>
										<div class="media-body">
											<h5 class="media-heading grey">Corporate Office:</h5>Ahmedabad
											
											<h5 class="media-heading grey">Branch Office:</h5>Mumbai
											</div>
									</div>
								</li>
								<li>
									<div class="media">
										<div class="media-left"> <i class="fa fa-phone highlight2 fontsize_18"></i> </div>
										<div class="media-body">
											<h5 class="media-heading grey">Phone:</h5><a href="tel:+917990206696"><span>+91 7990206696</span></a> </div>
									</div>
								</li>
								
								<li>
									<div class="media">
										<div class="media-left"> <i class="fa fa-envelope highlight2 fontsize_18"></i> </div>
										<div class="media-body greylinks">
											<h5 class="media-heading grey">Email:</h5>  <a href="mailto:penabiotech@gmail.com"><span>penabiotech@gmail.com</span></a>	</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- eof #box_wrapper -->
	</div>


	<?php include"footer.php";?>
	