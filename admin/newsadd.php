<?php
 error_reporting(1);
include "header.php";
include "../database.php";
$newsID = $_GET['news_id'];

if(isset($newsID)){
    $sql = mysqli_query($con, "SELECT * FROM news WHERE id='$newsID'");
    $rows = mysqli_fetch_array($sql);
}
if(isset($_POST['submit']))
{

    $file = $_FILES['image']['name'];
    $targetDir = "news/";
    if(!empty($file)){ 
            $fileName = basename($_FILES['image']['name']); 

            $targetFilePath = $targetDir . $fileName;

            if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath))
            {
                $image=$fileName;
                // echo $fileName;
                // exit();
            }
       
    }
$title=$_POST['title'];
$description=$_POST['description'];
if(!isset($_POST['news_id']))
   {
        $created_at = date('Y-m-d H:i:s');
        mysqli_query($con,"INSERT news SET title='$title',description='$description',image='$image',created_at='$created_at'");
        echo "<script type='text/javascript'> document.location = 'newsindex.php'; </script>";
        $lastInsertId = $con->lastInsertId();
   }else{
        mysqli_query($con,"UPDATE news SET title='$title',description='$description',image='$image',created_at='$created_at' 
        WHERE id='$newsID'");
        $lastInsertId = $newsID;
    }
}
   
if($lastInsertId)
{
    echo "<script type='text/javascript'>alert('Added News Sucessfull!');</script>";
    echo "<script type='text/javascript'> document.location = 'newsindex.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again";

}?>
<div role="main" class="main-content">
    <div class="page-content container container-plus">
        <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
            <h1 class="page-title text-primary-d2 text-140">
                News
                <small class="page-info text-dark-m3">
                    <i class="fa fa-angle-double-right text-80"></i>
                    Add news
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
                                <label class="col-md-1 control-label">Title<span style="color:red">*</span></label>
                                <div class="col-md-5">
                                    <input type="text" value="<?php  if(isset($rows['title'])) echo $rows['title'] ?>" name="title" class="form-control" required>
                                </div>
                                <label class="col-md-1 control-label">Description<span style="color:red">*</span></label>
                                <div class="col-md-5">
                                    <textarea type="text" name="description" class="form-control" required><?php  if(isset($rows['description'])) echo $rows['description'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-1 control-label">Image<span style="color:red">*</span></label>
                                <div class="col-md-5">
                                    <img src="<?php  if(isset($rows['image'])) echo 'news/'.$rows['image'] ?>" width="50" height="50">
                                    <div><input type="file" name="image" class="form-control"></div>
                                </div>
                            </div>

                            <br>
                            <?php if(!isset($_GET['news_id'])) :?>
                            <button class="btn btn-primary" name="submit" type="submit">Register</button>
                            <?php else: ?>
                                <input type="hidden" name="news_id" value="<?=$_GET['news_id']?>">
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