<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poste;
use Auth;
use DB;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function insert(Request $request){
            $Poste=new Poste();
            $Poste->id_user=Auth::user()->id;
            $Poste->name=Auth::user()->name;
            $Poste->poste=$request->input('poste');
            $Poste->save();
            return redirect('home');
}
public function index(){
     
     $postes = DB::select('select * from postes');
     $postes = DB::select('select * from postes');
     return view('home',['postes'=>$postes]);
    }

             }
