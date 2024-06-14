<?php

if(isset($_POST['Save']))
{
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        mysql_select_db("carservice",$con);
        
        $Esupcd=$_POST['suppCode'];
        $Esupnm=$_POST['suppName'];
        $Esupad=$_POST['suppAddress'];
        $Embno=$_POST['mobNo'];
        $Eemail=$_POST['email'];
        $GST=$_POST['GST'];
        $TIN=$_POST['TIN'];
        $Aadhar=$_POST['Aadhar'];
        $update="Update supplier_mast Set suppName='$Esupnm',suppAddress='$Esupad',mobNo=$Embno,email='$Eemail',GST='$GST',TIN='$TIN',Aadhar='$Aadhar' where suppCode like '%$Esupcd%'";
        if(mysql_query($update,$con))
        {
            echo "Record Updated Successfully<br>";
        }
        
    }
    mysql_close($con);
}

header("location:suppEdit.php");

?>