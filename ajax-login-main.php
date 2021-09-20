





<?php

include_once("connection.php");
$uid=$_GET["uid"];
$pwd=$_GET["pwd"];
$query="select * from users where uid='$uid' and pwd='$pwd'";
$table=mysqli_query($dbCon,$query);
if(mysqli_num_rows($table)==0)
    echo 0;
else{
    
    echo 1;
}
?>
