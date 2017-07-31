<?php

namespace App\Modules\Acl\Http\Controllers\Auth;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('acl::auth.login');
    }

    protected function validateLogin(Request $request)
    {
        $rules = [
            $this->username() => 'required',
            'password' => 'required',
        ];
        if(\App::environment('prod')){
            $rules['g-recaptcha-response'] = 'required|captcha';
        }

        $this->validate($request, $rules);
//        $this->validate($request, [
//            $this->username() => 'required',
//            'password' => 'required',
//            // new rules here
//        ]);
    }



}
