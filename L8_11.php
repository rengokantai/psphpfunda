<?php
/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/1/28
 * Time: 12:24
 */

$user="root";
$pass = "root";
$server="localhost";
$dbname="world";

$connection = new mysqli($server, $user, $pass, $dbname, 3306);

//print_r($connection);
$que = "SELECT name from testphp";
if($connection->errno){
    exit("Error".$connection->error);
}


$res = $connection->query($que);

if($res->num_rows > 0){
    while($single=$res->fetch_assoc()){
        //print_r($single);
        echo $single['name'].PHP_EOL;
    }
}
$res->close();//close result
$connection->close();