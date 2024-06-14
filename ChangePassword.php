<?php
if(isset($_POST['Change']))
{
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        mysql_select_db("carservice",$con);
        
        $EuserName=$_POST['UserName'];
        $EoldPassword=$_POST['OldPassword'];
        $EnewPassword=$_POST['NewPassword'];
        //echo $EuserName,$EoldPassword;
        $sql=mysql_query("select Password from registration where Username like '%$EuserName%'");
        $rs=mysql_fetch_array($sql);
        $validation=$rs['Password'];
        
        if($validation!=$EoldPassword)
        {
         echo "<script>alert('Password Invalid , Try Again!!');</script>";
         echo ("<script LANGUAGE='JavaScript'>window. location. href='ChangePassword.htm';</script>");
         //echo "<a href=\"ChangePassword.htm\">Go Back</a>";
        }
        else
        {
            $update="Update registration Set Password='$EnewPassword',ConfirmPassword='$EnewPassword' where Username like '%$EuserName%'";
            if(mysql_query($update,$con))
            {
                echo "<script>alert('Record Updated Succesfully. ');</script>";
               echo ("<script LANGUAGE='JavaScript'>window. location. href='index.htm';</script>");
            }
        }
    }
    mysql_close($con);
}
header:('location:LogIn.html');

?>
