<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:company')->except('logoutCompanyUser');
    }

    public function login_company()
    {
        return view('auth_company.login');
    }

    public function loginCompanyUser(Request $request)
    {
        $request->validate([
                    'email' => ['required'],
                    'password' => ['required'],
                ]);

        if(Auth::guard('company')->attempt([
            'email' => $request->email,
            'password' => $request->password])) {

            return redirect()->route('front.account.index');
        }
        return back()->with('error', 'შეყვანილი მონაცემები არა სწორია');
    }

    public function logoutCompanyUser()
    {
        if(Auth::guard('company')->check()) {

            Auth::guard('company')->logout();

            return redirect()->route('front.index');
        }
    }
}
