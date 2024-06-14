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

<h2 class="impact" style="color:whitesmoke;"><b>Customer Master Delete</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">




<?php

$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("CARSERVICE",$con);
    $Customer_ID=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM customer_mast WHERE Customer_ID LIKE '%$Customer_ID%'");
    $row=mysql_fetch_array($result);
    
    echo "<form action=\"cusDeleteSaveDetails.php\" method=\"POST\">";
    echo"<tr>";
    echo "<p><td>Category Code<td><input type=\"text\" name=\"cusid\" value={$row['Customer_ID']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Category Name<td><input type=\"text\" name=\"cusname\" value={$row['Customer_Name']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Category Name<td><input type=\"text\" name=\"cusaddrs\" value={$row['Customer_Address']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Category Name<td><input type=\"text\" name=\"cusmob\" value={$row['Customer_mobile_No']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Category Name<td><input type=\"text\" name=\"cusemail\" value={$row['Customer_Email']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Category Name<td><input type=\"text\" name=\"cusvehiclno\" value={$row['Customer_Vehicle_No']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Category Name<td><input type=\"text\" name=\"cusvehiclname\" value={$row['Customer_Vehicle_Name']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Delete\"value=\"DELETE\">";
    echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index2.html\">HOME</a></td>";
    echo"</tr>";
    echo "</form>";
    
}
mysql_close($con);
?>

