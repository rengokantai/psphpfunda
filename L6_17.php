<?php

/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/1/27
 * Time: 17:13
 */
class L6_17
{
    public static $parvar=1;

}

class Sub extends L6_17{
    public static $parvar=2;
    public static function getPar(){
        return parent::$parvar;
    }
    public static function getSelf(){
        return self::$parvar;
    }
}


echo Sub::getPar();
echo Sub::getSelf();