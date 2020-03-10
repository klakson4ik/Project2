<?php


namespace app\models\user;


use vendor\core\libs\DB;

class UserDB
{
    public static function newUser($data)
    {
        $sql = ("INSERT INTO User(login, email, password, telephone, address, role) VALUES (?,?,?,?,?,?)");
        DB::insertOne($sql, $data);
    }

    public static function checkDBOnUser($array)
    {
        $sql[] = ("SELECT login FROM User WHERE login = ?");
        $sql[] = ("SELECT email FROM User WHERE  email = ? ");
        $sql[] = ("SELECT telephone FROM User WHERE telephone = ?");
        return DB::getCheckUser($sql, $array);
    }
}