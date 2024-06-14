<?php
 if(isset ($_POST['Delete']))
 {
    $PurchaseReturnNo=$_POST['PurchaseReturnNo'];
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
    $con=mysql_connect("localhost","root","");  
    if($con)
    {
     echo "Connected to MySQL"."<br/>";
    } 
    mysql_select_db("carservice");
    $sql="delete from purchasereturn where PurchaseReturnNo like '%$PurchaseReturnNo%'"; 
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
header("location:purchasereturnDelete.php");
?>