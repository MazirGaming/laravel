<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index(){
        // $users = DB::select('select * from users');
        // return response()->json([
        //     'email' => $users
        // ]);
        return view('login');
        
    }
    public function store(Request $request){
        $email = $request->email;
        $password = $request->password;
        // return $email;
        $user = DB::table('users')->where('email', ''.$email.'')->first();
        if(empty($user)){
            view('login');
        } else {
            if ($email == $user->email && $password == $user->password){
                return redirect('/');
            } else {
                return response()->json([
                        $email,
                        $password
                ]);
            }
        }
        
        // return $user;
        // return redirect('/');

        // return redirect('/');
        // return response()->json([
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);
    }


}
