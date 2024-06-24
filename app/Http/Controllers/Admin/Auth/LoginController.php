<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class LoginController extends Controller
{
    
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating admins for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect admins after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.guest:admin', ['except' => 'logout']);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    /**
     * Log the admin out of the application.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {

        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect()->route('admin.dashboard');
    }

    public function login(Request $request){

        // dd($request->all());
        
        
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required'
        ]);

        // dd($request->all());

        

            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
                // dd('checked');
                \Session::flash('success', 'Logedin Successfully');
                // return response()->json(['status' => 'Logedin Successfully'], 200);
                
                return redirect()->route('admin.dashboard');

                
            } else{
                // return response()->json(['status' => 'Account may be blocked'], 400);

                $validator = array(
                    'email' => 'Wrong credential'
                );

                return redirect()->back()->withErrors($validator)->withInput();
            }
        
    }


    
}
