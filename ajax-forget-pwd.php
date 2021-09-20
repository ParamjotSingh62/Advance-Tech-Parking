<?php


include_once("connection.php");
$uid=$_GET["uid"];
$mail=$_GET["mail"];

$query="select fullname, pwd from users where uid='$uid'";
$table=mysqli_query($dbCon,$query);
$row=mysqli_fetch_array($table);
$password=$row["pwd"];
$fullname=$row["fullname"];
if(mysqli_num_rows($table)==0)
    echo 0;
else{
ini_set('display_errors', 1);
error_reporting( E_ALL);
$from="paramjots78662@gmail.com"
$to_email = $mail;
$subject = 'Forgot Password';
$message = 'Hi '+$fullname+', Your password for the AdvanceTech Parking is '+$password;
$headers = 'From: '.$from;
if(mail($to_email,$subject,$message,$headers))
{
    echo  "mail sent";
}
else{
    echo "mail not sent";
}

}
?>