<?php
$mysql_host = "mysql8.000webhost.com";
$mysql_database = "a9583447_cm";
$mysql_user = "a9583447_cm";


$db = new mysqli($mysql_host, $mysql_database, $mysql_user);

if (mysqli_connect_errno()) 
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>