<?php
include_once("connection.php");
$date=$_GET["date"];
$slottime=$_GET["slottime"];
$query="update slots set availableslots= availableslots-1 where date='$date' and slottime='$slottime'";
mysqli_query($dbCon,$query);
$err=mysqli_error($dbCon);
if($err=="")
{
    echo "Table updated";
    
}
else 
    echo $err;
?>