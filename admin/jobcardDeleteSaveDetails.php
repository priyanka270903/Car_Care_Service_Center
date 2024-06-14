<?php

if(isset($_POST['Delete']))
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
       
        
        
         $con=mysql_connect("localhost","root","");
         if($con)
         {
             echo "Connected to MySQL"."<br/>";
         } 
       
         mysql_select_db("carservice");
        $sql="delete from jobcard  where JobCard_No='$Sjobcno'";
        if(mysql_query($sql,$con))
{
  echo "Record deleted Successfully";  
}
else
{
    echo "DELETION FAILS>>>!!!";
}

mysql_close($con);

}

header("location:jobcardDelete.php");
?>