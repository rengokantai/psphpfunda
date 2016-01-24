<?php
/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/1/24
 * Time: 17:12
 */
//set global var
define('NEW_CON',"cons");
echo NEW_CON;
echo "\n";

echo defined(NEW_CON);//incorrect
echo defined('NEW_CON');
