<?php

namespace app\models;

use yii\db\ActiveRecord;

class Tanaman extends ActiveRecord {
    public static function tableName() {
        return 'tanaman';
    }

    public function rules() {
        return [
            [['nama', 'kd_kategori', 'jumlah', 'deskripsi', 'username'], 'required'],
            ['jumlah', 'integer']
        ];
    }
}