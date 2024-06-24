<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;


class HomeController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }


    public function index(Request $request) {
        
        // dd('hi');
        // dd(Auth::guard('admin')->user()->name);
        return view('admin.home');
    }

    public function changepassword(Request $request)
    {
        return view('admin.changepassword');
    }

    public function savepassword(Request $request)
    {
        // dd( date('Y-m-d H:i:s'));
        $request->validate([
            'old_password'          => 'required',
            'password'              => 'required|min:4|confirmed'
        ]);

        $params = $request->except('_token');

        $old_password = Auth::guard('admin')->user()->password;
        
        if(Hash::check($params['old_password'], $old_password)){
            // dd($params['password']);
            $password = Hash::make($params['password']);
            Admin::where('id', Auth::guard('admin')->user()->id)->update([
                'password' => $password,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            \Session::flash( 'message' , 'Password changed Successfully');
            return redirect()->route('admin.changepassword');
        } else {
            return  redirect()->back()->withErrors(['old_password' => 'Old password is incorrect'])->withInput($request->all());
        }
        die;
    }
}
