<?php
 if(isset($_POST['submit']))
  {
    
    //echo "Hello "; 
    $con = mysql_connect("localhost","root","");
    if($con)
    {
        //echo "Connection Successful...!!!";
        mysql_select_db("carservice");
        $icode=$_POST['icd'];
        $iname=$_POST['I_Name'];
        $iabccode=$_POST['Abc_Code'];
        $iuom=$_POST['uom'];
        $iqty=$_POST['qty'];
        $irate=$_POST['rate'];
        $ivalue=$iqty * $irate;
        $igstr=$_POST['gst_rate'];
        $igstamt= $ivalue / $igstr;
        $iminlvl=$_POST['minlevel'];
        $imaxlvl=$_POST['maxlevel'];
        $iwargu=$_POST['war_gu'];
        $ins ="INSERT INTO Item_Mast values('$icode','$iname','$iabccode','$iuom',$iqty,$irate,$ivalue,$igstr,$igstamt,$iminlvl,$imaxlvl,'$iwargu')";
        if(mysql_query($ins,$con))
{
    
    echo "<script>alert('Record Inserted Successfully!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");
}
else
{
    echo "<script>alert('Error!! ');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='Item_Mast.htm';</script>");
}
        mysql_close($con);
    }
}
?>