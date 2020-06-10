<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Utilisateur;
use App\User;
use Hash;

use DB;
use Auth;
class TestController extends Controller
{
	public function hello(){
		return view('hello');
	}
     public function dashboard(){
     	
     		    return view('dashboard');

     }
     public function charts(){
     	return view('charts');
     }

     public function login(){
     	return view('login');
     }

     public function register(){
         

     	return view('register');
     }
     
     public function store(Request $request){
          $User = new Utilisateur();
          $User->nom=$request->input('nom');
          $User->prenom=$request->input('prenom');
          $User->email=$request->input('email');
          $User->mot_de_passe=$request->input('mot_de_passe');
          $User->save();
          return redirect('/login');

     }
    public function index(){
     
     $postes = DB::select('select * from postes where id_user=?',array(Auth::user()->id));
     return view('page-user',['postes'=>$postes]);
    }


    public function update(Request $request){
       if (!(Hash::check($request->input('password'), Auth::user()->password))) {
            // The passwords matches
            return back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->input('password'), $request->input('password_confirm')) == 0){
            //Current password and new password are same
            return back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

       
        //Change Password
        
        $user = Auth::user();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        //$user->password=update([$request->input('password_confirm')=> Hash::make($request->new_password)]);
        $user->password = Hash::make($request->new_password);
        $user->save();
        return redirect('/');

    }
   
}
