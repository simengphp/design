<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/10
 * Time: 13:58
 * 定义一个观察者
 */
namespace lib\code\Observe;
class ObserveAbleOne implements Observe
{
    public function update()
    {
        echo "我是观察者，你改变我看见了，我就会改变的！";
    }
}