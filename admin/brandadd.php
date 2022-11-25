<?php
 
include "header.php";
include "../database.php";
$brandID = $_GET['brand_id'];
$sqlone = mysqli_query($con, "SELECT * FROM category");

if(isset($brandID)){
    $sql = mysqli_query($con, "SELECT * FROM brand WHERE id='$brandID'");
    $rows = mysqli_fetch_array($sql);
    // print_r($rows['investment']);
    // exit();
}

if(isset($_POST['submit']))
{
    
    // $file_loc = $_FILES['image']['tmp_name'];
    // $folder="img/"; 
    // $new_file_name = strtolower($file);
    // $final_file=str_replace(' ','-',$new_file_name);
    $name=$_POST['name'];
    $category_id=$_POST['category_id'];
    $concern_person_name=$_POST['concern_person_name'];
    $concern_person_email=$_POST['concern_person_email'];
    $concern_person_phone=$_POST['concern_person_phone'];
    $concern_person_designation=$_POST['concern_person_designation'];
    $area=$_POST['area'];
    $no_franchise_outlet=$_POST['no_franchise_outlet'];
    $establistment_year=$_POST['establistment_year'];
    $about_us=$_POST['about_us'];
    $operation_commenced_on=$_POST['operation_commenced_on'];
    $franchise_commenced_on=$_POST['franchise_commenced_on'];
    $investment=$_POST['investment'];
    $franchise_fee=$_POST['franchise_fee'];
    $anticipated_percentage_return_on_investment=$_POST['anticipated_percentage_return_on_investment'];
    $pay_back=$_POST['pay_back'];
    $investment_requirements=$_POST['investment_requirements'];
    $north=$_POST['north'];
    $south=$_POST['south'];
    $east=$_POST['east'];
    $west=$_POST['west'];
    $central=$_POST['central'];
    $union_territories=$_POST['union_territories'];
    $type_property_required=$_POST['type_property_required'];
    $floor_area_requirement=$_POST['floor_area_requirement'];
    $detailed_operating_manuals_for_franchisees=$_POST['detailed_operating_manuals_for_franchisees'];
    $is_field_assistance_available_for_franchisee=$_POST['is_field_assistance_available_for_franchisee'];
    $expert_guidance_from_head_office_to_franchisee_in_opening=$_POST['expert_guidance_from_head_office_to_franchisee_in_opening'];
    $current_it_systems_will_be_included=$_POST['current_it_systems_will_be_included'];
    $standard_agreement=$_POST['standard_agreement'];
    $franchise_term_years=$_POST['franchise_term_years'];
    $renewable=$_POST['renewable'];

    

    // if(move_uploaded_file($file_loc,$folder.$final_file))
    // {
    //     $image=$final_file;
    // }
    if(!isset($_POST['brand_id']))
    {

       
      
        $query =  mysqli_query($con,"INSERT brand SET name='$name',category_id='$category_id',concern_person_name='$concern_person_name',concern_person_email='$concern_person_email',concern_person_phone='$concern_person_phone',concern_person_designation='$concern_person_designation' , area='$area' ,no_franchise_outlet='$no_franchise_outlet' ,establistment_year='$establistment_year' ,about_us='$about_us' ,operation_commenced_on='$operation_commenced_on' ,franchise_commenced_on='$franchise_commenced_on' ,investment='$investment' ,franchise_fee='$franchise_fee' ,anticipated_percentage_return_on_investment='$anticipated_percentage_return_on_investment' ,pay_back='$pay_back' ,investment_requirements='$investment_requirements' ,north='$north' ,south='$south' ,east='$east' ,west='$west' ,central='$central' ,union_territories='$union_territories',type_property_required='$type_property_required',floor_area_requirement='$floor_area_requirement',detailed_operating_manuals_for_franchisees='$detailed_operating_manuals_for_franchisees',is_field_assistance_available_for_franchisee='$is_field_assistance_available_for_franchisee' ,expert_guidance_from_head_office_to_franchisee_in_opening='$expert_guidance_from_head_office_to_franchisee_in_opening',current_it_systems_will_be_included='$current_it_systems_will_be_included',standard_agreement='$standard_agreement',franchise_term_years='$franchise_term_years' ,renewable='$renewable' ");

        $last_id = mysqli_insert_id($con);

        $file = $_FILES['image']['name'];
        $targetDir = "brand/";
        if(!empty($file)){ 
           
            foreach($_FILES['image']['name'] as $key=>$val){ 
                $fileName = basename($_FILES['image']['name'][$key]); 
               
                $targetFilePath = $targetDir . $fileName;

                if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath))
                {
                    $query =  mysqli_query($con,"INSERT brand_photo SET name='$fileName',brand_id='$last_id' ");
                }
            }
        }
    //     print_r($_POST);
    // exit();
        // $sql ="INSERT INTO users(name,email, password, gender, mobile, designation, image, status) VALUES(:name, :email, :password, :gender, :mobileno, :designation, :image, 1)";
        // $query= $dbh -> prepare($sql);
        // $query-> bindParam(':name', $name, PDO::PARAM_STR);
        // $query-> bindParam(':email', $email, PDO::PARAM_STR);
        // $query-> bindParam(':password', $password, PDO::PARAM_STR);
        // $query-> bindParam(':gender', $gender, PDO::PARAM_STR);
        // $query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
        // $query-> bindParam(':designation', $designation, PDO::PARAM_STR);
        // $query-> bindParam(':image', $image, PDO::PARAM_STR);
        // $query->execute();
        $lastInsertId = $con->lastInsertId();
   }else{
        $file = $_FILES['image']['name'];
        $targetDir = "brand/";
        if(!empty($file)){ 
           
            foreach($_FILES['image']['name'] as $key=>$val){ 
                $fileName = basename($_FILES['image']['name'][$key]); 
               
                $targetFilePath = $targetDir . $fileName;

                if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath))
                {
                    $query =  mysqli_query($con,"INSERT brand_photo SET name='$fileName',brand_id='$brandID' ");
                }
            }
        }
        mysqli_query($con,"UPDATE brand SET name='$name',category_id='$category_id',concern_person_name='$concern_person_name',concern_person_email='$concern_person_email',concern_person_phone='$concern_person_phone',concern_person_designation='$concern_person_designation' , area='$area' ,no_franchise_outlet='$no_franchise_outlet' ,establistment_year='$establistment_year' ,about_us='$about_us' ,operation_commenced_on='$operation_commenced_on' ,franchise_commenced_on='$franchise_commenced_on' ,investment='$investment' ,franchise_fee='$franchise_fee' ,anticipated_percentage_return_on_investment='$anticipated_percentage_return_on_investment' ,pay_back='$pay_back' ,investment_requirements='$investment_requirements' ,north='$north' ,south='$south' ,east='$east' ,west='$west' ,central='$central' ,union_territories='$union_territories',type_property_required='$type_property_required',floor_area_requirement='$floor_area_requirement',detailed_operating_manuals_for_franchisees='$detailed_operating_manuals_for_franchisees',is_field_assistance_available_for_franchisee='$is_field_assistance_available_for_franchisee' ,expert_guidance_from_head_office_to_franchisee_in_opening='$expert_guidance_from_head_office_to_franchisee_in_opening',current_it_systems_will_be_included='$current_it_systems_will_be_included',standard_agreement='$standard_agreement',franchise_term_years='$franchise_term_years' ,renewable='$renewable'
        WHERE id='$brandID'");
        $lastInsertId = $brandID;  
    }
}
   
