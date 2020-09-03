<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use  Illuminate\Support\Facades\Crypt;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->vars = [
           'user' => User::all()
        ];
        return view('pages.user.index', $this->vars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'username' => 'required',
            'email' => 'email', 'required',
            'password' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'email' =>  $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('users.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desc = Crypt::decrypt($id);
        $this->vars = [
            'user' => User::findOrfail($desc)
        ];
        return view('pages.user.edit', $this->vars);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'email', 'required',
            'password' => 'required'
        ]);
      
        User::where(['id' =>$request->id])->update([
            'username' => $request->username,
            'email' =>  $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('users.index');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index');
    }
}
