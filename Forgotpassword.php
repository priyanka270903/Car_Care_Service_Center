<?php

if(isset($_POST['SHOW']))
{
 $con=mysql_connect("localhost","root","");
 if($con)
 {
    
  //echo "Connection successful...!!!"."<br/>";
 
 
   mysql_select_db("carservice");
 
  $fUnm=$_POST['uname'];
  $fSecQ=$_POST['SecQ'];
  $fSecA=$_POST['SecAns'];
   
  //echo $fUnm,$fSecA;
  //echo "</br>";
   
   $sql = "select Username,SecurityQuestion,SecurityAnswer,password from registration where Username='$fUnm'";
  
   $query = mysql_query($sql,$con);
 // echo "Query Successful";
   while($rs = mysql_fetch_assoc($query))
   {
       $Uname=$rs['Username'];
       $SecQue=$rs['SecurityQuestion'];
       $SecAns=$rs['SecurityAnswer'];
       $Pass=$rs['password'];
   //echo $Uname,$SecQue,$SecAns;
  
 // $Unm="";
  // echo "I am checking data";
    if(($Uname==$fUnm) && ($SecQue==$fSecQ) && ($SecAns==$fSecA))
    {    
            $passw=$Pass;
            //echo $passw;
            }
            else
            {
            echo "<script>alert('Something is Wrong');</script>"."</br>";
            echo ("<script LANGUAGE='JavaScript'>window. location. href='Forgotpassword.htm';</script>");
            }
  
    }
  
  echo "<script>alert('Your Password is $passw ');</script>";
   echo ("<script LANGUAGE='JavaScript'>window. location. href='logIn1.htm';</script>");
  }
  }
 //header("Location:LoginForm.html"); 
  mysql_close($con);

?>