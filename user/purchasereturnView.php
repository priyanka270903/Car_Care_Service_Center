<html>
<head>
<title>Purchase Return</title>

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

<h2 class="impact" style="color:whitesmoke;"><b>Purchase Return View</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">
        <tr>
        <th>Purchase Return Sr.No</th>
        <th>Purchase Return Date</th>
        <th>Purchase Order Sr.No</th>
        <th>Supplier Code</th>
        <th>Supplier Name</th>
        <th>Supplier Address</th>
        <th>GST Rate</th>
        <th>GST Amount</th>
        <th>TIN Code</th>
        <th>Item Code</th>
        <th>Item Name</th>
        <th>Unit of Measurement</th>
        <th>Quantity</th>
        <th>Rate</th>
        <th>Value</th>
        </tr>

<?php
 $con=mysql_connect("localhost","root","");
  if($con)
  {
    mysql_select_db("carservice",$con);
    $result=mysql_query("SELECT * FROM purchasereturn");
   
    if(mysql_num_rows($result)>0)
    {
       /* echo "<table border='1'>
        <tr>
        <th>Purchase Return Sr.No</th>
        <th>Purchase Return Date</th>
        <th>Purchase Order Sr.No</th>
        <th>Supplier Code</th>
        <th>Supplier Name</th>
        <th>Supplier Address</th>
        <th>GST Rate</th>
        <th>GST Amount</th>
        <th>TIN Code</th>
        <th>Item Code</th>
        <th>Item Name</th>
        <th>Unit of Measurement</th>
        <th>Quantity</th>
        <th>Rate</th>
        <th>Value</th>
        </tr>";*/
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><center>".$row['PurchaseReturnNo']."</a><center></td>";
            echo "<td><center>".$row['PurchaseReturnDate']."</center></td>";           
            echo "<td><center>".$row['PONo']."</td>"; 
            echo "<td><center>".$row['SupplierCode']."</td>";  
            echo "<td><center>".$row['SupplierName']."</td>";  
            echo "<td><center>".$row['SupplierAddress']."</td>"; 
            echo "<td><center>".$row['GstRate']."</td>"; 
            echo "<td><center>".$row['GstAmount']."</td>";  
            echo "<td><center>".$row['TinCode']."</td>";   
            echo "<td><center>".$row['ItemCode']."</td>"; 
            echo "<td><center>".$row['ItemName']."</td>";   
            echo "<td><center>".$row['UnitMeasure']."</td>";   
            echo "<td><center>".$row['Quantity']."</td>";
            echo "<td><center>".$row['Rate']."</td>";  
            echo "<td><center>".$row['Value']."</td>";                  
            echo "</tr>";
       }
       echo "</table>"; 
    }
 }
 mysql_close($con);
?>
</table>
<a onclick="preventBack()" class="button" href="index1.htm">HOME</a>
</center>
</body>
</html>