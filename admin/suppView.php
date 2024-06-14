<html>
<head>
<title>Supplier Master</title>

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

<h2 class="impact" style="color:whitesmoke;"><b>Supplier Master View</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">
        <tr>
        <th>SupplierCode</th>
        <th>SupplierName</th>
        <th>SupplierAddress</th>
        <th>MobileNo</th>
        <th>Email</th>
        <th>GST</th>
        <th>Tin Code</th>
        <th>Aadhar Card Number</th>
        </tr>
<?php
$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("carservice",$con);
    $result=mysql_query("SELECT * FROM supplier_mast");
   
    if(mysql_num_rows($result)>0)
    {
       /* echo "<table border='1'>
        <tr>
        <th>SupplierCode</th>
        <th>SupplierName</th>
        <th>SupplierAddress</th>
        <th>MobileNo</th>
        <th>Email</th>
        <th>GST</th>
        <th>Tin Code</th>
        <th>Aadhar Card Number</th>
        </tr>";*/
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><center>".$row['suppCode']."</a></td>";
            echo "<td><center>".$row['suppName']."</td>";
            echo "<td><center>".$row['suppAddress']."</td>";
            echo "<td><center>".$row['mobNo']."</td>";
            echo "<td><center>".$row['email']."</td>";
            echo "<td><center>".$row['GST']."</td>";
            echo "<td><center>".$row['TIN']."</td>";
            echo "<td><center>".$row['Aadhar']."</td>";
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