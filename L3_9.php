<?php
/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/1/24
 * Time: 18:11
 */

$var=1;

function test(){
    global $var;
    $var =2;
}
test();
echo $var;