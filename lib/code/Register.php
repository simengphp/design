<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/8
 * Time: 22:09
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