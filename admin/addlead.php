<?php
error_reporting(1);
    include("../database.php");
    $client=$_POST["clientname"];
    $brand=$_POST["brand"];
    $email=$_POST["email"];
    $contact=$_POST["contact"];
    $source=$_POST["source"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $invest=$_POST["investment"];
    $industry=$_POST["industry"];
    $assignto=$_POST["assignto"];
    $start=$_POST["date"];
    $remarks=$_POST["remarks"];
    $count=0;
    $assignby=$_POST["assignby"];
    $status=$_POST["status"];
    $desig=$_POST["comment"];
    
    $sql="insert into franmax(client_name, brand, email, mobile, source, city, state, investment, industry, assign_to, date, remarks, count, assign_by, status, comment) values('$client','$brand','$email','$contact','$source','$city','$state','$invest','$industry','$assignto','$start','$remarks','$count','$assignby','$status','$desig')";
    
    mysqli_query($con,$sql);

    header("location:add.php");
   
