<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function selectUserFindById($id)
    {
        // 「SELECT id, name, email WHERE id = ?」を発行する
        $query = $this->select([
            'name',
            'email',
            'password',
        ]);
        // first()は1件のみ取得する関数
        return $query->first();
    }
}