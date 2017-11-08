<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/8
 * Time: 21:37
 */
namespace lib\code;
class Factory
{
    static $dataObject = null;
    public static function createDataBase(){
        if(self::$dataObject === null){
            self::$dataObject = new DataBase();
            Register::set("db1",self::$dataObject);
        }
        return self::$dataObject;

    }
}