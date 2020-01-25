<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fileinfo;

class UserController extends Controller
{
	public function index()
	{
		return view('user');
	}

    public function checkFile(Request $request){
    	$fid = $request['fid'] ;
    	$fpin = $request['fpin'];

    	if(Fileinfo::where('fid','=',$fid)->exists() && Fileinfo::where('fpin','=',$fpin)->exists())
    	{  
    		$results =Fileinfo::all();
        return view('resultforuser',compact('results'));
    		
    	}
    }

   
}
