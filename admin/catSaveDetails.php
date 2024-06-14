<?php

if(isset ($_POST['Save']))
{
     
    $Ecategorycode=$_POST['catcode'];
    $Ecategoryname=$_POST['catname'];

$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("CARSERVICE");
$sql="update category_mast set category_name='$Ecategoryname' where category_code like '%$Ecategorycode%'"; 
if(mysql_query($sql,$con))
{
  echo "Record Updated Successfully";  
}
else
{
    echo "UPDATION FAILS>>>!!!";
}
mysql_close($con);

}

header("location:catEdit.php");
?>