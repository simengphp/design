<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/8
 * Time: 15:35
 */
namespace lib\code;
class Loader
{
    public function __construct()
    {
        echo "我是类加载文件";
    }

    public static function autoload($class){
        var_dump($class);
        require PATH.'/'.str_replace('\\','/',$class).'.php';
    }
}