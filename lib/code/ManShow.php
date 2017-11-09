<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/9
 * Time: 13:41
 */
namespace  lib\code;
use lib\code\Tactics\Tactics;
class ManShow implements Tactics
{
    public function showGoods()
    {
        echo "男性商品！";
    }

    public function showAdvert()
    {
        echo "男性的广告！";
    }
}