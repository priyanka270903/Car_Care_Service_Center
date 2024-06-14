<?php
  if(isset($_POST['SAVE']))
  {
    $con = mysql_connect("localhost","root","");
    if($con)
    {
      //  echo "Connection is Successful"."</br>";
    }
    mysql_select_db("carservice");
    
    $SUPCODE=$_POST['suppCode'];
    $SUPNAME=$_POST['suppName'];
    $SUPADD=$_POST['suppAddress'];
    $MOBNO=$_POST['mobNo'];
    $EMAIL=$_POST['email'];
    $GST=$_POST['GST'];
    $TIN=$_POST['TIN'];
    $Aadhar=$_POST['Aadhar'];
   
    //echo $SUPCODE,$SUPNAME,$SUPADD,$MOBNO,$EMAIL;
    
    $ins = "Insert into supplier_mast values ('$SUPCODE','$SUPNAME','$SUPADD',$MOBNO,'$EMAIL','$GST','$TIN','$Aadhar')";
    
  if(mysql_query($ins,$con))
{
    echo "<script>alert('Record Inserted Successfully!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.htm';</script>");
}
else
{
    echo "<script>alert('Error!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='suppliermaster.htm';</script>");
}
    
    mysql_close($con);
  }

?>