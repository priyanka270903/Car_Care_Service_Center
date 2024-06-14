<?php
if(isset($_POST['Submit']))
{
$con=mysql_connect("localhost","root","");
if($con)
{
  //  echo "connection successful!!"."</br>";
}

mysql_select_db("carservice");
$Uname=$_POST['uname'];
$Utype=$_POST['utype'];

$Email=$_POST['email'];
$Password=$_POST['password'];
$Cpassword=$_POST['cpassword'];
//$Cname=$_POST['cname'];
$secquestion=$_POST['SecQ'];
$secanswer=$_POST['ans'];
$bdate=$_POST['birthdate'];


$ins="insert into registration values('$Uname','$Utype','$Email','$Password','$Cpassword','$secquestion','$secanswer','$bdate')";

if(mysql_query($ins,$con))
{
    echo "<script>alert('Record inserted Succesfully. ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.htm';</script>");
}
else
{
    echo "<script>alert('Error!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='registration.htm';</script>");
}
mysql_close($con);

}
?>