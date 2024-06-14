<?php
 if(isset ($_POST['Save']))
 {  
    $Receipt_Code=intval($_POST['Receipt_Code']);
    $Return_Date=$_POST['Return_Date'];
    $Return_Code=$_POST['Return_Code'];
    $Return_Name=$_POST['Return_Name'];
    $jobcardno=$_POST['jobcardno'];
    $Unit_Measure=$_POST['Unit_Measure'];
    $Qty=$_POST['Qty'];
    $Rate=$_POST['Rate'];
    $Value=$_POST['Value'];
    $Warranty_Year=$_POST['Warranty_Year'];
    $Value=$Qty*$Rate;
    $con=mysql_connect("localhost","root","");  
    if($con)
    {
        
        echo "Connected to MySQL"."<br/>";
    } 
    mysql_select_db("carservice");
    $sql="update item_return set Return_Date='$Return_Date',Return_Code='$Return_Code',Return_Name='$Return_Name',jobcardno='$jobcardno',Unit_Measure='$Unit_Measure',Qty='$Qty',Rate='$Rate',Value='$Value',Warranty_Year='$Warranty_Year' where Receipt_Code = $Receipt_Code";
   
    if(mysql_query($sql,$con))
    {
        echo "Record Updated Successfully";  
    }
    else
    {
        echo "UPDATION FAILS>>>!!!";
    }
    $upd="Update item_mast set Quantity = Quantity + $Qty where I_Code='$Return_Code'"; 
    if(mysql_query($upd,$con))
    {
        echo "Record Updated Successfully";  
    }
    else
    {
        echo "UPDATION FAILS>>>!!!";
    }
    mysql_close($con);
}
header("location:item_returnEdit.php");
?>