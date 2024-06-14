<?php
 if(isset($_POST['SUBMIT']))
 {
    $con=mysql_connect("localhost","root","");
    if($con)
  {
    //echo "Connection successful...!!!"."<br/>";
    mysql_select_db("carservice");
    $sid=$_POST['SuppCode'];
    //echo $sid;
    $sql2 = "select suppName,suppAddress,GST,TIN,Aadhar from supplier_mast where suppCode='$sid'";
    $query = mysql_query($sql2,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        $SuppName = $rs['suppName'];
        $SuppAdd = $rs['suppAddress'];
        $GST = $rs['GST'];
        $TIN = $rs['TIN'];
        $Aadhar = $rs['Aadhar'];
    }
   }
  }
?>
<?php
 if(isset($_POST['SUBMIT']))
 {
    $con=mysql_connect("localhost","root","");
    if($con)
  {
    //echo "Connection successful...!!!"."<br/>";
    mysql_select_db("carservice");
    $iid=$_POST['ItemCode'];
    //echo $iid;
    $sql3 = "select I_Name,Quantity,Unit_Measure,Rate,Max_Level from item_mast where I_Code='$iid'";
    $query = mysql_query($sql3,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        $ItemName = $rs['I_Name'];
        $UnitMeasure = $rs['Unit_Measure'];
        $Rate = $rs['Rate'];
        $Max_Level = $rs['Max_Level'];
    }
   }
  }
?>
<?php
 if(isset($_POST['SUBMIT']))
 {
    $PONo=$_POST['PONo'];
    $PODt=$_POST['PODt'];
    $Qty=$_POST['Qty'];
    $Amount=$Qty * $Rate;
    $con=mysql_connect("localhost","root","");
    mysql_select_db("carservice");
    if($Qty>$Max_Level)
  {
     echo "<script>alert('Quantity greater then Maximum Level...!!!!! ');</script>";
     echo ("<script LANGUAGE='JavaScript'>window. location. href='purchaseorder.htm';</script>");
    
  }
  else
  {
    $sql="insert into purchaseorder values($PONo,'$PODt','$sid','$SuppName','$SuppAdd','$GST','$TIN','$Aadhar','$iid','$ItemName','$UnitMeasure',$Qty,$Rate,$Amount)";
    if(mysql_query($sql,$con))
{
    $upd="Update item_mast set Quantity=Quantity + $Qty where I_Code='$iid' ";
    if(mysql_query($upd,$con))
    {
        // echo("Item master updated successfully!!!");
    }
    echo "<script>alert('Record Inserted Successfully!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.htm';</script>");
    
   
}
else
{
    echo "<script>alert('Error!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='purchaseorder.htm';</script>");
}
    }
    
    mysql_close($con);
 }
 //header("Location:index.htm");
?>