<?php

namespace app\models;

use yii\db\ActiveRecord;

class Pengguna extends ActiveRecord {
    public static function tableName() {
        return 'pengguna';
    }

    public function rules() {
        return [
            [['username', 'password'], 'required'],
            ['username', 'unique'],
            ['password', 'string'],
        ];
    }
}