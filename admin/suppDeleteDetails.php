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

<h2 class="impact" style="color:whitesmoke;"><b>Supplier Master Delete</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">


<?php

$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("carservice",$con);
    $supcode=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM supplier_mast WHERE suppCode LIKE '%$supcode%'");
    $row=mysql_fetch_array($result);
   
    echo "<form action=\"suppDeleteSaveDetails.php\" method=\"POST\">";
    
    echo"<tr>";
    echo "<p><td>Supplier Code<td><input type=\"text\" name=\"suppCode\" value={$row['suppCode']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Supplier Name<td><input type=\"text\" name=\"suppName\" value={$row['suppName']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Supplier Address<td><input type=\"text\" name=\"suppAddress\" value={$row['suppAddress']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Mobile Number<td><input type=\"text\" name=\"mobNo\" value={$row['mobNo']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Email ID<td><input type=\"text\" name=\"email\" value={$row['email']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>GST<td><input type=\"text\" name=\"GST\" value={$row['GST']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Tin Code<td><input type=\"text\" name=\"TIN\" value={$row['TIN']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Aadhar Card Number<td><input type=\"text\" name=\"Aadhar\" value={$row['Aadhar']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Delete\" value=\"DELETE\">";
    echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index2.html\">HOME</a></td>";
    echo"</tr>";
    echo "</form>";
    
}
mysql_close($con);
?>
