<?php
/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/1/28
 * Time: 12:47
 */
//bind_param bind_result
$user="root";
$pass = "root";
$server="localhost";
$dbname="world";

$connection = new mysqli($server, $user, $pass, $dbname, 3306);

//print_r($connection);
$que = "SELECT name from testphp where name = ?";
if($connection->errno){
    exit("Error".$connection->error);
}


$res = $connection->prepare($que);

$tempname = "d3";
$res->bind_param("s", $tempname);     //s->string d->float i->int
$res->execute();

$res->bind_result($getname);
$res->store_result();

if($res->num_rows > 0){
    while($res->fetch()){
        //print_r($single);
        echo $getname.PHP_EOL; //use bind param directly. Note the diff from fetch_assoc
    }
}
$res->close();//close result
$connection->close();