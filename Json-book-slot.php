<?php
include_once("connection.php");
$uid=$_GET["uid"];
$date=$_GET["date"];
$slottime=$_GET["slottime"];
$query="insert into booking values('$uid','$date', '$slottime')";
mysqli_query($dbCon,$query);
$err=mysqli_error($dbCon);
if($err=="")
{
    echo "Slot Booked";
    
}
else 
    echo $err;
?>