<?php

if(isset($_POST['Save']))
{
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        mysql_select_db("carservice",$con);
         $Euname=$_POST['duname'];
        $Eutype=$_POST['dutype'];
        $Eemail=$_POST['demail'];
        $Epw=$_POST['dpw'];
        $Ecpw=$_POST['dcpw'];
     //   $Ecatname=$_POST['dcatnm'];
        $Eque=$_POST['dsecque'];
        $Eans=$_POST['dsecans'];
        $Ebdt=$_POST['ddob'];
        $update="Update registration Set Usertype='$Eutype',Mailid='$Eemail',Password='$Epw',ConfirmPassword=$Ecpw,SecurityQuestion='$Eque',SecurityAnswer='$Eans',Dob='$Ebdt' where Username like '%$Euname%'";
        if(mysql_query($update,$con))
        {
            echo "Record Updated Successfully<br>";
        }
        
    }
    mysql_close($con);
}

header("location:registrationEdit.php");


?>