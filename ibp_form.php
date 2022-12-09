<?php
  include "database.php";
  if(isset($_POST['submit']))
  {
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $company=$_POST['company'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $area=$_POST['area'];
    $postal_code=$_POST['postal_code'];
    $telephone=$_POST['telephone'];
    $fax=$_POST['fax'];
    $email_address=$_POST['email_address'];
    $institute1=$_POST['institute1'];
    $degree1=$_POST['degree1'];
    $year1=$_POST['year1'];
    $institute2=$_POST['institute2'];
    $degree2=$_POST['degree2'];
    $year2=$_POST['year2'];
    $ibp_program=$_POST['ibp_program'];
    $referee_name=$_POST['referee_name'];
    $referee_email=$_POST['referee_email'];
    $referee_company=$_POST['referee_company'];
    $experience_company1=$_POST['experience_company1'];
    $position1=$_POST['position1'];
    $duration1=$_POST['duration1'];
    $from1=$_POST['from1'];
    $to1=$_POST['to1'];
    $experience_company2=$_POST['experience_company2'];
    $position2=$_POST['position2'];
    $duration2=$_POST['duration2'];
    $from2=$_POST['from2'];
    $to2=$_POST['to2'];

    $date1=$_POST['date1'];
    $date2=$_POST['date2'];

    $query =  mysqli_query($con,"INSERT brand SET name='$name',category_id='$category_id',concern_person_name='$concern_person_name',concern_person_email='$concern_person_email',concern_person_phone='$concern_person_phone',concern_person_designation='$concern_person_designation' , area='$area' ,no_franchise_outlet='$no_franchise_outlet' ,establistment_year='$establistment_year' ,about_us='$about_us' ,operation_commenced_on='$operation_commenced_on' ,franchise_commenced_on='$franchise_commenced_on' ,investment='$investment' ,franchise_fee='$franchise_fee' ,anticipated_percentage_return_on_investment='$anticipated_percentage_return_on_investment' ,pay_back='$pay_back' ,investment_requirements='$investment_requirements' ,north='$north' ,south='$south' ,east='$east' ,west='$west' ,central='$central' ,union_territories='$union_territories',type_property_required='$type_property_required',floor_area_requirement='$floor_area_requirement',detailed_operating_manuals_for_franchisees='$detailed_operating_manuals_for_franchisees',is_field_assistance_available_for_franchisee='$is_field_assistance_available_for_franchisee' ,expert_guidance_from_head_office_to_franchisee_in_opening='$expert_guidance_from_head_office_to_franchisee_in_opening',current_it_systems_will_be_included='$current_it_systems_will_be_included',standard_agreement='$standard_agreement',franchise_term_years='$franchise_term_years' ,renewable='$renewable' ");

    $last_id = mysqli_insert_id($con);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Franmaxindia</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        @media screen and (min-width: 330px) {
        header{
          background-color: #2d3254;
          min-height: 179px;
          width: 100%;

        }}
         @media screen and (min-width: 990px) {
        header{
          background-color: #2d3254;
          min-height: 225px;
          width: 100%;

        }}
         @media screen and (min-width: 990px) {
        #p1{
          color: orange;    

        }}
         @media screen and (min-width: 330px) {
        #p1{
          color: orange;    

        }}
         @media screen and (min-width: 990px) {
         .ibp{
          font-size: 70px!important;
          font-weight: bolder;
         }}
       
         @media screen and (min-width: 330px) {
         #ibp{
              margin-left: 0px;
          font-size: 24px;
         margin-top: 50px;
          font-weight: bolder;
          left: 21px;
         }}
         @media screen and (min-width: 990px) {
         .ibp1{
          color: white;
          font-size: 21px!important;
          font-weight: 100;
         }
       }
        @media screen and (min-width: 330px) {
         #ibp1{
          color: white!important;
          font-size: 11px;

         }
       }
       @media screen and (min-width: 990px) {
         #enroll{
          color: white;
          font-size: 24px!important;
         
         }
       }
       @media screen and (min-width: 330px) {
         .enrol1{
             margin-left: 2px;
          color: white;
          font-size: 12px!important;
         
         }
       }
         @media screen and (min-width: 990px) {
        #img{
           
          float: right;
         
          width: 248px;
          height: 320px;
          margin-top: -296px;
         
          margin-right: 109px;
          }

        }
        @media screen and (min-width: 330px) {
         img{
             
              float: right;
            width: 137px;
            height: 168px;
            margin-top: -191px;
            margin-right: 25px;
            }

        }
    </style>
  </head>
  <body>
  
  <form method="post">
    <div class="container scroll">
      <label class="heading">
        <b>Application and Personal Data Statement</b>
      </label>
      <div class="row"><br>
        <div class="col-sm-6" id="fn">
          <div class="form-group">
            <label>First Name</label> 
            <input type="text" name="first_name" id="first_name" class="form-control" required="" />
            <span id="error_last_name" class="text-danger"></span>
          </div>
        </div>
        <div class="col-sm-6" id="ln">
          <div class="form-group">
            <label>Last Name</label> 
            <input type="text" name="last_name" id="last_name" class="form-control" required="" />
            <span id="error_last_name" class="text-danger"></span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Company</label> 
        <input type="text" name="company" id="company" class="form-control" required="" />
        <span id="error_last_name" class="text-danger"></span>
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" id="address" class="form-control" required="" />
        <span id="error_first_name" class="text-danger"></span>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label>City</label> 
            <input type="text" name="city" id="city" class="form-control" required="" />
            <span id="error_last_name" class="text-danger"></span>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>State</label> 
            <input type="text" name="state" id="state" class="form-control" required="" />
            <span id="error_last_name" class="text-danger"></span>
          </div>
        </div>
        <div class="col-sm-4" id="ln">
          <div class="form-group">
            <label>Postal Code</label> 
            <input type="text" name="postal_code" id="postal_code" class="form-control" required="" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Telephone</label> 
            <input type="number" name="telephone" id="telephone" class="form-control" required="" />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Fax</label> 
            <input type="text" name="fax" id="fax" class="form-control" required="" />
            <span id="error_last_name" class="text-danger"></span>
          </div>
        </div>
        <div class="col-sm-4" id="ln">
          <div class="form-group">
            <label> Email Address</label>
            <input type="text" name="email_address" id="email" class="form-control"/>
          </div>
        </div>
    </div>
    <hr>
   
           <label class="heading">
        <b>Educational Information</b>
      </label>
      <label>(Institutions attended post high school)</label>


                    
             <div class="row"><br>
         <div class="col-sm-4">
           <div class="form-group">
         <label>Institute</label> 
         <input type="text" name="institute1" id="institute" class="form-control" required="" />
       
        </div>
        </div>
        <div class="col-sm-4">
           <div class="form-group">
         <label>Degree</label> 
         <input type="text" name="degree1" id="degree" class="form-control" required="" />
         
        </div>
        </div>
        <div class="col-sm-4" id="ln">
           <div class="form-group">
         <label> Year</label>
         <input type="nummber" name="year1" id="year" class="form-control"/>
        
        </div>
        </div>
    </div>
 
              <div class="row">
         <div class="col-sm-4">
           <div class="form-group">
         <label>Institute</label> 
         <input type="text" name="institute2" id="institute1" class="form-control" required="" />
       
        </div>
        </div>
        <div class="col-sm-4">
           <div class="form-group">
         <label>Degree</label> 
         <input type="text" name="degree2" id="degree1" class="form-control" required="" />
         
        </div>
        </div>
        <div class="col-sm-4" id="ln">
           <div class="form-group">
         <label>Year</label>
         <input type="nummber" name="year2" id="year1" class="form-control"/>
        
        </div>
        </div>
    
          </div>
             <div class="form-group">
             <label>How did you hear about IBP Program?</label>
             <input type="radio" name="ibp_program">Email/SMS
              <input type="radio" name="ibp_program">Facebook
              <input type="radio" name="ibp_program">Instagram
              <input type="radio" name="ibp_program">Word of mouth
              <input type="radio" name="ibp_program">Newspaper
             </div>
              <label>We would like to thank the one who gave you our reference through word of mouth!<br>Could you please give us their details?</label>

  <div class="row">
         <div class="col-sm-4">
           <div class="form-group">
         <label>Name</label> 
         <input type="text" name="referee_name" id="name" class="form-control" required="" />
       
        </div>
        </div>
        <div class="col-sm-4">
           <div class="form-group">
         <label>Contact/Email</label> 
         <input type="text" name="referee_email" id="contact/email" class="form-control" required="" />
         
        </div>
        </div>
        <div class="col-sm-4" id="ln">
           <div class="form-group">
         <label> Company</label>
         <input type="text" name="referee_company" id="company1" class="form-control"  />
        
        </div>
        </div>
    </div>
 
    <hr>
     <label class="heading">
        <b>Experience</b>
      </label>

  <div class="row"><br>
        <div class="col-sm-6">
           <div class="form-group">
         <label>Company</label> 
         <input type="text" name="experience_company1" id="company2" class="form-control" required="" />
         
        </div>

        </div>
        <div class="col-sm-6">
           <div class="form-group">
         <label>Position</label> 
         <input type="text" name="position1" id="position" class="form-control" required="" />
        
        </div>
        </div>
      </div>
                     <div class="row">
         <div class="col-sm-4">
           <div class="form-group">
         <label>Duration</label> 
         <input type="text" name="duration1" id="duration" class="form-control" required="" />
       
        </div>
        
        </div>
        <div class="col-sm-1">
          <p id="year1">years</p>
        </div>
        <div class="col-sm-3">
           <div class="form-group">
         <label>From</label> 
         <input type="text" name="from1" id="from" class="form-control" required="" />
         
        </div>
        </div>
        <div class="col-sm-4">
           <div class="form-group">
         <label> To</label>
         <input type="text" name="to1" id="to" class="form-control"  />
        
        </div>
        </div>
                 </div>


                 <div class="row"><br>
        <div class="col-sm-6">
           <div class="form-group">
         <label>Company</label> 
         <input type="text" name="experience_company2" id="company3" class="form-control" required="" />
         
        </div>

        </div>
        <div class="col-sm-6">
           <div class="form-group">
         <label>Position</label> 
         <input type="text" name="position2" id="position1" class="form-control" required="" />
        
        </div>
        </div>
      </div>


               <div class="row">
         <div class="col-sm-4">
           <div class="form-group">
         <label>Duration</label> 
         <input type="text" name="duration2" id="duration1" class="form-control" required="" />
       
        </div>
        
        </div>
        <div class="col-sm-1">
          <p id="p11">years</p>
        </div>
        <div class="col-sm-3">
           <div class="form-group">
         <label>From</label> 
         <input type="text" name="from2" id="from1" class="form-control" required="" />
         
        </div>
        </div>
        <div class="col-sm-4">
           <div class="form-group">
         <label> To</label>
         <input type="text" name="to2" id="to1" class="form-control"  />
        
        </div>
        </div>
                 </div>
                 <hr>
                 <label class="heading">
        <b>Payment Details</b>
      </label>
       <div class="form-group">
             <label>Payment mode</label>
             <input type="radio" name="payment">Online transfer
              <input type="radio" name="payment">Card
               <input type="radio" name="payment">Cheque
               <input type="radio" name="payment">Cash
             </div>
             <div class="form-group">
         <label>Name</label> 
         <input type="text" name="payment_name" id="name2" class="form-control" required="" />
        
        </div>
        <div class="form-group">
         <label>Transaction Details</label> 
         <input type="text" name="transaction" id="transaction" class="form-control" required="" />
        
        </div>
        <hr>
       
        <label class="heading">
        <b>IBP Selection Options</b>
      </label>
         
                <!--<button onclick="undisable()">IBP Max</button>        -->





     
               <div class="container">
        
  <table class="table table-bordered">
    <tbody>
     <tr>
        <td rowspan="2">Program</td>
        <td colspan="2" width="37%;" style="text-align: center;">Product Commission</td>
        
        <td rowspan="2" style="text-align: center;">Lead Support</td>
      </tr>
    
    
      <tr>
        <td style="width: 17%;">IDB</td>
        <td>BDB</td>
        
        
        
      </tr>
      <tr>
        <td>IBP Start</td>
        <td><b>50%</b></td>
         <td><b>50%</b></td>
         <td><b>30</b> per month</td>
      </tr>
      <tr>
        <td>IBP Pro</td>
        <td><b>70%</b></td>
        
        <td><b>70%</b></td>
        <td><b>75</b> per month</td>
      </tr>
      <tr>
        <td>IBP Max</td>
        <td><b>80%</b></td>
        
        <td><b>80%</b></td>
        <td><b>100</b> per month</td>
        
      </tr>
    </tbody>
  </table>
