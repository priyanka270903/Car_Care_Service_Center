<?php
 if(isset($_POST['save']))
 {
  $con=mysql_connect("localhost","root","");
  if($con)
  {
   //echo "Connection successful...!!!"."<br/>";
    mysql_select_db("carservice");
    $jid=$_POST['job_cardno'];
    //echo $jid;
    $sql2 = "select JobCard_No,Customer_Name,Customer_Address,Mobile_No,Vehicle_Name,Kms,Vehicle_No,JobCard_Date,Date_Time_In,Date_Time_Out,Model_Name from jobcard where JobCard_No='$jid'";
    $query = mysql_query($sql2,$con);
    while($rs = mysql_fetch_assoc($query))
    {
     $Jobnoj=$rs['JobCard_No'];   
     $customer_name = $rs['Customer_Name'];
     $customer_address=$rs['Customer_Address'];
     $mobno = $rs['Mobile_No'];
     $vname = $rs['Vehicle_Name'];
     $kms = $rs['Kms']; 
     $vno = $rs['Vehicle_No'];
     $jbdt = $rs['JobCard_Date'];
     $dti = $rs['Date_Time_In'];
     $dto = $rs['Date_Time_Out'];
     $mdname = $rs['Model_Name']; 
       
     
    // echo $I_name,$Unit_measure."<br>";  
    }
   }
  }
?>

<?php
 if(isset($_POST['save']))
 {
  $con=mysql_connect("localhost","root","");
  if($con)
  {
   //echo "Connection successful...!!!"."<br/>";
    mysql_select_db("carservice");
    $jid=$_POST['job_cardno'];
    //echo $jid;
    $sql3 = "select job_no,amount,discount,gst_amount from parts_detail where job_no='$jid'";
    $query = mysql_query($sql3,$con);
    $Pgstamt=0;
    $Ptamt=0;
    $Pdis=0;
    while($rs = mysql_fetch_assoc($query))
    {
     $tamt = $rs['amount'];   
     $dis = $rs['discount'];
     $gstamt=$rs['gst_amount'];
    // $Pgstamt=0;
     $Pgstamt=$Pgstamt+$gstamt;
   //  $Ptamt=0;
     $Ptamt=$Ptamt+$tamt;
    // $Pdis=0;
     $Pdis=$Pdis+$dis;
    // echo $I_name,$Unit_measure."<br>";  
    }
   }
  }
?>
<?php
 if(isset($_POST['save']))
 {
  $con=mysql_connect("localhost","root","");
  if($con)
  {
   //echo "Connection successful...!!!"."<br/>";
    mysql_select_db("carservice");
    $jid=$_POST['job_cardno'];
    echo $jid;
    $sql4 = "select jobcard_no,total_amount,discount,gst_amount from labour_detail where jobcard_no='$jid'";
    $query = mysql_query($sql4,$con);
    $Lgstamt=0;
    $Ltotamt=0;
    $ldiscount=0;
    while($rs = mysql_fetch_assoc($query))
    {
     $Ltamt = $rs['total_amount'];   
     $Ldis = $rs['discount'];
     $gstamount=$rs['gst_amount']; 
     
     $Lgstamt = $Lgstamt + $gstamount;
     
     $Ltotamt = $Ltotamt + $Ltamt;
     
     $ldiscount=$ldiscount + $Ldis;
    // echo $I_name,$Unit_measure."<br>";  
    }
   }
  }
?>
<?php

?>










<?php
  if(isset($_POST['save']))
  {
    $con = mysql_connect("localhost","root","");
    if($con)
    {
        //echo "Connection is Successful"."</br>";
    }
    mysql_select_db("carservice");
    
    
    //$invno=$_POST['invoice_no'];
    $invdt=$_POST['invoice_date'];
    $jobcno=$_POST['job_cardno'];
    $discnt=$_POST['discount'];
    $gst_amount=$Pgstamt + $Lgstamt;
   // $discount=$Pdis + $ldiscount;
    $net_bill_amount = ($Ptamt + $Ltotamt + $gst_amount) - $discnt;

    //$iid=$_POST['job_cardno'];
//    echo $iid;
   // $sql5 = "select JobCard_No from jobcard where JobCard_No='$jobcno'";
//    echo $jobcno;
//      $query = mysql_query($sql5,$con);
//    while($rs = mysql_fetch_assoc($query))
//    {
//     $jobno=$rs['job_cardno']; 
//     echo $jobno;
//    }
    
    if($Jobnoj ==$jobcno)
        { 
    $ins = "Insert into invoice values(invoice_no,'$invdt','$jobcno','$customer_name','$customer_address',$mobno,'$vname',$kms,'$vno','$mdname',$Ptamt,$Ltotamt,$gst_amount,$discnt,$net_bill_amount)";
   if(mysql_query($ins,$con))
    {
        echo "<script>alert('Record insert successfully!');</script>";

     }
        
        $upd="Update jobcard set Date_Time_Out='$invdt' where JobCard_No='$jobcno'" ;
    mysql_query($upd,$con);
  

    echo("jobcard time out updated successfully!!!");
        echo "<script>alert('Record insert successfully!');</script>";
        echo ("<script LANGUAGE='Javascript'>window. location. href='index1.htm';</script>");
    }
    else  if($Jobnoj !=$jobcno)
    {
        
       echo "<script>alert('Error!');</script>";
       echo ("<script LANGUAGE='Javascript'>window. location. href='invoice.htm';</script>");
    }
        
       
   else
       {
       /**
         *     if($invdt <= $jbdt )
         *             {
         *                  echo "<script>alert('Invoice Date should be graeter than or equal to Job card Date!!!!');</script>"; 
         *               echo ("<script LANGUAGE='Javascript'>window. location. href='invoice.htm';</script>");
         *             }
         *             else
         *             {
         *         
         */        
      echo "<script>alert('Invoice already generated of the same jobcard!!!!');</script>"; 
         echo ("<script LANGUAGE='Javascript'>window. location. href='invoice.htm';</script>");
     
    
   }
    mysql_close($con);
  }


?>

         