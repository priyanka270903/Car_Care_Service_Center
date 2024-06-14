<?php
 if(isset ($_POST['Save']))
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
    $sql="update emp_mast set EmpName='$EmpName',EmpCategoryCode='$EmpCategoryCode',EmpCategoryName='$EmpCategoryName',EmpAddress='$EmpAddress',EmpCity='$EmpCity',EmpState='$EmpState',EmpPincode=$EmpPincode,EmpGender='$EmpGender',EmpEmailId='$EmpEmailId',EmpLicenseNo='$EmpLicenseNo' where EmpId like '%$EmpId%'"; 
    if(mysql_query($sql,$con))
    {
        echo "Record Updated Successfully";  
    }
    else
    {
        echo "UPDATION FAILS>>>!!!";
    }
    mysql_close($con);
}
header("location:empEdit.php");
?>