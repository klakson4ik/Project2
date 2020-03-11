<?php


namespace app\controllers;

use app\models\user\AuthorisationModel;
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

    public function authorisationAction()
    {
        session_unset();
        if (empty($_POST)) return true;
        $auth = ['login' => trim($_POST['login']),
            'password' => trim($_POST['password'])
        ];
        if(!empty($auth['login']) && !empty($auth['password']))
        {
            $password = AuthorisationModel::setAuth($auth['login']);

            if ($password) {
                $result = AuthorisationModel::comparePassword($password, $auth['password']);
                if ($result) {
                    $_SESSION['login'] =  $auth['login'];
                    redirect("/");
                }
                else
                    $_SESSION['auth'] = ['login' => $auth['login'], 'is_true' => false];

            } else
                $_SESSION['auth'] = ['login' => $auth['login']];
        }else
            throw new \Exception("Логин и пароль не заполнены ", 404);
    }

    public function logoutAction(){
        session_unset();
        redirect();
    }
}