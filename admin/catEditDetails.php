
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

<h2 class="impact" style="color:whitesmoke;"><b>Category Master Edit</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">

<?php

$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("CARSERVICE",$con);
    echo "<body bgcolor=''>";
    echo "<center>";
    echo "<h1></h1>";
    $category_code=$_REQUEST['id'];
    $result=mysql_query("SELECT * FROM category_mast WHERE category_code LIKE '%$category_code%'");
    $row=mysql_fetch_array($result);
    
    echo "<form action=\"catSaveDetails.php\" method=\"POST\">";
    echo"<tr>";
    echo "<p><td>Category Code &nbsp;&nbsp;&nbsp;&nbsp;<td><input type=\"text\" name=\"catcode\" value={$row['category_code']}></td>";
    echo "</tr>";
    echo"<tr>";
    echo "<p><td>Category Name<td><input type=\"text\" name=\"catname\" value={$row['category_name']}></td>";
    echo"</tr>";
    
    
    echo "<tr>";
    echo "<td align=\"center\"><input class=\"button\" type=\"submit\" name=\"Save\"value=\"SAVE\"></td>";
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