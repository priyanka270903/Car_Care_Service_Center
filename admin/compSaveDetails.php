<?php

if(isset($_POST['Save']))
{
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        mysql_select_db("carservice",$con);
        
        $Ecomid=$_POST['compid'];
        $Ecomdesc=$_POST['compdesc'];
        $Ecombay=$_POST['compbay'];
        $update="Update complaint_mast Set compdesc='$Ecomdesc',compbay=$Ecombay where compid like '%$Ecomid%'";
        if(mysql_query($update,$con))
        {
            echo "Record Updated Successfully<br>";
        }
        
    }
    mysql_close($con);
}

header("location:compEdit.php");
?>