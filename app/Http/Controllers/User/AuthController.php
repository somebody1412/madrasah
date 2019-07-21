<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\LeApi;
use Auth;

class AuthController extends Controller
{
  public function index()
  {
      if (Auth::user() && session('user_token'))
          return redirect('/user/home');
      return view('user::index');
  }

  public function auth(Request $request)
  {
      $response= LeApi::member_login($request->nric,$request->password);

      $user=User::where("nric",$request->nric)->first();

      // Check if we need to create a new record
      if (!$user)
      {
          $data = $response->viewAObject;
          $user=User::createAgent($request->nric,$data->email,$data->name);
      }

      // Login the user
      User::login($response->apiKey,$request->nric,$user);

      return redirect()->intended('/user/home');
  }

  public function logout(Request $request)
  {
      $request->session()->flush();
      Auth::logout();
      return redirect('/');
  }
}
