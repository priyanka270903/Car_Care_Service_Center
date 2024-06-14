<?php
 if(isset ($_POST['Save']))
 {  
    $PurchaseReturnNo=intval($_POST['PurchaseReturnNo']);
    $PurchaseReturnDate=$_POST['PurchaseReturnDate'];
    $PONo=$_POST['PONo'];
    $SupplierCode=$_POST['SupplierCode'];
    $SupplierName=$_POST['SupplierName'];
    $SupplierAddress=$_POST['SupplierAddress'];
    $GstRate=$_POST['GstRate'];
    $GstAmount=$_POST['GstAmount'];
    $TinCode=$_POST['TinCode'];
    $ItemCode=$_POST['ItemCode'];
    $ItemName=$_POST['ItemName'];
    $UnitMeasure=$_POST['UnitMeasure'];
    $Quantity=$_POST['Quantity'];
    $Rate=$_POST['Rate'];
    $Value=$_POST['Value'];
    $Value=$Quantity*$Rate;
    $GstAmount=$Value/$GstRate;
    $con=mysql_connect("localhost","root","");  
    if($con)
    {
        
        echo "Connected to MySQL"."<br/>";
    } 
    mysql_select_db("carservice");
    $sql="update purchasereturn set PurchaseReturnDate='$PurchaseReturnDate',PONo='$PONo',SupplierCode='$SupplierCode',SupplierName='$SupplierName',SupplierAddress='$SupplierAddress',GstRate='$GstRate',GstAmount='$GstAmount',TinCode='$TinCode',ItemCode='$ItemCode',ItemName='$ItemName',UnitMeasure='$UnitMeasure',Quantity='$Quantity',Rate='$Rate',Value='$Value' where PurchaseReturnNo=$PurchaseReturnNo"; 
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
header("location:purchasereturnEdit.php");
?>