</div>


                 <label class="heading">
        <b>Payout Terms</b>
      </label>
      <p>A) Commission Payout cycle will be run twice on the 1st and 16th of Every Month.</p>
               <p>B) Only Banked & Cleared Revenue will be Considered for the Payout as on Cutoff date.</p>
               <p>C) Pricing for the Product must be maintaining the Minimum Price given by Franmax India to Eligible for
 given commission .</p>
 <hr>
        
                 <label class="heading">
        <b>General Terms and Conditions</b>
      </label>

            <p>1 “Confidential Information” shall mean and include all information, whether communicated in writing, orally, electronically, photographically, recording or in
any other form which is supplied by the Company to the IBP and which relates to the Company's business operations, products, proposed products including
but not limited to know-how, methods, processes, proposed processes, data, documentation, manuals, diagrams, designs, flow charts, compilations,
research, forecast studies, procedures, regulatory applications, contracts, software, source code, techniques, materials, analysis, quality control data, sales
data, reports, existing and potential/marketing plans and strategies, database rights, data relating to the Company's customers/clients and service
providers, business plans, trade/commercial information, cost and pricing information, advertising data and concepts, whether or not the foregoing
information is tested, reduced to practice, or subject to any intellectual property protection but does not include Excluded Information.</p>


    <p><b>2 TERM AND RENEWAL</b><br>
