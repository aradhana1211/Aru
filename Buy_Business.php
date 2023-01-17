<?php include("header.php");
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
							<h2> Buy A Business </h2>
							<ol class="breadcrumb highlightlinks">
								<li> <a href="index.php">
							Home
						</a> </li>
								<li class="active">Buy A Business</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			
			
			
			
			<!-- PAGE CODE STARTED -->
						<section class="ls page_portfolio section_padding_top_150 ">
					
					 <section class="text-center py-5 large-pad" style=" background-color: #fff">
    
        <p class="text-green h3" style="color: #152f49;">Buying a business is one of the biggest life decisions you will ever have to make.</p>
      </section>
<br/>
<br/>
      <section class="bg-light" style=" background-color: #fff">
        <div class="row flex no-gutters">
             <div class="col-lg-6 py-5 px-5" style="border-right: 10px solid #152f49;padding-left: 5%;">  
              <h3 class="text-green mb-4 font-ng-b">Don't Worry: Franmax India Pvt.Ltd Has Your Back</h3>
              
              <p class="mb-2"></p><p>You have made the decision to control your financial future by purchasing a business. Owning a business is the greatest way to build wealth and take charge of your own destiny. 
    
                  <br/><br/><b>Congratulations for contacting Franmax India, you’ve selected the best in the industry! Now the process begins to help find and acquire the right business for you.</b></p><p class="mb-1"></p>
                <!-- <img src="https://ufg-heroku.s3.amazonaws.com/tbausa/prod/public/triangle-right-gold.png" class="position-absolute" style="top: 50%; right: -26px;"> -->
            </div>
            <div class="col-lg-6 py-5 px-5 aboutText">
              <div class="bg-white text-left" style="border-right: 20px solid #152f49;margin-left: 18%; -webkit-box-shadow: -5px 5px 8px 1px rgba(0,0,0,0.5); box-shadow: -5px 5px 8px 1px rgba(0,0,0,0.5); padding: 50px; max-width: 400px;">
                <p class="text-green font-ng-b mb-5" style="font-size: 30px; line-height: 40px;">Considering Buying A Business?</p>
                <img src="images/click_here.gif" height="50"  width="150"/>
                <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal4" style="background-color: #152f49;color: #fff;">BUY A BUSINESS</button>
      <!-- Modal -->
      <!-- Modal -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="align-content: center;">BUY A BUSINESS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <form></form>
           <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="Name" class="form-control">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="Email" class="form-control">
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="text" name="Phone" class="form-control">
            </div>
            <div class="form-group">
              <label>Business Catagory</label>
                   <select name="Bussiness" id="Bussiness" class="form-control">
                    <option value="Food_and_Beverages">Food & Beverages</option>
                    <option value="Retail">Retail</option>
                    <option value="Automobile">Automobile</option>
                    <option value="Beauty_and_Fashion">Beauty & Fashion</option>
                    <option value="Health_and_Fitness">Health & Fitness</option>
                    <option value="Education">Education</option>
                    <option value="Entertainment">Entertainment</option>
                    <!-- <option value="Clothing">Clothing (cancel)</option> -->
                    <option value="Service">Service</option>
                   </select>
            </div>
            <div class="form-group">
              <label>Brand Name</label>
              <input type="text" name="BrandName" class="form-control">
            </div>
            <div class="form-group">
              <label>Outlet Location Preferred</label>
              <input type="text" name="OutletLocation" class="form-control">
            </div>
             <div class="form-group">
              <label>Investment Range</label>
                    <select name="InvestmentRange" id="InvestmentRange" class="form-control">
                    <option value="0_to_5_lakh ">0 - 5,00,000 INR</option>
                    <option value="5_to_10_lakh">5,00,000 - 10,00,000 INR</option>
                    <option value="10_to_20_lakh">10,00,000 - 20,00,000 INR</option>
                    <option value="20_to_50_lakh">20,00,000 - 50,00,000 INR</option>
                    <option value="Above_50_lakh">Above 50,00,000 INR</option>
                   </select>
            </div>
            <div class="form-group">
              <label>Description</label>
                <textarea id="Description" name="Description" rows="4" cols="50" class="form-control"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-inverse btn-success" >Register</button>
          <button type="button" class="btn btn-inverse btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
<!-- Modal Ended -->
			  </div>
            </div>
        </div>
      </section>  
<br/>
<br/>
      
	  
	   <section class="page-content sec-step-list">

			<div class="container">
                
                <p style="color: #152f49;">Many additional questions may arise during the buying process. Please do not hesitate to have us explain in detail any portion of this process. You will discover that, with Franmax India’s assistance, you can have a successful experience purchasing and owning your own business.</p>
<br/>
			<h4><p class="fs-lg text-center"><strong> Franmax India Pvt. Ltd. will find the right Business for you based on your given Information in Buying a Business.</strong></p></h4>	
                
               <br/>
               <br/>
			</div><!-- /container -->
		  </section>
	  
<br/>
<br/>
      <section class="page-content sec-step-list">

			<div class="container">
                
                <p style="color: #152f49;">Franmax India has been a mainstay in the business brokerage industry, specializing only in businesses sales. We focus on your specific industry to find the right seller. This means faster results for you. Our partners are some of the most sophisticated and experienced in the industry. Many Partners have owned businesses and can relate to your specific needs. Our service, dedication and drive is your guarantee that if you are prepared to buy a company, we are ready to buy it for you.</p>
<br/>
			<h4><p class="fs-lg text-center"><strong>Let Franmax India be the right advisor to help you buy a Business each step of the way.</strong></p></h4>	
                
               <br/>
               <br/>
			</div><!-- /container -->
		  </section>
					
					</section>	
						<!-- PAGE CODE ENDED-->
<?php include("footer.php");?>
	
	
	
	
	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
</body>

</html>