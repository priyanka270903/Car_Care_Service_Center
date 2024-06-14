<?php
  if(isset($_POST['SAVE']))
  {
    $con = mysql_connect("localhost","root","");
    if($con)
    {
        //echo "Connection is Successful"."</br>";
    }
    mysql_select_db("CARSERVICE");
    
    $catcode=$_POST['catcode'];
    $catname=$_POST['catname'];
    
    //echo $catcode,$catname;
    
    $ins = "Insert into category_mast values('$catcode','$catname')";
   if(mysql_query($ins,$con))
    {
    echo "<script>alert('Record Inserted Successfully!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.htm';</script>");
    }
    else
    {
    echo "<script>alert('Error!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='categorymaster.htm';</script>");
    }
    
    mysql_close($con);
  }



?>