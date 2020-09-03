<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth');
    }

    public function process(Request $req)
    {
        $rule = [
            'username' => 'required',
            'password' =>  'required'
        ];
        $error = Validator::make($req->all(), $rule);

        if($error->fails()){
            return response()->json(['errors' => $error->errors()->all()] );
        }else if (Auth::attempt(['username' => $req->username, 'password' => $req->password])) {
            // dd();
            // return response()->json(['success' => 'login success']);
           return response()->json(['success' => 'Login Berhasil']);
        }
    }

    public function logout()
    {
        if(Auth::user()){
            Auth::logout();
            return redirect('/');
        }
        return redirect()->back();
    }
}
