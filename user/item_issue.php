<?php
 if(isset($_POST['submit']))
 {
  $con=mysql_connect("localhost","root","");
  if($con)
  {
  // echo "Connection successful...!!!"."<br/>";
    mysql_select_db("carservice");
    $iid=$_POST['I_Code'];
   // echo $iid;
    $sql2 = "select I_Code,I_Name,Unit_Measure,Quantity,Rate,Gst_Rate,War_Gu from item_mast where I_Code='$iid'";
    $query = mysql_query($sql2,$con);
    while($rs = mysql_fetch_assoc($query))
    {
     $Issue_Icode = $rs['I_Code'];
     $Issue_Iname = $rs['I_Name'];
     $Unit_measure=$rs['Unit_Measure'];
     $Qty=$rs['Quantity'];
     $Rate = $rs['Rate'];
     $Gstrate = $rs['Gst_Rate'];
     $War_gu = $rs['War_Gu'];   
    // echo $I_name,$Unit_measure."<br>";  
    }
   }
  }
?>
<?php
 if(isset($_POST['submit']))
 {
    
    
    
  //$I_No=$_POST['I_No'];
  $IssueDate=$_POST['IssueDate'];
  //$It_Code=$_POST['I_Code'];
  $jobcardno=$_POST['jobcardno'];
 //$Issue_Unit_Measure=$_POST['Issue_Unit_Measure'];
  $Issue_Qty=$_POST['Issue_Qty'];
  $Btype=$_POST['billtype'];
 // echo $I_No."<br>";
  //echo $IssueDate."<br>";
  //echo $It_Code."<br>";
 // echo $jobcardno."<br>";
  //echo $Unit_Measure."<br>";
 // echo $Issue_Qty."<br>";
  $Issue_Value=$Issue_Qty * $Rate;
  $con=mysql_connect("localhost","root","");
  mysql_select_db("carservice");
  if ($Issue_Qty > $Qty )
  {
    echo "<script>alert('Not Succeficient Quantity in Stock!!!!');</script>";
        echo ("<script LANGUAGE='Javascript'>window. location. href='item_issue.htm';</script>");
    }
  else
  {
  $sql="insert into item_issue values(I_No,'$IssueDate','$iid','$Issue_Iname','$jobcardno','$Unit_measure',$Issue_Qty,$Rate,$Issue_Value,'$War_gu')";
  
  
 if(mysql_query($sql,$con))
  {
   echo "Data Inserted Succesfully"."</br>";
   //header("location:index1.html");      
  }
  else
  {
   echo"Data Not Inserted "."</br>"; 
   //header("location:Item_Issue.html");     
  }
  $dis=0;
  $gstamt=$Issue_Value/$Gstrate;
 
  
  $sql3="insert into parts_detail values('$jobcardno','$iid','$Issue_Iname',$Issue_Qty,$Rate,$Issue_Value,$Gstrate,$dis,'$Btype',$gstamt)";
  
  if(mysql_query($sql3,$con))
    {
        $upd="Update item_mast set Quantity=Quantity - $Issue_Qty where I_Code='$iid'";   
        if (mysql_query($upd,$con))
        {
             echo("Item master updated successfully!!!");
  
        }
        echo "<script>alert('Record insert successfully!');</script>";
        echo ("<script LANGUAGE='Javascript'>window. location. href='index1.htm';</script>");
    }
    else
    {
        echo "<script>alert('Error!');</script>";
        echo ("<script LANGUAGE='Javascript'>window. location. href='item_issue.htm';</script>");
    }
    
   
 /* if(mysql_query($sql3,$con))
  {
   echo "Data Inserted into parts_detail Succesfully"."</br>";
   
   
   
   //header("location:index1.html");    
  }
  else
  {
   echo"Data Not p_d Inserted "."</br>"; 
   //header("location:Item_Issue.html");      
  }*/
  //echo $Issue_Qty,$iid;
 
 
  

 
 }
  mysql_close($con);
 }
?>