<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/10
 * Time: 14:46
 * 定义一个实现的事件
 */
namespace lib\code\Observe;
class EventRealize implements EventRegister
{
    /**观察者对象的数组*/
    private $object = array();
    public function register($object)
    {
        $this->object[] = $object;
    }
    public function trigger(){
        foreach ($this->object as $obj){
            $obj->update();
        }
    }
}