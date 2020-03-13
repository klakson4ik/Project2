<?php

namespace vendor\core\libs;

class DB
{
    private static $pdo;

    public function __construct()
    {
        require_once CONFIG . '/Config_DB.php';
        self:: $pdo = new \PDO(DB_DSN, DB_LOGIN, DB_PASSWORD, DB_OPT);

    }

    // public static function find($id)
    // {
    //    $id = trim(strip_tags($id));
    //    $stmt =self :: $pdo->prepare("SELECT `title` FROM test WHERE `id` = ?");
    //    $stmt->execute(array($id));
    //    $value = $stmt->fetch(\PDO::FETCH_LAZY);
    //    debug($value);
    // }

    public static function getAssoc($sql, $param = NULL)
    {
        $query = self::$pdo->query($sql);
        if ($param != NULL)
            $value = $query->fetchAll(\PDO::FETCH_UNIQUE);
        else
            $value = $query->fetchAll();
        return $value;
    }

    public static function getOne($sql, $param)
    {
        $stmt = self:: $pdo->prepare($sql);
        $stmt->execute($param);
        $value = $stmt->fetch();
        return $value;
    }

    public static function getArray($sql, $array)
    {
        $fullArray = [];
        foreach ($array as $key => $value) {
            $stmt = self:: $pdo->prepare($sql);
            $stmt->execute([$value]);
            $value = $stmt->fetch();
            $fullArray[] = $value;
        }
        return $fullArray;
    }

    public static function getAssocArray($sql, $array)
    {
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute([$array]);
        $array = $stmt->fetchAll();
        return $array;
    }

    public static function getBasketArray($sql, $array)
    {
        $fullArray = [];
        $stmt = self::$pdo->prepare($sql);
        foreach ($array as $key=>$val) {
            $stmt->bindValue(1, $val[0], \PDO::PARAM_INT);
            $stmt->bindValue(2, $val[1], \PDO::PARAM_INT);
            $stmt->bindValue(3, $val[2], \PDO::PARAM_INT);
            $stmt->execute();
            $fullArray[]  = $stmt->fetch();
        }

        return $fullArray;
    }

    public static function getArrayCategory($sql, $array)
    {
        $fullArray = [];
        foreach ($array as $key => $value) {
            $stmt = self:: $pdo->prepare($sql);
            $stmt->execute([$value]);
            $value = $stmt->fetchAll();
            foreach ($value as $subvalue) {
                $fullArray[] = $subvalue;
            }
        }
        return $fullArray;
    }

    public static function insertOne($sql, $data)
    {
        $stmt = self:: $pdo->prepare($sql);
        $stmt->bindValue(1, $data['login'], \PDO::PARAM_INT);
        $stmt->bindValue(2, $data['email'], \PDO::PARAM_STR);
        $stmt->bindValue(3, $data['password'], \PDO::PARAM_STR);
        $stmt->bindValue(4, $data['telephone'], \PDO::PARAM_STR);
        $stmt->bindValue(5, $data['address'], \PDO::PARAM_STR);
        $stmt->bindValue(6, $data['role'], \PDO::PARAM_STR);
        $stmt->execute();
    }

    public static function getCheckUser($sql, $data)
    {
        $userArr = [$data['login'], $data['email'], $data['telephone']];
        $count = 0;
        $value = [];
        foreach ($sql as $query) {
            $stmt = self:: $pdo->prepare($query);
            $stmt->execute([$userArr[$count++]]);
            $currValue = $stmt->fetch();
            if($currValue) {
                $key = key($currValue);
                $value[$key] = $currValue[$key];
            }
        }
        return $value;
    }

}


