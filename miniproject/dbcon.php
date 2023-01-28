<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "adminpanel";

$con = mysqli_connect("$host","$username","$password","$database");
if(!$con)
{
header("location: ../errors/db.php");
die();
}
else
{
    echo "database connected.!";
}
?>