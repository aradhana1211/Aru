<?php
//error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
// $connect = mysqli_connect("sg2plcpnl0041", "franmax", "franmax", "i7036418_wp1");

$output = '';
if(isset($_POST["import"]))
{
 $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
     
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excelfile
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  PHPExcel_Settings::setZipClass(PHPExcel_Settings::PCLZIP);
  $PHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file
 
  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  
  foreach ($PHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";
    $name = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $brand = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $email = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $mobile = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $source = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $city = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $state = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
    $investment = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
    $industry = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
    $assign_to = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
    $date = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
    $remarks = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(11, $row)->getValue());
    $count = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(12, $row)->getValue());
    $assign_by = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(13, $row)->getValue());
    $status = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(14, $row)->getValue());
    $comment = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(15, $row)->getValue());
   
  
    $query = "INSERT INTO franmax(client_name,brand,email,mobile,source,city,state,investment,industry,assign_to,date,remarks,count,assign_by,status,comment) VALUES ('".$name."', '".$brand."', '".$email."', '".$mobile."', '".$source."', '".$city."', '".$state."', '".$investment."', '".$industry."', '".$assign_to."', '".$date."', '".$remarks."', '".$count."', '".$assign_by."', '".$status."', '".$comment."')";
    mysqli_query($connect, $query);
    $output .= '<td>'.$name.'</td>';
    $output .= '<td>'.$email.'</td>';
    $output .= '</tr>';
    
   }
  } 
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel 
 }
}
?>


    <?php include('header.php');?>

    <div class="ts-main-content">
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">


                        <!-- Zero Configuration Table -->
                       
                            <div class="panel-body">
                            <div class="login-page bk-img">
        <div class="form-content">
            <div class="container" style="width: 500px;height: 300px;">
               
                    
                       
                       <div class="container box" style="border: 0px;">
   <h3 >Upload lead's excel file</h3><br />
   <form method="post" enctype="multipart/form-data">
    
    <label>Select Excel File</label>
    <div >
    <input type="file" name="excel" align="center" />
  </div>
    <br />
    
    <input type="submit" name="import" class="btn btn-info" value="Import"  />
   
   </form>
   <br />
   <br />
   
  </div>
                        </div>
               
            
        </div>
    </div>
    
  
