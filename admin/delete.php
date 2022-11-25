<?php
include"header.php";    
?>






<?php 


if(isset($_GET['user_id']))
{
    $id = $_GET['user_id'];
	$res = mysqli_query($con, "SELECT *  FROM users WHERE id = '$id'");
        // while($row = mysqli_fetch_array($res)){
        //         unlink("../img/home_banner/".$row['banner_image']);
        // } 
   $query = "DELETE FROM `users` WHERE id = '$id'";
    
    $result = mysqli_query($con, $query);
    
    if($result)
    {
        echo 'user Deleted';
    }else{
        echo 'user Not Deleted';
    }
    mysqli_close($con);
	echo " <meta http-equiv='refresh' content='0;URL=userindex.php' />";
}
if(isset($_GET['brand_id']))
{
    $id = $_GET['brand_id'];
    $res = mysqli_query($con, "SELECT *  FROM brand WHERE id = '$id'");
   $query = "DELETE FROM `brand` WHERE id = '$id'";
    
    $result = mysqli_query($con, $query);
    
    if($result)
    {
        echo 'brand Deleted';
    }else{
        echo 'brand Not Deleted';
    }
    mysqli_close($con);
    echo " <meta http-equiv='refresh' content='0;URL=brandindex.php' />";
}

if(isset($_GET['banner_id']))
{
    $id = $_GET['banner_id'];
	$res = mysqli_query($con, "SELECT *  FROM banner WHERE `banner_id` = $id");
        while($row = mysqli_fetch_array($res)){
                unlink("../img/home_banner/".$row['banner_image']);
        } 
   $query = "DELETE FROM `banner` WHERE `banner_id` = $id";
    
    $result = mysqli_query($con, $query);
    
    if($result)
    {
        echo 'Image Deleted';
    }else{
        echo 'Image Not Deleted';
    }
    mysqli_close($con);
	echo " <meta http-equiv='refresh' content='0;URL=banner_images.php' />";
}


if(isset($_GET['cat_id']))
{
    $id = $_GET['cat_id'];
	$res = mysqli_query($con, "SELECT *  FROM category WHERE `cat_id` = $id");
        while($row = mysqli_fetch_array($res)){
                unlink("../img/cat_img/".$row['cat_image']);
        } 
   $query = "DELETE FROM `category` WHERE `cat_id` = $id";
    
    $result = mysqli_query($con, $query);
    
    if($result)
    {
        echo 'Entry Deleted';
    }else{
        echo 'Entry Not Deleted';
    }
    mysqli_close($con);
	echo " <meta http-equiv='refresh' content='0;URL=category.php' />";
}


if(isset($_GET['pro_id']))
{
    $id = $_GET['pro_id'];
	$res = mysqli_query($con, "SELECT *  FROM products WHERE `pro_id` = $id");
        while($row = mysqli_fetch_array($res)){
                unlink("../img/pro_img/".$row['pro_image']);
        } 
   $query = "DELETE FROM `products` WHERE `pro_id` = $id";
    
    $result = mysqli_query($con, $query);
    
    if($result)
    {
        echo 'Entry Deleted';
    }else{
        echo 'Entry Not Deleted';
    }
    mysqli_close($con);
	
	echo " <meta http-equiv='refresh' content='0;URL=products.php' />";
}



if(isset($_GET['con_id']))
{
    $id = $_GET['con_id']; 
   $query = "DELETE FROM `quote_form` WHERE `con_id` = $id";
    
    $result = mysqli_query($con, $query);
    
    if($result)
    {
        echo 'Entry Deleted';
    }else{
        echo 'Entry Not Deleted';
    }
    mysqli_close($con);
	
	echo " <meta http-equiv='refresh' content='0;URL=quatation.php' />";
}
?>
