<?php

if(isset($_POST['Save']))
{
        $Iinvno=$_POST['inno'];
        $Iinvdt=$_POST['indt'];
        $Ijno=$_POST['jobcno'];
        $Icusname=$_POST['cusname'];
        $Imobno=$_POST['mobno'];
        $Ivname=$_POST['vname'];
        $Ikms=$_POST['kms'];
        $Ivno=$_POST['vno'];
        $Imname=$_POST['mname'];
        $Itparts=$_POST['tparts'];
        $Itlab=$_POST['tlab'];
        $Igamt=$_POST['gamt'];
        $Idis=$_POST['dis'];
        $Inba=$_POST['nba'];
        
        
        
       // echo $Sjobcno,$scusaddrs,$Sbayno;
        
        
         $con=mysql_connect("localhost","root","");
         if($con)
         {
             echo "Connected to MySQL"."<br/>";
         } 
       // echo"$Sjobcno,$Scusid,$Scusname,$scusaddrs,$Smobno,$Smodname,$Svehiclename,$Svechicleno,$Sjobcdaate,$Sfuel,$Sdatetin,$Sdatetout,$Sjoballoy,$Sdkms,$Scompid,$Scomdes,$Sbayno"; 
         mysql_select_db("carservice");
         
        $sql="Delete from invoice  where invoice_no=$Iinvno";
        if(mysql_query($sql,$con))
{
  echo "Record deleted Successfully";  
}
else
{
    echo "deletion FAILS>>>!!!";
}

mysql_close($con);

}

header("location:invoiceDelete.php");
?>