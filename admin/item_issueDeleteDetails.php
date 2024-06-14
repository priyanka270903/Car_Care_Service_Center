<!DOCTYPE HTML>
<html>
<head>


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

<h2 class="impact" style="color:whitesmoke;"><b>Item Issue Delete</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">



<?php
 $con=mysql_connect("localhost","root","");
 if($con)
 {
    mysql_select_db("carservice",$con);
    $I_No=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM item_issue WHERE I_No LIKE '%$I_No%'");
    $row=mysql_fetch_array($result);
   
    echo "<form action=\"item_issueDeleteSaveDetails.php\" method=\"POST\">";
    
    echo"<tr>";
    echo "<p><td>Issued Item Serial No <td><input type=\"text\" name=\"I_No\" value={$row['I_No']}></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Issued Item Date <td><input type=\"text\" name=\"IssueDate\" value={$row['IssueDate']}></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Item Code <td><input type=\"text\" name=\"I_Code\" value={$row['I_Code']}></td>";
    echo"</tr>";
    
    echo"<tr>"; 
    echo "<p><td>Issued Item Name <td> <input type=\"text\" name=\"Issue_Iname\" value={$row['Issue_Iname']}></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Job Card Number <td> <input type=\"text\" name=\"jobcardno\" value={$row['jobcardno']}></td>";
    echo"</tr>";
    
    echo"<tr>"; 
    echo "<p><td>Issued Item Unit of Measurement <td> <input type=\"text\" name=\"Issue_Unit_Measure\" value={$row['Issue_Unit_Measure']}></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Issued Item Quantity <td> <input type=\"text\" name=\"Issue_Qty\" value={$row['Issue_Qty']}></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Issued Item Rate <td> <input type=\"text\" name=\"Issue_Rate\" value={$row['Issue_Rate']}></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Issued Item Value <td> <input type=\"text\" name=\"Issue_Value\" value={$row['Issue_Value']}></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Warranty Year <td> <input type=\"text\" name=\"Warranty_Year\" value={$row['Warranty_Year']}></td>";
    echo"</tr>";
     
    echo "<tr>";
    echo "<td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Delete\"value=\"DELETE\">";
    echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index2.html\">HOME</a></td>";
    echo "</tr>";   
   
    echo "</form>";
    echo "</table>";
    echo "</center>";
   
 }
 mysql_close($con);
?>
</table>
</center>
</body>
</html>
