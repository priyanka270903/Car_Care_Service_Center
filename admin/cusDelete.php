<html>
<head>
<title>Customer Master</title>

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

<h2 class="impact" style="color:whitesmoke;"><b>Customer Master Delete</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">
        <tr>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Customer Address</th>
        <th>Customer Mobile No</th>
        <th>Customer Email</th>
        <th>Customer Vehicle No</th>
        <th>Customer Vehicle Name</th>
        </tr>

<?php
$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("CARSERVICE",$con);
    $result=mysql_query("SELECT * FROM customer_mast");
  
    if(mysql_num_rows($result)>0)
    {
      /*  echo "<table border='1'>
        <tr>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Customer Address</th>
        <th>Customer Mobile No</th>
        <th>Customer Email</th>
        <th>Customer Vehicle No</th>
        <th>Customer Vehicle Name</th>
        </tr>";*/
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><center><a href=\"cusDeleteDetails.php?id={$row['Customer_ID']}\">".$row['Customer_ID']."</a></td>";
        
            echo "<td><center>".$row['Customer_Name']."</td>"; 
            echo "<td><center>".$row['Customer_Address']."</td>";  
            echo "<td><center>".$row['Customer_mobile_No']."</td>";  
            echo "<td><center>".$row['Customer_Email']."</td>";  
            echo "<td><center>".$row['Customer_Vehicle_No']."</td>";  
            echo "<td><center>".$row['Customer_Vehicle_Name']."</td>";             
            
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
