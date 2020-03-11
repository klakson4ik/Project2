<?php


namespace app\models\user;


use app\models\AppModel;

class AuthorisationModel extends AppModel
{
    public static function setAuth($user){
        $result = UserDB::getDBAuth($user);
        return empty($result['password']) ? false : $result['password'];
    }

    public static function comparePassword($password, $currentPassword){
       return  password_verify($currentPassword, $password) ? true : false;
    }
}