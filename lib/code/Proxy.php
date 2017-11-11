<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/8
 * Time: 15:35
 */
namespace lib\code;
class Proxy implements IProxy
{
    public function getThing($id){
        echo "获取数据！";
    }
    public function interThing($id,$name){
        echo "插入数据！";
    }
}