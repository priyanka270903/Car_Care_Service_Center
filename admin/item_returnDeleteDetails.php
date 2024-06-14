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

<h2 class="impact" style="color:whitesmoke;"><b>Item Return Delete</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">



<?php
 $con=mysql_connect("localhost","root","");
 if($con)
 {
    mysql_select_db("carservice",$con);
    $Receipt_Code=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM item_return WHERE Receipt_Code LIKE '%$Receipt_Code%'");
    $row=mysql_fetch_array($result);
    
    echo "<form action=\"item_returnDeleteSaveDetails.php\" method=\"POST\">";
   
     echo "<tr>";
    echo "<p><td>Returned Item Serial No <td> <input type=\"text\" name=\"Receipt_Code\" value={$row['Receipt_Code']}></p>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<p><td>Returned Item Date <td> <input type=\"text\" name=\"Return_Date\" value={$row['Return_Date']}></p>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<p><td>Returned Item Code <td> <input type=\"text\" name=\"Return_Code\" value={$row['Return_Code']}></p>";
    echo "</tr>";
    
    echo "<tr>"; 
    echo "<p><td>Returned Item Name <td> <input type=\"text\" name=\"Return_Name\" value={$row['Return_Name']}></p>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<p><td>Job Card Number <td><input type=\"text\" name=\"jobcardno\" value={$row['jobcardno']}></p>";
    echo "</tr>";
    
    echo "<tr>"; 
    echo "<p><td>Returned Item Unit of Measurement <td><input type=\"text\" name=\"Unit_Measure\" value={$row['Unit_Measure']}></p>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<p><td>Returned Item Quantity <td> <input type=\"text\" name=\"Qty\" value={$row['Qty']}></p>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<p><td>Returned Item Rate <td> <input type=\"text\" name=\"Rate\" value={$row['Rate']}></p>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<p><td>Returned Item Value <td><input type=\"text\" name=\"Value\" value={$row['Value']}></p>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<p><td>Warranty Year <td> <input type=\"text\" name=\"Warranty_Year\" value={$row['Warranty_Year']}></p>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<p><td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Delete\"value=\"DELETE\">";
     echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index2.html\">HOME</a></td>";
    echo "</tr>";
    
    echo "</form>";
    
 }
 mysql_close($con);
?>

