<?php


namespace app\controllers;

use app\models\user\UserModel;
use vendor\core\libs\Validator\Validator;

class UserController extends AppController
{
    public function registrationAction(){
        return true;
    }

    public function validateAction(){
        $user =['login' => trim($_POST['login']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'telephone' => trim($_POST['telephone']),
                'address' => trim($_POST['address']),
                'role' => 'user'
                ];


        $rules = UserModel::getRules();
        $validator = new Validator($rules, $user);
        $validator = $validator->getResultValidate();

        $data = ['user' => $user];

        if($validator['success'])
        {
            $checkNewUser = UserModel::checkNewUser($user);

            if(!$checkNewUser)
            {
                UserModel::setNewUser($user);
                redirect('/user/success');

            }else {
                $data['validateErrors'] = $checkNewUser;
                $data['validateErrors'] = $this->loadView(VIEWS . '/User/Validate_tmp/checkNewUser.php', $data);
                $this->setData($data);

            }
        }
        else{
            $data['validateErrors'] = $validator['validateErrors'];
            $data['validateErrors'] = $this->loadView(VIEWS . '/User/Validate_tmp/checkValidate.php', $data);
            $this->setData($data);
        }
    }

    public function successAction(){
        return true;
    }
}