<?php

namespace common\models;

use yii\base\Model;

class SignupForm extends User
{
    public $password_repeat;

    public function rules()
    {
        return [
            [['username', 'password', 'password_repeat', 'email'], 'required'],
            [['username', 'email'], 'unique'],
            [['username', 'password', 'password_repeat'], 'string', 'min' => 4],
            ['password_repeat', 'compare', 'compareAttribute' => 'password']
        ];
    }

    public function signup()
    {
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->password = \Yii::$app->security->generatePasswordHash($this->password);
        $user->access_token = \Yii::$app->security->generateRandomString();
        $user->auth_key = \Yii::$app->security->generateRandomString();
        $user->save();
    }
}