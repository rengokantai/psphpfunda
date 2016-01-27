<?php

/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/1/27
 * Time: 16:42
 */
class L6_12
{
   public $var1;
    function __construct($tempvar="")
    {
        $this->var1 = $tempvar;
    }

    function getVar(){
        return $this->var1;
    }

}

$ac = new L6_12("name");
echo $ac->getVar();