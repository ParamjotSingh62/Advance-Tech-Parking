<?php
 include_once("connection.php");
//include_once("SMS_OK_sms.php");
$uid=$_GET["uid"];
$fullname=$_GET["fullname"];
$pwd=$_GET["pwd"];
$mobile=$_GET["mobile"];
//$msg="Hi! $fullname, you have successfully Signed Up as $uid username Your password for login is $pwd";
$query="insert into users values('$uid','$fullname','$pwd',$mobile,curdate())";
mysqli_query($dbCon,$query);
$error=mysqli_error($dbCon);
if($error=="")
{
    //$msg=SendSMS($mobile,$msg);
    echo "Successfully Signed Up with UserID: $uid";
}   
else
    echo $error;


?>
