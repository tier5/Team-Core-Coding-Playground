<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Post;
use DB;
use App\User;
use Auth;


class UserController extends Controller
{

    public function home() {
        return view('welcome');
    }

    
    //Logout Function
    public function logout() {
        Auth::logout();
        return redirect()->route('project.home');
        //return view('user.logout');
    }
   
    //Create new user function
    public function create(Request $request)
    {
        $validateData=$request->validate([
            'name' => 'required',
            'lname' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'passwordc' => 'required_with:password|same:password|min:8'
        ]);

        $user = new User();
        $user->name     =   $request->name;
        $user->lname    =   $request->lname;
        $user->email    =   $request->email;
        $user->password =   $request->password;
        $user->save(); 
        
        return redirect()->route('project.home');
    }

    
    //Login function
    public function dologin(Request $request){
        $validateData=$request->validate([
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        $credentials = [
            'email'     => $request->email,
            'password'  => $request->password
        ];

        if(Auth::attempt($credentials)) {
        
            return redirect()->route('project.home');
        }   else {
            //dd("Something went wrong");
                 return view('user.login');     
        }
        
    }

    public function forgetPassword(Request $request){
         $validateData=$request->validate([
                'email' => 'required'
            ]);

          //$exists = DB::table('users')->where('email', $request->email)->exists();

         $exists=User::where('email', '=', $request->email)->exists();

          if(!$exists){
            dd('User not exist. Go back and try again');
          }
          else{
            return view('user.forgotpasswordcreater');
          }

    }

    public function newPassword (Request $request){

         $validateData=$request->validate([
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'passwordc' => 'required_with:password|same:password|min:8'
        ]);

    }

    //Show post function 
    public function show($id)
    {
        $post= Post::find($id);
        return view ('post.show')->with('post',$post);
    }

    
}