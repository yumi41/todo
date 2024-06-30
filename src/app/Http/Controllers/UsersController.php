<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UsersController extends Controller
{
    protected $user;

    /**
     * コンストラクタ
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * 画面表示件データ一件取得用
     */
    public function getEdit($id)
    {
        $user = $this->user->selectUserFindById($id);
        return view('users.edit', compact('user'));
    }
}
