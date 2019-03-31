<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Admin\Manager;

class PublicController extends Controller
{
    public function login()
    {
        return view('admin.public.login');
    }

    public function check(Request $request)
    {
        $this->validate($request,[
            'username'=>'required|min:2|max:20',
            'password'=>'required|min:6',
            'captcha'=>'required|size:4|captcha',
        ]);
        
        $data = $request->only(['username','password']);
        $data['status'] = '2';
        $result = Auth::guard('admin')->attempt($data,$request->get('online'));
        if ($result) {
            return redirect()->route('adminIndex');
        }else{
            return  redirect()->route('login')->withErrors([
                'loginError' => '用户名或密码错误',
            ]);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
