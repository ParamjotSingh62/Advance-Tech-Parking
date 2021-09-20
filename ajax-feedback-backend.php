<?php
include_once("connection.php");
$uid=$_GET["uid"];
$expect=$_GET["expect"];
$nav=$_GET["nav"];
//$helpp=$_GET["helpp"];
$exp=$_GET["exp"];
$recommend=$_GET["recommend"];
$textfeed=$_GET["textfeed"];
$query="insert into feedback values('$uid','$expect','$nav','$exp','$recommend','$textfeed')";
mysqli_query($dbCon,$query);
$msg=mysqli_error($dbCon);
if($msg=="")
{
	
     
	echo "<h2>Response Submitted.</h2>";
    //session_start(); echo $_SESSION["activeuser"];
}
else
	echo $msg."error".$uid;
?>