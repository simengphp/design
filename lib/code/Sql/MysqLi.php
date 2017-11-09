<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/9
 * Time: 11:42
 */
use lib\code\Match;
class MySQLi implements Match
{
    protected $conn = '';
    public function connect($host, $user, $pwd, $dbname)
    {
        $conn = mysqli_connect($host,$user,$pwd,$dbname);
        $this->conn = $conn;
    }
    public function query($sql)
    {
        $res = mysqli_query($sql,$this->conn);
        return $res;
    }
    public function close()
    {
        mysqli_close($this->conn);
    }
}