<?php
/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/1/28
 * Time: 11:51
 */
$user="root";
$pass = "root";
$server="localhost";
$dbname="world";

$connection = new mysqli($server, $user, $pass, $dbname, 3306);

//print_r($connection);
$que = "INSERT INTO testphp(name) values('s3')";
if($connection->errno){
    exit("Error".$connection->error);
}


$connection->query($que);
echo $connection->insert_id;//show id field
$connection->close();