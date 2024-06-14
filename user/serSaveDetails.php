<?php

if(isset ($_POST['SAVE']))
{
     
    $Eservicecode=$_POST['sercode'];
    $Eservicename=$_POST['sername'];
    $Eservicetype=$_POST['sertype'];
    $Eservicecharge=$_POST['sercharge'];

$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("CARSERVICE");
$sql="update service_master set  Service_Name='$Eservicename', Service_Type='$Eservicetype', Service_Charge='$Eservicecharge'  where Service_code like '%$Eservicecode%'"; 
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

header("location:serEdit.php");
?>