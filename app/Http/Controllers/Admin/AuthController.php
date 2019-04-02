<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.index');
    }

    public function add(Request $request)
    {
        if ($request->method() == 'POST' ) {
            $data = $request->except(['_token']);
            $result = Auth::insert($data);
            return $result ? '1' : '0';
        }else{
            return view('admin.auth.add');
        }
    }
}
