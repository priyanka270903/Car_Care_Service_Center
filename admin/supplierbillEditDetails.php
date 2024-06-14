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

<h2 class="impact" style="color:whitesmoke;"><b>Supplier Bill Edit</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">


<?php
 $con=mysql_connect("localhost","root","");
 if($con)
 {
    mysql_select_db("carservice",$con);
    $SupplierBill=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM supplierbill WHERE SupplierBill LIKE '%$SupplierBill%'");
    $row=mysql_fetch_array($result);
   
    echo "<form action=\"supplierbillSaveDetails.php\" method=\"POST\">";
    
    //echo"<tr>";
   // echo "<p><td>Supplier Bill Serial No <td><input type=\"text\" name=\"SupplierBill\" value={$row['SupplierBill']}></p>";
    //echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Supplier Bill Date <td><input type=\"text\" name=\"BillDate\" value={$row['BillDate']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Purchase Order Serial No. <td> <input type=\"text\" name=\"PONo\" value={$row['PONo']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Supplier Code <td> <input type=\"text\" name=\"SupplierCode\" value={$row['SupplierCode']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Supplier Name <td> <input type=\"text\" name=\"SupplierName\" value={$row['SupplierName']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Item Code <td> <input type=\"text\" name=\"ItemCode\" value={$row['ItemCode']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>GST Rate<td> <input type=\"text\" name=\"Gst\" value={$row['Gst']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>GST Code <td> <input type=\"text\" name=\"GstCode\" value={$row['GstCode']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Freight Charges <td> <input type=\"text\" name=\"FreightCharges\" value={$row['FreightCharges']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Done <td> <input type=\"text\" name=\"Done\" value={$row['Done']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Payment Mode <td> <input type=\"text\" name=\"PaymentMode\" value={$row['PaymentMode']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Amount <td> <input type=\"text\" name=\"Amount\" value={$row['Amount']}></p>";
    echo"<tr>";
    echo "<p><td>Total Amount <td> <input type=\"text\" name=\"TotalAmount\" value={$row['TotalAmount']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Save\"value=\"SAVE\">";
    echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index2.html\">HOME</a></td>";
    echo"</tr>";
    echo "</form>";
 }
 mysql_close($con);
?>