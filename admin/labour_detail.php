<?php
 if(isset($_POST['submit']))
 {
    $con=mysql_connect("localhost","root","");
    if($con)
  {
    //echo "Connection successful...!!!"."<br/>";
    mysql_select_db("carservice");
    $sid=$_POST['labcode'];
    //echo $sid;
    $sql2 = "select Service_Name,Service_Charge from service_master where Service_Code='$sid'";
    $query = mysql_query($sql2,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        $Sernm = $rs['Service_Name'];
        $Serchr = $rs['Service_Charge'];
        //echo $Sernm,$Serchr;
    }
   }
  }
?>

<?php
 if(isset($_POST['submit']))
 {
    $jobno=$_POST['jobcno'];
    $tx=$_POST['tax'];
    $gstamt=$Serchr / $tx;
    $dis=$_POST['discount'];
    $totamt=(($Serchr + $gstamt) - $dis);
    $con=mysql_connect("localhost","root","");
    mysql_select_db("carservice");
    
    $sql="insert into labour_detail values(lid,'$sid','$Sernm','$jobno',$Serchr,$tx,$gstamt,$dis,$totamt)";
    if(mysql_query($sql,$con))
    {
    echo "<script>alert('Record Inserted Successfully!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");
    }
    else
    {
    echo "<script>alert('Error!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='labour_detail.htm';</script>");
    }
 }
    mysql_close($con);
?>