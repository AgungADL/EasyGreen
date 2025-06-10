<?php

namespace app\models;

use Yii;
use app\models\User;
use yii\base\Model;

class LoginForm extends Model
{
    public $username;
    public $password;

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
        ];
    }

    public function login()
    {
        $user = User::findOne(['username' => $this->username]);

        if ($this->validate()) {
            if ($user) {
                if ($this->password === $user->password) {
                    return Yii::$app->user->login($user, 3600 * 24 * 30);
                } else {
                    $this->addError('password', 'password salah');
                }
            } else {
                $this->addError('username', 'username tidak ditemukan');
            }
        }

        return false;
    }
}