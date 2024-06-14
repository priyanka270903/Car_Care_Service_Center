<html>
<head>
<title>Purchase Order</title>

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

<h2 class="impact" style="color:whitesmoke;"><b>Purchase Order Delete</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">
 <tr>
        <th>Purchase Order Sr.No</th>
        <th>Purchase Order Date</th>
        <th>Supplier Code</th>
        <th>Supplier Name</th>
        <th>Supplier Address</th>
        <th>GST NO.</th>
        <th>TIN Code</th>
        <th>Aadhar Card Number</th>
        <th>Item Code</th>
        <th>Item Name</th>
        <th>Unit of Measurement</th>
        <th>Quantity</th>
        <th>Rate</th>
        <th>Amount</th>
        </tr>

<?php
 $con=mysql_connect("localhost","root","");
  if($con)
  {
    mysql_select_db("carservice",$con);
    $result=mysql_query("SELECT * FROM purchaseorder");
    
    if(mysql_num_rows($result)>0)
    {
  /*      echo "<table border='1'>
        <tr>
        <th>Purchase Order Sr.No</th>
        <th>Purchase Order Date</th>
        <th>Supplier Code</th>
        <th>Supplier Name</th>
        <th>Supplier Address</th>
        <th>GST NO.</th>
        <th>TIN Code</th>
        <th>Aadhar Card Number</th>
        <th>Item Code</th>
        <th>Item Name</th>
        <th>Unit of Measurement</th>
        <th>Quantity</th>
        <th>Rate</th>
        <th>Amount</th>
        </tr>";*/
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><center><a href=\"purchaseorderDeleteDetails.php?id={$row['PONo']}\">".$row['PONo']."</a></td>";
            echo "<td><center>".$row['PODt']."</td>";           
            echo "<td><center>".$row['SuppCode']."</td>";
            echo "<td><center>".$row['SuppName']."</td>";
            echo "<td><center>".$row['SuppAdd']."</td>";
            echo "<td><center>".$row['GST']."</td>";
            echo "<td><center>".$row['TIN']."</td>";
            echo "<td><center>".$row['Aadhar']."</td>";
            echo "<td><center>".$row['ItemCode']."</td>";
            echo "<td><center>".$row['ItemName']."</td>";
            echo "<td><center>".$row['UnitMeasure']."</td>";
            echo "<td><center>".$row['Qty']."</td>";
            echo "<td><center>".$row['Rate']."</td>";
            echo "<td><center>".$row['Amount']."</td>";
            echo "</tr>";
       }
       echo "</table>"; 
    }
 }
 mysql_close($con);
?>
</table>
<a onclick="preventBack()" class="button" href="index2.html">HOME</a>
</center>
</body>
</html>
