<?php include"header.php";?>
        <div role="main" class="main-content">

          <div class="page-content container container-plus">
            <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
              <h1 class="page-title text-primary-d2 text-140">
                Supply on Demand
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
if((isset($_POST["dem_name"])) && (!isset($_POST["editdem_sn"])) ) {
extract($_POST);


          mysqli_query($con,"insert into sup_on_dem(dem_name,dem_name_l,dem_name_e)values ('$dem_name','$dem_name_l','$dem_name_e')");
			
			echo $status="Entry Added.";
  


}

if(isset($_POST["editdem_sn"])) {
extract($_POST);

          mysqli_query($con,"UPDATE sup_on_dem SET dem_name='$editdem_name',dem_name_l='$editdem_name_l',dem_name_e='$editdem_name_e' WHERE dem_sn='$editdem_sn'");
		echo 	$status="Entry Updated.";

	
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
                         Product Name
                      </th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                       Local Name
                      </th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        English Name
                      </th>
                      <th class="border-0 bgc-white shadow-sm w-2">
                        Action
                      </th>
                    </tr>
                  </thead>

                  <tbody class="pos-rel">
				  
                   <?php $sn=1; $sql = mysqli_query($con, "SELECT * FROM sup_on_dem ORDER BY dem_name ASC"); 
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
                        <?php echo $rows["dem_name"];?>
                      </td>

                      <td class="text-grey">
                       <?php echo $rows["dem_name_l"];?>
                      </td>

                      <td>
                       <?php echo $rows["dem_name_e"];?>
                      </td>
                      <td class="align-middle">
                        <span>
                            <a data-rel="tooltip" data-action="edit" title="Edit" href="#" >
                                <i class="fa fa-edit text-blue-m1 text-120" onclick="myFunction('<?php echo $rows["dem_sn"];?>','<?php echo $rows["dem_name"];?>','<?php echo $rows["dem_name_l"];?>','<?php echo $rows["dem_name_e"];?>')" ></i>
                            </a>
                        </span>
                        <span>
                            <a data-rel="tooltip" title="Delete" href="delete.php?dem_sn=<?php echo $rows["dem_sn"];?>" >
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
                    Add New Entry
                    </h2>
                    
                    <form autocomplete="off" class="form-row mt-45" action="" method="POST" enctype="multipart/form-data">
					
					<br>
					
                      <div class="form-group col-12 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Category Name" name="dem_name" type="text" class="form-control pr-4 shadow-none radius-1" id="dem_name"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Name</label>
                        </div>
                      </div>

                      <div class="form-group col-12 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Category Name" name="dem_name_l" type="text" class="form-control pr-4 shadow-none radius-1" id="dem_name_l"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Name (Local)</label>
                        </div>
                      </div>
                      <div class="form-group col-12 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Category Name" name="dem_name_e" type="text" class="form-control pr-4 shadow-none radius-1" id="dem_name_e"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Name (English)</label>
                        </div>
                      </div>
					  

                      <div class="form-group col-12">
                        <button type="submit" name="add_new_dem"  value="add_new_dem" class="btn btn-sm btn-primary btn-block px-4 text-600 radius-1 ">
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
                    
                    <form autocomplete="off" class="form-row mt-45" action="" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="editdem_sn" id="editdem_sn" >
					<br>
					
                       <div class="form-group col-12 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Category Name" name="editdem_name" type="text" class="form-control pr-4 shadow-none radius-1" id="editdem_name"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Name</label>
                        </div>
                      </div>

                      <div class="form-group col-12 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Category Name" name="editdem_name_l" type="text" class="form-control pr-4 shadow-none radius-1" id="editdem_name_l"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Name (Local)</label>
                        </div>
                      </div>
                      <div class="form-group col-12 mb-3">
                        <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                          <input placeholder="Category Name" name="editdem_name_e" type="text" class="form-control pr-4 shadow-none radius-1" id="editdem_name_e"  >
                          <label class="floating-label text-grey-l1 text-95 ml-n3" for="id-login-username">Name (English)</label>
                        </div>
                      </div>
                      
                      
                      <div class="form-group col-12">
                        <button type="submit" name="edit_new_dem"  value="edit_new_dem" class="btn btn-sm btn-warning btn-block px-4 text-600 radius-1 ">
                         Update
                        </button>
                      </div>

                    </form>
                  </div><!-- /.modal-body -->

                </div>
              </div>
            </div>	
			
 <script>
function myFunction(a,b,c,d) {
	 $("#editdem_sn").val(a);
	 $("#editdem_name").val(b);
	 $("#editdem_name_l").val(c);
	 $("#editdem_name_e").val(d);


	 $("#editModal").modal("show");
	 
}
					</script> 
					
	
	
	
	<?php include"footer.php";?>