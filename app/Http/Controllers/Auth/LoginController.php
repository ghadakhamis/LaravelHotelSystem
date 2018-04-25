<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected $redirectTo = '/index';
    // protected function redirectTo(){
    //     $user = Auth::user();
    //     if($user->hasRole('admin')){
            
    //         return('/admins');
    //     }
    //     else if($user->hasRole('manager'))
    //     {
    //         return('/managers');
    //     }
    //     else if($user->hasRole('client'))
    //     {
    //         return('/clients');
    //     }
    //     else if($user->hasRole('receptionist'))
    //     {
    //         return('/receptionists');
    //     }
    // }

}

