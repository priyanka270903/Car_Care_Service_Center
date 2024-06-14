<?php
 if(isset ($_POST['Save']))
 {  
    $SupplierBill=$_POST['SupplierBill'];
    $BillDate=$_POST['BillDate'];
    $PONo=$_POST['PONo'];
    $SupplierCode=$_POST['SupplierCode'];
    $SupplierName=$_POST['SupplierName'];
    $ItemCode=$_POST['ItemCode'];
    $Gst=$_POST['Gst'];
    $GstCode=$_POST['GstCode'];
    $FreightCharges=$_POST['FreightCharges'];
    $Done=$_POST['Done'];
    $PaymentMode=$_POST['PaymentMode'];
    $Amount=$_POST['Amount'];
    $TotalAmount=$_POST['TotalAmount'];
    $con=mysql_connect("localhost","root","");  
    if($con)
    {
        
        echo "Connected to MySQL"."<br/>";
    } 
    mysql_select_db("carservice");
    $sql="update supplierbill set BillDate='$BillDate',PONo=$PONo,SupplierCode='$SupplierCode',SupplierName='$SupplierName',ItemCode='$ItemCode',Gst=$Gst,GstCode='$GstCode',FreightCharges=$FreightCharges,Done='$Done',PaymentMode='$PaymentMode',Amount=$Amount,TotalAmount=$TotalAmount where SupplierBill like '%$SupplierBill%'"; 
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
header("location:supplierbillEdit.php");
?>