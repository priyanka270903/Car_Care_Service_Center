<?php
 if(isset ($_POST['Delete']))
 {
    $I_No=$_POST['I_No'];
    $IssueDate=$_POST['IssueDate'];
    $I_Code=$_POST['I_Code'];
    $Issue_Iname=$_POST['Issue_Iname'];
    $jobcardno=$_POST['jobcardno'];
    $Issue_Unit_Measure=$_POST['Issue_Unit_Measure'];
    $Issue_Qty=$_POST['Issue_Qty'];
    $Issue_Rate=$_POST['Issue_Rate'];
    $Issue_Value=$_POST['Issue_Value'];
    $Warranty_Year=$_POST['Warranty_Year'];
    $con=mysql_connect("localhost","root","");  
    if($con)
    {
     echo "Connected to MySQL"."<br/>";
    } 
    mysql_select_db("carservice");
    $sql="delete from item_issue where I_No like '%$I_No%'"; 
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
 header("location:item_issueDelete.php");
?>