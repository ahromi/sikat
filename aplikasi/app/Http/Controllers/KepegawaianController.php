<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Input;
use DB;
use Redirect;

class KepegawaianController extends Controller
{
    //
    
    public function index()
    {
        $data = DB::table('t_employee')->get();

        return view('kepegawaian.daftar', ['t_employee' => $data]);
    }
    
    public function listDataTable() 
    {
    	$data = DB::table('t_employee')->get();
    	
    	return View::make('kepegawaian.daftar')->with('t_employee',$data);
    }
}
