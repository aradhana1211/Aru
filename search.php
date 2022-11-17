<?php include("header.php");

$search = mysqli_real_escape_string($con,$_POST["search"]);
?>
			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Find Your ssProduct</h2>
							<ol class="breadcrumb highlightlinks">
								<li> <a href="index.php">
							Home
						</a> </li>
								<li class="active">Search Result</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			
			<section class="ls section_padding_top_150 section_padding_bottom_130">
				<div class="container">
				    
				    
				    
				    
				    <div class="row">
				        <div class="shop-sorting">
								<form class="form-inline content-justify vertical-center content-margins">
									<div> Show as </div>
									<div class="form-group select-group"> <select aria-required="true" class="choice form-control" id="mySelect" onchange="myFunction()">
		                        <option value="table">Table</option>
		                        <option value="grid">Grid</option>
		                    </select> <i class="fa fa-angle-down theme_button color1 no_bg_button" aria-hidden="true"></i> </div>
								</form>
							</div>
							
						<div class="col-sm-12" id="table_view" style="display:block;">
							<div class="table-responsive">
								<table class="table_template darklinks" id="timetable">
									<thead>
									     
										<tr>
											<th>Product Name</th>
											<th>Description</th>
											<th>Type</th>
										</tr>
									</thead>
									<tbody>
									    
									<?php $sql2 = mysqli_query($con, "SELECT * FROM products WHERE pro_status='Active' AND pro_name LIKE '%$search%' "); 
				while($row = mysqli_fetch_array($sql2)) { ?>
			
										<tr>
											<td class=""  style=" text-align: left!important; padding: 10px 5px!important;"> 	<a href="view.php?pro_id=<?php echo $row["pro_id"];?>"><?php echo $row["pro_name"];?> </a></td>
											<td class="" style=" text-align: left!important; padding: 10px 5px!important;"> <?php echo $row["pro_desc"];?></td>
											<td class="" style=" text-align: left!important; padding: 10px 5px!important;"><?php echo $row["pro_type"];?> </td>
											
										</tr>
								<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
					
					
					
					
					<div class="row" id="grid_view" style="display:none;">
						<div class="col-sm-12">
							<div class="columns-4">
								<ul id="products" class="products list-unstyled">
								
									<?php $sql2 = mysqli_query($con, "SELECT * FROM products WHERE pro_status='Active' AND pro_cat='".$_GET["pro_cat"]."' "); 
				 $procount=mysqli_num_rows($sql2);
				while($row = mysqli_fetch_array($sql2)) { ?>
									<li class="product type-product">
										<div class="vertical-item content-padding text-center with_border">
											<div class="item-media muted_background bottommargin_30">  <img src="../img/pro_img/<?php echo $row["pro_image"];?>" style="height:280px!important; width:360px!important;" alt=""> </div>
											<div class="item-content">
												<h4 class="hover-color2 bottommargin_0"> <a href="shop-product-right.html"><?php echo $row["pro_name_e"];?></a> </h4>
												
												<p style="overflow: hidden!important;  white-space: nowrap!important;  text-overflow: ellipsis!important;"><?php echo $row["pro_name"];?></p>
												<p class="topmargin_30"> <a href="view.php?pro_id=<?php echo $row["pro_id"];?>" class="theme_button color2 inverse min_width_button">View Product</a> </p>
											</div>
										</div>
									</li>
									<?php } ?>
									
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</section>
<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  if(x == 'grid') {
   $( "#table_view" ).hide();  $( "#grid_view" ).show();
  } if(x == 'table') {
 $( "#table_view" ).show();  $( "#grid_view" ).hide();
  }
  }
</script>			
			
			
	<?php include("footer.php");?>
	
	
	
	
	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
</body>

</html>