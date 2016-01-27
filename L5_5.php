<?php
/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/1/27
 * Time: 15:39
 */
//array_key_exists in_array array_push
$assc = array(
    "a"=>"A",
    "b"=>"b"
);
echo $assc["a"];

echo array_key_exists("a",$assc);

echo in_array("A",$assc,true); //third param checks the type

array_push($assc,"new");//only add index based

//another syntax:
$assc['key'] = "another";
print_r($assc);

//remove element.use pop
$lastvalue = array_pop($assc);
echo $lastvalue;
print_r($assc);

echo"-------\n";
//unset. If unset a variable, it will become undefined

unset($assc[0],$assc[a]);
print_r($assc);


