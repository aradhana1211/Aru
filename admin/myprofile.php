<?php include"header.php";
$userID = $_GET['user_id'];
if(isset($userID)){
    $sql = mysqli_query($con, "SELECT * FROM users WHERE id='$userID'");
    $rows = mysqli_fetch_array($sql);
}
?>
<div role="main" class="main-content">

    <div class="page-content container container-plus">
        <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
            <h1 class="page-title text-primary-d2 text-140">
                My profile
                <small class="page-info text-dark-m3">
                    <i class="fa fa-angle-double-right text-80"></i>
                    Manage
                </small>
            </h1>
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
                                   <input type="text" disabled="true" value="<?php  if(isset($rows['name'])) echo $rows['name'] ?>" name="name" class="form-control" required>
                               </div>
                               <label class="col-md-1 control-label">Email<span style="color:red">*</span></label>
                               <div class="col-md-5">
                                   <input type="text" disabled="true" value="<?php  if(isset($rows['email'])) echo $rows['email'] ?>" name="email" class="form-control" required>
                               </div>
                           </div>

                           <div class="form-group row">
                               <label class="col-md-1 control-label">Phone<span style="color:red">*</span></label>
                               <div class="col-md-5">
                                   <input type="number" disabled="true" value="<?php if(isset($rows['mobile'])) echo $rows['mobile']?>" name="mobileno" class="form-control" maxlength="10" required>
                               </div>
                               <label class="col-md-1 control-label">Image<span style="color:red">*</span></label>
                               <div class="col-md-5">
                                    <img src="img/<?php echo htmlentities($rows['image']);?>" style="width:200px; border-radius:50%; margin:10px;">               
                               </div>
                           </div>
                           <br>
                           <!-- <?php if(!isset($_GET['user_id'])) :?>
                           <button class="btn btn-primary" name="submit" type="submit">Update profile</button>
                           <?php else: ?>
                               <input type="hidden" name="user_id" value="<?=$_GET['user_id']?>">
                               <button class="btn btn-primary" name="submit" type="submit">Register</button>
                           
                               <?php endif; ?> -->
                       </form>
                   </div>
               </div>
           </div>
        </div>
    </div>
<?php include"footer.php";?>