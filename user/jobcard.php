<?php

if(isset($_POST['SAVE']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
 // echo "Connection successful...!!!"."<br/>";
   mysql_select_db("carservice");
   $cid=$_POST['custid'];
 //  echo $cid;
   $sql1 = "select Customer_Name,Customer_Address,Customer_mobile_No,Customer_Email,Customer_Vehicle_No,Customer_Vehicle_Name from customer_mast where Customer_ID='$cid'";
    $query = mysql_query($sql1,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        
  //  $JCustomer_Id = $rs['Customer_ID'];
    $fCustomer_Name = $rs['Customer_Name'];
    $fCustomer_Address = $rs['Customer_Address'];
    $fMobile_No=$rs['Customer_mobile_No'];
    $fCustomer_Email=$rs['Customer_Email'];
    $fVehicle_No=$rs['Customer_Vehicle_No'];
    $fVehicle_Name=$rs['Customer_Vehicle_Name'];
   
 
 //echo $fCustomer_Name,$fMobile_No,$fVehicle_Name."<br>";  
    } 
}
}

?>
<?php

if(isset($_POST['SAVE']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
 // echo "Connection successful...!!!"."<br/>";
   mysql_select_db("carservice");
   $coid=$_POST['compid'];
   echo $coid;
   $sql0 = "select compdesc,compbay from complaint_mast where compid='$coid'";
    $query = mysql_query($sql0,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        
    $fcomplaint_desc = $rs['compdesc'];
    $fbay=$rs['compbay'];
//  echo $fcomplaint_desc,$fbay;
    } 
    
}
}

?>
<?php
  if(isset($_POST['SAVE']))
  {
    $con = mysql_connect("localhost","root","");
    if($con)
    {
       // echo "Connection is Successful"."</br>";
    }
    mysql_select_db("carservice");
    
    $JOBCARDNO=$_POST['jobcno'];
    $CUSTOMERID=$_POST['custid'];
    $MODELNAME=$_POST['modlname'];
    $JOBCARDDATE=$_POST['jobcdate'];
    $FUEL=$_POST['fuel'];
    $DTTIMEIN=$_POST['datetimein'];
    $DTTIMEOUT=$_POST['datetimeout'];
    $JOBALLO=$_POST['joballocation'];
    $KMS=$_POST['kms'];
    $COMPID=$_POST['compid'];
  
    
    $ins = "Insert into jobcard values('$JOBCARDNO','$CUSTOMERID','$fCustomer_Name','$fCustomer_Address',$fMobile_No,'$MODELNAME','$fVehicle_Name','$fVehicle_No','$JOBCARDDATE',$FUEL,'$DTTIMEIN','$DTTIMEOUT','$JOBALLO',$KMS,'$coid','$fcomplaint_desc',$fbay)";
  // echo $JOBCARDNO,$CUSTOMERID,$MODELNAME,$JOBCARDDATE,$FUEL,$DTTIMEIN,$DTTIMEOUT,$JOBALLO,$KMS,$COMPDES;
    if(mysql_query($ins,$con))
    {
    echo "<script>alert('Record Inserted Successfully!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.htm';</script>");
    }
    else
    {
    echo "<script>alert('Error!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='jobcard.htm';</script>");
    }
    
    mysql_close($con);
}
?>