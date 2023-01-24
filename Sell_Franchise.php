<?php include("header.php");
            $full_name = $_POST["full_name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $category = $_POST["category"];
            $brand_name = $_POST["brand_name"];
            $outlet_number = $_POST["outlet_number"];
            $area_requirement = $_POST["area_requirement"];
            $investment_range = $_POST["investment_range"];
            $estd_date = $_POST["estd_date"];
            $annual_net_profit = $_POST["annual_net_profit"];
            $amount_take_away = $_POST["amount_take_away"];
            $description = $_POST["description"];
            
            if((isset($_POST)) ) {
              // echo "insert into sell_franchise(full_name,email,phone,category,brand_name,outlet_number,investment_range,area_requirement,estd_date,annual_net_profit,amount_take_away,description)values ('$full_name','$email','$phone','$category','$brand_name','$outlet_number','$investment_range','$area_requirement','$estd_date','$annual_net_profit','$amount_take_away','$description')";
              mysqli_query($con,"insert into sell_franchise(full_name,email,phone,category,brand_name,outlet_number,investment_range,area_requirement,estd_date,annual_net_profit,amount_take_away,description)values ('$full_name','$email','$phone','$category','$brand_name','$outlet_number','$investment_range','$area_requirement','$estd_date','$annual_net_profit','$amount_take_away','$description')");
              $status="Message Sent...!";
            }?>

			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2> Sell A Franchise </h2>
							<ol class="breadcrumb highlightlinks">
								<li> <a href="index.php">
							Home
						</a> </li>
								<li class="active">Sell A Franchise</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			
			
			
			
			<!-- PAGE CODE STARTED -->
						<section class="ls page_portfolio section_padding_top_150 ">
					
					 <section class="text-center py-5 large-pad" style=" background-color: #fff">
    
        <p class="text-green h3" style="color: #152f49;">Selling a Franchise is not just about earning extra money from your well-known Brand but also to expand your Brand by opening more outlets and grow in Business Market.</p>
      </section>
<br/>
<br/>
      <section class="bg-light" style=" background-color: #fff">
        <div class="row flex no-gutters">
             <div class="col-lg-6 py-5 px-5" style="border-right: 10px solid #152f49;padding-left: 5%;">  
              <h3 class="text-green mb-4 font-ng-b">Franmax India Pvt.Ltd Helps you in expanding your Brand.</h3>
              
              <p class="mb-2"></p><p>Franmax India will help you get the best possible price for your Brand Franchise while taking the lead on getting your franchise sold so you can focus on running your business successfully.  
    
                  <br/><br/><b>Focus on your Business. We will have your back in Expanding the Brand and Selling your Franchise to Genuine Buyers and Increase your Outlet count.</b></p><p class="mb-1"></p>
                <!-- <img src="https://ufg-heroku.s3.amazonaws.com/tbausa/prod/public/triangle-right-gold.png" class="position-absolute" style="top: 50%; right: -26px;"> -->
            </div>
            <div class="col-lg-6 py-5 px-5 aboutText">
              <div class="bg-white text-left" style="border-right: 20px solid #152f49;margin-left: 18%; -webkit-box-shadow: -5px 5px 8px 1px rgba(0,0,0,0.5); box-shadow: -5px 5px 8px 1px rgba(0,0,0,0.5); padding: 50px; max-width: 400px;">
                <p class="text-green font-ng-b mb-5" style="font-size: 30px; line-height: 40px;">Considering Selling A Franchise?</p>
                <img src="images/click_here.gif" height="50"  width="150"/>
                <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal3" style="background-color: #152f49;color: #fff;">SELL A FRANCHISE</button>
      <!-- Modal -->
      <!-- Modal -->
  <!-- Modal -->
 <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="align-content: center;">SELL A FRANCHISE</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
       
        </div>
        <div class="modal-body">
          <form  method="post" action="">
          <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="full_name" class="form-control">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
              <label>Business Catagory</label>
                   <select name="category" id="Business" class="form-control">
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
              <input type="text" name="brand_name" class="form-control">
            </div>
             <div class="form-group">
              <label>No. of Outlets</label>
              <input type="text" name="outlet_number" class="form-control">
            </div> 
            <div class="form-group">
              <label>Investment Range</label>
                    <select name="investment_range" id="InvestmentRange" class="form-control">
                    <option value="0_to_5_lakh ">0 - 5,00,000 INR</option>
                    <option value="5_to_10_lakh">5,00,000 - 10,00,000 INR</option>
                    <option value="10_to_20_lakh">10,00,000 - 20,00,000 INR</option>
                    <option value="20_to_50_lakh">20,00,000 - 50,00,000 INR</option>
                    <option value="Above_50_lakh">Above 50,00,000 INR</option>
                   </select>
            </div>
             <div class="form-group">
              <label>Area Requirement</label>
              <input type="text" name="area_requirement" class="form-control">
            </div>
             <div class="form-group">
              <label>Estd Date/Year</label>
              <input type="text" name="estd_date" class="form-control">
            </div>
             <div class="form-group">
              <label>Annual Net Profit</label>
              <input type="text" name="annual_net_profit" class="form-control">
            </div>
             <div class="form-group">
              <label>Amount Take Away</label>
              <input type="text" name="amount_take_away" class="form-control">
            </div>
            <div class="form-group">
              <label>Description</label>
                <textarea id="Description" name="description" rows="4" cols="50" class="form-control"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-inverse btn-success" >Register</button>
          <button type="button" class="btn btn-inverse btn-danger" data-dismiss="modal">Close</button>
        </div>
      </form>
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
                
                <p style="color: #152f49;">Many additional questions may arise during the Brand Expansion process. Please do not hesitate to have us explain in detail any portion of this process. You will discover that, with Franmax India’s assistance, you can have a successful experience in expanding your Brand and increase your Outlet count.</p>
<br/>
			<h4><p class="fs-lg text-center"><strong> Franmax India Pvt. Ltd. will find the right Investor for your Brand and will help you in Selling your Franchise.</strong></p></h4>	
                
               <br/>
               <br/>
			</div><!-- /container -->
		  </section>
	  
<br/>
<br/>
      <section class="page-content sec-step-list">

			<div class="container">
                
                <p style="color: #152f49;">Franmax India has been a mainstay in the Franchise industry, specializing in Franchise sales. We focus on all industry to find the right Investor. This means faster results for you. Our Partners are some of the most sophisticated and experienced in the industry. Many partners have owned businesses and can relate to your specific needs. Our service, dedication and drive is your guarantee that if you are prepared to sell a Franchise, we are ready to sell it for you.</p>
<br/>
			<h4><p class="fs-lg text-center"><strong>Let Franmax India be the right advisor to help you sell your Franchise each step of the way.</strong></p></h4>	
                
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