<?php

if(isset ($_POST['Delete']))
{
     
    $Ecategorycode=$_POST['catcode'];
    $Ecategoryname=$_POST['catname'];

$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("CARSERVICE");
$sql="delete from category_mast where category_code like '%$Ecategorycode%'"; 
if(mysql_query($sql,$con))
{
  echo "Record Deleted Successfully";  
}
else    
{
    echo "deletion FAILS>>>!!!";
}
mysql_close($con);
}
header("location:catDelete.php");
?>