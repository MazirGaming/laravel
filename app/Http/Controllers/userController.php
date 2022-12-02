<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function handle(Request $request, $param){
        print_r($param);
    }
}
