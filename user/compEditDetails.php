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

<h2 class="impact" style="color:whitesmoke;"><b>Complain Edit</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">



<?php

$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("carservice",$con);
    $cid=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM complaint_mast WHERE compid LIKE '%$cid%'");
    $row=mysql_fetch_array($result);
  
    echo "<form action=\"compSaveDetails.php\" method=\"POST\">";
    echo"<tr>";
    echo "<td>Complain ID<td><input type=\"integer\" name=\"compid\" value={$row['compid']}>";
     echo"</tr>";
     
      echo"<tr>";
         echo "<td>Complain Description<td><input type=\"text\" name=\"compdesc\" value={$row['compdesc']}>";
          echo"</tr>";
          
           echo"<tr>";
    echo "<td>Complain Bay<td><input type=\"integer\" name=\"compbay\" value={$row['compbay']}>";
     echo"</tr>";
    
    echo "<td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Save\" value=\"SUBMIT\">";
   echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index1.htm\">HOME</a></td>";
    echo "</form>";
    
}
mysql_close($con);
?>