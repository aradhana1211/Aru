<?php
error_reporting(1);
$filter_Result="";
$query="";
$qry1="";
 include('header.php');

if(isset($_POST['check'])){//to run PHP script on submit
    if(!empty($_POST['checklist'])){
       // echo $_POST['checklist'];
        $xyz=$_POST['user12'];
        echo $xyz;
      
        foreach($_POST['checklist'] as $selected){
            // echo $selected;
            $qry12="update franmax set assign_to='$xyz' where lead_id=$selected";
            mysqli_query($con,$qry12);
        }
    }
    header('Location:admin-fetch.php');
}
if(!isset($_POST['search'])){
    echo $_SESSION['to'];
    echo $_SESSION['by'];
}

  session_start();
    $col=[];
    $val=[];
  $assign_by=$_POST["assignby"];
  $assign_to=$_POST["assignto"];
//   $_SESSION['to']=$assignto;
//   $_SESSION['by']=$assignby;
  $client=$_POST["clientname"];
  $brand=$_POST["brand"];
  $email=$_POST["email"];
  $contact=$_POST["contact"];
  $source=$_POST["source"];
  $city=$_POST["city"];
  $state=$_POST["state"];
  $invest=$_POST["investment"];
  $industry=$_POST["industry"];
  $assign_to=$_POST["assignto"];
  $start=$_POST["start"];
  $end=$_POST["end"];
  $remarks=$_POST["remarks"];
  $status=$_POST["status"];
    if($client!=null)
    {
    array_push($col,'client_name');
      array_push($val,$client);
    }
    if($brand!=null)
    {
      array_push($col,'brand');
      array_push($val,$brand);
    }
    if($email!=null)
    {
      array_push($col,'email');
      array_push($val,$email);
    }
    if($contact!=null)
    {
      array_push($col,'mobile');
      array_push($val,$contact);
    }
    if($source!=null)
    {
      array_push($col,'source');
      array_push($val,$source);
    }
    if($city!=null)
    {
      array_push($col,'city');
      array_push($val,$city);
  }
    if($state!=null)
    {
      array_push($col,'state');
      array_push($val,$state);
    }
    if($invest!=null)
    {
      array_push($col,'investment');
      array_push($val,$investment);
    }
    if($industry!=null)
    {
      array_push($col,'industry');
      array_push($val,$industry);
    }
    if($assign_to!=null)
    {
      array_push($col,'assign_to');
      array_push($val,$assign_to);
    }
    if($remarks!=null)
    {
      array_push($col,'remarks');
      array_push($val,$remarks);
    }
    if($assign_by!=null)
  {
      array_push($col,'assign_by');
      array_push($val,$assign_by);
    }
    if($status!=null)
    {
      array_push($col,'status');
      array_push($val,$status);
    }
    if($col!=null and $val!=null)
    {
      $_SESSION['col']=$col;
      $_SESSION['val']=$val;
    }
    else
    {
      foreach($_SESSION['col'] as $productId){        
        array_push($col,$productId);     
      }
      foreach($_SESSION['val'] as $product){        
        array_push($val,$product);
     }
    }
    for($i=0; $i<count($col); $i++)
    {
      if($i==0)
      { 
        $qry1=$qry1.$col[$i]." LIKE '".$val[$i]."'"; 
      } 
      else
      { 
        $qry1=$qry1." and ".$col[$i]." LIKE '".$val[$i]."'"; 
      } 
    }
    if($start!=null || $end!=null)
    {
          if($start!=null && $end!=null)
          {
              $query= "SELECT * FROM franmax where(".$qry1." and date BETWEEN '".$start."' and '".$end."')";        
          }
          else if($start!=null)
          {
              $query= "SELECT * FROM franmax where(".$qry1." and date >= '".$start."')";
          }
          else if($end!=null)
          {
              $query= "SELECT * FROM franmax where(".$qry1." and date <= '".$end."')";
          }
          else
          {
              $query= "SELECT * FROM franmax where(".$qry1.")";        
          }
    }  
    else
          {
              $query= "SELECT * FROM franmax where(".$qry1.")";        
          }
    $filter_Result=mysqli_query($con, $query);  

