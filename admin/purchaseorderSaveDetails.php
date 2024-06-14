<?php
 if(isset ($_POST['Save']))
 {  
    $PONo=intval($_POST['PONo']);
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
    $sql="update purchaseorder set PODt='$PODt',SuppCode='$SuppCode',SuppName='$SuppName',SuppAdd='$SuppAdd',GST='$GST',TIN='$TIN',Aadhar='$Aadhar',ItemCode='$ItemCode',ItemName='$ItemName',UnitMeasure='$UnitMeasure',Qty=$Qty,Rate=$Rate,Amount=$Amount where PONo = $PONo"; 
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
header("location:purchaseorderEdit.php");
?>