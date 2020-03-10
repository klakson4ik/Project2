<?php



namespace app\models\user;


class UserModel
{
    private static $rules = [
        'pattern' => [
            'login' => '^\w{3,}$',
            'email' => '^\w{2,30}@\w{2,20}\.\w{2,10}$',
            'password' => '^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$',
            'telephone' => '^\d{11,14}$',
            'address' => '^.{3,}$'

        ],
        'required' => [
            'login',
            'email',
            'password',
            'telephone',
            'address'
        ],
        'lengthMin' =>[
            'password' => 8,
            'login' => 3
        ]
    ];

    public static function getRules(){
        return self::$rules;
    }

    public static function setNewUser($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        UserDB::newUser($data);
    }

    public static function checkNewUser($data)
    {
        $resultArray = UserDB::checkDBOnUser($data);

        if(!empty($resultArray))
            return $resultArray;
        else
            return false;

    }
}