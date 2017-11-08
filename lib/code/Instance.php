<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/8
 * Time: 21:54
 */
namespace lib\code;
class Instance
{
    protected static $db = null;
    /**禁止被new*/
    private function __construct(){
        echo "我是单例模式！";
    }

    /**获取实例*/
    public static function getInstance(){
        if(self::$db === null){
            echo "1";
            self::$db = new self();
        }
        return self::$db;
    }

    /**禁止被复制*/
    public function __clone(){
        echo "我不能被复制";
    }
}