2.1 The effective date of this Agreement is and the initial term of this agreement shall be for a period of one (01) year from the date of its
execution (“Initial Term”) unless terminated earlier as per the terms of this Agreement, whichever is earlier.<br>
2.2 This Agreement shall be effective subject to the realization of payment from IBP at the time of signing of Agreement<br>
2.3 Renewal: Before the expiration of the Initial Term or any renewal term hereof, both the Parties shall mutually agree to renew this Agreement for such
further period(s) and on such terms as may be mutually agreed to between the Parties by giving 03 (three) months' prior written notice to the other Party
(“Renewal Term”). Without prejudice, it is acknowledged and agreed that here under that during the renewal term, revised commercial terms shall
be mutually agreed between the Parties.</p>

<p><b>3 OBLIGATIONS OF IBP</b><br>
3.1 The IBP shall forward the database of Clients on such regular intervals to the Company, as agreed and IBP shall also submit a monthly report of all the
activities undertaken by it, concerning generation and forwarding of prospective client database.<br>
3.2 The IBP shall always ensure that the Clients forwarded to the Company are financially sound and capable of undertaking the financial risk independently
and in their own capacity.<br>
3.3 The IBP shall in all cases inform the Clients that the Company does not guarantee any business and only provides consultancy services to its Clients.
The consultation provided by the Company to the Clients is only suggestive and not binding.</p>

