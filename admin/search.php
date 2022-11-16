
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Manage Users</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
  <style>


	.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
	background: #dd3d36;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
	background: #5cb85c;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

		</style>
<style type="text/css">

			input[type=text] {
		 	width: 200px;height: 30px;
			}
			select{height: 30px;
			width: 200px;
			}
			input[type=date] {
			width: 200px;
			height: 30px;

			}
			input[type=button] {
		 	width:100px;
			height: 30px;
			}	
			input[type=submit] {
		 	width:100px;
			height: 30px;
		 	
			}
		</style>
</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							
							<div class="panel-body">
							
								<h2>&nbsp &nbsp &nbsp &nbsp Search</h2>
	<center>
		<form action="admin-fetch.php" method="post">
		<table border="a" style="width: 100%;height: 645px; border-collapse: collapse;">
			<tr>
				<td  style="margin: auto; text-align:center;" >Client Name </td>
				<td ><input type="text" name="clientname"></td>
				<td id="a" style=" text-align:center;">Assign To</td>
				<td ><select name="assignto">
				<?php echo "<option value='".$_SESSION['name']."'>".$_SESSION['name']."</option>";
				 
				$ac=array();
				$query="SELECT name FROM users WHERE designation='user'";
				$connect = mysqli_connect("sg2plcpnl0041", "franmax", "franmax", "i7036418_wp1");
  				$filter_Result=mysqli_query($connect, $query);  
				while($row=mysqli_fetch_array($filter_Result))
				{	if($row["name"]!=null){
					if(in_array(strtolower($row["name"]), $ac))
					{

					}					
					else
					{
						array_push($ac, strtolower($row["name"]));
						echo "<option value='".$row["name"]."'>".$row["name"]."</option>" ; 
					}}
				}

				?>
				</select>
				</td>
			</tr>
			<tr>
				<td id="a" style=" text-align:center;">Assign By</td>
				<td ><select name="assignby">
                
				<?php
				//$connect = mysqli_connect("sg2plcpnl0041", "franmax", "franmax", "i7036418_wp1");
				$query1="SELECT username FROM admin";
				$filter_Result=mysqli_query($connect, $query1);  
				$row=mysqli_fetch_array($filter_Result);
				echo "<option value='".$row["username"]."'>".$row["username"]."</option>" ; 
				 echo "<option value='".$_SESSION['name']."'>".$_SESSION['name']."</option>"; ?>
				</select>
				</td>
				<td id="a"style=" text-align:center;">Client Email</td>
				<td><input type="text" name="email"></td>
			</tr>
		
			<tr>
				<td id="a" style=" text-align:center;">Contact Number </td>
				<td><input type="text" name="contact" maxlength="10"></td>
				<td id="a" style=" text-align:center;">Brand</td>
				<td><input type="text" name="brand"></td>
			</tr>
			<tr>
				<td id="a" style=" text-align:center;">Start Date</td>
				<td><input type="date" name="start"></td>
				<td id="a" style=" text-align:center;">End Date</td>
				<td><input type="date" name="end"></td>
			</tr>
			<tr>		
				<td id="a" style=" text-align:center;">Lead Status</td>
				<td><select name="status">
				<option value="">-SELECT-</option>
				<option value="contacted">Contacted</option>
				<option value="contact in future">Contact in future</option>
				<option value="attempt to contact">Attempt to contact</option>
				<option value="lost lead">Lost lead</option>
				<option value="not qualified">Not qualified</option>
				</select></td>
				<td id="a" style=" text-align:center;">State</td>
				<td><input type="text" name="state"></td>
			</tr>
			<tr>
				<td id="a" style=" text-align:center;">Lead Source</td>
				<td><input type="text" name="source"></td>
				<td id="a"style="text-align:center;">City</td>
				<td><input type="text" name="city"></td>
			</tr>
			<tr>
				<td id="a" style=" text-align:center;">Investment Range</td>
				<td><select name="investment">
				<option value="">-SELECT-</option>
				<option value="below 5 lacs">Below 5 Lacs</option>
				<option value="5 lacs - 10 lacs">5 Lacs - 10 Lacs</option>
				<option value="10 lacs - 20 lacs">10 Lacs - 20 Lacs</option>
				<option value="30 lacs - 50 lacs">30 Lacs - 50 Lacs</option>
				<option value="above 50 lacs">Above 50 Lacs</option>
				</select></td>
				<td id="a"style=" text-align:center;">Remarks</td>
				<td><select name="remarks">
				<option value="">-SELECT-</option>
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
				<td  colspan='4'align="center"><input type="submit" name="search" value="Search">
				<input type="reset" name="btn2" value="Clear">
				</td>
			</tr>
		</table>
	</center>
	</form>
							</div>
						</div>
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
				 $(document).ready(function () {          
					setTimeout(function() {
						$('.succWrap').slideUp("slow");
					}, 3000);
					});
		</script>
		
</body>
</html>