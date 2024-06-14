<html>
<head>
<title>Item Return</title>
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
<style>
  body {
    background-image: url('bg1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
  }
  </style>
<script type = "text/javascript" >
function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 0);
window.onunload = function () { null };
</script>
</head>
<body bgcolor="">

<center>

<marquee><h1 class="impact" style="color:white;"><b>Car Care Service Center</b></h1></marquee>

<h2 class="impact" style="color:whitesmoke;"><b>Item Return Delete</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">
 
        <tr>
        <th>Returned Item Sr.No</th>
        <th>Returned Item Date</th>
        <th>Returned Item Code</th>
        <th>Returned Item Name</th>
        <th>Job Card Number</th>
        <th>Retuened Item Unit of Measurement</th>
        <th>Returned Item Quantity</th>
        <th>Returned Item Rate</th>
        <th>Returned Item Value</th>
        <th>Warranty Year</th>
        </tr>     


<?php
 $con=mysql_connect("localhost","root","");
 if($con)
 {
    mysql_select_db("carservice",$con);
    $result=mysql_query("SELECT * FROM item_return");
  
    if(mysql_num_rows($result)>0)
    {
      /*  echo "<table border='1'>
        <tr>
        <th>Returned Item Sr.No</th>
        <th>Returned Item Date</th>
        <th>Returned Item Code</th>
        <th>Returned Item Name</th>
        <th>Job Card Number</th>
        <th>Retuened Item Unit of Measurement</th>
        <th>Returned Item Quantity</th>
        <th>Returned Item Rate</th>
        <th>Returned Item Value</th>
        <th>Warranty Year</th>
        </tr>";*/
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><center><a href=\"item_returnDeleteDetails.php?id={$row['Receipt_Code']}\">".$row['Receipt_Code']."</a></td>";          
            echo "<td><center>".$row['Return_Date']."</td>";           
            echo "<td><center>".$row['Return_Code']."</td>";
            echo "<td><center>".$row['Return_Name']."</td>";
            echo "<td><center>".$row['jobcardno']."</td>";
            echo "<td><center>".$row['Unit_Measure']."</td>";
            echo "<td><center>".$row['Qty']."</td>";
            echo "<td><center>".$row['Rate']."</td>";
            echo "<td><center>".$row['Value']."</td>";
            echo "<td><center>".$row['Warranty_Year']."</td>";
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
