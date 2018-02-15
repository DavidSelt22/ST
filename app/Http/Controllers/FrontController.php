<?php

namespace StarkTech\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   
   
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    
    public function index()
	{
		return view('index');
	}
	//public function admin(){
 //      return view('admin.index');// carpetas y luego archivo
 //  }

}
