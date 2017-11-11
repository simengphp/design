<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/8
 * Time: 15:35
 */
namespace lib\code;
interface IProxy
{
    public function getThing($id);
    public function interThing($id,$field);
}