<p><b>4 TERMINATION/ EFFECT OF TERMINATION</b><br>
4.1 This Agreement shall terminate:<br>
4.2 On the expiry of the Term;<br>
4.3 On serving Thirty (30) Days prior notice by the Company;<br>
4.4 On the occurrence of any of the following events which shall be treated as fundamental breach of this Agreement terminating it forthwith:<br>
(i) In the event of a breach by the IBP of any provisions of this Agreement and subsequent failure to remedy the breach within Thirty (30) Days of having been
notified by the Company.<br>
(ii) Any misrepresentation by the IBP about the Company or unauthorized communication whether to any individual or public.</p>
<p><b>NOTICES</b><br>5.1 Notice sent by hand-delivery, pre-paid post or courier shall be sent to the following addresses:</p>

<p>To <b>FRANMAX INDIA PVT LTD </b>at:<br>
Name Of the person concerned: Legal Department,<br>
Address:101, 1st Floor, Kishor park, B/h Madhuli Hotel,<br>
Nr. GunJan Party plot, Vaishnodevi Circle, Ahmedabad-382421<br>
E-mail: Franmaxindia@gmail.com
</p>

<label>
        <b>To IBP at:</b>
      </label>
      <div class="form-group">
         <label>Name of the person concerned:
</label> 
         <input type="text" name="person_concerned" id="person_concerned" class="form-control" required="" />
         
        </div>
              <div class="form-group">
         <label>Address</label>
         <input type="text" name="person_address" id="person_address" class="form-control" required="" />
        
        </div>

        <div class="form-group">
         <label> Email Address</label>
         <input type="text" name="person_email" id="person_email" class="form-control"  />
        
        </div>
        <p>Any change in address of communication should be intimated in writing within Three (3) Days from such change of the address.</p>

       <p><b>6 INDEMNITY</b><br>