if($lastInsertId)
{
    echo "<script type='text/javascript'>alert('Registration Sucessfull!');</script>";
    echo "<script type='text/javascript'> document.location = 'brandindex.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again";

}?>

<div role="main" class="main-content">
    <div class="page-content container container-plus">
        <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
            <h1 class="page-title text-primary-d2 text-140">
                Brand
                <small class="page-info text-dark-m3">
                    <i class="fa fa-angle-double-right text-80"></i>
                    Add brand
                </small>
            </h1>


            <div class="page-tools mt-3 mt-sm-0 mb-sm-n1">
                <!-- dataTables search box will be inserted here dynamically -->
            </div>
        </div>
        <div class="card bcard h-auto">
            <div class="container">
               
                <div class="row">
                    <div class="col-12">
                        <form method="post" class="form-horizontal" enctype="multipart/form-data" name="regform"
                            onSubmit="return validate();">
                            <div class="form-group row">
                                
                                <div class="col-md-6">
                                    <label class="control-label">Name<span style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['name'])) echo $rows['name'] ?>" name="name" class="form-control" required>
                                </div>
                               
                                <div class="col-md-6">
                                    <label class="control-label">Category<span style="color:red">*</span></label>
                                    
                                    
                                   <select name="category_id" class="form-control" required>
                                    <?php while($cat=mysqli_fetch_array($sqlone)) { ?>
                                        <option <?php if($rows['category_id'] == $cat['cat_id']) {echo "selected";}  ?> value="<?php echo($cat["cat_id"]); ?>"><?php echo($cat["cat_name"]); ?></option>
                                    <?php } ?>    
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class=" control-label">Concern person name<span
                                        style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['concern_person_name'])) echo $rows['concern_person_name'] ?>" name="concern_person_name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Concern person email<span style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['concern_person_email'])) echo $rows['concern_person_email'] ?>" name="concern_person_email" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class=" control-label">Concern person phone<span
                                        style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['concern_person_phone'])) echo $rows['concern_person_phone'] ?>" name="concern_person_phone" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Concern person designation<span style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['concern_person_designation'])) echo $rows['concern_person_designation'] ?>" name="concern_person_designation" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                
                                <div class="col-md-6">
                                    <label class=" control-label">Area<span
                                        style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['area'])) echo $rows['area'] ?>" name="area" class="form-control" required>
                                </div>
                               
                                <div class="col-md-6">
                                    <label class="control-label">No. Franchise Outlet<span style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['no_franchise_outlet'])) echo $rows['no_franchise_outlet'] ?>" name="no_franchise_outlet" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                     <label class=" control-label">Establistment Year<span style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['establistment_year'])) echo $rows['establistment_year'] ?>" name="establistment_year" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">About Us<span style="color:red">*</span></label>
                                     <textarea class="form-control" required name="about_us" rows="2" id="comment"><?php if(isset($rows['about_us'])) echo $rows['about_us']?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">Operation Commenced On<span style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['operation_commenced_on'])) echo $rows['operation_commenced_on'] ?>" name="operation_commenced_on" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Franchise Commenced On<span style="color:red">*</span></label>
                                    <input type="text" value="<?php if(isset($rows['franchise_commenced_on'])) echo $rows['franchise_commenced_on']?>" name="franchise_commenced_on" class="form-control" maxlength="10" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">Investment<span style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['investment'])) echo $rows['investment'] ?>" name=" investment" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Franchise Fee<span style="color:red">*</span></label>
                                    <input type="text" value="<?php if(isset($rows['franchise_fee'])) echo $rows['franchise_fee']?>" name="franchise_fee" class="form-control" maxlength="10" required>
                                </div>
                            </div>

                             <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">Anticipated Percentage Return On Investment<span style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['anticipated_percentage_return_on_investment'])) echo $rows['anticipated_percentage_return_on_investment'] ?>" name=" anticipated_percentage_return_on_investment" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                     <label class="control-label">Pay Back<span style="color:red">*</span></label>
                                    <input type="text" value="<?php if(isset($rows['pay_back'])) echo $rows['pay_back']?>" name="pay_back" class="form-control" maxlength="10" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">Investment Requirements<span style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['investment_requirements'])) echo $rows['investment_requirements'] ?>" name=" investment_requirements" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                     <label class="control-label">north<span style="color:red">*</span></label>
                                    <input type="text" value="<?php if(isset($rows['north'])) echo $rows['north']?>" name="north" class="form-control" maxlength="10" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">South<span style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['south'])) echo $rows['south'] ?>" name=" south" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                     <label class="control-label">East<span style="color:red">*</span></label>
                                    <input type="text" value="<?php if(isset($rows['east'])) echo $rows['east']?>" name="east" class="form-control" maxlength="10" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">West<span style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['west'])) echo $rows['west'] ?>" name="west" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                     <label class="control-label">Central<span style="color:red">*</span></label>
                                    <input type="text" value="<?php if(isset($rows['central'])) echo $rows['central']?>" name="central" class="form-control" maxlength="10" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">Union Territories<span style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['union_territories'])) echo $rows['union_territories'] ?>" name="union_territories" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                     <label class="control-label">Type Property Required<span style="color:red">*</span></label>
                                    <input type="text" value="<?php if(isset($rows['type_property_required'])) echo $rows['type_property_required']?>" name="type_property_required" class="form-control" maxlength="10" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">floor_area_requirement<span style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['floor_area_requirement'])) echo $rows['floor_area_requirement'] ?>" name="floor_area_requirement" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Franchise Term Years<span style="color:red">*</span></label>
                                    <input type="text" value="<?php  if(isset($rows['franchise_term_years'])) echo $rows['franchise_term_years'] ?>" name="franchise_term_years" class="form-control" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">Is Field Assistance Available For Franchisee<span style="color:red">*</span></label>
                                    <div class="form-check">
                                        <label class="form-check-label" for="radio1" style="margin-right:25px">
                                            <input type="radio" class="form-check-input radio-inline"  name="is_field_assistance_available_for_franchisee" value="Y"  <?php if($rows['is_field_assistance_available_for_franchisee'] == 'Y') {echo "checked";}  ?>> Active         
                                        </label>
                                        <label class="form-check-label" for="radio2">
                                            <input type="radio" class="form-check-input radio-inline"  name="is_field_assistance_available_for_franchisee" value="N"  <?php if($rows['is_field_assistance_available_for_franchisee'] == 'N') {echo "checked";}  ?>> Inactive
                                        </label>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <label class="control-label">Expert Guidance From Head Office To Franchisee In Opening<span style="color:red">*</span></label>
                                    <div class="form-check">
                                        <label class="form-check-label" for="radio1" style="margin-right:25px">
                                            <input type="radio" class="form-check-input radio-inline"  name="expert_guidance_from_head_office_to_franchisee_in_opening" value="Y"  <?php if($rows['expert_guidance_from_head_office_to_franchisee_in_opening'] == 'Y') {echo "checked";}  ?>> Active         
                                        </label>
                                        <label class="form-check-label" for="radio2">
                                            <input type="radio" class="form-check-input radio-inline"  name="expert_guidance_from_head_office_to_franchisee_in_opening" value="N"  <?php if($rows['expert_guidance_from_head_office_to_franchisee_in_opening'] == 'N') {echo "checked";}  ?>> Inactive
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">Current It Systems Will Be Included<span style="color:red">*</span></label>
                                    <div class="form-check">
                                        <label class="form-check-label" for="radio1" style="margin-right:25px">
                                            <input type="radio" class="form-check-input radio-inline"  name="current_it_systems_will_be_included" value="Y" <?php if($rows['current_it_systems_will_be_included'] == 'Y') {echo "checked";}  ?>> Active         
                                        </label>
                                        <label class="form-check-label" for="radio2">
                                            <input type="radio" class="form-check-input radio-inline"  name="current_it_systems_will_be_included" value="N" <?php if($rows['current_it_systems_will_be_included'] == 'N') {echo "checked";}  ?>> Inactive
                                        </label>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <label class="control-label">standard_agreement<span style="color:red">*</span></label>
                                    <div class="form-check">
                                        <label class="form-check-label" for="radio1" style="margin-right:25px">
                                            <input type="radio" class="form-check-input radio-inline"  name="standard_agreement" value="Y" <?php if($rows['standard_agreement'] == 'Y') {echo "checked";}  ?>> Active         
                                        </label>
                                        <label class="form-check-label" for="radio2">
                                            <input type="radio" class="form-check-input radio-inline"  name="standard_agreement" value="N" <?php if($rows['standard_agreement'] == 'N') {echo "checked";}  ?>> Inactive
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="control-label">Renewable<span style="color:red">*</span></label>
                                    <div class="form-check">
                                        <label class="form-check-label" for="radio1" style="margin-right:25px">
                                            <input type="radio" class="form-check-input radio-inline"  name="   renewable" value="Y"  <?php if($rows['renewable'] == 'Y') {echo "checked";}  ?>> Active         
                                        </label>
                                        <label class="form-check-label" for="radio2">
                                            <input type="radio" class="form-check-input radio-inline"  name="   renewable" value="N"  <?php if($rows['renewable'] == 'N') {echo "checked";}  ?>> Inactive
                                        </label>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                     <label class="control-label">Detailed Operating Manuals  For Franchisees<span style="color:red">*</span></label>
                                    <div class="form-check">
                                        <label class="form-check-label" for="radio1" style="margin-right:25px">
                                            <input type="radio" class="form-check-input radio-inline"  name="detailed_operating_manuals_for_franchisees" value="Y" <?php if($rows['detailed_operating_manuals_for_franchisees'] == 'Y') {echo "checked";}  ?>> Active         
                                        </label>
                                        <label class="form-check-label" for="radio2">
                                            <input type="radio" class="form-check-input radio-inline"  name="detailed_operating_manuals_for_franchisees" value="N"  <?php if($rows['detailed_operating_manuals_for_franchisees'] == 'N') {echo "checked";}  ?>> Inactive
                                        </label>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <label class="col-md-1 control-label">Images<span style="color:red">*</span></label>
                                    <?php if(isset($_GET['brand_id'])) :?>
                                     <div id="display-image img-wraps">
                                        <?php
                                            $query = " select * from  brand_photo WHERE brand_id = $brandID";
                                            $result = mysqli_query($con, $query);
                                            $rowss = mysqli_num_rows($result);
                                            while ($data = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <img class="img-responsive" src="brand/<?php echo $data['name']; ?>" width="50" height="50">
                                            <i class="closes fa fa-trash text-120" ></i>

                                        <?php }  ?>
                                          <input type="hidden" name="photolenght" id="photolenght" value="<?php echo $rowss; ?>">
                                    </div>
                                    <?php endif; ?>
                                <div class="col-md-5">
                                    <div><input type="file" name="image[]" class="form-control" id="uploadImg" multiple></div>
                                </div>
                            </div>
                            <br>
                            <?php if(!isset($_GET['brand_id'])) :?>
                                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                            <?php else: ?>
                                <input type="hidden" name="brand_id" value="<? echo $_GET['brand_id']?>">
                                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $('.succWrap').slideUp("slow");
        }, 3000);
    });

   

    function validate() {
        var uploadImg = document.getElementById('uploadImg');
        //uploadImg.files: FileList
        var photolenght = document.getElementById('photolenght').value;
        var limit = 5 - photolenght;
        if(uploadImg.files.length <=limit )
        {
            for (var i = 0; i < uploadImg.files.length; i++) {
                var f = uploadImg.files[i];
               if (!endsWith(f.name, 'jpg') && !endsWith(f.name,'png') && !endsWith(f.name,'jpeg')) {
                   alert("Image Extension Not Valid (Use Jpg,jpeg)");
                   return false;
               } else {
                   return true;

               }
            }    
        } else {
           
             alert("Maximum 5 image can upload.");
             return false;
        }
        

    }

    </script>