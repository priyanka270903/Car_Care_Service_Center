<?php
 if(isset ($_POST['Save']))
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
    
    $EValue= $EQuantity*$ERate;
    $EGst_Amount=$EValue/$EGst_Rate;
    $con=mysql_connect("localhost","root","");  
    if($con)
    {
        
        echo "Connected to MySQL"."<br/>";
    } 
    mysql_select_db("carservice");
    $sql="update item_mast set I_Name='$EI_Name',abc_Code='$Eabc_Code',Unit_Measure='$EUnit_Measure',Quantity=$EQuantity,Rate=$ERate,Value=$EValue,Gst_Rate=$EGst_Rate,Gst_Amount=$EGst_Amount,Mini_Level=$EMini_Level,Max_Level=$EMax_Level,War_Gu='$EWar_Gu' where I_Code like '%$EI_Code%'"; 
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
header("location:itemEdit.php");
?>