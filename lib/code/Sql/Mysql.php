<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/9
 * Time: 11:41
 */
use lib\code\Match;
class MySQL implements Match{
    protected $conn = '';
    public function connect($host, $user, $pwd, $dbname)
    {
        $conn = mysql_connect($host,$user,$pwd);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }
    public function query($sql)
    {
        // TODO: Implement query() method.
        $res = mysql_query($sql,$this->conn);
        return $res;
    }
    public function close()
    {
        // TODO: Implement close() method.
        mysql_close($this->conn);
    }
}