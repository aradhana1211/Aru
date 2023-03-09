<?php include"header.php";?>
        <div role="main" class="main-content">

          <div class="page-content container container-plus">
            <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
              <h1 class="page-title text-primary-d2 text-140">
                Sell business
                <small class="page-info text-dark-m3">
                  <i class="fa fa-angle-double-right text-80"></i>
                  Manage
                </small>
              </h1>
			  

              <div class="page-tools mt-3 mt-sm-0 mb-sm-n1">
                <!-- dataTables search box will be inserted here dynamically -->
              </div>
            </div>
<?php 
if((isset($_POST["cat_name"])) && (!isset($_POST["editcat_id"])) ) {
extract($_POST);
$resultCHK =mysqli_query($con,"SELECT cat_name FROM sell_business WHERE cat_name='$cat_name'");
 $row_cnt = mysqli_num_rows($resultCHK);
 if($row_cnt>0)
   $status='Duplicate Sell Name.';
else  {
	
    $targetDir = "../img/cat_img/"; 
    $allowTypes = array('png','jpg','jpeg'); 
    $uploadfile = date("his").basename($_FILES['uploadfile']['name']); 
    $targetFilePath = $targetDir.$uploadfile; 
    // Check whether file type is valid 
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
    if(in_array($fileType, $allowTypes)){ 
        // Upload file to the server 
        if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $targetFilePath)){ 
          mysqli_query($con,"insert into category(cat_name,cat_image,cat_status,cat_desc)values ('$cat_name','$uploadfile','$cat_status','$cat_desc')");
			$status="Category Added.";
        } 
    }
 }
 echo $status;
}

if(isset($_POST["editcat_id"])) {
extract($_POST);
	if(!isset($_POST["uploadfile"])) {
    $targetDir = "../img/cat_img/"; 
    $allowTypes = array('png','jpg','jpeg'); 
    $uploadfile = date("his").basename($_FILES['uploadfile']['name']); 
    $targetFilePath = $targetDir.$uploadfile; 
    // Check whether file type is valid 
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
    if(in_array($fileType, $allowTypes)){ 
        // Upload file to the server 
        if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $targetFilePath)){ 
          mysqli_query($con,"UPDATE category SET cat_name='$editcat_name',cat_image='$uploadfile',cat_status='$editcat_status',cat_desc='$editcat_desc' WHERE cat_id='$editcat_id'");
			$status="Category Updated.";
        } 
    }
	}
	if(empty($_POST["uploadfile"])) {
    
          mysqli_query($con,"UPDATE category SET cat_name='$editcat_name',cat_status='$editcat_status',cat_desc='$editcat_desc' WHERE cat_id='$editcat_id'");
			$status="Category Updated.";
	}
	
 
 echo $status;
}
	 ?>
            <div class="card bcard h-auto">
              <form autocomplete="off" class="border-t-3 brc-blue-m2">

                <table id="datatable" class="d-style w-100 table text-dark-m1 text-95 border-y-1 brc-black-tp11 collapsed dtr-table">
                  <!-- add `collapsed` by default ... it will be removed by default -->
                  <!-- thead with .sticky-nav -->
                  <thead class="sticky-nav text-secondary-m1 text-uppercase text-85">
                    <tr>
                      <th class="td-toggle-details border-0 bgc-white shadow-sm">
                        <i class="fa fa-angle-double-down ml-2"></i>
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        S No.
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Full Name
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                       Email
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                       Phone
                      </th>
                       <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                       Category
                      </th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Brand Name
                      </th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Description
                      </th>

                      <th class="border-0 bgc-white shadow-sm w-2">
                        Action
                      </th>
                    </tr>
                  </thead>

                  <tbody class="pos-rel">
				  
                   <?php $sn=1; $sql = mysqli_query($con, "SELECT * FROM sell_business"); 
			while($rows = mysqli_fetch_array($sql)) { ?>
			
                    <tr class="d-style bgc-h-default-l4">
                      <td class="td-toggle-details pos-rel">
                        <!-- this empty table cell will show the `+` sign which toggles the hidden cells in responsive (collapsed) mode -->

                      </td>


                      <td>
                        <div class="text-95 text-secondary-d1">
                        <?php echo $sn;?>
                        </div>
                      </td>
                      <td class="text-600 text-grey-d1">
                        <?php echo $rows["full_name"];?>
                      </td>
                      <td class="text-600 text-grey-d1">
                        <?php echo $rows["email"];?>
                      </td>
                       <td class="text-600 text-grey-d1">
                        <?php echo $rows["phone"];?>
                      </td>
                      <td class="text-600 text-grey-d1">
                        <?php echo $rows["category"];?>
                      </td>
                      <td class="text-600 text-grey-d1">
                        <?php echo $rows["brand_name"];?>
                      </td>

                      <td>
                       <?php echo $rows["description"];?>
                      </td>
                     

                      <td class="align-middle">
                        <span>
                            <a data-rel="tooltip" data-action="edit" title="Edit" href="sell_business.php?sell_id=<?php echo $rows["id"];?>" >
                                <i class="fa fa-edit text-blue-m1 text-120" ></i>
                            </a>
                        </span>
                        <span>
                            <a onclick="return confirm('Are you sure want to delete this?');" data-rel="tooltip" title="Delete" href="delete.php?sell_id=<?php echo $rows["id"];?>" >
                                <i class="fa fa-trash text-120" ></i>
                            </a>
                        </span>
                      </td>
                    </tr>
			<?php $sn++; } ?>
                  </tbody>
                </table>

              </form>
            </div>
          </div>
		  
		  
            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" style="display: none;" aria-modal="true" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 360px;">
                <div class="modal-content shadow border-none radius-2 px-3">
                  <div class="modal-header mt-n1 border-0 justify-content-center pos-rel">
                    <button type="button" class="close position-br mb-n4" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body text-center py-0">
                    <h2 class="text-grey-d1 text-160">
                      <i class="fa fa-plus text-success-m2 text-120 mr-1"></i>
                    Add Sell business
                    </h2>
			              <center><img id="pic" style="display:none;" width="75px" height="75px"/></center>
                    <form autocomplete="off" class="form-row mt-45" action="" method="POST" enctype="multipart/form-data">
					            <br>
                      
                      <div class="form-group col-12 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Category Name" name="cat_name" type="text" class="form-control pr-4 shadow-none radius-1" id="id-login-username"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Category Name</label>
                        </div>
                      </div>
                      <div class="form-group col-12">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
						            <select class="form-control pr-4 shadow-none radius-1" name="cat_status"  >
						              <option>Active</option>
						              <option>Deactive</option>
					          	  </select>
                        </div>
                      </div>
                      <div class="form-group col-12 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Category Name" name="cat_desc" type="text" class="form-control pr-4 shadow-none radius-1" id="id-login-username"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Category Description</label>
                        </div>
                      </div>
                      <div class="form-group col-12">
                        <button type="submit" name="add_new_cat"  value="add_new_cat" class="btn btn-sm btn-primary btn-block px-4 text-600 radius-1 ">
                         Add
                        </button>
                      </div>
                    </form>
                  </div><!-- /.modal-body -->

                </div>
              </div>
            </div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="loginModalLabel" style="display: none;" aria-modal="true" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 360px;">
                <div class="modal-content shadow border-none radius-2 px-3">

                  <div class="modal-header mt-n1 border-0 justify-content-center pos-rel">
                    

                    <button type="button" class="close position-br mb-n4" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>


                  <div class="modal-body text-center py-0">
                    <h2 class="text-grey-d1 text-160">
                      <i class="fa fa-edit text-success-m2 text-120 mr-1"></i>
                    Edit Category
                    </h2>
			<center><img id="editpic"  width="75px" height="75px"/></center>
                    <form autocomplete="off" class="form-row mt-45" action="" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="editcat_id" id="editcat_id" >
					<br>
                      <div class="form-group col-12 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                       <input placeholder="Category Image" name="uploadfile" type="file" id="editfile_pic" accept="image/png,image/jpeg"   class="form-control pr-4 shadow-none radius-1" onchange="editPhoto(this)"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Category Image</label>
                        </div>
                      </div>
                      <div class="form-group col-12 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Category Name" name="editcat_name" type="text" class="form-control pr-4 shadow-none radius-1" id="editcat_name"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Category Name</label>
                        </div>
                      </div>

                      <div class="form-group col-12">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
						<select class="form-control pr-4 shadow-none radius-1" name="editcat_status" id="editcat_status" >
						<option value="Active">Active</option>
						<option value="Deactive">Deactive</option>
						</select>
                        </div>
                      </div>
					  
                      <div class="form-group col-12 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Category Name" name="editcat_desc" type="text" class="form-control pr-4 shadow-none radius-1" id="editcat_desc"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Category Description</label>
                        </div>
                      </div>
                      <div class="form-group col-12">
                        <button type="submit" name="edit_new_cat"  value="edit_new_cat" class="btn btn-sm btn-warning btn-block px-4 text-600 radius-1 ">
                         Update
                        </button>
                      </div>

                    </form>
                  </div><!-- /.modal-body -->

                </div>
              </div>
            </div>	
			
 <script>
