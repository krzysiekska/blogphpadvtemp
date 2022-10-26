<?php

namespace common\models;

use http\Exception\BadMessageException;
use http\Exception\InvalidArgumentException;
use yii\base\ErrorException;
use yii\base\Model;
use yii\base\UserException;
use yii\db\Exception;
use yii\helpers\VarDumper;
use yii\web\ForbiddenHttpException;

class SignupForm extends Model
{
    public $username;
    public $password;
    public $password_repeat;
    public $email;

    public function rules()
    {
        return [
            [['username','password','password_repeat', 'email'],'required'],
            [['username', 'email'], 'unique'],
            [['username', 'password', 'password_repeat'], 'string', 'min'=>4 ],
            ['password_repeat', 'compare', 'compareAttribute' => 'password']
        ];
    }
    public function signup(){
        $user = new User();
        $post = \Yii::$app->request->post('User');
        if (\Yii::$app->request->isPost && $user->validate())
        {
            $user->username = $this->username;
            $user->email = $this->email;
            $user->password = \Yii::$app->security->generatePasswordHash($this->password);
            $user->access_token = \Yii::$app->security->generateRandomString();
            $user->auth_key = \Yii::$app->security->generateRandomString();
        }
        if($user->validate() && $user->save()){
            return true;
        }else {
            \Yii::error("User was not saved" . VarDumper::dumpAsString($user->errors));
            return false;
        }
    }
}