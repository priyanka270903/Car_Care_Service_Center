<?php
if(isset($_POST['LOGIN']))
{
$con=mysql_connect("localhost","root","");
if($con)
{
    //echo"connection successfull"."</br>";
}
else
{
    //echo "not connected"."</br>";
}
 
  
  mysql_select_db("carservice");
  
       // $Unm=$rs['Username'];
        //$Pass=$rs['Password'];
       //echo $Unm,$Pass;
  
  $Lusername=$_POST['UserName'];
  $Lpassword=$_POST['UserPassword'];
  $Lusertype=$_POST['UserType'];
  //echo $Lusertype,$Lusername,$Lpassword;
  //echo "<br/>";
  
  $sql = "select Usertype,Username,Password from registration where Username='$Lusername'";
  
   $query = mysql_query($sql,$con);
   
   while($rs = mysql_fetch_assoc($query))
   {    
       $Utype=$rs['Usertype'];
       $Unm=$rs['Username'];
       $Pass=$rs['Password'];
     //echo $Unm,$Pass,$Utype;
   }    
   
        

  if(($Unm==$Lusername) and ($Pass==$Lpassword) and ($Utype==$Lusertype))
        {  
        
           $sql2="insert into login values('$Utype','$Lusername','$Lpassword')";
          if($Utype=='admin')
          {
           if(mysql_query($sql2,$con))
           {
           echo "<script>alert('Welcome to Admin Side $Lusername  !!!');</script>"; 
           echo ("<script LANGUAGE='JavaScript'>window. location. href='admin/index2.html';</script>");
           }
           }
           else
           {
            echo"<script>alert('Welcome to User Side $Lusername  !!!');</script>"; 
           echo ("<script LANGUAGE='JavaScript'>window. location. href='user/index1.htm';</script>");
           }
          
        }
 
  else
  {
    echo "<script>alert('Invalid Username Or Password!!');</script>"; 
    echo ("<script LANGUAGE='JavaScript'>window. location. href='LogIn1.htm';</script>");
  }
    mysql_close($con);
 }
 ?>