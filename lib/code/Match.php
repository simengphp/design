<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/9
 * Time: 11:38
 */
namespace lib\code;
interface  Match
{
    function connect($host,$user,$pwd,$dbname);
    function query($sql);
    function close();
}
