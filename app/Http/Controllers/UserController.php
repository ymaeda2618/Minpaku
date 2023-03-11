<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // ユーザー情報を表示
    public function index()
    {
        $user_info = Auth::user();

        return view('user.index')->with([
            "user_info"  => $user_info
        ]);
    }

    // ユーザー情報を更新
    public function update(Request $request)
    {
        $user_info = Auth::user();
        $user_info->name = $request->name;
        $user_info->email = $request->email;
        $user_info->tel = $request->tel;
        $user_info->save();

        // ユーザー情報表示画面へ遷移する
        return redirect('/mypage');
    }
}
