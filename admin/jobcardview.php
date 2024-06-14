<html>
<head>
<title>Jobcard</title>

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

<h2 class="impact" style="color:whitesmoke;"><b>Jobcard View</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">

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
        </tr>

<?php
$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("carservice",$con);
    $result=mysql_query("SELECT * FROM jobcard");
   
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
            echo "<td><center>".$row['JobCard_No']."</a></td>";
            echo "<td><center>".$row['Customer_Id']."</td>";
            echo "<td><center>".$row['Customer_Name']."</td>";
            echo "<td><center>".$row['Customer_Address']."</td>";
            echo "<td><center>".$row['Mobile_No']."</td>";
            echo "<td><center>".$row['Model_Name']."</td>";
            echo "<td><center>".$row['Vehicle_Name']."</td>";
            echo "<td><center>".$row['Vehicle_No']."</td>";
            echo "<td><center>".$row['JobCard_Date']."</td>";
            echo "<td><center>".$row['Fuel']."</td>";
            echo "<td><center>".$row['Date_Time_In']."</td>";
            echo "<td><center>".$row['Date_Time_Out']."</td>";
            echo "<td><center>".$row['Job_Allocation']."</td>";
            echo "<td><center>".$row['Kms']."</td>";
            echo "<td><center>".$row['Complain_Id']."</td>";
            echo "<td><center>".$row['Complain_Des']."</td>";
            echo "<td><center>".$row['Bay_No']."</td>";
            
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