?>


  
  <div role="main" class="main-content">
   
      <div class="page-content container container-plus">
        <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
              <h1 class="page-title text-primary-d2 text-140">
                  Search
                  <small class="page-info text-dark-m3">
                      <i class="fa fa-angle-double-right text-80"></i>
                      Manage
                  </small>
              </h1>
          </div>
        <div class="row">
          <div class="col">

           

            <!-- Zero Configuration Table -->
                     <div class="panel-body">
       <div>
                <table border="1" style="border-collapse: collapse; " >
    <tr>
      <td ><b>Sno.</b></td>
      <!-- <td style='padding: 20px'>Lead Id.</td> -->
      <td><b>Client Name/</br>Brand/</br>Source</b></td>
      <!-- <td style='padding: 20px'>Brand</td> -->
      <td ><b>Email/</br>Mobile</b></td>
      <!-- <td style='padding: 20px'>Mobile</td> -->
      <!-- <td style='padding: 20px'>Source</td> -->
      <td ><b>City/</br>State</b></td>
      <!-- <td style='padding: 20px'>State</td> -->
      <td ><b>Investment Range</b></td>
      <td ><b>Industry</b></td>
      <td ><b>Assign To/<br>Date</b></td>

      <td ><b>Remarks</b></td>
      <td ><b>Count</b></td>
      <!-- <td style='padding: 20px'>Assign By</td> -->
      <td ><b>Status/</br>Comments</b></td>
      <!-- <td style='padding: 20px'>Comments</td> -->
      <td ><b>Action</b></td>
    </tr>
    <?php   
      $Sno=0;
      //session_start();
        while($row=mysqli_fetch_array($filter_Result)){
        $Sno=$Sno+1;
        $lead=$row['lead_id'];
        $name=$row['client_name'];
        $brand=$row['brand'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $source=$row['source'];
        $city=$row['city'];
        $state=$row['state'];
        $investment=$row['investment'];
        $industry=$row['industry'];
        $assign_to=$row['assign_to'];
        $date=$row['date'];
        $remarks=$row['remarks'];
        $count=$row['count'];
        $assign_by=$row['assign_by'];
        $status=$row['status'];
        $comments=$row['comment'];
        
        echo "
        
        <form action='admin-edit.php' method='post'> 
        <tr>
          <td >",$Sno,"</br><input type='checkbox' name='checklist[]' value='$lead'></td>
         
          <td style='padding: 0px'>",$name,"<br>",$brand,"<br>",$source,"</td>
          
          <td style='padding: 0px'>",$email,"<br>",$mobile,"</td>
          
          
          <td style='padding: 0px'>",$city,"<br>",$state,"</td>
          
          <td style='padding: 0px'>",$investment,"</td>
          <td style='padding: 0px'>",$industry,"</td>
          <td style='padding: 0px'>",$assign_to,"<br>",$date,"</td>
          
          <td style='padding: 0px'>",$remarks,"</td>
          <td style='padding: 0px'>",$count,"</td>
         
          <td style='padding: 0px'>",$status,"<br>",$comments,"</td>
          
          
          <td ><button name='action' value='$lead'><a href='admin-edit.php'>
          </a>Edit</button></td>
          </tr>";
           }
             echo"
             <select name='user12'>
             <option >Assign to</option>";
            	$ac=array();
				$query123="SELECT name FROM users WHERE designation='user'";
				$connect1 = mysqli_connect("sg2plcpnl0041", "franmax", "franmax", "i7036418_wp1");
  				$filter_Result=mysqli_query($connect1, $query123);  
				while($row=mysqli_fetch_array($filter_Result))
				{	
				    if($row["name"]!=null)
				    {
    					if(in_array(strtolower($row["name"]), $ac))
    					{
    					}					
					else
					{
						array_push($ac, strtolower($row["name"]));
						echo "<option  value='".$row["name"]."'>".$row["name"]."</option>" ; 
					}
				        
				}
			}
            echo"
             </select>
             <input type='checkbox' name='select-all' id='select-all' onclick='selectAll()'/>Check All
             <input type='checkbox' name='unselect-all' id='unselect-all' onclick='unselectAll()'/>UnCheck All
             <script type='text/javascript'>
                function selectAll()
                {
                    var items=document.getElementsByName('checklist[]');
                    var items1=document.getElementById('unselect-all');
                    for(var i=0;i<items.length;i++)
                    {
                        if(items[i].type=='checkbox')
                            items[i].checked=true;
                    }
                    items1.checked=false;
                }
                function unselectAll()
                {
                    var items=document.getElementsByName('checklist[]');
                    var items1=document.getElementById('select-all');
                    for(var i=0;i<items.length;i++)
                    {
                        if(items[i].type=='checkbox')
                            items[i].checked=false;
                    }
                    items1.checked=false;
                }
             </script>
             <button name='check' formaction=' ' value='checklist[]'>Multi-Edit</button>
           </form>";
           
      
        ?>
        
  </table></div>
  <div>
        
          </div>
    
              </div>
            </div>
          </div>
        </div>

      </div>
    
  </div>


