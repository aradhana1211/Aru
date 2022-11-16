<?php
 
include "header.php";
include "../database.php";
$userID = $_GET['user_id'];

if(isset($userID)){
    $sql = mysqli_query($con, "SELECT * FROM users WHERE id='$userID'");
    $rows = mysqli_fetch_array($sql);
}
if(isset($_POST['submit']))
{

$file = $_FILES['image']['name'];
$file_loc = $_FILES['image']['tmp_name'];
$folder="img/"; 
$new_file_name = strtolower($file);
$final_file=str_replace(' ','-',$new_file_name);

$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$gender=$_POST['gender'];
$mobileno=$_POST['mobileno'];
$designation=$_POST['designation'];

if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        $image=$final_file;
    }
$notitype='Create Account';
$reciver=$designation;
$sender=$email;

// $sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
// $querynoti = $dbh->prepare($sqlnoti);
// $querynoti-> bindParam(':notiuser', $sender, PDO::PARAM_STR);
// $querynoti-> bindParam(':notireciver',$reciver, PDO::PARAM_STR);
// $querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
// $querynoti->execute();

//  $user_id = parse_url();


   if(!isset($_POST['user_id']))
   {
    $sql ="INSERT INTO users(name,email, password, gender, mobile, designation, image, status) VALUES(:name, :email, :password, :gender, :mobileno, :designation, :image, 1)";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':name', $name, PDO::PARAM_STR);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> bindParam(':gender', $gender, PDO::PARAM_STR);
    $query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
    $query-> bindParam(':designation', $designation, PDO::PARAM_STR);
    $query-> bindParam(':image', $image, PDO::PARAM_STR);
    

    $query->execute();

    $lastInsertId = $dbh->lastInsertId();
   }else{
    
    // if(isset($_post['user_id'])) $query-> bindParam(':userID', $_POST['user_id']);
    mysqli_query($con,"UPDATE users SET name='$name',email='$email',gender='$gender',mobile='$mobileno',designation='$designation',image='$image'
    WHERE id='$userID'");
    // $sql ="UPDATE users SET name=:name,email=:email,password=:password, gender=:gender, mobile=:mobileno, designation=:designation,status=1 and image=:image WHERE user_id=:userID";
    // $query= $dbh -> prepare($sql);
    $lastInsertId = $userID;  
}
}
   
if($lastInsertId)
{
    echo "<script type='text/javascript'>alert('Registration Sucessfull!');</script>";
    echo "<script type='text/javascript'> document.location = 'userindex.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again";

}?>
<div role="main" class="main-content">
    <div class="page-content container container-plus">
        <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
            <h1 class="page-title text-primary-d2 text-140">
                Users
                <small class="page-info text-dark-m3">
                    <i class="fa fa-angle-double-right text-80"></i>
                    Add user
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
                                <label class="col-md-1 control-label">Name<span style="color:red">*</span></label>
                                <div class="col-md-5">
                                    <input type="text" value="<?php  if(isset($rows['name'])) echo $rows['name'] ?>" name="name" class="form-control" required>
                                </div>
                                <label class="col-md-1 control-label">Email<span style="color:red">*</span></label>
                                <div class="col-md-5">
                                    <input type="text" value="<?php  if(isset($rows['email'])) echo $rows['email'] ?>" name="email" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <?php if(!isset($userID)) {?>
                                <label class="col-md-2 control-label">Password<span style="color:red">*</span></label>
                                <div class="col-md-4">
                                    <input type="password" name="password" class="form-control" id="password" value="<?php  if(isset($rows['password'])) echo $rows['password'] ?>" required>
                                </div>
                                <?php }?>

                                <label class="col-md-2 control-label">Designation<span
                                        style="color:red">*</span></label>

                                <div class="col-md-4">
                                    <select name="designation" class="form-control" required>
                                        <option <?php if($rows['designation'] == 'admin') {echo "selected";}  ?> value="admin">Admin</option>
                                        <option <?php if($rows['designation'] == 'user') {echo "selected";} ?> value="user">User</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-1 control-label">Gender<span style="color:red">*</span></label>
                                <div class="col-md-5">
                                    <select name="gender" class="form-control" required>
                                        <option value="">Select</option>
                                        <option <?php if($rows['gender'] == 'Male') { echo "selected"; } ?> value="Male">Male</option>
                                        <option <?php if($rows['gender'] == 'Female') {echo  "selected";}?> value="Female">Female</option>
                                    </select>
                                </div>

                                <label class="col-md-1 control-label">Phone<span style="color:red">*</span></label>
                                <div class="col-md-5">
                                    <input type="number" value="<?php if(isset($rows['mobile'])) echo $rows['mobile']?>" name="mobileno" class="form-control" maxlength="10" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-1 control-label">Image<span style="color:red">*</span></label>
                                <div class="col-md-5">
                                    <div><input type="file" name="image" class="form-control"></div>
                                </div>
                            </div>

                            <br>
                            <?php if(!isset($_GET['user_id'])) :?>
                            <button class="btn btn-primary" name="submit" type="submit">Register</button>
                            <?php else: ?>
                                <input type="hidden" name="user_id" value="<?=$_GET['user_id']?>">
                                <button class="btn btn-primary" name="submit" type="submit">Register</button>
                            
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
        var extensions = new Array("jpg", "jpeg","png");
        var image_file = document.regform.image.value;
        var image_length = document.regform.image.value.length;
        var pos = image_file.lastIndexOf('.') + 1;
        var ext = image_file.substring(pos, image_length);
        var final_ext = ext.toLowerCase();
        for (i = 0; i < extensions.length; i++) {
            if (extensions[i] == final_ext) {
                return true;

            }
        }
        alert("Image Extension Not Valid (Use Jpg,jpeg)");
        return false;
    }
    </script>