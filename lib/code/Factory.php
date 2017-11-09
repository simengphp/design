<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/9
 * Time: 11:38
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