<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Helpers\Qs;
use App\Repositories\UserRepo;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\RegistersUsers;



class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function create(){
        return view('users.create');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function store(Request $request)
    {


            $user=$request->validate([

                'name'=>'required',
                'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
                
                
            ] );

            // dd($user);
            User::create($user);
            return redirect('/users');
        
        

    }


    public function edit($id){
        $user=User::find($id);
        return view('users.edit')->with('user',$user);

    }

    public function getUsers()
    {

        try{
       $users=User::all();

       return view('users.index')->with('users',$users);
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
    public function updateUser(Request $request,$id)
    {

        try {
        
        
        $user =  User::find($id);
   
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->role=$request->input('role');
            $user->save();
      return redirect('/users');
    }
    catch (\Exception $exception){
         return $exception->getMessage();
    }
    
    }
    public function deleteUser($id)
    {
       try {
              $user = User::findOrFail($id);
              $user ->delete();
               
              return back();
         }catch (\Exception $exception){
          return redirect()->back()->with('error', 'An error occured while processing your request',$exception);
         }
    }
}
