<?php
/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/1/28
 * Time: 14:17
 */

$user="root";
$pass = "root";
$server="localhost";
$dbname="world";

$connection = new PDO('mysql:host='.$server.';dbname='.$dbname,$user,$pass);

$que = "SELECT name from testphp";
$res = $connection->query($que);
if($res->rowCount()>0){
foreach($res as $r){
    echo $r['name'].PHP_EOL;
}
}