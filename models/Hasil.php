<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\rbac\Rule;

class Hasil extends ActiveRecord {
    public static function tableName() {
        return 'hasil';
    }

    public function rules() {
        return [
            [['kd_tanaman', 'nama', 'jumlah', 'deskripsi'], 'required'],
            ['jumlah', 'integer']
        ];
    }
}