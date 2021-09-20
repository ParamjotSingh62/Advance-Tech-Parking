<?php
include_once("connection.php");
$date=$_GET["date"];
$query="select * from slots where date='$date'";
$table=mysqli_query($dbCon,$query);
$arr=array();
while($row=mysqli_fetch_array($table))
{
    $arr[]=$row;
}
echo json_encode($arr);
?>