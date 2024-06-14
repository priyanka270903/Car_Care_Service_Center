<?php
  if(isset($_POST['SAVE']))
  {
    $con = mysql_connect("localhost","root","");
    if($con)
    {
       // echo "Connection is Successful"."</br>";
    }
    mysql_select_db("CARSERVICE");
    
    $cusid=$_POST['cusid'];
    $cusname=$_POST['cusname'];
    $cusaddress=$_POST['cusaddrs'];
    $cusmobno=$_POST['cusmob'];
    $cusemail=$_POST['cusemail'];
    $cusvehicleno=$_POST['cusvehiclno'];
    $cusvehiclename=$_POST['cusvehiclname'];
    
    //echo $catcode,$catname;
    
    $ins = "Insert into customer_mast values('$cusid','$cusname','$cusaddress',$cusmobno,'$cusemail','$cusvehicleno','$cusvehiclename')";
    
   if(mysql_query($ins,$con))
{
    echo "<script>alert('Record Inserted Successfully!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.htm';</script>");
}
else
{
    echo "<script>alert('Error!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='customermaster.htm';</script>");
}
    mysql_close($con);
  }



?>