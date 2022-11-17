<?php include('header.php');?>

  <div role="main" class="main-content">
      <div class="page-content container container-plus">
        <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
              <h1 class="page-title text-primary-d2 text-140">
                  Add
                  <small class="page-info text-dark-m3">
                      <i class="fa fa-angle-double-right text-80"></i>
                      Manage
                  </small>
              </h1>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <center>
                  <form action="addlead.php" method="post">
                    <table border="a" style="width: 100%;height: 645px; border-collapse: collapse;">
                        <tr>
                          <td  style="margin: auto; text-align:center;" >Client Name </td>
                          <td ><input type="text" name="clientname"></td>
                          <td id="a" style=" text-align:center;">Assign To</td>
                          <td ><select name="assignto">
                          <?php 
                          $query="SELECT name FROM users where designation='user'";
                          
                            $filter_Result=mysqli_query($con, $query);  
                          while($row=mysqli_fetch_array($filter_Result))
                          {
                            
                            echo "<option value='".$row["name"]."'>".$row["name"]."</option>" ; 
                          }
                          ?>
                          </select>
                          </td>
                        </tr>
                        <tr>
                          <td id="a" style=" text-align:center;">Assign By</td>
                          <td ><select name="assignby">
                          <?php     
                            echo "<option value='".$_SESSION["user_name"]."'>".$_SESSION['user_name']."</option>" ; 
                          ?>
                          </select>
                          </td>
                          <td id="a" style=" text-align:center;">Brand</td>
                          <td><input type="text" name="brand"></td>
                        </tr>
                        <tr>
                          <td id="a" style=" text-align:center;">Contact Number </td>
                          <td><input type="text" name="contact" maxlength="10"></td>
                          <td id="a"style=" text-align:center;">Client Email</td>
                          <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                          <td id="a" style=" text-align:center;">Date</td>
                          <td><input type="date" name="date"></td>
                          <td id="a" style=" text-align:center;">State</td>
                          <td><input type="text" name="state"></td>
                        </tr>
                        <tr>    
                          <td id="a" style=" text-align:center;">Lead Status</td>
                          <td><select name="status">
                          <option value="">--SELECT--</option>
                          <option value="contacted">Contacted</option>
                          <option value="contact in future">Contact in future</option>
                          <option value="attempt to contact">Attempt to contact</option>
                          <option value="lost lead">Lost lead</option>
                          <option value="not qualified">Not qualified</option>
                          </select></td>
                          <td id="a"style="text-align:center;">City</td>
                          <td><input type="text" name="city"></td>
                        </tr>
                        <tr>
                          <td id="a" style=" text-align:center;">Lead Source</td>
                          <td><input type="text" name="source"></td>
                          <td id="a"style=" text-align:center;">Comments</td>
                          <td><input type="text" name="comment"></td>
                        </tr>
                        <tr>
                          <td id="a" style=" text-align:center;">Investment Range</td>
                          <td><select name="investment">
                          <option value="">--SELECT--</option>
                          <option value="below 5 lacs">Below 5 Lacs</option>
                          <option value="5 lacs - 10 lacs">5 Lacs - 10 Lacs</option>
                          <option value="10 lacs - 20 lacs">10 Lacs - 20 Lacs</option>
                          <option value="30 lacs - 50 lacs">30 Lacs - 50 Lacs</option>
                          <option value="above 50 lacs">Above 50 Lacs</option>
                          </select></td>
                          <td id="a"style=" text-align:center;">Remarks</td>
                          <td><select name="remarks">
                          <option value="">--SELECT--</option>
                          <option value="interested">Interested</option>
                          <option value="not interested">Not Interested</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td id="a" style=" text-align:center;">Industry</td>
                          <td><input type="text" name="industry"></td>
                          <td colspan="2"></td>
                        </tr>
                        <tr>
                          <td  colspan='4'align="center"><input type="submit" name="submit" value="Submit">
                          <input type="button" name="btn2" value="Clear">
                          </td>
                        </tr>
                    </table>
                  </form>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

<!-- Loading Scripts -->
<!-- <script src="js/jquery.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/fileinput.js"></script>
<script src="js/chartData.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
       $(document).ready(function () {          
        setTimeout(function() {
          $('.succWrap').slideUp("slow");
        }, 3000);
        });
</script> -->
  
