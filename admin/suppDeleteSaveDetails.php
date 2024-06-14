<?php

if(isset($_POST['Delete']))
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
        $update="Delete from supplier_mast where suppCode like '%$Esupcd%'";
        if(mysql_query($update,$con))
        {
            echo "Record Deleted Successfully<br>";
        }
        
    }
    mysql_close($con);
}

header("location:suppDelete.php");

?>