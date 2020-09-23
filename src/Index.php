<?php
/**
 * Created by PhpStorm.
 * User: uuui
 * Date: 2020/9/23
 * Time: 17:03
 */

namespace iiiuWechatTools;

/**
 * Class Index
 * @package iiiuWechatTools
 *
 * @method static \iiiuWechatTools\Hello Hello(array $config)
 */
class Index
{
    public function __construct()
    {
    }
    
    public static function make($name,array $config){
        $app = "\\iiiuWechatTools\\{$name}";
        return new $app($config);
    }
    
    public static function __callStatic($name,$arguments){
        
        return self::make($name, ...$arguments);
    }
}