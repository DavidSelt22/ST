<?php

namespace StarkTech\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class PruebaController extends Controller {

	public function index()
	{
		return "Hola desde Controller";
	}    
    
    public function nombre($nombre)
	{
		return "Hola mi nombre es: ".$nombre;
	}

}




