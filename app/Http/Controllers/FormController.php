<?php

namespace App\Http\Controllers;
use App\Models\PremiunRetainer;
use App\Models\Inspection;
use App\Models\SPV;
use App\Models\Collateral;
use App\Models\Closing;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class FormController extends Controller
{
    function newsletter_add(Request $req){
        $data = array('subs_email'=>$req->email);
        DB::table('newsletters')->insert($data);
    }
    function personal_form_show(){
        
        if(session()->has('user')){
            return view('manage_personal_form');
        }
        else{
            return redirect('login');
        }
    }

    function company_form_show(){
        if(session()->has('user')){
            return view('manage_company_form');
        }
        else{
            return redirect('login');
        }
        
    }
    function premiun_retainer_show(){
        if(session()->has('user')){
            return view('manage_premiun_retainer'); 
        }
        else{
            return redirect('login');
        }
        
    }
    function premiun_retainer_add(Request $req){
        if(session()->has('user')){
            $msp = new PremiunRetainer;
            // $msp->user_id = $req->session('user');
            $msp->premiun_retainer_type = $req->pr;
            if($req->file('pr_file')){
                $file= $req->file('pr_file');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('files/pr/'), $filename);
                $msp['premiun_retainer_doc']= $filename;
            }
            $msp->status= true;
            $msp->save(); 
        }
        else{
            return redirect('login');
        }
        
    }


    function inspection_show(){
        if(session()->has('user')){
            return view('manage_inspection');
        }
        else{
            return redirect('login');
        }
        
    }
    function inspection_add(Request $req){
        if(session()->has('user')){
            $msp = new Inspection;
            // $msp->user_id = $req->session('user');
            $msp->inspection_type = $req->in;
            if($req->file('in_file')){
                $file= $req->file('in_file');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('files/in/'), $filename);
                $msp['inspection_doc']= $filename;
            }
            $msp->status= true;
            $msp->save();
        }
        else{
            return redirect('login');
        }
        
    }


    function spv_show(){
        if(session()->has('user')){
            return view('manage_spv');
        }
        else{
            return redirect('login');
        }
        
    }
    function spv_add(Request $req){
        if(session()->has('user')){
            $msp = new SPV;
            // $msp->user_id = $req->session('user');
            $msp->spv_type = $req->spv;
            $msp->licensing_type = $req->lc;
            if($req->file('spv_file')){
                $file= $req->file('spv_file');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('files/spv/'), $filename);
                $msp['spv_doc']= $filename;
            }
        $msp->status= true;
        $msp->save();
        }
        else{
            return redirect('login');
        }
        
    }


    function closing_show(){
        if(session()->has('user')){
            return view('manage_closing');
        }
        else{
            return redirect('login');
        }
        
    }
    function closing_add(Request $req){
        if(session()->has('user')){
            $msp = new Collateral;
            // $msp->user_id = $req->session('user');
            $msp->closing_type = $req->col;
            if($req->file('cl_file')){
                $file= $req->file('cl_file');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('files/cl/'), $filename);
                $msp['closing_doc']= $filename;
            }
        $msp->status= true;
        $msp->save();
        }
        else{
            return redirect('login');
        }
        
    }

    
    function collateral_show(){
        if(session()->has('user')){
            return view('manage_collateral');
        }
        else{
            return redirect('login');
        }
        
    }
    function collateral_add(Request $req){
        if(session()->has('user')){
            $msp = new Collateral;
            // $msp->user_id = $req->session('user');
            $msp->collateral_type = $req->col;
            if($req->file('col_file')){
                $file= $req->file('col_file');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('files/col/'), $filename);
                $msp['collateral_doc']= $filename;
            }
        $msp->status= true;
        $msp->save();
        }
        else{
            return redirect('login');
        }
        
    }
    function bank_details_show(){
        if(session()->has('user')){
            return view('manage_bank_details');
        }
        else{
            return redirect('login');
        }
        
    }
    function plan_upgarde_show(){
        if(session()->has('user')){
            return view('manage_plan_upgarde');
        }
        else{
            return redirect('login');
        }
        

    }
}   
