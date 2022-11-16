<?php include("header.php");?>
<style>
@media (max-width: 991px) 
{
.intro_section .flex-control-nav, .intro_section .flex-custom-nav {
    position: static!important;
    text-align: center;
    margin-top: 0;
    margin-bottom: 0px!important;
}
}
</style>
	<?php 
if((isset($_POST["name"])) && (isset($_POST["phone"]))&& (isset($_POST["email"]))&& (isset($_POST["subject"])) ) {
extract($_POST);
          mysqli_query($con,"insert into contact_form(con_name,con_email,con_mob,con_sub,con_msg)values ('$name','$email','$phone','$subject','$message')");
			$status="Message Sent...!";
}


?>
<button id="btn" style="display:none;" data-toggle="modal" data-target="#exampleModal">Click me</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enquiry Form  
        <span><button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></span></h5>
      </div>
      <div class="modal-body">
       <?php echo $status;?>
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
    </div>
  </div>
</div>


			<section class="intro_section page_mainslider">
				<div class="flexslider" data-dots="true" data-nav="false">
					<ul class="slides">
					     <?php $sql = mysqli_query($con, "SELECT * FROM banner"); 
			while($rows = mysqli_fetch_array($sql)) { ?>
				<li> <img src="../img/home_banner/<?php echo $rows["banner_image"];?>" alt="">
						</li>
                      
			<?php  } ?>
					</ul>
				</div>
				<!-- eof flexslider -->
			</section>
			<section id="about" class="ls section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header"> Welcome to Our Site! </h2>
							<p>We are a biopharmaceutical company focused on the discovery, development and commercialization of innovative therapies intended to improve outcomes in patients sufferings</p>
						</div>
					</div>
					<div class="row columns_margin_bottom_20">
						<div class="col-md-4 col-sm-6">
							<div class="teaser hover_icon with_padding big-padding with_border rounded text-center">
								<div class="teaser_icon size_big highlight"> <i class="fa fa-user"></i> </div>
								<h4 class="topmargin_20 hover-color2"><a href="team.html">Pharma Team</a></h4>
								<p class="content-3lines-ellipsis">Company was founded by scientists dedicated to create new therapeutics.</p>
								<p class="topmargin_30 bottommargin_0"> <a href="team.html" class="theme_button color2 inverse min_width_button">Our Team</a> </p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="teaser hover_icon with_padding big-padding with_border rounded text-center with_corner_border">
								<div class="teaser_icon size_big highlight"> <i class="fa fa-lightbulb-o "></i> </div>
								<h4 class="topmargin_20 hover-color2"><a href="departments.html">Pharma Focus</a></h4>
								<p class="content-3lines-ellipsis">We Interrogate the inner life of GPCR signaling to develop newest therapeutics.</p>
								<p class="topmargin_30 bottommargin_0"> <a href="departments.html" class="theme_button color2 min_width_button">Discover Now</a> </p> <span class="bottom_corners"></span> </div>
						</div>
						<div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
							<div class="teaser hover_icon with_padding big-padding with_border rounded text-center">
								<div class="teaser_icon size_big highlight"> <i class="fa fa-plus"></i> </div>
								<h4 class="topmargin_20 hover-color2"><a href="pipeline.html">Pharma Pipeline</a></h4>
								<p class="content-3lines-ellipsis">Consetetur sadipscing elitr sediam nonumy eirmod tempor invidunt labore magna.</p>
								<p class="topmargin_30 bottommargin_0"> <a href="pipeline.html" class="theme_button color2 inverse min_width_button">Check It</a> </p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="products" class="ds color parallax page_gallery section_padding_top_100 section_padding_bottom_150 columns_padding_25">
				<div class="container">
					<div class="row display_table_md">
						<div class="col-md-6 col-md-push-6 display_table_cell_md"> <img src="images/gallery/01.jpg" alt="" class="rounded"> </div>
						<div class="col-md-6 col-md-pull-6 display_table_cell_md">
							<h2 class="section_header">Pena Biotech International</h2>
							<p class="highlight bottommargin_20"><strong>
							    
							     is an India-based pharmaceutical company, engaged in the 
