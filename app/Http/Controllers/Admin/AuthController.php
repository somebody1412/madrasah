<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\LeApi;


use Auth;

class AuthController extends Controller
{
    /**
     * [Landing page]
     * @return View [Show login page]
     */
    public function index()
    {
        return view('page.admin.index');
    }

    /**
     * [Function for admin to login]
     * @param  Request $request [credentials]
     * @return View  [Redirect user to dashboard page upon successful login]
     */
    public function auth(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password')))
            return redirect()->back()->with('err',"Wrong credentials");

        LeApi::admin_login();
        return redirect()->intended('/dashboard');
    }

    /**
     * [Function to logout]
     * @return View [Redirect user back to login page upon logging out]
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