function myFunction(a,b,c,d,e) {
	 $("#editcat_id").val(a);
	 $("#editcat_name").val(c);
	 $("#editcat_status").val(d);
	 $("#editcat_desc").val(e);
	document.getElementById("editpic").src='../img/cat_img/'+b;
	 $("#editModal").modal("show");
	 
}
					</script> 
					
		 <script>
					function checkPhoto(target) {
						 var fileName = document.getElementById("file_pic").value;
        var idxDot = fileName.lastIndexOf(".") + 1;
        var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
        if (extFile=="png" || extFile=="jpg" extFile=="jpeg"){
			//
        }
		else{
            alert("Only png, jpg, jpeg file is allowed!");
			  $("#file_pic").val('');
			  document.getElementById("pic").src='';
        }  
    if(target.files[0].size > 512000) {
       alert("Image too big (max 500kb)");
	     $("#file_pic").val('');
		  document.getElementById("pic").src='';
        return false;
    }
	 $("#pic").show();
	 document.getElementById("pic").src=window.URL.createObjectURL(target.files[0]);
    return true;
}
					</script> 
					 <script>
					function editPhoto(target) {
						 var fileName = document.getElementById("editfile_pic").value;
        var idxDot = fileName.lastIndexOf(".") + 1;
        var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
        if (extFile=="png" ){
			//
        }
		else{
            alert("Only png file is allowed!");
			  $("#file_pic").val('');
			  document.getElementById("editpic").src='';
        }  
    if(target.files[0].size > 512000) {
       alert("Image too big (max 500kb)");
	     $("#file_pic").val('');
		  document.getElementById("editpic").src='';
        return false;
    }
	 $("#editpic").show();
	 document.getElementById("editpic").src=window.URL.createObjectURL(target.files[0]);
    return true;
}
					</script> 
	
	<?php include"footer.php";?>