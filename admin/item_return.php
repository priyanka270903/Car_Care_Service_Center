<?php
 if(isset($_POST['submit']))
 {
    $con=mysql_connect("localhost","root","");
    if($con)
  {
    //echo "Connection successful...!!!"."<br/>";
    mysql_select_db("carservice");
    $rid=$_POST['Return_Code'];
    //echo $rid;
    $sql2 = "select IssueDate,Issue_Iname,jobcardno,Issue_Unit_Measure,Issue_Rate,Warranty_Year from item_issue where I_Code='$rid'";
    $query = mysql_query($sql2,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        $Idt = $rs['IssueDate'];
        $Return_Name = $rs['Issue_Iname'];
        $jobcardno = $rs['jobcardno'];
        $Unit_Measure = $rs['Issue_Unit_Measure'];
        $Rate = $rs['Issue_Rate'];
        $Warranty_Year = $rs['Warranty_Year'];   
        //echo jobcardno,$Rate;
    }
   }
  }
?>

<?php
 if(isset($_POST['submit']))
 {
    //$Receipt_Code=$_POST['Receipt_Code'];
    $Return_Date=$_POST['Return_Date'];
    $Return_Code=$_POST['Return_Code'];
    $Qty=$_POST['Qty'];
    $Value=$Qty * $Rate;
    $con=mysql_connect("localhost","root","");
    mysql_select_db("carservice");
    if($Idt >= $Return_Date )
    {
         echo "<script>alert('Please enter Return Date Greater than Issue Date!!!!');</script>";
         echo ("<script LANGUAGE='Javascript'>window. location. href='item_return.htm';</script>");
    }
    else
    {
        
    
    $sql="insert into item_return values(Receipt_Code,'$Return_Date','$Return_Code','$Return_Name','$jobcardno','$Unit_Measure',$Qty,$Rate,$Value,'$Warranty_Year')";
      if(mysql_query($sql,$con))
{
    $upd="Update item_mast set Quantity = Quantity + $Qty where I_Code='$Return_Code'";
    mysql_query($upd,$con);
    //echo("Item master updated successfully!!!");
    echo "<script>alert('Record Inserted Successfully!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");
}
else
{
    echo "<script>alert('Error!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='http://localhost:8088/carservice/admin/item_return.htm';</script>");
} 
  
    
    mysql_close($con);
 }
 }
?>