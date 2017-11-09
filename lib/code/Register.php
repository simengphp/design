<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/9
 * Time: 11:38
 */
namespace lib\code;
class Register
{
    protected static $objectGather = array();
    /**注册*/
    public static function set($alias,$object){
        self::$objectGather[$alias] = $object;
    }

    /**获取*/
    public static function get($alias){
        return self::$objectGather[$alias];
    }

    /**卸载*/
    public static function __unset($alias){
        unset(self::$objectGather[$alias]);
    }
}