6.1 The IBP covenants and agrees with the Company that the IBP shall assume sole and entire responsibility for and indemnify and keep harmless Company
from any and all claims, liabilities, losses, expenses, responsibility and Damages, demands or actions because of any claim, proceedings, action, liability or
injury arising out of the IBP acts or on behalf of any of its/his/her employees, staff, or persons connected in any manner with the business of the IBP.<br>
6.2 Arbitration: All disputes and differences arising between the parties here to as also between the Company and the IBP, including any dispute or
difference regarding the interpretation of any provision or term or the meaning there of, or regarding any claim of one party against the other or regarding the
rights and obligations of any party or parties under this Agreement shall be settled by Arbitration and governed by the Arbitration and Conciliation Act, 1996.
Company will be the sole authority to appoint the Arbitrator. The award of the Arbitrator will be final and binding on both the parties. The place of such
Arbitration shall be Ahmedabad, India and the proceedings shall be in English language.
</p>
<p><b>7 JURISDICTION</b><br>
It is agreed by and between the parties herein that subject to Arbitration and Agreement, both Parties submit to exclusive jurisdiction of courts at
Ahmedabad, India, in respect of any matter, claim or dispute arising out of or in any way, relating to this Agreement IN WITNESS WHERE OF the Parties here
to have duly executed this Agreement as of the date first above written.
</p>

<div class="row"><br>
        <div class="col-sm-6" id="fn">
           <div class="form-group">
         <label>Date</label> 
         <input type="date" name="date1" id="date1" class="form-control" required="" />
         <p>for: FRANMAX INDIA PVT LTD</p>
        </div>

        </div>
        <div class="col-sm-6" id="ln">
           <div class="form-group">
         <label>Date</label> 
         <input type="date" name="date2" id="date2" class="form-control" required="" />
         <p>for: INDEPENDENT BUSINESS PARTNER</p>
        </div>
        </div>
      </div>
      <div>
          <label id="aq"> Please Select Option For Payment:</label>
         <!-- <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_GE3UFIYxH9UESA"> </script> 
              <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_GE5g71S4C1W2pY"> </script> 
             <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_GE5hQGFxb7hCTR"> </script -->>
             
          
      </div>
      <div> <a href="https://www.franmaxindia.com/payment-terms-condition-franmax-india-pvt-ltd/"><input type="checkbox" name="checkbox" required=""> I Agree Terms & Condition</a></div>
      <!--Payment Terms & Condition Franmax India Pvt. Ltd.-->
      <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4"> <button type="submit" name="submit"  class="btn btn-primary btn" id="btn">Submit</button>
         <!--<a href="http://www.franmaxindia.com/"><button type="submit" name="submit"  class="btn btn-info btn-lg">Register</button>-->
        </div>
        <div class="col-sm-4">
        </div>
      
      </div>
    </div>

        

    
  </form>
  </body>
</html>