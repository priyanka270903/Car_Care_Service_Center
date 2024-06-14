<html>
<head>
<title>Item Master</title>

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

<h2 class="impact" style="color:whitesmoke;"><b>Item Master View</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">
        <tr>
        <th>Item Code</th>
        <th>Item Name</th>
        <th>abc Code</th>
        <th>Unit Measure</th>
        <th>Quantity</th>
        <th>Rate</th>
        <th>Value</th>
        <th>GST Rate</th>
        <th>GST Amount</th>
        <th>Min Level</th>
        <th>Max Level</th>
        <th>Warranty / Guarantee</th>
        </tr>

<?php
 $con=mysql_connect("localhost","root","");
  if($con)
  {
    mysql_select_db("carservice",$con);
    $result=mysql_query("SELECT * FROM item_mast");
    
    if(mysql_num_rows($result)>0)
    {
       /* echo "<table border='1'>
        <tr>
        <th>I_Code</th>
        <th>I_Name</th>
        <th>abc_Code</th>
        <th>Unit_Measure</th>
        <th>Quantity</th>
        <th>Rate</th>
        <th>Value</th>
        <th>GST_Rate</th>
        <th>GST_Amount</th>
        <th>Mini_Level</th>
        <th>Max_Level</th>
        <th>War_Gu</th>
        </tr>";*/
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><center>".$row['I_Code']."</a></td>";
            echo "<td><center>".$row['I_Name']."</td>";           
            echo "<td><center>".$row['abc_Code']."</td>"; 
            echo "<td><center>".$row['Unit_Measure']."</td>"; 
            echo "<td><center>".$row['Quantity']."</td>"; 
            echo "<td><center>".$row['Rate']."</td>"; 
            echo "<td><center>".$row['Value']."</td>"; 
            echo "<td><center>".$row['Gst_Rate']."</td>"; 
            echo "<td><center>".$row['Gst_Amount']."</td>"; 
            echo "<td><center>".$row['Mini_Level']."</td>"; 
            echo "<td><center>".$row['Max_Level']."</td>";
            echo "<td><center>".$row['War_Gu']."</td>";  
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

