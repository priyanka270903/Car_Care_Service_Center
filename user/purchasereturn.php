<?php
 if(isset($_POST['submit']))
 {
    $con=mysql_connect("localhost","root","");
    if($con)
  {
   // echo "Connection successful...!!!"."<br/>";
    mysql_select_db("carservice");
    $pid=$_POST['PONo'];
    echo $pid;
    $sql3 = "select PODt,SuppCode,SuppName,SuppAdd,TIN,ItemCode,ItemName,UnitMeasure,Rate from purchaseorder where PONo= $pid";
    $query = mysql_query($sql3,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        $pod = $rs['PODt']; 
        $SupplierCode = $rs['SuppCode'];
        $SupplierName = $rs['SuppName'];
        $SupplierAddress = $rs['SuppAdd'];
        $TinCode = $rs['TIN'];
        $ItemCode = $rs['ItemCode'];
        $ItemName = $rs['ItemName'];
        $UnitMeasure = $rs['UnitMeasure'];
        $Rate = $rs['Rate'];
    }
   }
  }
?>
<?php
 if(isset($_POST['submit']))
 {
    //$PurchaseReturnNo=$_POST['PurchaseReturnNo'];
    $PurchaseReturnDate=$_POST['PurchaseReturnDate'];
    $GstRate=$_POST['GstRate'];
    $Qty=$_POST['Qty'];
    $Value=$Qty * $Rate;
    $GstAmount=$Value / $GstRate;
    $con=mysql_connect("localhost","root","");
    mysql_select_db("carservice");
    $sql="insert into purchasereturn values(PurchaseReturnNo,'$PurchaseReturnDate',$pid,'$SupplierCode','$SupplierName','$SupplierAddress',$GstRate,$GstAmount,'$TinCode','$ItemCode','$ItemName','$UnitMeasure',$Qty,$Rate,$Value)";
    if($pod >= $PurchaseReturnDate)
    {
         echo "<script>alert('Please enter Return Date Greater than Order Date!!!!');</script>";
         echo ("<script LANGUAGE='Javascript'>window. location. href='purchasereturn.htm';</script>");   
    }
    else
    {
        
    
    if(mysql_query($sql,$con))
    {
    $upd="Update item_mast set Quantity=Quantity - $Qty where I_Code='$ItemCode' ";
    mysql_query($upd,$con);
    echo("Item master updated successfully!!!");    
    echo "<script>alert('Record Inserted Successfully!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.htm';</script>");
    }
    else
    {
    echo "<script>alert('Error!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='purchasereturn.htm';</script>");
    }
    
    mysql_close($con);
 }
 }
?>