<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/8
 * Time: 15:42
 */
namespace lib\code;
include 'code/Loader.php';
class Start
{
    public function __construct()
    {
        echo "1";
    }

    static public function start(){
        /**注册一下类文件（自动引入）*/
        spl_autoload_register('lib\code\Loader::autoload');
    }
}