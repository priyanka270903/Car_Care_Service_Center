<?php
 if(isset ($_POST['Delete']))
 {
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
    $con=mysql_connect("localhost","root","");  
    if($con)
    {
     echo "Connected to MySQL"."<br/>";
    } 
    mysql_select_db("carservice");
    $sql="delete from emp_mast where EmpId like '%$EmpId%'"; 
    if(mysql_query($sql,$con))
    {
     echo "Record Deleted Successfully";  
    }
    else    
   {
     echo "Deletion FAILS>>>!!!";
   }
   mysql_close($con);
 }
 header("location:empDelete.php");
?>