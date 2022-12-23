<?php
error_reporting(1);
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
   
    $query =  mysqli_query($con,"INSERT ibp_user_info SET first_name='$first_name',last_name='$last_name',company='$company',address='$address',city='$city',state='$state',postal_code='$postal_code' ,telephone='$telephone' ,fax='$fax' ,email='$email_address' ,institute1='$institute1' ,degree1='$degree1' ,year1='$year1',institute2='$institute2' ,degree2='$degree2' ,year2='$year2' ,hear_about_IBP='$ibp_program' ,referee_name='$referee_name' ,referee_email='$referee_email' ,referee_company='$referee_company' ,experience_company1='$experience_company1' ,position1='$position1',duration1='$duration1',from1='$from1',to1='$to1',experience_company2='$experience_company2' ,position2='$position2',duration2='$duration2',from2='$from2',to2='$to2' ,franmax_start_date='$date1',partner_start_date  ='$date2'");



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
  <body>
  <section class="inner-page-content border-bottom">
  <div class="container">
    <!-- breadcrumb -->
 <!--    <div class="row"><div class="col-lg-12"><ul class="breadcrumb"><li><a rel="v:url" property="v:title" href="http://www.franmaxindia.com/"><i class="fas fa-home"></i></a></li>&nbsp;<li class="active">Register Form</li></ul></div></div>    -->
    <!-- breadcrumb -->
    <div class="row">
      <div class="col-md-8 col-lg-9">
        <article class="article-content">
          <h3>Register Form</h3>
                        <div data-elementor-type="wp-page" data-elementor-id="2359" class="elementor elementor-2359">
            <div class="elementor-inner">
        <div class="elementor-section-wrap">
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-4819706b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4819706b" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-row">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-482e22f7" data-id="482e22f7" data-element_type="column">
      <div class="elementor-column-wrap elementor-element-populated">
              <div class="elementor-widget-wrap">
            <div class="elementor-element elementor-element-2e1918b0 elementor-widget elementor-widget-text-editor" data-id="2e1918b0" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
                <div class="elementor-text-editor elementor-clearfix">
        <!-- wp:shortcode -->
