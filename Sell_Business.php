<?php include("header.php");?>

			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2> Sell Your Business </h2>
							<ol class="breadcrumb highlightlinks">
								<li> <a href="index.php">
							Home
						</a> </li>
								<li class="active">Sell Your Business</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			
			
			
			
			<!-- PAGE CODE STARTED -->
						<section class="ls page_portfolio section_padding_top_150 ">
						  <section class="text-center py-5 large-pad" style=" background-color: #fff">
    
        <p class="text-green h3" style="color: #152f49;">Now that you’ve decided to sell, what comes next?</p>
      </section>
<br/>
<br/>
      <section class="bg-light" style=" background-color: #fff">
        <div class="row flex no-gutters">
             <div class="col-lg-6 py-5 px-5" style="border-right: 10px solid #152f49;padding-left: 5%;">  
              <h3 class="text-green mb-4 font-ng-b">Deep Breath: Franmax India Pvt.Ltd Has Your Back</h3>
              
              <p class="mb-2"></p><p>Before you decide on selling your company, you owe it to yourself to call Franmax India Pvt.Ltd. There is no obligation, just a confidential conversation about how to sell your company and how much it is worth, now and in the future!
    
                  <br/><br/><b>Franmax India guarantees that our highly professional brokers will be able to offer you sound advice and insight into selling your business in your first meeting.</b></p><p class="mb-1"></p>
                <!-- <img src="https://ufg-heroku.s3.amazonaws.com/tbausa/prod/public/triangle-right-gold.png" class="position-absolute" style="top: 50%; right: -26px;"> -->
            </div>
            <div class="col-lg-6 py-5 px-5 aboutText">
              <div class="bg-white text-left" style="border-right: 20px solid #152f49;margin-left: 18%; -webkit-box-shadow: -5px 5px 8px 1px rgba(0,0,0,0.5); box-shadow: -5px 5px 8px 1px rgba(0,0,0,0.5); padding: 50px; max-width: 400px;">
                <p class="text-green font-ng-b mb-5" style="font-size: 30px; line-height: 40px;">Considering selling your business?</p>
                <img src="images/click_here.gif" height="50"  width="150"/>
                <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal1" style="background-color: #152f49;color: #fff;">SELL YOUR BUSINESS</button>
      <!-- Modal -->
      <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
             
              <h4 class="modal-title" style="align-content: center;">SELL YOUR BUSINESS</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <?php 
            $name = $_POST["full_name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $category = $_POST["category"];
            $outlet_number = $_POST["outlet_number"];
            $outlet_location = $_POST["outlet_location"];
            $amount = $_POST["amount"];
            $description = $_POST["description"];
            $brand_name = $_POST["brand_name"];

            if((isset($_POST["full_name"])) && (isset($_POST["email"]))&& (isset($_POST["phone"]))&& (isset($_POST["category"])) && (isset($_POST["outlet_number"])) && (isset($_POST["outlet_location"]))&& (isset($_POST["amount"]))&& (isset($_POST["description"]))) {
              extract($_POST);
              mysqli_query($con,"insert into sell_business(full_name,email,phone,category,brand_name,outlet_number,outlet_location,amount,description)values ('$name','$email','$phone','$category','$brand_name','$outlet_number','$outlet_location','$amount','$description')");
              $status="Message Sent...!";
            }


?>
            <form method="post" action="">
            <div class="modal-body">
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
                  <label>Outlet Location to be sold</label>
                  <input type="text" name="outlet_location" class="form-control">
                </div>
                 <div class="form-group">
                  <label>Amount Expected</label>
                  <input type="text" name="amount" class="form-control">
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
              </div>
            </div>
        </div>
      </section>  
<br/>
<br/>
      <section class="text-center py-5 mid-pad" style=" background-color: #fff">
              <div class="container">
                <div class="row text-center">
                  <h4 class="col-xs-12 text-green font-ng-b mb-5">Just a Few Reasons You May Be Considering Selling Your Business</h4>
                  <div class="col-xs-12 col-md-4">
                    <img src="images/icon-bulb.png" class="mb-4" style="max-width: 180px;">
                    <p class="font-ng-b mb-lg-0" style="color: #152f49;">You’d like to just relax for a while.</p>
                  </div>
                  <div class="col-xs-12 col-md-4">
                    <img src="images/icon-family.png" class="mb-4" style="max-width: 180px;">
                    <p class="font-ng-b mb-lg-0" style="color: #152f49;">You want to spend time with your family.</p>
                  </div>
                  <div class="col-xs-12 col-md-4">
                    <img src="images/icon-chair.png" class="mb-4" style="max-width: 180px;">
                    <p class="font-ng-b mb-lg-0" style="color: #152f49;">You’ve got plans for another enterprise.</p>
                  </div>
                </div>
              </div>
      </section>

      <section class="sec-why-business-broker" style="color: #152f49;
        background-color: #fff;margin-top: 5rem;" >
        	<div class="container" style="max-width: 1170px;
            margin: 0 auto;
            width: 100%">
                
                <div class="left col-lg-6" style="padding: 40px 20px;">
                        <h4 class="fs-md bottom-thirty" style="margin-bottom: 30px;"><strong>Why Do I Need A Business Broker Or Advisor?</strong></h2>
                        <ul class="list-angle-right">
                            <li>You must keep the sale confidential.</li>
                            <li>You want to get the best price.</li>
                            <li>You need quality representation (Pro athlete’s understand this).</li>
                            <li>The selling of a business is a very complex process.</li>
                            <li>Most successful business people are not experienced in&nbsp;the selling process.</li>
                            <li>Owners in general do not have the time to sell their own company.</li>
                        </ul>
                    </div>
                    
                    <div class="right col-lg-6" style="border-left: 10px solid #152f49; padding: 40px 20px;">
                        <h4 class="fs-md bottom-thirty" style="margin-bottom: 30px;"><strong>Why Should I Use Franmax India As My Business Advisor?</strong></h2>
                        <ul class="list-angle-right" style="text-size-adjust: 10px;">
                            <li >We keep the sale confidential.</li>
                            <li>We have thousands of buyers.</li>
                            <li>We create competition for your company.</li>
                            <li>We have a vast internal marketplace for business sales.</li>
                            <li>We establish the right selling price.</li>
                            <li>We utilize a worldwide network to advertise your business.</li>
                            <li>We spend more money on advertising than anyone in our industry.</li>
                            <li>Let Franmax India do the work for you. You need to run your company.</li>
                            <li>We’ll maximize the selling price of your business.</li>
                            <li>Our goal is always to obtain the best deal for each client.</li>
                        </ul>
                    </div>
                
            </div>
      </section>
<br/>
<br/>
      <section class="page-content sec-step-list">

			<div class="container">
                
                <p style="color: #152f49;">Franmax India has been a mainstay in the business brokerage industry, specializing only in businesses sales. We focus on your specific industry to find the right buyer. This means faster results for you. Our brokers are some of the most sophisticated and experienced in the industry. Many brokers have owned businesses and can relate to your specific needs. Our service, dedication and drive is your guarantee that if you are prepared to sell your company, we are ready to sell it for you.</p>
<br/>
			<h4><p class="fs-lg text-center"><strong>Let Franmax India be the right broker to help you sell your company each step of the way.</strong></p></h4>	
                
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