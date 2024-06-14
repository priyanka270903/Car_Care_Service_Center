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

<h2 class="impact" style="color:whitesmoke;"><b>Jobcard Edit</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">


<?php

$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("carservice",$con);
    $JobCard_No=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM jobcard WHERE JobCard_No LIKE '%$JobCard_No%'");
    $row=mysql_fetch_array($result);
    
    echo "<form action=\"jobcardSaveDetails.php\" method=\"POST\">";
    
    echo"<tr>";
    echo "<p><td>JobCard No<td><input type=\"integer\" name=\"djobcno\" value={$row['JobCard_No']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Customer Id<td><input type=\"text\" name=\"dcusid\" value={$row['Customer_Id']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Customer Name<td><input type=\"text\" name=\"dcusname\" value={$row['Customer_Name']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Customer Address<td><input type=\"text\" name=\"dcusaddrs\" value={$row['Customer_Address']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Mobile No<td><input type=\"text\" name=\"dmobno\" value={$row['Mobile_No']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Model Name<td><input type=\"text\" name=\"dmodname\" value={$row['Model_Name']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Vehicle Name<td><input type=\"text\" name=\"dvehiclename\" value={$row['Vehicle_Name']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Vehicle No<td><input type=\"text\" name=\"dvechicleno\" value={$row['Vehicle_No']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>JobCard Date<td><input type=\"date\" name=\"djobcdaate\" value={$row['JobCard_Date']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Fuel<td><input type=\"text\" name=\"dfuel\" value={$row['Fuel']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Date Time In<td><input type=\"date\" name=\"ddatetin\" value={$row['Date_Time_In']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Date Time Out<td><input type=\"date\" name=\"ddatetout\" value={$row['Date_Time_Out']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Job Allocation<td><input type=\"text\" name=\"djoballo\" value={$row['Job_Allocation']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Kms<td><input type=\"text\" name=\"dkms\" value={$row['Kms']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Complaint ID<td><input type=\"text\" name=\"dcompid\" value={$row['Complain_Id']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Complain Description<td><input type=\"text\" name=\"dcomdes\" value={$row['Complain_Des']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Bay No<td><input type=\"text\" name=\"dbayno\" value={$row['Bay_No']}></p></td>";
    echo"</tr>";
    
     echo"<tr>";
    echo "<p><td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Save\" value=\"SUBMIT\">";
     echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index1.htm\">HOME</a></td>";
    echo "</form>";
     echo"</tr>";
}
mysql_close($con);
?>