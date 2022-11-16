<?php
session_start();
include "../database.php";
extract($_POST);
// --------------------------------registration ajax----------------------//

$gurukul_admin = mysqli_real_escape_string($con, $_POST['gurukul_admin']);
$gurukul_password = mysqli_real_escape_string($con, $_POST['gurukul_password']);
if( (isset($_POST["gurukul_admin"])) && (isset($_POST["gurukul_password"]))  )
{	
$result = mysqli_query($con,"SELECT * FROM admin WHERE user_name='" . $gurukul_admin. "' and password = '". $gurukul_password."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["user_name"]=$row['user_name'];
$_SESSION["id"]=$row['id'];

			if(!empty($_POST["remember"])) {
				setcookie ("gurukul_admin",$_POST["gurukul_admin"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("gurukul_password",$_POST["gurukul_password"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["gurukul_admin"])) {
					setcookie ("gurukul_admin","");
				}
				if(isset($_COOKIE["gurukul_password"])) {
					setcookie ("gurukul_password","");
				}
			}	
		echo "ok";
	} else {
		echo "err";
	}
	exit();
}
?>
