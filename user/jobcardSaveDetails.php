<?php

if(isset($_POST['Save']))
{
        $Sjobcno=$_POST['djobcno'];
        $Scusid=$_POST['dcusid'];
        $Scusname=$_POST['dcusname'];
        $scusaddrs=$_POST['dcusaddrs'];
        $Smobno=$_POST['dmobno'];
        $Smodname=$_POST['dmodname'];
        $Svehiclename=$_POST['dvehiclename'];
        $Svechicleno=$_POST['dvechicleno'];
        $Sjobcdaate=$_POST['djobcdaate'];
        $Sfuel=$_POST['dfuel'];
        $Sdatetin=$_POST['ddatetin'];
        $Sdatetout=$_POST['ddatetout'];
        $Sjoballoy=$_POST['djoballo'];
        $Sdkms=$_POST['dkms'];
        $Scompid=$_POST['dcompid'];
        $Scomdes=$_POST['dcomdes'];
        $Sbayno=$_POST['dbayno'];
       // echo $Sjobcno,$scusaddrs,$Sbayno;
        
        
         $con=mysql_connect("localhost","root","");
         if($con)
         {
             echo "Connected to MySQL"."<br/>";
         } 
       // echo"$Sjobcno,$Scusid,$Scusname,$scusaddrs,$Smobno,$Smodname,$Svehiclename,$Svechicleno,$Sjobcdaate,$Sfuel,$Sdatetin,$Sdatetout,$Sjoballoy,$Sdkms,$Scompid,$Scomdes,$Sbayno"; 
         mysql_select_db("carservice");
        $sql="Update jobcard Set Customer_Id='$Scusid',Customer_Name='$Scusname',Customer_Address='$scusaddrs',Mobile_No=$Smobno,Model_Name='$Smodname',Vehicle_Name='$Svehiclename',Vehicle_No='$Svechicleno',JobCard_Date='$Sjobcdaate',Fuel=$Sfuel,Date_Time_In='$Sdatetin',Date_Time_Out='$Sdatetout',Job_Allocation='$Sjoballoy',Kms=$Sdkms,Complain_Id='$Scompid',Complain_Des='$Scomdes',Bay_No=$Sbayno where JobCard_No='$Sjobcno'";
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

header("location:jobcardEdit.php");
?>