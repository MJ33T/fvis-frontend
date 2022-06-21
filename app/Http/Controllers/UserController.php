<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Notifications\SendEmailNotification;
use Notification;

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

    function user_signup(Request $req){
        $user = DB::table('acceptances')->where(['u_name'=>$req->email])->first();
        if($user->a_code == $req->a_code)
        {
            $password = 'Fvis-'.rand(100, 100000);
            $data = [
                [
                    'f_name'=>$req->f_name, 
                    'l_name'=> $req->l_name,
                    'email'=> $req->email, 
                    'user_code'=> $req->a_code, 
                    'm_no_ex'=> $req->m_number_ex, 
                    'm_no'=> $req->m_number, 
                    'country'=> $req->r_country, 
                    'h_phone'=> $req->h_phone, 
                    'dob'=> $req->dob, 
                    'gender' => $req->gender,
                    'typeofservice'=> $req->col, 
                    'add_one'=> $req->add_one, 
                    'add_two'=> $req->add_two,
                    'password'=>$password, 
                ],
            ];
            // dd($data);
            DB::table('user_lists')->insert($data);
            
            $details = [
                'greeting'=>'Welcome To FVIS',
                'body' => 'Login Credential: ',
                'actiontext' => 'Your UserName: '.$req->email.' Your Password: '.$password.'Your Access Code: '.$req->a_code,
                'actionurl' => '/fvis.live/login',
                'lastline' => 'Thank you for SignUp',
            ];
            // Notification::route('mail', $req->email)->notify(new SendEmailNotification($details));
            // Notification::send($req->email, new SendEmailNotification($details));
            return redirect('/login');
        }
        else{
            return view('login');
        }
    }
}
