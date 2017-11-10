<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/10
 * Time: 14:42
 * 定义另一个观察者
 */
namespace lib\code\Observe;
class ObserveAbleTwo implements Observe
{
    public function update()
    {
        echo "我是第二个观察者,你要变我看到了，我就跟着改变！";
    }
}