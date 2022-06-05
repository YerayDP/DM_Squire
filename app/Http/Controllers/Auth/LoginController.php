<?php

namespace App\Http\Controllers\Auth;

use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

  use AuthenticatesUsers;

  protected $redirect = "/admin";

  protected function authenticated(Request $request, $user)
  {
    $user = Auth::user();

    if ($user->actived == '1' && $user->type == 'a') {
      return redirect ('/admin');
    }
    else{
      return redirect('/login') ;
      
    }
  }
  
  
  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  /**
   * Create a new controller instance.
   *
   * @return void
   */

  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }
  public function logout(Request $request)
  {
    Auth::logout();
    return redirect('/login');
  }
}
