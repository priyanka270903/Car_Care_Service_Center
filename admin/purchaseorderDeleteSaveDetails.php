<?php
 if(isset ($_POST['delete']))
 {  
    $PONo=$_POST['PONo'];
    $PODt=$_POST['PODt'];
    $SuppCode=$_POST['SuppCode'];
    $SuppName=$_POST['SuppName'];
    $SuppAdd=$_POST['SuppAdd'];
    $GST=$_POST['GST'];
    $TIN=$_POST['TIN'];
    $Aadhar=$_POST['Aadhar'];
    $ItemCode=$_POST['ItemCode'];
    $ItemName=$_POST['ItemName'];
    $UnitMeasure=$_POST['UnitMeasure'];
    $Qty=$_POST['Qty'];
    $Rate=$_POST['Rate'];
    $Amount=$_POST['Amount'];
    $Amount=$Qty*$Rate;
    $con=mysql_connect("localhost","root","");  
    if($con)
    {
        
        echo "Connected to MySQL"."<br/>";
    } 
    mysql_select_db("carservice");
    
    $del="Delete from purchaseorder where PONo like '%$PONo%'"; 
    if(mysql_query($del,$con))
    {
        echo "Record deletion Successfully";  
    }
    else
    {
        echo "deletion FAILS>>>!!!";
    }
    mysql_close($con);
}
header("location:purchaseorderDelete.php");
?>