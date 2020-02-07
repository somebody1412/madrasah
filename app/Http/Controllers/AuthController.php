<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('page.admin.index');
    }
    public function indexRegister(Request $request)
    {
        return view('page.admin.register');
    }

    public function auth(Request $request)
    {

        if (!Auth::attempt($request->only('email', 'password'))){
            return redirect()->back()->with('err',"Wrong credentials");
        }

        $user = User::where('email',$request->email)->first();

        Auth::loginUsingId($user->id);
        
        return redirect()->intended('/dashboard');
    }

    public function register(Request $request)
    {

        $user = User::where('email',$request->email)->first();
        
        if($user){
            return redirect()->back()->with('err',"Email sudah berdaftar");
        }

        $user = User::where('nric',$request->nric)->first();
        
        if($user){
            return redirect()->back()->with('err',"Pengenalan sudah berdaftar");
        }

        $user = new User;
        $user->nric = $request->nric;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->role_id = Role::USER;
        $user->save();

        Auth::loginUsingId($user->id);
        
        return redirect()->intended('/dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
