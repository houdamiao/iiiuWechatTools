<?php
/**
 * Created by PhpStorm.
 * User: uuui
 * Date: 2020/9/23
 * Time: 16:49
 */
namespace iiiuWechatTools\Test;
use iiiuWechatTools\Index;
require_once "/www/iiiuWechatTools/vendor/autoload.php";

$a = Index::Hello([1,2,3,4]);
var_dump($a);