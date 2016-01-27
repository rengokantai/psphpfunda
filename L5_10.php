<?php
/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/1/27
 * Time: 16:16
 */
$assc = array(
    "c"=>"C",
    "a"=>"A",
    "b"=>"B"
);
//sort($assc);
asort($assc); //keys are preserved
print_r($assc);
ksort($assc);//sort by key
echo count($assc);

//for each loop

foreach($assc as $a=>$b){
    echo $a." ".$b;
}