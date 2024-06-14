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

<h2 class="impact" style="color:whitesmoke;"><b>Purchase Return Edit</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">


<?php
 $con=mysql_connect("localhost","root","");
 if($con)
 {
    mysql_select_db("carservice",$con);
    $PurchaseReturnNo=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM purchasereturn WHERE PurchaseReturnNo LIKE '%$PurchaseReturnNo%'");
    $row=mysql_fetch_array($result);
   
    echo "<form action=\"purchasereturnSaveDetails.php\" method=\"POST\">";
    
    echo"<tr>";
    echo "<p><td>Purchased Return Serial No <td> <input type=\"text\" name=\"PurchaseReturnNo\" value={$row['PurchaseReturnNo']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Purchased Return Date <td><input type=\"text\" name=\"PurchaseReturnDate\" value={$row['PurchaseReturnDate']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Purchased Order Sr.No. <td><input type=\"text\" name=\"PONo\" value={$row['PONo']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Supplier Code <td> <input type=\"text\" name=\"SupplierCode\" value={$row['SupplierCode']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Supplier Name <td> <input type=\"text\" name=\"SupplierName\" value={$row['SupplierName']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Supplier Address <td> <input type=\"text\" name=\"SupplierAddress\" value={$row['SupplierAddress']}></p>";
    echo"<tr>";
    
    echo"<tr>";
    echo "<p><td>GST Rate <td><input type=\"text\" name=\"GstRate\" value={$row['GstRate']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>GST Amount <td> <input type=\"text\" name=\"GstAmount\" value={$row['GstAmount']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>TIN Code<td> <input type=\"text\" name=\"TinCode\" value={$row['TinCode']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Item Code <td> <input type=\"text\" name=\"ItemCode\" value={$row['ItemCode']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Item Name <td> <input type=\"text\" name=\"ItemName\" value={$row['ItemName']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Unit of Measurement<td> <input type=\"text\" name=\"UnitMeasure\" value={$row['UnitMeasure']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Quantity <td> <input type=\"text\" name=\"Quantity\" value={$row['Quantity']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Rate <td> <input type=\"text\" name=\"Rate\" value={$row['Rate']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Value <td> <input type=\"text\" name=\"Value\" value={$row['Value']}></p>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Save\"value=\"SAVE\">";
     echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index1.htm\">HOME</a></td>";
    echo"</tr>";
    
    echo "</form>";
 }
 mysql_close($con);
?>