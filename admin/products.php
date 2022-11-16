<?php include"header.php";?>
        <div role="main" class="main-content">

          <div class="page-content container container-plus">
            <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
              <h1 class="page-title text-primary-d2 text-140">
                Products
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
if((isset($_POST["pro_name"])) && (!isset($_POST["edit_new_pro"])) ) {
extract($_POST);
    $targetDir = "../img/pro_img/"; 
    $allowTypes = array('png','jpg','jpeg'); 
    $uploadfile = date("his").basename($_FILES['uploadfile']['name']); 
    $targetFilePath = $targetDir.$uploadfile; 
    // Check whether file type is valid 
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
    if(in_array($fileType, $allowTypes)){ 
        // Upload file to the server 
        if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $targetFilePath)){ 
          mysqli_query($con,"insert into products(pro_cat,pro_name,pro_image,pro_status,pro_time,pro_desc,pro_type,int_name,active_ing,manufacturer,form,packing,strength)
          values ('$cat_id','$pro_name','$uploadfile','$pro_status','$time_stamp','$pro_desc','$pro_type','$int_name','$active_ing','$manufacturer','$form','$packing','$strength')");
			$status="Product Added.";
        } 
    }
 
 echo $status;
}

if(isset($_POST["edit_new_pro"])) {
extract($_POST);
	if(!isset($_POST["uploadfile"])) {
    $targetDir = "../img/pro_img/"; 
    $allowTypes = array('png','jpg','jpeg'); 
    $uploadfile = date("his").basename($_FILES['uploadfile']['name']); 
    $targetFilePath = $targetDir.$uploadfile; 
    // Check whether file type is valid 
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
    if(in_array($fileType, $allowTypes)){ 
        // Upload file to the server 
        if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $targetFilePath)){ 
          mysqli_query($con,"UPDATE products SET pro_cat='$editpro_cat',pro_name='$editpro_name',pro_image='$uploadfile',pro_status='$editpro_status',pro_desc='$pro_desc',pro_type='$pro_type'
          ,int_name='$int_name',active_ing='$active_ing',manufacturer='$manufacturer',form='$form',packing='$packing',strength='$strength'
		  WHERE pro_id='$editpro_id'");
			$status="Product Updated.";
        } 
    }
	}
	if(empty($_POST["uploadfile"])) {
          mysqli_query($con,"UPDATE products SET pro_cat='$editpro_cat',pro_name='$editpro_name',pro_status='$editpro_status',pro_desc='$editpro_desc',pro_type='$editpro_type'
          ,int_name='$editpro_int_name',active_ing='$editpro_active_ing',manufacturer='$editpro_manufacturer',form='$editpro_form',packing='$editpro_packing',strength='$editpro_strength'
		  WHERE pro_id='$editpro_id'");
			$status="Product Updated.";
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
                       Image
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                         Category
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Name
                      </th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Description
                      </th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                      Type
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Status
                      </th>
                      
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">International Name</th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">Active Ingredient</th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">Manufacturer</th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">Form</th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">Packing</th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">Strength</th>

                      <th class="border-0 bgc-white shadow-sm w-2">
                        Action
                      </th>
                    </tr>
                  </thead>

                  <tbody class="pos-rel">
				  
                   <?php $sn=1; $sql = mysqli_query($con,"SELECT products.*, category.* FROM products, category 
                   WHERE products.pro_cat=category.cat_id ORDER BY products.pro_name ASC, products.pro_time DESC"); 
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

                      <td class="text-grey">
                         <img src="../img/pro_img/<?php echo $rows["pro_image"];?>" height=50 width=50>
                      </td>

                      <td class="text-grey">
                       <?php echo $rows["cat_name"];?>
                      </td>

                      <td>
                       <?php echo $rows["pro_name"];?>
                      </td>
                      <td>
                       <?php echo $rows["pro_desc"];?>
                      </td>
                      <td>
                       <?php echo $rows["pro_type"];?>
                      </td>
                      <td>
                       <?php echo $rows["pro_status"];?>
                      </td>

                      <td> <?php echo $rows["int_name"];?></td>
                      <td> <?php echo $rows["active_ing"];?></td>
                      <td> <?php echo $rows["manufacturer"];?></td>
                      <td> <?php echo $rows["form"];?></td>
                      <td> <?php echo $rows["packing"];?></td>
                      <td> <?php echo $rows["strength"];?></td>
                      <td class="align-middle">
                        <span>
                            <a data-rel="tooltip" data-action="edit" title="Edit" href="#" >
                                <i class="fa fa-edit text-blue-m1 text-120" onclick="myFunction('<?php echo $rows["pro_id"];?>','<?php echo $rows["pro_image"];?>','<?php echo $rows["pro_name"];?>',
                                '<?php echo $rows["pro_desc"];?>','<?php echo $rows["pro_type"];?>','<?php echo $rows["pro_status"];?>','<?php echo $rows["pro_cat"];?>','<?php echo $rows["int_name"];?>'
                                ,'<?php echo $rows["active_ing"];?>','<?php echo $rows["manufacturer"];?>','<?php echo $rows["form"];?>','<?php echo $rows["packing"];?>','<?php echo $rows["strength"];?>'
                                )" ></i>
                            </a>
                        </span>
                        <span>
                            <a data-rel="tooltip" title="Delete" onclick="return confirm('Are you sure want to delete this?');" href="delete.php?pro_id=<?php echo $rows["pro_id"];?>" >
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
              <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
                <div class="modal-content shadow border-none radius-2 px-3">

                  <div class="modal-header mt-n1 border-0 justify-content-center pos-rel">
                    

                    <button type="button" class="close position-br mb-n4" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>


                  <div class="modal-body text-center py-0">
                    <h2 class="text-grey-d1 text-160">
                      <i class="fa fa-plus text-success-m2 text-120 mr-1"></i>
                    Add New Product
                    </h2>
			<center><img id="pic" style="display:none;" width="75px" height="75px"/></center>
                    <form autocomplete="off" class="form-row mt-45" action="" method="POST" enctype="multipart/form-data">
					
					<br>
                      <div class="form-group col-6 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                       <input placeholder="Category Image" name="uploadfile" type="file" id="file_pic"  class="form-control pr-4 shadow-none radius-1" onchange="checkPhoto(this)"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Product Image</label>
                        </div>
                      </div>
                      <div class="form-group col-6 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <select name="cat_id" class="form-control pr-4 shadow-none radius-1" >
						   <?php $sql = mysqli_query($con, "SELECT * FROM category ORDER BY cat_name ASC"); 
			while($rows = mysqli_fetch_array($sql)) { ?>
			<option value="<?php echo $rows["cat_id"];?>"><?php echo $rows["cat_name"];?></option>
			<?php } ?>
						  </select>
                        </div>
                      </div>
					  
					  <div class="form-group col-4 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Product Name" name="pro_name" type="text" class="form-control pr-4 shadow-none radius-1" id="id-login-username"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Product Name</label>
                        </div>
                      </div>
					  
                      <div class="form-group col-4">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
						<select class="form-control pr-4 shadow-none radius-1" name="pro_status"  >
						<option>Active</option>
						<option>Deactive</option>
						</select>
                        </div>
                      </div>
                      <div class="form-group col-4">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
						<select class="form-control pr-4 shadow-none radius-1" name="pro_type"  >
						<option>Analgesics</option>
						<option>Anti glaucoma</option>
						<option>Analgesics</option>
						<option>Antiallergic</option>
						<option>Antibacterial</option>
						<option>Antifungal</option>
						<option>Antiviral</option>
						<option>Capsule</option>
						<option>Capsules</option>
						<option>Cream</option>
						<option>Creams</option>
						<option>Drops</option>
						<option>Dry Syrup</option>
						<option>Eye drops</option>
						<option>Gel</option>
						<option>Hypertonic Solution</option>
						<option>Infusion</option>
						<option>Injection</option>
						<option>Injections</option>
						<option>Lyophilized Injection</option>
						<option>Mydriatics</option>
						<option>Ointment</option>
						<option>Oral jelly</option>
						<option>Soft Capsule</option>
						<option>Solution</option>
						</select>
                        </div>
                      </div>
                      
					  <div class="form-group col-4 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Product Name" name="int_name" type="text" class="form-control pr-4 shadow-none radius-1" id="id-login-username"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">International Name</label>
                        </div>
                      </div>
                      
					  <div class="form-group col-4 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Product Name" name="active_ing" type="text" class="form-control pr-4 shadow-none radius-1" id="id-login-username"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Active Ingredient</label>
                        </div>
                      </div>
                      
					  <div class="form-group col-4 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Product Name" name="manufacturer" type="text" class="form-control pr-4 shadow-none radius-1" id="id-login-username"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Manufacturer</label>
                        </div>
                      </div>
                      
                      
					  <div class="form-group col-4 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Product Name" name="form" type="text" class="form-control pr-4 shadow-none radius-1" id="id-login-username"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Form </label>
                        </div>
                      </div>
                      
					  <div class="form-group col-4 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Product Name" name="packing" type="text" class="form-control pr-4 shadow-none radius-1" id="id-login-username"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Packing </label>
                        </div>
                      </div>
					  <div class="form-group col-4 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Product Name" name="strength" type="text" class="form-control pr-4 shadow-none radius-1" id="id-login-username"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username"> Strength</label>
                        </div>
                      </div>
                      
                      
                      
                      <div class="form-group col-12 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <textarea placeholder="Product Description" name="pro_desc" type="text" class="form-control pr-4 shadow-none radius-1" id="id-login-desc"></textarea>
                        </div>
                      </div>
					  

                      <div class="form-group col-12">
                        <button type="submit" name="add_new_pro"  value="add_new_pro" class="btn btn-sm btn-primary btn-block px-4 text-600 radius-1 ">
                         Add
                        </button>
                      </div>

                    </form>
                  </div><!-- /.modal-body -->

                </div>
              </div>
            </div>



		  
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="loginModalLabel" style="display: none;" aria-modal="true" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
                <div class="modal-content shadow border-none radius-2 px-3">

                  <div class="modal-header mt-n1 border-0 justify-content-center pos-rel">
                    

                    <button type="button" class="close position-br mb-n4" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>


                  <div class="modal-body text-center py-0">
                    <h2 class="text-grey-d1 text-160">
                      <i class="fa fa-plus text-success-m2 text-120 mr-1"></i>
                    Update Product
                    </h2>
			<center><img id="editpic"  width="75px" height="75px"/></center>
                    <form autocomplete="off" class="form-row mt-45" action="" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="editpro_id" id="editpro_id">
					<br>
                      <div class="form-group col-6 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                       <input placeholder="Category Image" name="uploadfile" type="file" id="editfile_pic"  class="form-control pr-4 shadow-none radius-1" onchange="editPhoto(this)"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Product Image</label>
                        </div>
                      </div>
                      <div class="form-group col-6 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <select name="editpro_cat" id="editpro_cat" class="form-control pr-4 shadow-none radius-1" >
						   <?php $sql = mysqli_query($con, "SELECT * FROM category ORDER BY cat_name ASC"); 
			while($rows = mysqli_fetch_array($sql)) { ?>
			<option value="<?php echo $rows["cat_id"];?>"><?php echo $rows["cat_name"];?></option>
			<?php } ?>
						  </select>
                        </div>
                      </div>
                     
                      <div class="form-group col-4 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Product Name" name="editpro_name" type="text" class="form-control pr-4 shadow-none radius-1" id="editpro_name"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Product Name</label>
                        </div>
                      </div>
					  
                      <div class="form-group col-4">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
						<select class="form-control pr-4 shadow-none radius-1" name="editpro_status"  id="editpro_status" >
						<option>Active</option>
						<option>Deactive</option>
						</select>
                        </div>
                      </div>
                      
                      <div class="form-group col-4">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
						<select class="form-control pr-4 shadow-none radius-1" name="editpro_type" id="editpro_type"  >
						<option>Analgesics</option>
						<option>Anti glaucoma</option>
						<option>Analgesics</option>
						<option>Antiallergic</option>
						<option>Antibacterial</option>
						<option>Antifungal</option>
						<option>Antiviral</option>
						<option>Capsule</option>
						<option>Capsules</option>
						<option>Cream</option>
						<option>Creams</option>
						<option>Drops</option>
						<option>Dry Syrup</option>
						<option>Eye drops</option>
						<option>Gel</option>
						<option>Hypertonic Solution</option>
						<option>Infusion</option>
						<option>Injection</option>
						<option>Injections</option>
						<option>Lyophilized Injection</option>
						<option>Mydriatics</option>
						<option>Ointment</option>
						<option>Oral jelly</option>
						<option>Soft Capsule</option>
						<option>Solution</option>
						</select>
                        </div>
                      </div>
                      
                      <div class="form-group col-4 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Product Name" name="editpro_int_name" type="text" class="form-control pr-4 shadow-none radius-1" id="editpro_int_name"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">International Name</label>
                        </div>
                      </div>
                      <div class="form-group col-4 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Product Name" name="editpro_active_ing" type="text" class="form-control pr-4 shadow-none radius-1" id="editpro_active_ing"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Active Ingredient</label>
                        </div>
                      </div>
                      <div class="form-group col-4 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Product Name" name="editpro_manufacturer" type="text" class="form-control pr-4 shadow-none radius-1" id="editpro_manufacturer"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Manufacturer</label>
                        </div>
                      </div>
                      <div class="form-group col-4 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Product Name" name="editpro_form" type="text" class="form-control pr-4 shadow-none radius-1" id="editpro_form"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username"> Form</label>
                        </div>
                      </div>
                      <div class="form-group col-4 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Product Name" name="editpro_packing" type="text" class="form-control pr-4 shadow-none radius-1" id="editpro_packing"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username"> Packing</label>
                        </div>
                      </div>
                      <div class="form-group col-4 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Product Name" name="editpro_strength" type="text" class="form-control pr-4 shadow-none radius-1" id="editpro_strength"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username"> Strength</label>
                        </div>
                      </div>
                      
                      <div class="form-group col-12 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <textarea placeholder="Product Description" name="editpro_desc" type="text" class="form-control pr-4 shadow-none radius-1" id="editpro_desc2"></textarea>
                        </div>
                      </div>

                      <div class="form-group col-12">
                        <button type="submit" name="edit_new_pro"  value="edit_new_pro" class="btn btn-sm btn-primary btn-block px-4 text-600 radius-1">
                         Update
                        </button>
                      </div>

                    </form>
                  </div><!-- /.modal-body -->

                </div>
              </div>
            </div>
			
 <script>
function myFunction(a,b,c,d,f,g,h,i,j,k,l,m,n) {
	 $("#editpro_id").val(a);
	 $("#editpro_name").val(c);
	 $("#editpro_desc2").val(d);
	 $("#editpro_type").val(f);
	 $("#editpro_status").val(g);
	 $("#editpro_cat").val(h);
	 
	 $("#editpro_int_name").val(i);
	 $("#editpro_active_ing").val(j);
	 $("#editpro_manufacturer").val(k);
	 $("#editpro_form").val(l);
	 $("#editpro_packing").val(m);
	 $("#editpro_strength").val(n);
	 
	document.getElementById("editpic").src='../img/pro_img/'+b;
	 $("#editModal").modal("show");
	 
}
					</script> 
					
		 <script>
					function checkPhoto(target) {
						 var fileName = document.getElementById("file_pic").value;
        var idxDot = fileName.lastIndexOf(".") + 1;
        var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
        if (extFile=="png" ){
			//
        }
		else{
            //alert("Only png file is allowed!");
			  //$("#file_pic").val('');
			  //document.getElementById("pic").src='';
        }  
    if(target.files[0].size > 502100) {
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
            //alert("Only png file is allowed!");
			  //$("#file_pic").val('');
			  //document.getElementById("editpic").src='';
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