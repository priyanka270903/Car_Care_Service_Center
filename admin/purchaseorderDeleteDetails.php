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

<h2 class="impact" style="color:whitesmoke;"><b>Purchase Order Edit</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">


<?php
 $con=mysql_connect("localhost","root","");
 if($con)
 {
    mysql_select_db("carservice",$con);
    $PONo=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM purchaseorder WHERE PONo LIKE '%$PONo%'");
    $row=mysql_fetch_array($result);
    
    echo "<form action=\"purchaseorderDeleteSaveDetails.php\" method=\"POST\">";
    
    echo"<tr>";
    echo "<p><td>Purchased Item Serial No<td> <input type=\"text\" name=\"PONo\" value={$row['PONo']}></p></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Purchased Item Date <td> <input type=\"text\" name=\"PODt\" value={$row['PODt']}></p></td>";
     echo"</tr>";
     
      echo"<tr>";
    echo "<p><td>Supplier Code <td> <input type=\"text\" name=\"SuppCode\" value={$row['SuppCode']}></p></td>";
     echo"</tr>";
     
      echo"<tr>";
    echo "<p><td>Supplier Name <td> <input type=\"text\" name=\"SuppName\" value={$row['SuppName']}></p></td>";
     echo"</tr>";
     
      echo"<tr>";
    echo "<p><td>Supplier Address <td><input type=\"text\" name=\"SuppAdd\" value={$row['SuppAdd']}></p></td>";
     echo"</tr>";
     
      echo"<tr>";
    echo "<p><td>GST No <td> <input type=\"text\" name=\"GST\" value={$row['GST']}></p></td>";
     echo"</tr>";
     
      echo"<tr>";
    echo "<p><td>TIN Code<td> <input type=\"text\" name=\"TIN\" value={$row['TIN']}></p></td>";
     echo"</tr>";
     
      echo"<tr>";
    echo "<p><td>Aadhar Card No <td> <input type=\"text\" name=\"Aadhar\" value={$row['Aadhar']}></p></td>";
     echo"</tr>";
     
      echo"<tr>";
    echo "<p><td>Item Code <td> <input type=\"text\" name=\"ItemCode\" value={$row['ItemCode']}></p></td>";
     echo"</tr>";
     
      echo"<tr>";
    echo "<p><td>Item Name  <td><input type=\"text\" name=\"ItemName\" value={$row['ItemName']}></p></td>";
     echo"</tr>";
     
      echo"<tr>";
    echo "<p><td>Unit of Measurement<td> <input type=\"text\" name=\"UnitMeasure\" value={$row['UnitMeasure']}></p></td>";
     echo"</tr>";
     
      echo"<tr>";
    echo "<p><td>Quantity <td> <input type=\"text\" name=\"Qty\" value={$row['Qty']}></p></td>";
     echo"</tr>";
     
      echo"<tr>";
    echo "<p><td>Rate <td> <input type=\"text\" name=\"Rate\" value={$row['Rate']}></p></td>";
     echo"</tr>";
     
      echo"<tr>";
    echo "<p><td>Amount <td> <input type=\"text\" name=\"Amount\" value={$row['Amount']}></p></td>";
     echo"</tr>";
     
      echo"<tr>";
    echo "<p><td align=\"center\"><input class=\"button\" type=\"submit\" name=\"delete\" value=\"DELETE\">";
       echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index2.html\">HOME</a></td>";
     echo"</tr>";
    echo "</form>";
 }
 mysql_close($con);
?>

