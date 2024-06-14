<html>
<head>
<title>Item Issue</title>


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

<h2 class="impact" style="color:whitesmoke;"><b>Item Issue Master Edit</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">
        <tr>
        <th>Issued Item Sr.No</th>
        <th>Issued Item Date</th>
        <th>Item Code</th>
        <th>Issued Item Name</th>
        <th>Job Card Number</th>
        <th>Issued Item Unit of Measurement</th>
        <th>Issued Item Quantity</th>
        <th>Issued Item Rate</th>
        <th>Issued Item Value</th>
        <th>Warranty Year</th>
        </tr>
<?php
 $con=mysql_connect("localhost","root","");
  if($con)
  {
    mysql_select_db("carservice",$con);
    $result=mysql_query("SELECT * FROM item_issue");
   
    if(mysql_num_rows($result)>0)
   {
    //    echo "<table border='1'>
     //   <tr>
     //   <th>Issued Item Sr.No</th>
       // <th>Issued Item Date</th>
    //    <th>Item Code</th>
      //  <th>Issued Item Name</th>
        //<th>Job Card Number</th>
    //    <th>Issued Item Unit of Measurement</th>
      //  <th>Issued Item Quantity</th>
        //<th>Issued Item Rate</th>
    //    <th>Issued Item Value</th>
      //  <th>Warranty Year</th>
       // </tr>";
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td><center><a href=\"item_issueEditDetails.php?id={$row['I_No']}\">".$row['I_No']."</a></td>";
            echo "<td><center>".$row['IssueDate']."</td>";           
            echo "<td><center>".$row['I_Code']."</td>";
            echo "<td><center>".$row['Issue_Iname']."</td>";
            echo "<td><center>".$row['jobcardno']."</td>";
            echo "<td><center>".$row['Issue_Unit_Measure']."</td>";
            echo "<td><center>".$row['Issue_Qty']."</td>";
            echo "<td><center>".$row['Issue_Rate']."</td>";
            echo "<td><center>".$row['Issue_Value']."</td>";
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
