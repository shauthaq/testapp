<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    //
    /**
     * [index descripton]
     * @param  none
     * @return none
     */
    public function index(Request $request, Response $response){
    	print $response->content();
    }
}
