<?php

if(isset ($_POST['Delete']))
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
$sql="delete from service_master where Service_Code like '%$Eservicecode%'"; 
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

header("location:serDelete.php");
?>