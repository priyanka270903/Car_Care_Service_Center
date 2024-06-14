<?php
  if(isset($_POST['SAVE']))
  {
    $con = mysql_connect("localhost","root","");
    if($con)
    {
       // echo "Connection is Successful"."</br>";
    }
    mysql_select_db("carservice");
    
    $CID=$_POST['compid'];
    $CDESC=$_POST['compdesc'];
    $BAY=$_POST['bay'];
   
    //echo $CID,$CDESC,$BAY;
    
    $ins = "Insert into complaint_mast values ('$CID','$CDESC',$BAY)";
    
   if(mysql_query($ins,$con))
{
    echo "<script>alert('Record Inserted Successfully!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.htm';</script>");
}
else
{
    echo "<script>alert('Error!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='complaintmaster.htm';</script>");
}
    
    
    mysql_close($con);
  }

?>