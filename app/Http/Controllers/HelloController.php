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
    	$data = [
    		'msg' => 'お名前を入力してください。',
       	];
    	return view('hello.index', $data);
    }

    /**
     * [post description]
     * @param 
     * @return
     */
    public function post(Request $request){
    	$data = [
    		'msg' => "こんにちは{$request->name}さん",
    		'name' => $request->name
    	];
    	return view('hello.index', $data);
    }
}
