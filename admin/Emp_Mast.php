<?php
 if(isset($_POST['submit']))
  {
    
    //echo "Hello "; 
    $con = mysql_connect("localhost","root","");
    if($con)
    {
        //echo "Connection Successful...!!!";
        mysql_select_db("carservice");
        $EmpId=$_POST['EmpId'];
        $EmpName=$_POST['EmpName'];
        $EmpCategoryCode=$_POST['EmpCategoryCode'];
        $EmpCategoryName=$_POST['EmpCategoryName'];
        $EmpAddress=$_POST['EmpAddress'];
        $EmpCity=$_POST['EmpCity'];
        $EmpState=$_POST['EmpState'];
        $EmpPincode=$_POST['EmpPincode'];
        $EmpGender=$_POST['EmpGender'];
        $EmpEmailId=$_POST['EmpEmailId'];
        $EmpLicenseNo=$_POST['EmpLicenseNo'];
        $ins ="INSERT INTO emp_mast values('$EmpId','$EmpName','$EmpCategoryCode','$EmpCategoryName','$EmpAddress','$EmpCity','$EmpState','$EmpPincode','$EmpGender','$EmpEmailId','$EmpLicenseNo')";
       if(mysql_query($ins,$con))
{
    echo "<script>alert('Record Inserted Successfully!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");
}
else
{
    echo "<script>alert('Error!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='Emp_Mast.htm';</script>");
}
        mysql_close($con);
    }
}
?>