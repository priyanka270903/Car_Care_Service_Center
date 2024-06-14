<?php

if(isset ($_POST['Delete']))
{
     
    $Ecustomerid=$_POST['cusid'];
    $Ecustomername=$_POST['cusname'];
    $Ecustomeraddress=$_POST['cusaddrs'];
    $Ecustomermobno=$_POST['cusmob'];
    $Ecustomeremail=$_POST['cusemail'];
    $Ecustomervehicleno=$_POST['cusvehiclno'];
    $Ecustomervehiclename=$_POST['cusvehiclname'];

$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("CARSERVICE");
$sql="delete from customer_mast where Customer_ID like '%$Ecustomerid%'"; 
if(mysql_query($sql,$con))
{
  echo "Record deleted Successfully";  
}
else
{
    echo "Deletion FAILS>>>!!!";
}
mysql_close($con);



}

header("location:cusDelete.php");
?>