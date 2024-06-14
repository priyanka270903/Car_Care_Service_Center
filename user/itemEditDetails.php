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

<h2 class="impact" style="color:whitesmoke;"><b>Item Master Edit</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">

<?php
 $con=mysql_connect("localhost","root","");
 if($con)
 {
    mysql_select_db("carservice",$con);
    $I_Code=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM item_mast WHERE I_Code LIKE '%$I_Code%'");
    $row=mysql_fetch_array($result);
    
    echo "<form action=\"itemSaveDetails.php\" method=\"POST\">";
    echo"<tr>";
    echo "<p><td>Item Code<td><input type=\"text\" name=\"icd\" value={$row['I_Code']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Item Name<td><input type=\"text\" name=\"I_Name\" value={$row['I_Name']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>ABC Code<td><input type=\"text\" name=\"Abc_Code\" value={$row['abc_Code']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Unit of Measurement<td><input type=\"text\" name=\"uom\" value={$row['Unit_Measure']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Quantity<td><input type=\"text\" name=\"qty\" value={$row['Quantity']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Rate<td><input type=\"text\" name=\"rate\" value={$row['Rate']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Value<td><input type=\"text\" name=\"value\" value={$row['Value']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>GST Rate<td><input type=\"text\" name=\"gst_rate\" value={$row['Gst_Rate']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>GST Amount<td><input type=\"text\" name=\"gst_amount\" value={$row['Gst_Amount']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Minimum Level<td><input type=\"text\" name=\"min_level\" value={$row['Mini_Level']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Maximum Level<td><input type=\"text\" name=\"max_level\" value={$row['Max_Level']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>Warranty/Gurantee<td><input type=\"text\" name=\"war_gu\" value={$row['War_Gu']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Save\"value=\"SAVE\">";
    echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index1.htm\">HOME</a></td>";
    echo"<tr>";
    echo "</form>";
 }
 mysql_close($con);
?>