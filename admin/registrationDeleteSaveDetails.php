<?php

if(isset($_POST['Delete']))
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
      //  $Ecatname=$_POST['dcatnm'];
        $Eque=$_POST['dsecque'];
        $Eans=$_POST['dsecans'];
        $Ebdt=$_POST['ddob'];
        $delete="Delete from registration where Username like '%$Euname%'";
        if(mysql_query($delete,$con))
        {
            echo "Record deleted Successfully<br>";
        }
        
    }
    mysql_close($con);
}


header("location:registrationDelete.php");
?>