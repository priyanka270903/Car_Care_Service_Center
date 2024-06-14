<html>
<head>
<title>Invoice</title>

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

<h2 class="impact" style="color:whitesmoke;"><b>Invoice Delete</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">

        <tr>
        <th> Invoice No </th>
        <th> Invoice Date </th>
        <th> Job Card No </th>
        <th> Customer Name </th>
        <th> Customer Address </th>
        <th> Mobile No </th>
        <th> Vehicle Name </th>
        <th>Kms</th>
        <th> Vehicle No </th>
        <th> Model No </th>
        <th> Total Parts Amount </th>
        <th> Total Labour Amount </th>
        <th> GST Amount </th>
        <th> Discount </th>
        <th> Net Bill Amount </th>
        </tr>

<?php
$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("carservice",$con);
    $result=mysql_query("SELECT * FROM invoice");
   
    if(mysql_num_rows($result)>0)
    {
      /*  echo "<table border='1'>
        <tr>
        <th> JobCard No </th>
        <th> Customer Id </th>
        <th> Customer Name </th>
        <th> Customer Address </th>
        <th> Mobile No </th>
        <th> Model Name </th>
        <th> Vehicle Name </th>
        <th> Vehicle No </th>
        <th> JobCard Date </th>
        <th> Fuel </th>
        <th> Date Time In </th>
        <th> Date Time Out </th>
        <th> Job Allocation </th>
        <th> Kms </th>
        <th>Complaint ID</th>
        <th>Complaint Description</th>
        <th>Bay Number</th>
        </tr>";*/
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><center><a href=\"invoiceDeleteDetails.php?id={$row['invoice_no']}\">".$row['invoice_no']."</a></td>";
            echo "<td><center>".$row['invoice_date']."</td>";
            echo "<td><center>".$row['job_cardno']."</td>";
            echo "<td><center>".$row['customer_name']."</td>";
            echo "<td><center>".$row['customer_address']."</td>";
            echo "<td><center>".$row['mobile_no']."</td>";
            echo "<td><center>".$row['vehicle_name']."</td>";
            echo "<td><center>".$row['kms']."</td>";
            echo "<td><center>".$row['vehicle_no']."</td>";
            echo "<td><center>".$row['model_name']."</td>";
            echo "<td><center>".$row['total_parts']."</td>";
            echo "<td><center>".$row['total_labour']."</td>";
            echo "<td><center>".$row['gst_amount']."</td>";
            echo "<td><center>".$row['discount']."</td>";
            echo "<td><center>".$row['net_bill_amount']."</td>";
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
