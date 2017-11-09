<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/9
 * Time: 11:41
 */
use lib\code\Match;
class PDO implements Match
{
    protected $conn = '';
    public function connect($host, $user, $pwd, $dbname)
    {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname",$user,$pwd);
        $this->conn = $conn;
    }
    public function query($sql)
    {
        return $this->conn->query($sql);
    }
    public function close()
    {
        unset($this->conn);
    }
}