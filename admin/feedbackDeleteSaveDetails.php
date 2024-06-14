<?php
 if(isset ($_POST['Delete']))
 {
    $Customer_Name=$_POST['Customer_Name'];
    $Customer_Email=$_POST['Customer_Email'];
    $Feedback=$_POST['Feedback'];
    $con=mysql_connect("localhost","root","");  
    if($con)
    {
     echo "Connected to MySQL"."<br/>";
    } 
    mysql_select_db("carservice");
    $sql="delete from feedback where Customer_Name like '%$Customer_Name%'"; 
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
 header("location:feedbackDelete.php");
?>