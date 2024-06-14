<?php
 if(isset ($_POST['Delete']))
 {  
    $EI_Code=$_POST['icd'];
    $EI_Name=$_POST['I_Name'];
    $Eabc_Code=$_POST['Abc_Code'];
    $EUnit_Measure=$_POST['uom'];
    $EQuantity=$_POST['qty'];
    $ERate=$_POST['rate'];
    $EValue=$_POST['value'];
    $EGst_Rate=$_POST['gst_rate'];
    $EGst_Amount=$_POST['gst_amount'];
    $EMini_Level=$_POST['min_level'];
    $EMax_Level=$_POST['max_level'];
    $EWar_Gu=$_POST['war_gu'];
    $con=mysql_connect("localhost","root","");  
    if($con)
    {
        
        echo "Connected to MySQL"."<br/>";
    } 
    mysql_select_db("carservice");
    $sql="delete from item_mast  where I_Code like '%$EI_Code%'"; 
    if(mysql_query($sql,$con))
    {
        echo "Record Deleted Successfully";  
    }
    else
    {
        echo "Deletion FAILS>>>!!!";
    }
    mysql_close($con);
}
header("location:itemDelete.php");
?>