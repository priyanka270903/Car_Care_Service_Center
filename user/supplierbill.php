<?php
 if(isset($_POST['submit']))
 {
    $con=mysql_connect("localhost","root","");
    if($con)
  {
    //echo "Connection successful...!!!"."<br/>";
    mysql_select_db("carservice");
    $sid=$_POST['PONo'];
   // echo $sid;
    $sql3 = "select SuppCode,SuppName,ItemCode,GST,Amount from purchaseorder where PONo= $sid";
    $query = mysql_query($sql3,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        $SupplierCode = $rs['SuppCode'];
        $SupplierName = $rs['SuppName'];
        $ItemCode = $rs['ItemCode'];
        $GstCode = $rs['GST'];
        $Amount = $rs['Amount'];
    }
   }
  }
?>
<?php
 if(isset($_POST['submit']))
 {
    //$SupplierBill=$_POST['SupplierBill'];
    $BillDate=$_POST['BillDate'];
    $FreightCharges=$_POST['FreightCharges'];
    $Done=$_POST['Done'];
    $PaymentMode=$_POST['PaymentMode']; 
    $Gst=$_POST['Gst'];
    $GAmount=$Amount/$Gst;
    //echo $GAmount;
    $TotalAmount=$Amount+$GAmount+ $FreightCharges;
    $con=mysql_connect("localhost","root","");
    mysql_select_db("carservice");
    $sql="insert into supplierbill values(SupplierBill,'$BillDate',$sid,'$SupplierCode','$SupplierName','$ItemCode',$Gst,'$GstCode',$FreightCharges,'$Done','$PaymentMode',$Amount,$TotalAmount)";
    if(mysql_query($sql,$con))
    {
    echo "<script>alert('Record inserted Succesfully. ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.htm';</script>");
    }
    else
    {
    echo "<script>alert('Error!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='supplierbill.htm';</script>");
    }
    mysql_close($con);
 }
?>