<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller {

    #use AuthenticatesUsers;
    use AuthenticatesUsers {
        logout as performLogout;
    }
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
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request){
        $this->performLogout($request);
        return redirect()->route('home');
    }

    public function login(Request $request) {
        $this->validate($request, [
            'email'    => 'required',
            'password' => 'required',
        ]);
     
        $login_type = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL ) 
            ? 'email' 
            : 'nif';
     
        $request->merge([
            $login_type => $request->input('email')
        ]);
     
        if (Auth::attempt($request->only($login_type, 'password'))) {
            return redirect()->intended($this->redirectPath());
        }
     
        return redirect()->back()
            ->withInput()
            ->withErrors([
                'email' => '¡Parece que no existes!',
        ]); 
    }

    
}
