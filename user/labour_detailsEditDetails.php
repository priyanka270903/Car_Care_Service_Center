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

<h2 class="impact" style="color:whitesmoke;"><b>Labour Detail Edit</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">



<?php
 $con=mysql_connect("localhost","root","");
 if($con)
 {
    mysql_select_db("carservice",$con);
    $lid=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM labour_detail WHERE lid LIKE '%$lid%'");
    $row=mysql_fetch_array($result);
   
    echo "<form action=\"labour_detailSaveDetails.php\" method=\"POST\">";
    
     echo"<tr>";
    echo "<p><td>Labour Id <td><input type=\"text\" name=\"Llid\" value={$row['lid']}></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Labour Code <td><input type=\"text\" name=\"Llabour_code\" value={$row['labour_code']}></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Labour Description <td><input type=\"text\" name=\"Llabour_desc\" value={$row['labour_desc']}></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>JobCard Number<td><input type=\"text\" name=\"Ljobcard_no\" value={$row['jobcard_no']}></td>";
    echo"</tr>";
    
    echo"<tr>"; 
    echo "<p><td>Charges <td> <input type=\"text\" name=\"Lcharges\" value={$row['charges']}></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Tax<td> <input type=\"text\" name=\"Ltax\" value={$row['tax']}></td>";
    echo"</tr>";
    
    echo"<tr>"; 
    echo "<p><td>GST Amount <td> <input type=\"text\" name=\"Lgst_amount\" value={$row['gst_amount']}></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Discount<td> <input type=\"text\" name=\"Ldiscount\" value={$row['discount']}></td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<p><td>Total Amount <td> <input type=\"text\" name=\"Ltotal_amount\" value={$row['total_amount']}></td>";
    echo"</tr>";
 
     
    echo "<tr>";
    echo "<td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Save\"value=\"SAVE\">";
     echo "<td align=\"center\"><a onclick=\"preventBack()\" class=\"button\" href=\"index1.htm\">HOME</a></td>";
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