	<?php include"header.php";
	
	
$pro_id = mysqli_real_escape_string($con,$_GET["pro_id"]);
?>

<?php 
if((isset($_POST["name"])) && (isset($_POST["phone"]))&& (isset($_POST["email"]))&& (isset($_POST["message"])) ) {
extract($_POST);
$con_sub="Category: $cat_name <br>Product Name: $prod_name <br>Description: $prod_desc <br>Type: $prod_type";
          mysqli_query($con,"insert into quote_form(con_name,con_email,con_mob,con_msg,con_sub,con_time)values ('$name','$email','$phone','$message','$con_sub','$time_stamp')");
			$status="Message Sent...!";
}

?>



		
		
									<?php $sql2 = mysqli_query($con, "SELECT * FROM products WHERE pro_status='Active' AND pro_id=$pro_id "); 
				while($row = mysqli_fetch_array($sql2)) { 
				
				$pro_name=$row["pro_name"];
				$pro_desc=$row["pro_desc"];
				$pro_type=$row["pro_type"];
				$pro_img=$row["pro_img"];
				$pro_cat=$row["pro_cat"];
				
				$int_name=$row["int_name"];
				$active_ing=$row["active_ing"];
				$manufacturer=$row["manufacturer"];
				$form=$row["form"];
				$packing=$row["packing"];
				$strength=$row["strength"];
												
				if($pro_img=='') $pro_img='logo.jpg';
				}?>
				
				
									<?php $sql3 = mysqli_query($con, "SELECT cat_name FROM category WHERE  cat_id='".$pro_cat."' "); 
				while($row = mysqli_fetch_array($sql3)) { 
				$cat_name=$row["cat_name"];
				}?>
				
					<?php 
if((isset($_POST["name"])) && (isset($_POST["phone"]))&& (isset($_POST["email"]))&& (isset($_POST["subject"])) ) {
extract($_POST);
          mysqli_query($con,"insert into quote_form(con_name,con_email,con_mob,con_sub,con_msg,con_time)values ('$name','$email','$phone','$subject','$message',NOW())");
			$status="Details Sent...!";
}


?>

			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Product Details</h2>
							<ol class="breadcrumb highlightlinks">
								<li> <a href="./">
							Home
						</a> </li>
								<li> <a href="#">Products</a> </li>
								<li class="active">Product Details</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-sm- col-md-12 col-lg-12 col-sm-push-0 col-md-push-0 col-lg-push-0">
							<div class="with_border with_padding ">
								<div itemscope="" itemtype="" class="product type-product row">
									<div class="col-md-3">
										<div class="images"> 
					            <img src="img/pro_img/<?php echo $pro_img;?>" class="attachment-shop_single wp-post-image muted_background" width="225px" height="225px" alt="" title="">
					         </div>
										<!-- eof .images -->
									</div>
									<div class="summary entry-summary col-md-9">
										<h1 itemprop="name" class="product_title entry-title"><?php echo $pro_name;?></h1>
										<div class="product-rating" itemprop="aggregateRating" itemscope="" itemtype="">
											
											<div class="review-links darklinks"><h6> <?php echo $pro_desc;?><br><br> <?php echo $pro_type;?></h6></div>
									<button class="btn btn-md btn-info" id="btn" data-toggle="modal" data-target="#exampleModal">Get Quotation</button>
										</div>
									</div>
									<!-- .summary.col- -->
								</div>
								<!-- .product.row -->
							</div>
							<!-- .muted_background -->
								
							<div class="woocommerce-tabs">
								<!-- Nav tabs -->
								<span><h6><?php echo $status;?></h6></span>
								<ul class="nav nav-tabs wc-tabs" role="tablist">
									<li><a href="#additional_tab" role="tab" data-toggle="tab">Product Details</a></li>
								
								</ul>
								<!-- Tab panes -->
								<div class="tab-content top-color-border">
									<div class="tab-pane fade" id="additional_tab">
										<table class="table table-striped topmargin_30">
											<tr>
												<th class="grey">Product Category:</th>
												<td><?php echo $cat_name;?></td>
											</tr>
											<tr>
												<th class="grey">Product Name:</th>
												<td><?php echo $pro_name;?></td>
											</tr>
											<tr>
												<th class="grey">Description:</th>
												<td><?php echo $pro_desc;?></td>
											</tr>
											<tr>
												<th class="grey">Type:</th>
												<td><a href="#"><?php echo $pro_type;?></a></td>
											</tr>
											<tr>
												<th class="grey">International Name:</th>
												<td><a href="#"><?php echo $int_name;?></a></td>
											</tr>
											<tr>
												<th class="grey">Active Ingredient:</th>
												<td><a href="#"><?php echo $active_ing;?></a></td>
											</tr>
											<tr>
												<th class="grey"> Manufacturer:</th>
												<td><a href="#"><?php echo $manufacturer;?></a></td>
											</tr>
											<tr>
												<th class="grey"> Form:</th>
												<td><a href="#"><?php echo $form;?></a></td>
											</tr>
											<tr>
												<th class="grey"> Packing:</th>
												<td><a href="#"><?php echo $packing;?></a></td>
											</tr>
											<tr>
												<th class="grey"> Strength:</th>
												<td><a href="#"><?php echo $strength;?></a></td>
											</tr>
										</table>
									</div>
									
									
									
								</div>
								<!-- eof .tab-content -->
							</div>
							<!-- .woocommerce-tabs -->
						</div>
					</div>
				</div>
			</section>
			

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quotation Form  
        <span><button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></span></h5>
      </div>
      <div class="modal-body">
       <?php echo $status;?>
<form class="contact-form columns_padding_10 bottommargin_40" method="post" action="">
<div class="row">
	<div class="col-sm-6">
		<div class="form-group bottommargin_0"> <label for="name">Country Name <span class="required">*</span></label> <i class="fa fa-flag highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Country Name" required >											</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group bottommargin_0"> <label for="phone">Phone Number<span class="required">*</span></label> <i class="fa fa-phone highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number" required >											</div>
	</div>
	<div class="col-sm-12">
		<div class="form-group bottommargin_0"> <label for="email">Email address<span class="required">*</span></label> <i class="fa fa-envelope highlight2" aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address" required >											</div>
	</div>
	
	<div class="col-sm-6">
		<div class="form-group bottommargin_0"> <label for="cat_name">Category<span class="required">*</span></label> <i class="fa fa-envelope highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" name="cat_name" id="cat_name" class="form-control" placeholder="Category" required readonly value="<?php echo $cat_name;?>">											</div>
	</div>
	
	<div class="col-sm-6">
		<div class="form-group bottommargin_0"> <label for="prod_name">Product Name<span class="required">*</span></label> <i class="fa fa-envelope highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30"  name="prod_name" id="prod_name" class="form-control" placeholder="Product Name" required readonly value="<?php echo $pro_name;?>">											</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group bottommargin_0"> <label for="prod_desc">Description<span class="required">*</span></label> <i class="fa fa-envelope highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" name="prod_desc" id="prod_desc" class="form-control" placeholder="Product Description" required readonly value="<?php echo $pro_desc;?>">											</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group bottommargin_0"> <label for="prod_type">Type<span class="required">*</span></label> <i class="fa fa-envelope highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" name="prod_type" id="prod_type" class="form-control" placeholder="Product Type" required readonly value="<?php echo $pro_type;?>">											</div>
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


				<?php include"footer.php";?>