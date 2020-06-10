<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poste;
use Auth;

class PostController extends Controller
{
   
    public function insert(Request $request){
    		$Poste=new Poste();
    		$Poste->id_user=5;
    		$Poste->poste=$request->input('poste');
    		$Poste->save();
    		return redirect('user');
}

    }

