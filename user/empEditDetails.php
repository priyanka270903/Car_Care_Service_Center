<!DOCTYPE HTML>
<html>
<head>

<style>
    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 10px 28px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
    </style>
<script type = "text/javascript" >
function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 0);
window.onunload = function () { null };
</script>

<style>
  body {
    background-image: url('bg1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
  }
  </style>
  
</head>
<body bgcolor="">

<center>

<marquee><h1 class="impact" style="color:white;"><b>Car Care Service Center</b></h1></marquee>

<h2 class="impact" style="color:whitesmoke;"><b>Employee Master Edit</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">




<?php
 $con=mysql_connect("localhost","root","");
 if($con)
 {
    mysql_select_db("carservice",$con);
    $EmpId=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM emp_mast WHERE EmpId LIKE '%$EmpId%'");
    $row=mysql_fetch_array($result);
   
    echo "<form action=\"empSaveDetails.php\" method=\"POST\">";
    
    echo"<tr>";
    echo "<p><td>Employee ID <td> <input type=\"text\" name=\"EmpId\" value={$row['EmpId']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Employee Name <td> <input type=\"text\" name=\"EmpName\" value={$row['EmpName']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Employee Category Code <td><input type=\"text\" name=\"EmpCategoryCode\" value={$row['EmpCategoryCode']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Employee Category Name <td> <input type=\"text\" name=\"EmpCategoryName\" value={$row['EmpCategoryName']}></p><td>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Employee Address <td> <input type=\"text\" name=\"EmpAddress\" value={$row['EmpAddress']}></p><td>";
    echo"<tr>";
    
    echo"<tr>"; 
    echo "<p><td>Employee City <td> <input type=\"text\" name=\"EmpCity\" value={$row['EmpCity']}></p><td>";
    echo"<tr>";
    
    echo"<tr>"; 
    echo "<p><td>Employee State <td> <input type=\"text\" name=\"EmpState\" value={$row['EmpState']}></p><td>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Employee Pincode <td> <input type=\"text\" name=\"EmpPincode\" value={$row['EmpPincode']}></p><td>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Employee Gender <td> <input type=\"text\" name=\"EmpGender\" value={$row['EmpGender']}></p><td>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Employee Email Id <td><input type=\"text\" name=\"EmpEmailId\" value={$row['EmpEmailId']}></p><td>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Employee License No <td> <input type=\"text\" name=\"EmpLicenseNo\" value={$row['EmpLicenseNo']}></p><td>";
    echo"<tr>";
    
    echo"<tr>"; 
    echo "<p><td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Save\"value=\"SAVE\">";
    echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index1.htm\">HOME</a></td>";
    echo"<tr>";
    echo "</form>";
 }
 mysql_close($con);
?>