manufacturing and exporting services for quality healthcare products like Pharmaceuticals, 
Nutraceuticals, etc. Pena Biotech rooted its business in 2010 with a noble vision to become a 
trusted contributor in developing healthier society by supplying quality healthcare products across 
the world. Pena Biotech is a first generation company operating its business through dynamic 
leadership of young Pharmaceutical professionals.

							</strong></p>
							<p>
							
Pena Biotech is a different kind of pharmaceutical and healthcare products company. Patients 
depend on an uninterrupted flow of high quality medicines and products.
Pena Biotech supplying high quality branded and generic medicines along with high standards of 
work ethics and customer service. Our company is one of the leading suppliers of pharmaceutical 
drugs and formulations all over the world.
Supplying to major location such as USA / AFRICA / EUROPE and with a global reach through 
our superior logistics expertise. Pena Biotech prides itself on its price, supply capabilities and 
service and as a result we have a very loyal and growing client base of satisfied customer

</p>
							<p class="topmargin_30"> <a href="categories.php" class="theme_button color2 inverse">See All Categories</a> </p>
						</div>
					</div>
				</div>
			</section>
			<section id="features" class="ls section_padding_top_150 section_padding_bottom_130 columns_margin_bottom_30">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<h2 class="section_header">Why Choose Us?</h2> <a href="about.html" class="theme_button color2 inverse min_width_button">About Us</a> </div>
						<div class="col-md-4 col-sm-6">
							<div class="teaser media hover_icon">
								<div class="media-left">
									<div class="teaser_icon rounded main_bg_color size_small"> <i class="fa fa-tachometer"></i> </div>
								</div>
								<div class="media-body toppadding_10">
									<h5 class="hover-color2"><a href="#">Newest Technologies</a></h5>
									<p>Consetetur sadipscing elitr diam nonumy eirmod tempor invidunt.</p>
								</div>
							</div>
							<div class="teaser media hover_icon">
								<div class="media-left">
									<div class="teaser_icon rounded main_bg_color size_small"> <i class="fa fa-cloud"></i> </div>
								</div>
								<div class="media-body toppadding_10">
									<h5 class="hover-color2"><a href="#">Taking Care of Nature</a></h5>
									<p>Ut labore et dolore magna aliquyam erat sed diam voluptua.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="teaser media hover_icon">
								<div class="media-left">
									<div class="teaser_icon rounded main_bg_color size_small"> <i class="fa fa-tag"></i> </div>
								</div>
								<div class="media-body toppadding_10">
									<h5 class="hover-color2"><a href="#">Fair Prices</a></h5>
									<p>At vero eos et accusam ejusto duo dolores et ea rebum clita gubergren.</p>
								</div>
							</div>
							<div class="teaser media hover_icon">
								<div class="media-left">
									<div class="teaser_icon rounded main_bg_color size_small"> <i class="fa fa-cloud"></i> </div>
								</div>
								<div class="media-body toppadding_10">
									<h5 class="hover-color2"><a href="#">High Customer Satisfaction</a></h5>
									<p>Nosea takimata sanctus est lorem ipsum dolor sit amet.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="cs gradient section_padding_top_65 section_padding_bottom_50 columns_margin_bottom_20">
				<div class="container">
					<div class="row">
						<div class="col-md-20 col-sm-4 col-xs-6 col-xxs-12">
							<div class="teaser text-center">
								<h3 class="counter" data-from="0" data-to="25" data-speed="2100">0</h3>
								<p>Years Experience</p>
							</div>
						</div>
						<div class="col-md-20 col-sm-4 col-xs-6 col-xxs-12">
							<div class="teaser text-center">
								<h3 class="counter" data-from="0" data-to="893" data-speed="2100">0</h3>
								<p>Medicament Invented</p>
							</div>
						</div>
						<div class="col-md-20 col-sm-4 col-xs-6 col-xxs-12">
							<div class="teaser text-center">
								<h3 class="counter" data-from="0" data-to="75" data-speed="2100">0</h3>
								<p>Awards Winned</p>
							</div>
						</div>
						<div class="col-md-20 col-sm-6 col-xs-6 col-xxs-12">
							<div class="teaser text-center">
								<h3 class="counter-wrap"> <span class="counter" data-from="0" data-to="673" data-speed="2100"></span> <span class="counter-add">k</span> </h3>
								<p>Happy Clients</p>
							</div>
						</div>
						<div class="col-md-20 col-sm-6 col-xs-12">
							<div class="teaser text-center">
								<h3 class="counter" data-from="0" data-to="751" data-speed="2100">0</h3>
								<p>Pharmacies Partners</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="pipeline" class="ds color background_cover page_features section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-8 col-md-offset-4 col-lg-offset-6">
							<h2 class="section_header">Development pipeline</h2>
							<p class="highlight bottommargin_20"><strong>Balanced mix of new substance developments and life cycle management opportunities.</strong></p>
							<p>We focus on core competencies and its many years of experience. We thus hold a leading position in many therapeutic fields: for instance in the treatment of hemophilia and multiple sclerosis, in contrast media and oral contraception. We are also
								striving for such a leading position in oncology.</p>
							<div class="row topmargin_40 columns_margin_bottom_20">
								<div class="col-sm-4 col-xs-6 col-xxs-12">
									<div class="vertical-item teaser clear-media hover_bg_teaser ls with_padding rounded with_shadow min_height_165">
										<p class="big highlight2 bottommargin_20 topmargin_5">01</p>
										<h5 class="margin_0">Research &amp; Preclinical</h5>
										<div class="media-links clear-media"> <a href="pipeline-single.html" class="abs-link"></a> </div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-6 col-xxs-12">
									<div class="vertical-item teaser clear-media hover_bg_teaser ls with_padding rounded with_shadow min_height_165">
										<p class="big highlight2 bottommargin_20 topmargin_5">02</p>
										<h5 class="margin_0">Starting Phase</h5>
										<div class="media-links clear-media"> <a href="pipeline-single.html" class="abs-link"></a> </div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-6 col-xxs-12">
									<div class="vertical-item teaser clear-media hover_bg_teaser ls with_padding rounded with_shadow min_height_165">
										<p class="big highlight2 bottommargin_20 topmargin_5">03</p>
										<h5 class="margin_0">Medium Phase</h5>
										<div class="media-links clear-media"> <a href="pipeline-single.html" class="abs-link"></a> </div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-6 col-xxs-12">
									<div class="vertical-item teaser clear-media hover_bg_teaser ls with_padding rounded with_shadow min_height_165">
										<p class="big highlight2 bottommargin_20 topmargin_5">04</p>
										<h5 class="margin_0">Finishing Phase</h5>
										<div class="media-links clear-media"> <a href="pipeline-single.html" class="abs-link"></a> </div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-6 col-xxs-12">
									<div class="vertical-item teaser clear-media hover_bg_teaser ls with_padding rounded with_shadow min_height_165">
										<p class="big highlight2 bottommargin_20 topmargin_5">05</p>
										<h5 class="margin_0">After Drug Approval</h5>
										<div class="media-links clear-media"> <a href="pipeline-single.html" class="abs-link"></a> </div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-6 col-xxs-12">
									<div class="vertical-item teaser clear-media hover_bg_teaser ls with_padding rounded with_shadow min_height_165">
										<p class="big highlight2 bottommargin_20 topmargin_5">06</p>
										<h5 class="margin_0">Drugs Production</h5>
										<div class="media-links clear-media"> <a href="pipeline-single.html" class="abs-link"></a> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="blog" class="ls section_padding_top_150 section_padding_bottom_130">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="section_header text-center">Our Recent Blogs</h2>
							<div class="owl-carousel text-nav" data-nav="true" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1">
								<div class="row">
									<div class="col-md-6">
										<div class="panel-group" id="posts-accordion1">
											<div class="panel panel-blog-post">
												<div class="panel-heading"> <a data-toggle="collapse" data-parent="#posts-accordion1" href="#blog-collapse1">
										</a>
													<div class="date entry-meta-corner"> <span>09</span> <span>10/17</span> </div>
													<h4 class="hover-color2"> <a href="blog-single-right.html">At vero eos et accusam justo duo</a> </h4>
													<div class="content-justify greylinks fontsize_12"> <a href="#">
												<i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Sam C. Hood
											</a> <a href="#">
												<i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">87</span>
											</a> </div>
												</div>
												<div id="blog-collapse1" class="panel-collapse collapse in">
													<div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor! </div>
												</div>
											</div>
											<div class="panel panel-blog-post">
												<div class="panel-heading"> <a data-toggle="collapse" data-parent="#posts-accordion1" href="#blog-collapse2" class="collapsed">											
										</a>
													<div class="date entry-meta-corner"> <span>07</span> <span>10/17</span> </div>
													<h4 class="hover-color2"> <a href="blog-single-right.html">Dolores et ea rebum clita kasd</a> </h4>
													<div class="content-justify greylinks fontsize_12"> <a href="#">
												<i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Sandra C. Vasquez
											</a> <a href="#">
												<i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">75</span>
											</a> </div>
												</div>
												<div id="blog-collapse2" class="panel-collapse collapse">
													<div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor! </div>
												</div>
											</div>
											<div class="panel panel-blog-post">
												<div class="panel-heading"> <a data-toggle="collapse" data-parent="#posts-accordion1" href="#blog-collapse3" class="collapsed">											
										</a>
													<div class="date entry-meta-corner"> <span>04</span> <span>10/17</span> </div>
													<h4 class="hover-color2"> <a href="blog-single-right.html">Gubergren no sea takimata sanctus</a> </h4>
													<div class="content-justify greylinks fontsize_12"> <a href="#">
												<i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Paul K. Reynolds
											</a> <a href="#">
												<i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">75</span>
											</a> </div>
												</div>
												<div id="blog-collapse3" class="panel-collapse collapse">
													<div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor! </div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="vertical-item content-absolute content-padding">
											<div class="item-media rounded overflow_hidden ds black"> <img src="images/blog_post1.jpg" alt="">
												<div class="date entry-meta-corner main_bg_color"> <span>04</span> <span>10/17</span> </div>
											</div>
											<div class="item-content ds">
												<h4 class="entry-title highlight hover-color2 bottommargin_0"> <a href="blog-single-right.html">Lorem ipsum dolor amet, consetetur sadipscing</a> </h4>
												<div class="content-justify darklinks fontsize_12 regular"> <a href="#">
											<i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Margarita R. Miller
										</a> <a href="#">
											<i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">75</span>
										</a> </div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="panel-group" id="posts-accordion2">
											<div class="panel panel-blog-post">
												<div class="panel-heading"> <a data-toggle="collapse" data-parent="#posts-accordion2" href="#blog-collapse4">
										</a>
													<div class="date entry-meta-corner"> <span>09</span> <span>10/17</span> </div>
													<h4 class="hover-color2"> <a href="blog-single-right.html">At vero eos et accusam justo duo</a> </h4>
													<div class="content-justify greylinks fontsize_12"> <a href="#">
												<i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Sam C. Hood
											</a> <a href="#">
												<i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">87</span>
											</a> </div>
												</div>
												<div id="blog-collapse4" class="panel-collapse collapse in">
													<div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor! </div>
												</div>
											</div>
											<div class="panel panel-blog-post">
												<div class="panel-heading"> <a data-toggle="collapse" data-parent="#posts-accordion2" href="#blog-collapse5" class="collapsed">											
										</a>
													<div class="date entry-meta-corner"> <span>07</span> <span>10/17</span> </div>
													<h4 class="hover-color2"> <a href="blog-single-right.html">Dolores et ea rebum clita kasd</a> </h4>
													<div class="content-justify greylinks fontsize_12"> <a href="#">
												<i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Sandra C. Vasquez
											</a> <a href="#">
												<i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">75</span>
											</a> </div>
												</div>
												<div id="blog-collapse5" class="panel-collapse collapse">
													<div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor! </div>
												</div>
											</div>
											<div class="panel panel-blog-post">
												<div class="panel-heading"> <a data-toggle="collapse" data-parent="#posts-accordion2" href="#blog-collapse6" class="collapsed">											
										</a>
													<div class="date entry-meta-corner"> <span>04</span> <span>10/17</span> </div>
													<h4 class="hover-color2"> <a href="blog-single-right.html">Gubergren no sea takimata sanctus</a> </h4>
													<div class="content-justify greylinks fontsize_12"> <a href="#">
												<i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Paul K. Reynolds
											</a> <a href="#">
												<i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">75</span>
											</a> </div>
												</div>
												<div id="blog-collapse6" class="panel-collapse collapse">
													<div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor! </div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="vertical-item content-absolute content-padding">
											<div class="item-media rounded overflow_hidden ds black"> <img src="images/blog_post1.jpg" alt="">
												<div class="date entry-meta-corner main_bg_color"> <span>04</span> <span>10/17</span> </div>
											</div>
											<div class="item-content ds">
												<h4 class="entry-title highlight hover-color2 bottommargin_0"> <a href="blog-single-right.html">Lorem ipsum dolor amet, consetetur sadipscing</a> </h4>
												<div class="content-justify darklinks fontsize_12 regular"> <a href="#">
											<i class="fa fa-user rightpadding_5" aria-hidden="true"></i> by Margarita R. Miller
										</a> <a href="#">
											<i class="fa fa-comment rightpadding_5" aria-hidden="true"></i> <span class="amount">75</span>
										</a> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="testimonials" class="ds color parallax page_testimonials section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="section_header text-center"> Client Testimonials </h2>
							<div class="owl-carousel" data-responsive-lg="3" data-nav="false" data-dots="true">
								<blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/01.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Heidi J. Cobb</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="ls with_border with_padding text-center rounded"> <img src="images/faces/02.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Felicia L. Brooks</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/03.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Frank C. McGee</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/01.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Heidi J. Cobb</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="ls with_border with_padding text-center rounded"> <img src="images/faces/02.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Felicia L. Brooks</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/03.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Frank C. McGee</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/01.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Heidi J. Cobb</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="ls with_border with_padding text-center rounded"> <img src="images/faces/02.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Felicia L. Brooks</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
								<blockquote class="with_border with_padding text-center rounded"> <img src="images/faces/03.jpg" alt=""> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt utlabore et dolore magna aliquyam.
									<div class="item-meta">
										<h5 class="highlight hover-dark-color"><a href="#">Frank C. McGee</a></h5>
										<p class="highlight2">Customer</p>
									</div>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
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
										<div class="contact-form-name"> <label for="name">Full Name <span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control text-center" placeholder="Name" requrired > </div>
									</div>
									<div class="col-sm-6">
										<div class="contact-form-email"> <label for="email">Email address<span class="required">*</span></label> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control text-center" placeholder="Email Address" requrired > </div>
									</div>
									<div class="col-sm-6">
										<div class="contact-form-phone"> <label for="phone">Phone<span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control text-center" placeholder="Phone Number" requrired > </div>
									</div>
									<div class="col-sm-6">
										<div class="contact-form-subject"> <label for="subject">Subject<span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control text-center" placeholder="Your Subject" requrired > </div>
									</div>
									<div class="col-sm-12">
										<div class="contact-form-message"> <label for="message">Message</label> <textarea aria-required="true" rows="4" cols="45" name="message" id="message" class="form-control text-center" placeholder="Message..."></textarea> </div>
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
<script>
 window.onload=function(){
      document.getElementById("btn").click();
    };
</script>