<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth');
    }

    public function process(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['name' => $req->username, 'password' => $req->password])) {
            // dd();
            // return response()->json(['success' => 'login success']);
           return redirect()->route('admin');
        }else{
            // return response()->json(['error' => 'login failed']);
            return redirect()->back();
        }
    }
}