<div id="erf_form_container_2313" class="erf-container erf-label-top erf-layout-one-column erf-style-rounded-corner  ">
        <div class="erf-reg-form-container" style="">
            
        
             
                            <div class="erf-content-above">
                    Register with us by filling out the form below.                </div>
                <form method="post" enctype="multipart/form-data" class="erf-form erf-front-form" data-parsley-validate="" novalidate="true" autocomplete="off" data-erf-submission-id="0" data-erf-form-id="2313">
                    <div class="erf-form-html" id="erf_form_2313">
                        <div class="rendered-form">
                        <div class="erf-text form-group field-text-bajGIJ erf-element-width-12"><label for="text-bajGIJ" class="erf-text-label">Name<span class="erf-required">*</span></label><input type='text' class='form-control' name='text-bajGIJ' data-ref-label='First_Name' placeholder='Enter Your Name' required='required' id='text-bajGIJ'  /></div><div class="erf-email form-group field-text-1WGl9h erf-element-width-12"><label for="text-1WGl9h" class="erf-email-label">Email Id (User Id)<span class="erf-required">*</span></label><input type='email' required='1' class='form-control' name='text-1WGl9h' data-ref-label='User id' placeholder='Enter Yor Email Id' id='text-1WGl9h'  /></div><div class="erf-password form-group field-text-l5Ci5b erf-element-width-12"><label for="text-l5Ci5b" class="erf-password-label">Password<span class="erf-required">*</span></label><input type='password' required='1' class='form-control' name='text-l5Ci5b' data-ref-label='Password' id='text-l5Ci5b'  /></div><div class="erf-email form-group field-field-yRMjpPcp6qGZWoT erf-element-width-12"><label for="field-yRMjpPcp6qGZWoT" class="erf-email-label">Secondary Email Id</label><input type='email' data-ref-label='Email' class='form-control' name='field-yRMjpPcp6qGZWoT' placeholder='Enter Yor Secondary Email Id' id='field-yRMjpPcp6qGZWoT'  /></div><div class="erf-tel form-group field-field-RwQ1kQzo7alC3FA erf-element-width-12"><label for="field-RwQ1kQzo7alC3FA" class="erf-tel-label">Mobile<span class="erf-required">*</span></label><input type='tel' data-ref-label='Phone' class='form-control' name='field-RwQ1kQzo7alC3FA' placeholder='Enter Mobile' required='required' enable-intl='1' id='field-RwQ1kQzo7alC3FA'  /></div><div class="erf-tel form-group field-field-PaAOXnD8b8qAQuT erf-element-width-12"><label for="field-PaAOXnD8b8qAQuT" class="erf-tel-label">Secondary Mobile</label><input type='tel' data-ref-label='Phone2' class='form-control' name='field-PaAOXnD8b8qAQuT' placeholder='Enter Yor Secondary Mobile' enable-intl='1' id='field-PaAOXnD8b8qAQuT'  /></div><div class="erf-text form-group field-field-fLH5NSoBmsMbVeZ erf-element-width-12"><label for="field-fLH5NSoBmsMbVeZ" class="erf-text-label">Date of Birth<span class="erf-required">*</span></label><input type='text' data-ref-label='Date1' placeholder='dd-mm-yyyy' data-date-format='dd/mm/yy' class='form-control erf-date-field' name='field-fLH5NSoBmsMbVeZ' required='required' id='field-fLH5NSoBmsMbVeZ'  /></div><div class="erf-street1 form-group field-field-YEOi0wp7itDuu9v erf-element-width-12"><label for="field-YEOi0wp7itDuu9v" class="erf-street1-label"><i class='erforms-icon fa fa-address-card'></i>Address Details<span class="erf-required">*</span></label><input type='street1' data-ref-label='street1' class='form-control' name='field-YEOi0wp7itDuu9v' placeholder='Please enter your address' required='required' id='field-YEOi0wp7itDuu9v'  /></div><div class="erf-street2 form-group field-field-o0L13gIaaZUFW2G erf-element-width-12"><label for="field-o0L13gIaaZUFW2G" class="erf-street2-label">Address Landmark</label><input type='street2' data-ref-label='street2' class='form-control' name='field-o0L13gIaaZUFW2G' placeholder='Landmark' id='field-o0L13gIaaZUFW2G'  /></div><div class="erf-select form-group field-field-zYa3XWYE65XBmtX erf-element-width-12"><label for="field-zYa3XWYE65XBmtX" class="erf-country-label">Country</label><select data-ref-label='Country' class='form-control' name='field-zYa3XWYE65XBmtX' id='field-zYa3XWYE65XBmtX'  ></select></div><div class="erf-select form-group field-field-sgHhBWG2Mmry4MG erf-element-width-12"><label for="field-sgHhBWG2Mmry4MG" class="erf-state-label">State<span class="erf-required">*</span></label><select data-ref-label='State -1' class='form-control' name='field-sgHhBWG2Mmry4MG' required='required' id='field-sgHhBWG2Mmry4MG'  ></select></div><div class="erf-city form-group field-field-OVnFpNDfWOdtNI5 erf-element-width-12"><label for="field-OVnFpNDfWOdtNI5" class="erf-city-label">City<span class="erf-required">*</span></label><input type='city' data-ref-label='City 1' class='form-control' name='field-OVnFpNDfWOdtNI5' required='required' id='field-OVnFpNDfWOdtNI5'  /></div><div class="erf-zip form-group field-field-PW6X6wKgiClxssp erf-element-width-12"><label for="field-PW6X6wKgiClxssp" class="erf-zip-label">pincode<span class="erf-required">*</span></label><input type='zip' data-ref-label='zip' class='form-control' name='field-PW6X6wKgiClxssp' placeholder='Enter pincode' required='required' id='field-PW6X6wKgiClxssp'  /></div><div class="erf-select form-group field-field-IY36OGFh6NZqgQ0 erf-element-width-12"><label for="field-IY36OGFh6NZqgQ0" class="erf-select-label">Industry Type ( Interested In ) Multiple Options Available &#8211; MAX 3 (Press Control key and select)<span class="erf-required">*</span></label><select data-ref-label='Select1' class='form-control' name='field-IY36OGFh6NZqgQ0' required='required' id='field-IY36OGFh6NZqgQ0'  ><option value="Beauty &amp; Health">Beauty &amp; Health</option><option value="Beauty &amp; Health">Food &amp; Beverage</option><option value="Education">Education</option><option value="Dealers &amp; Distributors">Dealers &amp; Distributors</option><option value="Business Service">Business Service</option><option value="Home Based Business">Home Based Business</option><option value="Automotive">Automotive</option><option value="Retail">Retail</option><option value="Fashion">Fashion</option><option value="Sports, Fitness &amp; Entertainment">Sports, Fitness &amp; Entertainment</option><option value="Hotel, Travel &amp; Tourism">Hotel, Travel &amp; Tourism</option></select></div><div class="erf-select form-group field-field-lSlOxsCPbd39jHs erf-element-width-12"><label for="field-lSlOxsCPbd39jHs" class="erf-select-label">Income Range<span class="erf-required">*</span></label><select data-ref-label='Select2' class='form-control' name='field-lSlOxsCPbd39jHs' required='required' id='field-lSlOxsCPbd39jHs'  ><option value="">select income range</option><option value="Rs. 10000 - 50000">Rs. 10000 &#8211; 50000</option><option value="Rs. 50000 - 2lac">Rs. 50000 &#8211; 2lac</option><option value="Rs. 2lac - 5lac">Rs. 2lac &#8211; 5lac</option><option value="Rs. 5lac - 10lac">Rs. 5lac &#8211; 10lac</option><option value="Rs. 10lac - 20lac">Rs. 10lac &#8211; 20lac</option><option value="Rs. 20lac - 30lac">Rs. 20lac &#8211; 30lac</option><option value="Rs. 30lac - 50lac">Rs. 30lac &#8211; 50lac</option><option value="Rs. 1 Cr. - 2 Cr">Rs. 1 Cr. &#8211; 2 Cr</option><option value="Rs. 50lac - 1 Cr.">Rs. 50lac &#8211; 1 Cr.</option><option value="Rs. 2 Cr. - 5 Cr">Rs. 2 Cr. &#8211; 5 Cr</option><option value="Rs. 5 Cr. above">Rs. 5 Cr. above</option></select></div><div class="erf-select form-group field-field-KybgnIaxTNnHkK2 erf-element-width-12"><label for="field-KybgnIaxTNnHkK2" class="erf-select-label">Investment Range<span class="erf-required">*</span></label><select data-ref-label='Select3' class='form-control' name='field-KybgnIaxTNnHkK2' required='required' id='field-KybgnIaxTNnHkK2'  ><option value="">select investment range</option><option value="Rs. 10000 - 50000">Rs. 10000 &#8211; 50000</option><option value="Rs. 50000 - 2lac">Rs. 50000 &#8211; 2lac</option><option value="Rs. 2lac - 5lac">Rs. 2lac &#8211; 5lac</option><option value="Rs. 5lac - 10lac">Rs. 5lac &#8211; 10lac</option><option value="Rs. 10lac - 20lac">Rs. 10lac &#8211; 20lac</option><option value="Rs. 20lac - 30lac">Rs. 20lac &#8211; 30lac</option><option value="Rs. 30lac - 50lac">Rs. 30lac &#8211; 50lac</option><option value="Rs. 1 Cr. - 2 Cr">Rs. 1 Cr. &#8211; 2 Cr</option><option value="Rs. 50lac - 1 Cr.">Rs. 50lac &#8211; 1 Cr.</option><option value="Rs. 2 Cr. - 5 Cr">Rs. 2 Cr. &#8211; 5 Cr</option><option value="Rs. 5 Cr. above">Rs. 5 Cr. above</option></select></div><div class="erf-select form-group field-field-fOV7CEibDeSsLdu erf-element-width-12"><label for="field-fOV7CEibDeSsLdu" class="erf-select-label">Available capital<span class="erf-required">*</span></label><select data-ref-label='Select4' class='form-control' name='field-fOV7CEibDeSsLdu' required='required' id='field-fOV7CEibDeSsLdu'  ><option value="">select Available capital</option><option value="Rs. 10000 - 50000">Rs. 10000 &#8211; 50000</option><option value="Rs. 50000 - 2lac">Rs. 50000 &#8211; 2lac</option><option value="Rs. 2lac - 5lac">Rs. 2lac &#8211; 5lac</option><option value="Rs. 5lac - 10lac">Rs. 5lac &#8211; 10lac</option><option value="Rs. 10lac - 20lac">Rs. 10lac &#8211; 20lac</option><option value="Rs. 20lac - 30lac">Rs. 20lac &#8211; 30lac</option><option value="Rs. 30lac - 50lac">Rs. 30lac &#8211; 50lac</option><option value="Rs. 1 Cr. - 2 Cr">Rs. 1 Cr. &#8211; 2 Cr</option><option value="Rs. 50lac - 1 Cr.">Rs. 50lac &#8211; 1 Cr.</option><option value="Rs. 2 Cr. - 5 Cr">Rs. 2 Cr. &#8211; 5 Cr</option><option value="Rs. 5 Cr. above">Rs. 5 Cr. above</option></select></div>
                        <div class="erf-radio-group form-group field-field-ZHtNop3XnRaWJhP erf-element-width-12"><label for="field-ZHtNop3XnRaWJhP" class="erf-radio-group-label">Need for loan?<span class="erf-required">*</span></label>
                          <div class="radio-group">
                            
                              <input id="field-ZHtNop3XnRaWJhP-0"  data-ref-label='Radio' required='required' type="radio" value="Yes" />
                              <label for="field-ZHtNop3XnRaWJhP-0">Yes</label>
                           
                              <input id="field-ZHtNop3XnRaWJhP-1" name='field-ZHtNop3XnRaWJhP' data-ref-label='Radio' required='required'   type="radio" value="No" />
                              <label for="field-ZHtNop3XnRaWJhP-1">No</label>
                           
                          </div>  </div><div class="erf-select form-group field-field-WeqnbP00nwV26DO erf-element-width-12"><label for="field-WeqnbP00nwV26DO" class="erf-select-label">How soon would you like to invest?<span class="erf-required">*</span></label><select data-ref-label='Select5' class='form-control' name='field-WeqnbP00nwV26DO' required='required' id='field-WeqnbP00nwV26DO'  ><option value="">select time frame</option><option value="Less than 3 months">Less than 3 months</option><option value="3 - 6 months">3 &#8211; 6 months</option><option value="6 - 12 months">6 &#8211; 12 months</option></select></div><div class="erf-select form-group field-field-etYzxIfkSgPcJmG erf-element-width-12"><label for="field-etYzxIfkSgPcJmG" class="erf-select-label">Education Qualification<span class="erf-required">*</span></label><select data-ref-label='Select6' class='form-control' name='field-etYzxIfkSgPcJmG' required='required' id='field-etYzxIfkSgPcJmG'  ><option value="">select Education Qualification</option><option value="Other">Other</option><option value="Post graduate">Post graduate</option><option value="Higher Secondary">Higher Secondary</option><option value="Graduate">Graduate</option><option value="Diploma">Diploma</option></select></div><div class="erf-select form-group field-field-sSSrApqT0oLI0Cv erf-element-width-12"><label for="field-sSSrApqT0oLI0Cv" class="erf-select-label">Occupation<span class="erf-required">*</span></label><select data-ref-label='Select7' class='form-control' name='field-sSSrApqT0oLI0Cv' required='required' id='field-sSSrApqT0oLI0Cv'  ><option value="">select Occupation</option><option value="Student">Student</option><option value="Service">Service</option><option value="Business">Business</option></select></div><div class="erf-radio-group form-group field-field-8HGOZcLLzgUTx6h erf-element-width-12"><label for="field-8HGOZcLLzgUTx6h" class="erf-radio-group-label">Franchise Experience?<span class="erf-required">*</span></label>
                            <div class="radio-group">
                             
                                <input id="field-8HGOZcLLzgUTx6h-0" name='field-8HGOZcLLzgUTx6h' data-ref-label='Radio_Group' required='required' type="radio" value="Yes" />
                                <label for="field-8HGOZcLLzgUTx6h-0">Yes</label>
                              
                                <input id="field-8HGOZcLLzgUTx6h-1" name='field-8HGOZcLLzgUTx6h' data-ref-label='Radio_Group' required='required'  type="radio" value="No" />
                                <label for="field-8HGOZcLLzgUTx6h-1">No</label>
                             
                            </div>
                          </div><div class="erf-checkbox-group form-group field-field-JXGAssllYmQvwmp erf-element-width-12"><label for="field-JXGAssllYmQvwmp" class="erf-checkbox-group-label">Looking For<span class="erf-required">*</span></label><div class="checkbox-group">
                            
                              <input id="field-JXGAssllYmQvwmp-0" name='field-JXGAssllYmQvwmp[]' data-ref-label='Checkbox' required='required'  multiple='1'  type="checkbox" value="Unit" />
                              <label for="field-JXGAssllYmQvwmp-0">Unit</label>
                          
                              <input id="field-JXGAssllYmQvwmp-1" name='field-JXGAssllYmQvwmp[]' data-ref-label='Checkbox' required='required'  multiple='1'  type="checkbox" value="Multicity" />
                              <label for="field-JXGAssllYmQvwmp-1">Multicity</label>
                          
                              <input id="field-JXGAssllYmQvwmp-2" name='field-JXGAssllYmQvwmp[]' data-ref-label='Checkbox' required='required'  multiple='1'  type="checkbox" value="Dealer/Distributor" />
                              <label for="field-JXGAssllYmQvwmp-2">Dealer/Distributor</label>
                              
                              <input id="field-JXGAssllYmQvwmp-3" name='field-JXGAssllYmQvwmp[]' data-ref-label='Checkbox' required='required' multiple='1'  type="checkbox" value="Master Franchise" />
                              <label for="field-JXGAssllYmQvwmp-3">Master Franchise</label>
                            </div>
                          </div><div class="erf-select form-group field-field-ZbkA3fJWxUS7HQE erf-element-width-12"><label for="field-ZbkA3fJWxUS7HQE" class="erf-country-label">Looking for a business In (Country)</label><select data-ref-label='Country1' class='form-control' name='field-ZbkA3fJWxUS7HQE' id='field-ZbkA3fJWxUS7HQE'  ></select></div><div class="erf-select form-group field-field-cqz8pOdQNWhIpYp erf-element-width-12"><label for="field-cqz8pOdQNWhIpYp" class="erf-state-label">Looking for Business In ( State )</label><select data-ref-label='State' class='form-control' name='field-cqz8pOdQNWhIpYp' id='field-cqz8pOdQNWhIpYp'  ></select></div><div class="erf-city form-group field-field-wRU4lt6gogLpDRA erf-element-width-12"><label for="field-wRU4lt6gogLpDRA" class="erf-city-label">Looking for Business In ( City )</label><input type='city' data-ref-label='City' class='form-control' name='field-wRU4lt6gogLpDRA' placeholder='Select city' id='field-wRU4lt6gogLpDRA'  /></div><div class="erf-radio-group form-group field-field-k3AJt2eBO5pggsV erf-element-width-12"><label for="field-k3AJt2eBO5pggsV" class="erf-radio-group-label">Do you own a property?<span class="erf-required">*</span></label>
                            <div class="radio-group">
                             
                                <input id="field-k3AJt2eBO5pggsV-0" name='field-k3AJt2eBO5pggsV' data-ref-label='Radio_Group1' required='required'  type="radio" value="Yes" />
                                <label for="field-k3AJt2eBO5pggsV-0">Yes</label>
                              
                                <input id="field-k3AJt2eBO5pggsV-1" name='field-k3AJt2eBO5pggsV' data-ref-label='Radio_Group1' required='required'  type="radio" value="No" />
                                <label for="field-k3AJt2eBO5pggsV-1">No</label>
                              
                            </div></div><div class="erf-checkbox-group form-group field-field-lK5KpWlHCXNNU7N erf-element-width-12"><label for="field-lK5KpWlHCXNNU7N" class="erf-checkbox-group-label"><i class='erforms-icon fa fa-ban'></i>I agree to the Terms &#038; Conditions<span class="erf-required">*</span><span class="tooltip-element" tooltip="Please read terms &amp; condition at bottom"><i class="fa fa-info" aria-hidden="true"></i></span></label>
                              <div class="checkbox-group">
                                
                                  <input id="field-lK5KpWlHCXNNU7N-0" name='field-lK5KpWlHCXNNU7N[]' data-ref-label='Checkbox_Group' required='required' multiple='1'  type="checkbox" value="" />
                                  <label for="field-lK5KpWlHCXNNU7N-0"></label>
                               </div></div><div class="erf-button form-group field-button-HQddgW erf-element-width-12"><button type='submit'class='btn btn-success'name='button-HQddgW'data-ref-label='Register'id='button-HQddgW'>Register</button></div>                        </div>    
                    </div>   

                    <div class="erf-external-form-elements">
                        
                        

                        
                        
                                                <div class="erf-errors" style="display:none">
                            <span class="erf-errors-head erf-error-row">Error occured. Please confirm your data and submit again:</span>
                            <div class="erf-errors-body">
                                                            </div> 
                        </div>    
                    </div>

                    <!-- Contains multipage Next,Previous buttons -->
                    <div class="erf-form-nav clearfix"></div>  

                    <!-- Single page form button -->
                    <div class="erf-submit-button clearfix"></div>

                    <input type="hidden" name="erform_id" value="2313" />
                    <input type="hidden" id="erform_submission_nonce" name="erform_submission_nonce" value="fa5dc76521" /><input type="hidden" name="_wp_http_referer" value="/register-form/" />                    <input type="hidden" name="action" value="erf_submit_form" />
                    <input type="hidden" name="redirect_to" id="erform_redirect_to" />

                    
                    

                </form>
                        </div>

    
</div>

<!-- /wp:shortcode -->          </div>
            </div>
        </div>
            </div>
          </div>
    </div>
                </div>
          </div>
    </section>
  </body>
</html>