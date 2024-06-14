<html>
<head>
<title>Supplier Bill</title>

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

<h2 class="impact" style="color:whitesmoke;"><b>supplier Bill Delete</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">

        <tr>
        <th>Supplier Bill Sr.No</th>
        <th>Supplier Bill Date</th>
        <th>Purchase Order Sr.No</th>
        <th>Supplier Code</th>
        <th>Supplier Name</th>
        <th>Item Code</th> 
        <th>GST Rate</th>    
        <th>GST Code</th>
        <th>Freight Charges</th>
        <th>Payment Done</th>   
        <th>Payment Mode</th>
        <th>Amount</th>
        <th>Total Amount</th>
        </tr>
<?php
 $con=mysql_connect("localhost","root","");
 if($con)
 {
    mysql_select_db("carservice",$con);
    $result=mysql_query("SELECT * FROM supplierbill");
   
    if(mysql_num_rows($result)>0)
    {
      /*  echo "<table border='1'>
        <tr>
        <th>Supplier Bill Sr.No</th>
        <th>Supplier Bill Date</th>
        <th>Purchase Order Sr.No</th>
        <th>Supplier Code</th>
        <th>Supplier Name</th>
        <th>Item Code</th> 
        <th>GST Rate</th>    
        <th>GST Code</th>
        <th>Freight Charges</th>
        <th>Payment Done</th>   
        <th>Payment Mode</th>
        <th>Amount</th>
        <th>Total Amount</th>
        </tr>";*/
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><center><a href=\"supplierbillDeleteDetails.php?id={$row['SupplierBill']}\">".$row['SupplierBill']."</a></td>";
            echo "<td><center>".$row['BillDate']."</td>"; 
            echo "<td><center>".$row['PONo']."</td>";           
            echo "<td><center>".$row['SupplierCode']."</td>";
            echo "<td><center>".$row['SupplierName']."</td>";
            echo "<td><center>".$row['ItemCode']."</td>"; 
            echo "<td><center>".$row['Gst']."</td>";
            echo "<td><center>".$row['GstCode']."</td>"; 
            echo "<td><center>".$row['FreightCharges']."</td>"; 
            echo "<td><center>".$row['Done']."</td>"; 
            echo "<td><center>".$row['PaymentMode']."</td>"; 
            echo "<td><center>".$row['Amount']."</td>";
            echo "<td><center>".$row['TotalAmount']."</td>"; 
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