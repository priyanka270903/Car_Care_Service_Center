<?php
 if(isset($_POST['submit']))
  {
    
    //echo "Hello "; 
    $con = mysql_connect("localhost","root","");
    if($con)
    {
        //echo "Connection Successful...!!!";
        mysql_select_db("carservice");
        $Customer_Name=$_POST['Custmer_Name'];
        $Customer_Email=$_POST['Customer_Email'];
        $Feedback=$_POST['Feedback'];
        $ins ="INSERT INTO feedback values('$Customer_Name','$Customer_Email','$Feedback')";
        if(mysql_query($ins,$con))
{
    echo "<script>alert('Feedback Submitted !! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");
}
else
{
    echo "error";
}
        mysql_close($con);
    }
}
?>