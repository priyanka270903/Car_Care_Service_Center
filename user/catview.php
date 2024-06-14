<html>
<head>
<title>Category</title>

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

<h2 class="impact" style="color:whitesmoke;"><b>Category Master View</b></h2>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:2px solid  black" bordercolor="#D7DF01">
<tr>
<th>Category Code </th>
<th>Description </th>

</tr>

<?php
$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("CARSERVICE",$con);
    $result=mysql_query("SELECT * FROM category_mast");
   
    if(mysql_num_rows($result)>0)
    {
     //   echo "<table border='1'>
        //<tr>
        //<th>Category Code</th>
        //<th>Category Name</th>
       
        
       // </tr>";
        while($row=mysql_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['category_code']."</a></td>";
        
            echo "<td>".$row['category_name']."</td>";            
            
            echo "</tr>";
       }
        echo "</table>"; 
    }
}
mysql_close($con);
?>
</table>
<a onclick="preventBack()" class="button" href="index1.htm">HOME</a>
</center>
</body>
</html>