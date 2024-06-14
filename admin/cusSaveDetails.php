<?php

if(isset ($_POST['Save']))
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
$sql="update customer_mast set Customer_Name='$Ecustomername',Customer_Address='$Ecustomeraddress',Customer_mobile_No=$Ecustomermobno,Customer_Email='$Ecustomeremail',Customer_Vehicle_No='$Ecustomervehicleno',Customer_Vehicle_Name='$Ecustomervehiclename' where Customer_ID like '%$Ecustomerid%'"; 
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

header("location:cusEdit.php");
?>