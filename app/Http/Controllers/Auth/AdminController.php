<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    //

  

    public function __construct(){

        $this->middleware('guest:admins', ['except' => ['logout']]);
    }

    protected function showLoginForm() {

        return view('auth.adminlogin');
    }

  

    protected function login(Request $request) {

        $credentials=[
            'username' => $request->username,
            'password' => $request->password
        ];
        //validate form data

        $this->validate($request,[
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        //attempt login

        if(Auth::guard('admins')->attempt($credentials,false)){
            //if successful 
            // echo "rached here";
            return redirect()->intended(route('admin.dash'));

        }
        
        //if unsuccesful
        return redirect()->back()->withInput($request->only('username','remember'));

        
    }

    protected function logout(Request $request){

        Auth::guard('admins')->logout();

        $request->session()->invalidate();
        

        return redirect('/');

        
    }
}
