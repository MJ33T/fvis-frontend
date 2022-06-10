<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function login(Request $req){
        $user = DB::table('user_lists')->where(['email'=>$req->email])->first();
        if($user->password == $req->password){
            $req->session()->put('user', $user);
            return redirect('user_dashboard');
            
        }
        else{
            return "User Name and Password not matched";
        }
    }
}
