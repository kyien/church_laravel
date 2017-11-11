<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\SystemUser;
use Auth;
use JavaScript;

class AdminAuthController extends Controller
{
    //

    protected $users;

    public function __construct()
    {
        $this->middleware('auth:admins');
        $this->users=User::all();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     protected function dashview () {
        
                return view('dashboard');
            }
    protected function adduser_view(){

       
        return view('backend.users_add')->with('users',$this->users);

    }
    
    protected function system_users_view(){

       $system_users= DB::table('system_users')
        ->join('users', function ($join) {
            $join->on('system_users.user_id','=','users.id');
        })
        ->get();
                return view('backend.system_users')->with('users',$system_users);
    }
    // protected function edituser_view(){

    //     return view();
    // }
    protected function adduser(Request $req){

        // $this->validate($req,[
            
        //             ]);

    }
    protected function edituser(Request $req){
        $this->validate($req,[
            'username' => 'required',
            'role' => 'required',
             ]);

             $update=SystemUser::find($req->id)->update([

                'username'=>  $req->username,
                'role' => $req->role

             ]);

             JavaScript::put([
                 'email' => $req->email,
                'name' => $req->name,
                'phone' => $req->phone,
                'residence'=>$req->residence
            ]);

             if($update){

                return response()->json([
                    'success' => true,
                    'message' => 'user update successful!',
                    'res' => $update
                
                ]);
             }
             else{

                return response()->json([
                    'success' => false,
                    'message' => 'user update failed!'
                ]);

             }


    }
    protected function deleteSystemUser($user_id){

    
       $delete=SystemUser::where('user_id',$user_id)->delete();

       if($delete){

        return response()->json([
            'success'=> true,
            'message' => 'user deleted successfully!'
        ]);
       }

       else {

        return response()->json([
            'success' => false,
            'message' => 'user delete failed!'
        ]);

       }
     



    }

}
