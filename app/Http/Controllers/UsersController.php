<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\User;


class UsersController extends Controller
{
    protected $users;


     public function __construct(){

        $this->middleware('auth:admins');

        $this->users=DB::table('users')->orderBy('created_at','desc')->get();
     }

     //return all users view
    public function index()
    {
        //
        return view('backend.all_users')->with('users',$this->users);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $validate=$this->validate($request,[
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'phone' => 'required|regex:/^\+?([0-9]{3})\)?[ ]?([0-9]{3})[ ]?([0-9]{3})[ ]?([0-9]{3})$/',
                'residence' => 'required|string|max:255',
            ]);

            // if($validate!==true){
                
            //     $errors= $validation->messages();
            // }

            $user=User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'residence' => $request->residence
            ]);


                if($user){

                    return response()->json([
                        'success'=> true,
                        'res' => $user,
                        'message' => 'user successfully created!'
                    ]);
        

                }

                else{
                    return response()->json([
                        'success'=> false,
                        'message' => 'failed inserting user to database!'
                    ]);
        
                }
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        
    }

 
    public function update(Request $request, $id)
    {
        //

        $validate=$this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|regex:/^\+?([0-9]{3})\)?[ ]?([0-9]{3})[ ]?([0-9]{3})[ ]?([0-9]{3})$/',
            'residence' => 'required|string|max:255',
        ]);


        $update=User::find($id);

        $update->name=$request->name;
        $update->email=$request->email;
        $update->phone=$request->phone;
        $update->residence=$request->residence;
      ;
        $update->save();

            // 'name' => $request->name,
            // 'email' => $request->email,
            // 'phone' => $request->phone,
            // 'residence' => $request->residence
      
        if($update){

            return response()->json([
                'success'=> true,
                'res'=> $update,
                'message'=> 'successfully updated the user!'
            ]);
        }

        else{

            return response()->json([
               'success'=> false,
                'message'=> 'updating failed!'
            ]);

        }



        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $delete=User::find($id)->delete();
        
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
