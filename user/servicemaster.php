<?php
  if(isset($_POST['SAVE']))
  {
    $con = mysql_connect("localhost","root","");
    if($con)
    {
       // echo "Connection is Successful"."</br>";
    }
    mysql_select_db("CARSERVICE");
    
    $servicecode=$_POST['sercode'];
    $servicename=$_POST['sername'];
    $servicetype=$_POST['sertype'];
    $sercharge=$_POST['sercharge'];
  
    $ins = "Insert into service_master values('$servicecode','$servicename','$servicetype',$sercharge)";
   if(mysql_query($ins,$con))
    {
    echo "<script>alert('Record Inserted Successfully!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.htm';</script>");
    }
    else
    {
    echo "<script>alert('Error!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='servicemaster.htm';</script>");
    }
    
    mysql_close($con);
  }

?>