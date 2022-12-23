<?php include"header.php";?>
        <div role="main" class="main-content">

          <div class="page-content container container-plus">
            <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
              <h1 class="page-title text-primary-d2 text-140">
                News
                <small class="page-info text-dark-m3">
                  <i class="fa fa-angle-double-right text-80"></i>
                  Manage
                </small>
              </h1>
			  

              <div class="page-tools mt-3 mt-sm-0 mb-sm-n1">
                <!-- dataTables search box will be inserted here dynamically -->
              </div>
            </div>

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
                        Title
                      </th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Image
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
				  
                   <?php $sn=1; $sql = mysqli_query($con, "SELECT * FROM news ORDER BY id DESC"); 
			while($rows = mysqli_fetch_array($sql)) { ?>
			
                    <tr class="d-style bgc-h-default-l4">
                      <td class="td-toggle-details pos-rel">
                        <!-- this empty table cell will show the `+` sign which toggles the hidden cells in responsive (collapsed) mode -->

                      </td>


                      <td>
                        <div class="text-95 text-secondary-d1">
                        <?php echo $rows["id"];?>
                        </div>
                      </td>
                      <td ><?php echo $rows["title"];?> </td>
                      <td>  <img src="news/<?php echo $rows["image"];?>" height=50 width=50></td>
                   
                      <td text-95 text-secondary-d1>  <?php echo $rows["description"];?> </td>
                     
                      <td class="align-middle">
                        <span>
                            
                        </span>
                        <span>
                            <a data-rel="tooltip" title="Delete" href="delete.php?news_id=<?php echo $rows["id"];?>" >
                                <i class="fa fa-trash text-120" ></i>
                            </a>
                        </span>
                        <span>
                            <a data-rel="tooltip"  title="" href="newsadd.php?news_id=<?php echo $rows["id"];?>" data-original-title="Edit">
                                <i class="fa fa-edit text-blue-m1 text-120" ></i>
                            </a>
                        </span>
                          <!-- <span>
                              <a data-rel="tooltip"  title="" href="viewuser.php?news_id=<?php echo $rows["id"];?>" data-original-title="View">
                                  <i class="fa fa-eye text-blue-m1 text-120" ></i>
                              </a>
                          </span> -->
                      </td>
                    </tr>
			<?php $sn++; } ?>
                  </tbody>
                </table>

              </form>
            </div>
          </div>
		   
			
          <?php include "footer.php";?>