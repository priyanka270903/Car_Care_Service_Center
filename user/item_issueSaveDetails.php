<?php
 if(isset ($_POST['Save']))
 {  
    $I_No=intval($_POST['I_No']);
    $IssueDate=$_POST['IssueDate'];
    $I_Code=$_POST['I_Code'];
    $Issue_Iname=$_POST['Issue_Iname'];
    $jobcardno=$_POST['jobcardno'];
    $Issue_Unit_Measure=$_POST['Issue_Unit_Measure'];
    $Issue_Qty=$_POST['Issue_Qty'];
    $Issue_Rate=$_POST['Issue_Rate'];
    $Issue_Value=$_POST['Issue_Value'];
    $Warranty_Year=$_POST['Warranty_Year'];
    $Issue_Value=$Issue_Qty*$Issue_Rate;
    $con=mysql_connect("localhost","root","");  
    if($con)
    {
        
        echo "Connected to MySQL"."<br/>";
    } 
    mysql_select_db("carservice");
    $sql="update item_issue set IssueDate='$IssueDate',I_Code='$I_Code',Issue_Iname='$Issue_Iname',jobcardno='$jobcardno',Issue_Unit_Measure='$Issue_Unit_Measure',Issue_Qty='$Issue_Qty',Issue_Rate='$Issue_Rate',Issue_Value='$Issue_Value',Warranty_Year='$Warranty_Year' where I_No = $I_No"; 
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
header("location:item_issueEdit.php");
?>