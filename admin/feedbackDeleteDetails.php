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

<h2 class="impact" style="color:whitesmoke;"><b>Feedback Delete</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">



<?php
 $con=mysql_connect("localhost","root","");
 if($con)
 {
    mysql_select_db("carservice",$con);
    $Customer_Name=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM feedback WHERE Customer_Name LIKE '%$Customer_Name%'");
    $row=mysql_fetch_array($result);
    
    echo "<form action=\"feedbackDeleteSaveDetails.php\" method=\"POST\">";
    
    echo"<tr>";
    echo "<p><td>Customer Name<td><input type=\"text\" name=\"Customer_Name\" value={$row['Customer_Name']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<td>Mail ID<td><input type=\"text\" name=\"Customer_Email\" value={$row['Customer_Email']}>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<td>Feedback<td><input type=\"text\" name=\"Feedback\" value={$row['Feedback']}>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Delete\"value=\"Delete\">";
    echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index2.html\">HOME</a></td>";
    echo"</tr>";
    echo "</form>";   
 }
 mysql_close($con);
?>