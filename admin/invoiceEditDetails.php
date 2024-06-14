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

<h2 class="impact" style="color:whitesmoke;"><b>Invoice Edit</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">


<?php

$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("carservice",$con);
    $Invoice_No=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM invoice WHERE invoice_no LIKE '%$Invoice_No%'");
    $row=mysql_fetch_array($result);
    
    echo "<form action=\"invoiceSaveDetails.php\" method=\"POST\">";
    
   echo"<tr>";
   echo "<p><td>Invoice No<td><input type=\"integer\" name=\"inno\" value={$row['invoice_no']}></p></td>";
    echo"</tr>";
    
    //echo"<tr>";
    //echo "<p><td>Invoice Date<td><input type=\"date\" name=\"indt\" value={$row['invoice_date']}></p></td>";
   // echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>JobCard No<td><input type=\"text\" name=\"jobcno\" value={$row['job_cardno']}></p></td>";
    echo"</tr>";
    
   // echo"<tr>";
    //echo "<p><td>Customer Name<td><input type=\"text\" name=\"cusname\" value={$row['customer_name']}></p></td>";
    //echo"</tr>";
    
   // echo"<tr>";
//    echo "<p><td>Mobile No<td><input type=\"text\" name=\"mobno\" value={$row['mobile_no']}></p></td>";
//    echo"</tr>";
//    
//    echo"<tr>";
//    echo "<p><td>Vehicle Name<td><input type=\"text\" name=\"vname\" value={$row['vehicle_name']}></p></td>";
//    echo"</tr>";
//    
//    echo"<tr>";
//    echo "<p><td>Kms<td><input type=\"text\" name=\"kms\" value={$row['kms']}></p></td>";
//    echo"</tr>";
//    
//    echo"<tr>";
//    echo "<p><td>Vehicle No<td><input type=\"text\" name=\"vno\" value={$row['vehicle_no']}></p></td>";
//    echo"</tr>";
//    
//    echo"<tr>";
//    echo "<p><td>Model Name<td><input type=\"text\" name=\"mname\" value={$row['model_name']}></p></td>";
//    echo"</tr>";
//    
 echo"<tr>";
  echo "<p><td>Total Parts Amount<td><input type=\"text\" name=\"tparts\" value={$row['total_parts']}></p></td>";
  echo"</tr>";
//    
 echo"<tr>";
 echo "<p><td>Total Labour Ammount<td><input type=\"text\" name=\"tlab\" value={$row['total_labour']}></p></td>";
 echo"</tr>";
//    
 echo"<tr>";
   echo "<p><td>GST Amount<td><input type=\"text\" name=\"gamt\" value={$row['gst_amount']}></p></td>";
  echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Discount<td><input type=\"text\" name=\"dis\" value={$row['discount']}></p>";
    echo"</tr>";
    
   echo"<tr>";
 echo "<p><td>Net Bill Amount<td><input type=\"text\" name=\"nba\" value={$row['net_bill_amount']}></p></td>";
echo"</tr>";
    
     echo"<tr>";
    echo "<p><td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Save\" value=\"SUBMIT\">";
     echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index2.html\">HOME</a></td>";
    echo "</form>";
     echo"</tr>";
}
mysql_close($con);
?>