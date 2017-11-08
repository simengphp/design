<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/8
 * Time: 13:44
 */
namespace app\instance;
class Instance
{
    /**设置一个静态的变量，保存对象*/
    private static $instance = null;
    public function __construct(){

    }
    /**获取对象的方法*/
    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new Instance();
        }
        return self::$instance;
    }
    /**禁止复制的方法*/
    private function __clone(){
        echo "禁止复制！";
    }
    /**定义的普通的方法*/
    public function common(){

    }
}