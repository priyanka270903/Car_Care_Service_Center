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

<h2 class="impact" style="color:whitesmoke;"><b>Service Master Delete</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">






<?php

$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("CARSERVICE",$con);
    $Service_Code=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM service_master WHERE Service_Code LIKE '%$Service_Code%'");
    $row=mysql_fetch_array($result);
   
    echo "<form action=\"serDeleteSaveDetails.php\" method=\"POST\">";
    
    echo"<tr>";
    echo "<p><td>Service Code<td><input type=\"text\" name=\"sercode\" value={$row['Service_Code']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Service Name<td><input type=\"text\" name=\"sername\" value={$row['Service_Name']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Service Type<td><input type=\"text\" name=\"sertype\" value={$row['Service_Type']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Service Charge<td><input type=\"text\" name=\"sercharge\" value={$row['Service_Charge']}></p>";
    echo"</tr>";
    
    echo "<tr>";
    echo "<p><td align=\"center\"><input  class=\"button\" type=\"submit\" name=\"Delete\"value=\"DELETE\">";
    echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index2.html\">HOME</a></td>";
    echo "</tr>";
    echo "</form>";
    
}
mysql_close($con);
?>
