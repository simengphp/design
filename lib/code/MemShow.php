<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/9
 * Time: 13:39
 */
namespace  lib\code;
use  lib\code\Tactics\Tactics;
class MemShow implements Tactics
{
    /**实现接口类文件的两个方法*/
    public function showGoods()
    {
        echo "女性的商品！";
    }
    public function showAdvert()
    {
        echo "女性的广告！";
    }
}