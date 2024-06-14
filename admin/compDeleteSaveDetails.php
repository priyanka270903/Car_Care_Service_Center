<?php

if(isset($_POST['Delete']))
{
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        mysql_select_db("carservice",$con);
        
        $Ecomid=$_POST['compid'];
        $Ecomdesc=$_POST['compdesc'];
        $Ecombay=$_POST['compbay'];
        $update="Delete from complaint_mast where compid like '%$Ecomid%'";
        if(mysql_query($update,$con))
        {
            echo "Record Deleted Successfully!!!<br>";
        }
        
    }
    mysql_close($con);
}

header("location:compDelete.php");

?>