<?php

if(isset($_POST['Save']))
{
        $Iinvno=$_POST['inno'];
        //$Iinvdt=$_POST['indt'];
        $Ijno=$_POST['jobcno'];
       // $Icusname=$_POST['cusname'];
//        $Imobno=$_POST['mobno'];
//        $Ivname=$_POST['vname'];
//        $Ikms=$_POST['kms'];
//        $Ivno=$_POST['vno'];
//        $Imname=$_POST['mname'];
$Itparts=$_POST['tparts'];
 $Itlab=$_POST['tlab'];
   $Igamt=$_POST['gamt'];
        $Idis=$_POST['dis'];
       $Inba=$_POST['nba'];
        $Inba1= ($Itparts+$Itlab+$Igamt) - $Idis;
        
        
       echo $Ijno, $Idis,$Inba1;
        
        
         $con=mysql_connect("localhost","root","");
         if($con)
         {
             echo "Connected to MySQL"."<br/>";
         } 
       // echo"$Sjobcno,$Scusid,$Scusname,$scusaddrs,$Smobno,$Smodname,$Svehiclename,$Svechicleno,$Sjobcdaate,$Sfuel,$Sdatetin,$Sdatetout,$Sjoballoy,$Sdkms,$Scompid,$Scomdes,$Sbayno"; 
         mysql_select_db("carservice");
        $sql="Update invoice Set discount=$Idis,net_bill_amount=$Inba1 where invoice_no=$Iinvno";
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

header("location:invoiceEdit.php");
?>