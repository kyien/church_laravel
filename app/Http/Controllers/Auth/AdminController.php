<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    //

  

    public function __construct(){

        $this->middleware('guest:admins');
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

        if(Auth::guard('admins')->attempt($credentials)){
            //if successful 
            // echo "rached here";
            return redirect()->intended(route('admin.dash'));

        }
        
        //if unsuccesful
        return redirect()->back()->withInput($request->only('username','remember'));

        
    }
}
