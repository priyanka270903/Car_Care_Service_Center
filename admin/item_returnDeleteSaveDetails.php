<?php
 if(isset ($_POST['Delete']))
 {
    $Receipt_Code=$_POST['Receipt_Code'];
    $Return_Date=$_POST['Return_Date'];
    $Return_Code=$_POST['Return_Code'];
    $Return_Name=$_POST['Return_Name'];
    $jobcardno=$_POST['jobcardno'];
    $Unit_Measure=$_POST['Unit_Measure'];
    $Qty=$_POST['Qty'];
    $Rate=$_POST['Rate'];
    $Value=$_POST['Value'];
    $Warranty_Year=$_POST['Warranty_Year'];
    $con=mysql_connect("localhost","root","");  
    if($con)
    {
     echo "Connected to MySQL"."<br/>";
    } 
    mysql_select_db("carservice");
    $sql="delete from item_return where Receipt_Code like '%$Receipt_Code%'"; 
    if(mysql_query($sql,$con))
    {
     echo "Record Deleted Successfully";  
    }
    else    
   {
     echo "Deletion FAILS>>>!!!";
   }
   mysql_close($con);
 }
 header("location:item_returnDelete.php");
?>