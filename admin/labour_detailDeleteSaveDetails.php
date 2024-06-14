<?php
 if(isset ($_POST['Delete']))
 {  
     $L_id=$_POST['Llid'];
    $L_cd=$_POST['Llabour_code'];
    $L_desc=$_POST['Llabour_desc'];
    $L_jbno=$_POST['Ljobcard_no'];
    $L_chr=$_POST['Lcharges'];
    $L_tax=$_POST['Ltax'];
    $L_gstamt=$_POST['Lgst_amount'];
    $L_dis=$_POST['Ldiscount'];
    $L_totamt=$_POST['Ltotal_amount'];
     $L_totamt=(($L_chr + $L_gstamt) - $L_dis);
    $con=mysql_connect("localhost","root","");  
    if($con)
    {
        echo "Connected to MySQL"."<br/>";
    } 
    mysql_select_db("carservice");
    $sql="delete from labour_detail where lid like '%$L_id%'"; 
    if(mysql_query($sql,$con))
    {
        echo "Record deleted Successfully";  
    }
    else
    {
        echo "UPDATION FAILS>>>!!!";
    }
    mysql_close($con);
}
header("location:labour_detailDelete.php");
?>