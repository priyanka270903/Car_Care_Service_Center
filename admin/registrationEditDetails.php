<!DOCTYPE HTML>
<html>
<head>

<<style>
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

<h2 class="impact" style="color:whitesmoke;"><b>Registration Edit</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">





<?php

$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("carservice",$con);
    $UserName=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM registration WHERE username LIKE '%$UserName%'");
    $row=mysql_fetch_array($result);
   
    echo "<form action=\"registrationEditSaveDetails.php\" method=\"POST\">";
    
     echo"<tr>";
    echo "<p><td>User Name<td><input type=\"text\" name=\"duname\" value={$row['Username']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>User type<td><input type=\"text\" name=\"dutype\" value={$row['Usertype']}></p>";
    echo"</tr>";
        
    echo"<tr>";
    echo "<p><td>Email Id<td><input type=\"text\" name=\"demail\" value={$row['MailId']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Password<td><input type=\"text\" name=\"dpw\" value={$row['Password']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Confirm Password<td><input type=\"text\" name=\"dcpw\" value={$row['ConfirmPassword']}></p>";
    echo"</tr>";
    
   /* echo"<tr>";
    echo "<p><td>Category Name<td><input type=\"text\" name=\"dcatnm\" value={$row['CategoryName']}></p>";
    echo"</tr>";*/
    
    echo"<tr>";
    echo "<p><td>Sec Question<td><input type=\"text\" name=\"dsecque\" value={$row['SecurityQuestion']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Sec Answer<td><input type=\"text\" name=\"dsecans\" value={$row['SecurityAnswer']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>BirthDate<td><input type=\"text\" name=\"ddob\" value={$row['Dob']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Save\"value=\"SAVE\">";
     echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index2.html\">HOME</a></td>";
    echo"</tr>";
    echo "</form>";
    
}
mysql_close($con);
?>