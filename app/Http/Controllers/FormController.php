<?php

namespace App\Http\Controllers;
use App\Models\PremiunRetainer;
use App\Models\Inspection;
use App\Models\SPV;
use App\Models\Collateral;
use App\Models\Closing;
use Illuminate\Support\Facades\DB;
use Session;


use Illuminate\Http\Request;

class FormController extends Controller
{
    function newsletter_add(Request $req){
        $data = array('subs_email'=>$req->email);
        DB::table('newsletters')->insert($data);
    }
    function personal_form_show(){   
        if(session()->has('user')){
            $email = Session::get('user')->email;
            $msp = DB::table('membership_users')->where(['email'=>$email])->first();
            if($msp !=  null){
                return view('manage_personal_form', ['msp'=>$msp]);
            }
            else{
                return view('add_personal_form');
            }
        }
        else{
            return redirect('login');
        }
    }

    function add_personal_form(Request $req){
        if(session()->has('user')){
            $id = Session::get('user')->id;
            $email = Session::get('user')->email;
            $data = [
                [
                    'user_id' => $id,
                    'f_name'=>$req->f_name, 
                    'l_name'=> $req->l_name,
                    'email'=> $email, 
                    'm_no'=> $req->m_number_ex.$req->m_number,  
                    'country'=> $req->country,  
                    'dob'=> $req->dob, 
                    'gender' => $req->gender, 
                    'add_one'=> $req->add_one, 
                    'add_two'=> $req->add_two,
                ],
            ];
            DB::table('membership_users')->insert($data);
            return redirect('personal_form');
        }
        else{
            return redirect('login');
        }
    }
    function update_personal_form_show(){
        if(session()->has('user')){
            $email = Session::get('user')->email;
            $msp = DB::table('membership_users')->where(['email'=>$email])->first();
            return view('update_personal_form', ['msp'=>$msp]);
        }
        else{
            return redirect('login');
        }
    }
    function update_personal_form(Request $req){
        if(session()->has('user')){
            $email = Session::get('user')->email;
            $msp = DB::table('membership_users')->where(['email'=>$email])->first();
            DB::table('membership_users')->where('id', $msp->id)->update(
                [
                    'f_name'  => $req->f_name,
                    'l_name'  => $req->l_name,
                    'add_one' => $req->add_one,
                    'add_two' => $req->add_two,
                    'dob'     => $req->dob,
                    'country' => $req->country,
                ]
            );
            return redirect('personal_form');
        }
        else{
            return redirect('login');
        }

    }

    function company_form_show(){
        if(session()->has('user')){
            $email = Session::get('user')->email;
            $msp = DB::table('membership_users')->where(['email'=>$email])->first();
            return view('manage_company_form', ['msp'=>$msp]);
        }
        else{
            return redirect('login');
        }
        
    }
    function update_company_form_show(){
        if(session()->has('user')){
            $email = Session::get('user')->email;
            $msp = DB::table('membership_users')->where(['email'=>$email])->first();
            return view('update_company_form', ['msp'=>$msp]);
        }
        else{
            return redirect('login');
        }
    }
    function update_company_form(Request $req){
        if(session()->has('user')){
            $email = Session::get('user')->email;
            $msp = DB::table('membership_users')->where(['email'=>$email])->first();
            DB::table('membership_users')->where('id', $msp->id)->update(
                [
                    'com_name'  => $req->com_name,
                    'com_phone'  => $req->com_phone,
                    'com_add' => $req->com_add,
                    'com_fax' => $req->com_fax,
                    'state'     => $req->state,
                    'company_country' => $req->company_country,
                    'web_url' => $req->web_url,

                ]
            );
            return redirect('company_form');
        }
        else{
            return redirect('login');
        }

    }
    function cis_form_show(){
        if(session()->has('user')){
            $email = Session::get('user')->email;
            $msps = DB::table('membership_users')->where(['email'=>$email])->first();
            $user = $msps->user_id;
            $msp = DB::table('cis_data')->where(['user_id'=>$user])->first();
            if($msp !=  null){
                return view('manage_cis_form', ['msp'=>$msp]);
            }
            else{
                return view('add_cis_form');
            }
        }
        else{
            return redirect('login');
        }
        
    }
    function add_cis_form(Request $req){
        if(session()->has('user')){
            $id = Session::get('user')->id;
            $email = Session::get('user')->email;
            $data = [
                [
                    'user_id' => $id,
                    'username'  => $req->username,
                    'f_name'  => $req->f_name,
                    'l_name' => $req->l_name,
                    'address' => $req->address,
                    'mobile'     => $req->mobile,
                    'h_tell_no' => $req->h_tell_no,
                    'fax_no' => $req->fax_no,
                    'email' => $req->email,
                    'lang_spoke' => $req->lang_spoke,
                    'dob' => $req->dob,
                    'birth_place' => $req->birth_place,
                    'social_security_no' => $req->social_security_no,
                    'citizenship' => $req->citizenship,
                    'issuing_authority' => $req->issuing_authority,
                    'date_issue' => $req->date_issue,
                    'date_expiry' => $req->date_expiry,
                    'country' => $req->country,
                    'buss_activities' => $req->buss_activities,
                    'buss_name' => $req->buss_name,
                    'place_activities' => $req->place_activities,
                    'bank_name' => $req->bank_name,
                    'bank_branch' => $req->bank_branch,
                    'bank_add' => $req->bank_add,
                    'acc_name' => $req->acc_name,
                    'acc_no' => $req->acc_no,
                    'acc_siganorty' => $req->acc_siganorty,
                    'swift_code' => $req->swift_code,
                    'IBAN_no' => $req->IBAN_no,
                    'bank_officer_name' => $req->bank_officer_name,
                    'bank_tell_no' => $req->bank_tell_no,
                    'sing_speak_eng' => $req->sing_speak_eng,
                    'translator_name' => $req->translator_name,
                    'translator_tell' => $req->translator_tell,
                    'translator_email' => $req->translator_email,
                    'full_name' => $req->full_name,
                    'cpmpany' => $req->cpmpany,
                    'com_address' => $req->com_address,
                    'com_tell' => $req->com_tell,
                    'com_fax' => $req->com_fax,
                    'com_email' => $req->com_email,
                    'b_name' => $req->b_name,
                    'br_name' => $req->br_name,
                    'b_add' => $req->b_add,
                    'b_acc_name' => $req->b_acc_name,
                    'b_acc_no' => $req->b_acc_no,
                    'b_swift_code' => $req->b_swift_code,
                    'iban_aba_no' => $req->iban_aba_no,
                    'acc_signatory1' => $req->acc_signatory1,
                    'acc_signatory2' => $req->acc_signatory2,
                    'b_officer1' => $req->b_officer1,
                    'b_officer2' => $req->b_officer2,
                    'b_tell_no' => $req->b_tell_no,
                    'b_fax_no' => $req->b_fax_no,
                ],
            ];
            DB::table('cis_data')->insert($data);
            return redirect('cis_form');
        }
        else{
            return redirect('login');
        }
    }
    function update_cis_form_show(){
        if(session()->has('user')){
            $id = Session::get('user')->id;
            $msp = DB::table('cis_data')->where(['user_id'=>$id])->first();
            return view('update_cis_form', ['msp'=>$msp]);
        }
        else{
            return redirect('login');
        }
    }
    function update_cis_form(Request $req){
        if(session()->has('user')){
            $id = Session::get('user')->id;
            $msp = DB::table('cis_data')->where(['user_id'=>$id])->first();
            DB::table('cis_data')->where('id', $msp->id)->update(
                [
                    'username'  => $req->username,
                    'f_name'  => $req->f_name,
                    'l_name' => $req->l_name,
                    'address' => $req->address,
                    'mobile'     => $req->mobile,
                    'h_tell_no' => $req->h_tell_no,
                    'fax_no' => $req->fax_no,
                    'email' => $req->email,
                    'lang_spoke' => $req->lang_spoke,
                    'dob' => $req->dob,
                    'birth_place' => $req->birth_place,
                    'social_security_no' => $req->social_security_no,
                    'citizenship' => $req->citizenship,
                    'issuing_authority' => $req->issuing_authority,
                    'date_issue' => $req->date_issue,
                    'date_expiry' => $req->date_expiry,
                    'country' => $req->country,
                    'buss_activities' => $req->buss_activities,
                    'buss_name' => $req->buss_name,
                    'place_activities' => $req->place_activities,
                    'bank_name' => $req->bank_name,
                    'bank_branch' => $req->bank_branch,
                    'bank_add' => $req->bank_add,
                    'acc_name' => $req->acc_name,
                    'acc_no' => $req->acc_no,
                    'acc_siganorty' => $req->acc_siganorty,
                    'swift_code' => $req->swift_code,
                    'IBAN_no' => $req->IBAN_no,
                    'bank_officer_name' => $req->bank_officer_name,
                    'bank_tell_no' => $req->bank_tell_no,
                    'sing_speak_eng' => $req->sing_speak_eng,
                    'translator_name' => $req->translator_name,
                    'translator_tell' => $req->translator_tell,
                    'translator_email' => $req->translator_email,
                    'full_name' => $req->full_name,
                    'cpmpany' => $req->cpmpany,
                    'com_address' => $req->com_address,
                    'com_tell' => $req->com_tell,
                    'com_fax' => $req->com_fax,
                    'com_email' => $req->com_email,
                    'b_name' => $req->b_name,
                    'br_name' => $req->br_name,
                    'b_add' => $req->b_add,
                    'b_acc_name' => $req->b_acc_name,
                    'b_acc_no' => $req->b_acc_no,
                    'b_swift_code' => $req->b_swift_code,
                    'iban_aba_no' => $req->iban_aba_no,
                    'acc_signatory1' => $req->acc_signatory1,
                    'acc_signatory2' => $req->acc_signatory2,
                    'b_officer1' => $req->b_officer1,
                    'b_officer2' => $req->b_officer2,
                    'b_tell_no' => $req->b_tell_no,
                    'b_fax_no' => $req->b_fax_no,
                ]
            );
            return redirect('cis_form');
        }
        else{
            return redirect('login');
        }

    }
    function pqf_form_show(){
        if(session()->has('user')){
            $email = Session::get('user')->email;
            $msps = DB::table('membership_users')->where(['email'=>$email])->first();
            $user = $msps->user_id;
            $msp = DB::table('pqf_data')->where(['user_id'=>$user])->first();
            if($msp !=  null){
                return view('manage_pqf_form', ['msp'=>$msp]);
            }
            else{
                return view('add_pqf_form');
            }
        }
        else{
            return redirect('login');
        }
        
    }

    function add_pqf_form(Request $req){
        if(session()->has('user')){
            $id = Session::get('user')->id;
            $email = Session::get('user')->email;
            $data = [
                [
                    'user_id' => $id,
                    'name_major'  => $req->name_major,
                    'com_name'  => $req->com_name,
                    'web_url' => $req->web_url,
                    'buss_disc' => $req->buss_disc,
                    'buss_year'     => $req->buss_year,
                    'buss_emply' => $req->buss_emply,
                    'broker' => $req->broker,
                    'length_Investment' => $req->length_Investment,
                    'assets_purch' => $req->assets_purch,
                    'licenses_permits' => $req->licenses_permits,
                    'manag_exp' => $req->manag_exp,
                    'loan_req' => $req->loan_req,
                    'money_need' => $req->money_need,
                    'indicate_amount' => $req->indicate_amount,
                    'ROI' => $req->ROI,
                    'searching_funding' => $req->searching_funding,
                    'com_Investors' => $req->com_Investors,
                    'financing_request' => $req->financing_request,
                    'collateral' => $req->collateral,
                    'worth_company' => $req->worth_company,
                    'project_venture' => $req->project_venture,
                ],
            ];
            DB::table('pqf_data')->insert($data);
            return redirect('pqf_form');
        }
        else{
            return redirect('login');
        }
    }
    function update_pqf_form_show(){
        if(session()->has('user')){
            $id = Session::get('user')->id;
            $msp = DB::table('pqf_data')->where(['user_id'=>$id])->first();
            return view('update_pqf_form', ['msp'=>$msp]);
        }
        else{
            return redirect('login');
        }
    }
    function update_pqf_form(Request $req){
        if(session()->has('user')){
            $id = Session::get('user')->id;
            $msp = DB::table('pqf_data')->where(['user_id'=>$id])->first();
            DB::table('pqf_data')->where('id', $msp->id)->update(
                [
                    'name_major'  => $req->name_major,
                    'com_name'  => $req->com_name,
                    'web_url' => $req->web_url,
                    'buss_disc' => $req->buss_disc,
                    'buss_year'     => $req->buss_year,
                    'buss_emply' => $req->buss_emply,
                    'broker' => $req->broker,
                    'length_Investment' => $req->length_Investment,
                    'assets_purch' => $req->assets_purch,
                    'licenses_permits' => $req->licenses_permits,
                    'manag_exp' => $req->manag_exp,
                    'loan_req' => $req->loan_req,
                    'money_need' => $req->money_need,
                    'indicate_amount' => $req->indicate_amount,
                    'ROI' => $req->ROI,
                    'searching_funding' => $req->searching_funding,
                    'com_Investors' => $req->com_Investors,
                    'financing_request' => $req->financing_request,
                    'collateral' => $req->collateral,
                    'worth_company' => $req->worth_company,
                    'project_venture' => $req->project_venture,
                    
                ]
            );
            return redirect('pqf_form');
        }
        else{
            return redirect('login');
        }

    }
    function ilrf_form_show(){
        if(session()->has('user')){
            $email = Session::get('user')->email;
            $msps = DB::table('membership_users')->where(['email'=>$email])->first();
            $user = $msps->user_id;
            $msp = DB::table('ilrf_data')->where(['user_id'=>$user])->first();
            if($msp !=  null){
                return view('manage_ilrf_form', ['msp'=>$msp]);
            }
            else{
                return view('add_ilrf_form');
            }
        }
        else{
            return redirect('login');
        }
        
    }

    function add_ilrf_form(Request $req){
        if(session()->has('user')){
            $id = Session::get('user')->id;
            $data = [
                [
                    'user_id' => $id,
                    'primary_off'  => $req->primary_off,
                    'date_pre'  => $req->date_pre,
                    'prepared_by' => $req->prepared_by,
                    'loan_request' => $req->loan_request,
                    'bussi_from'     => $req->bussi_from,
                    'organ_date' => $req->organ_date,
                    'type' => $req->type,
                    'manag' => $req->manag,
                    'ownership' => $req->ownership,
                    'guarantors' => $req->guarantors,
                    'reque' => $req->reque,
                    'purpose' => $req->purpose,
                    'terms_type' => $req->terms_type,
                    'terms_amount' => $req->terms_amount,
                    'terms_rate' => $req->terms_rate,
                    'terms_term' => $req->terms_term,
                    'terms_repay' => $req->terms_repay,
                    'terms_type2' => $req->terms_type2,
                    'terms_amount2' => $req->terms_amount2,
                    'terms_rate2' => $req->terms_rate2,
                    'terms_term2' => $req->terms_term2,
                    'terms_repay2' => $req->terms_repay2,
                    'terms_type3' => $req->terms_type3,
                    'terms_amount3' => $req->terms_amount3,
                    'terms_rate3' => $req->terms_rate3,
                    'terms_term3' => $req->terms_term3,
                    'terms_repay3' => $req->terms_repay3,
                    'source_primary' => $req->source_primary,
                    'source_secondary' => $req->source_secondary,
                    'source_teriary' => $req->source_teriary,
                    'source_desi' => $req->source_desi,
                    'colla_app' => $req->colla_app,
                    'colla_debt' => $req->colla_debt,
                    'colla_avail' => $req->colla_avail,
                    'coll_ltv' => $req->coll_ltv,
                    'colla_app2' => $req->colla_app2,
                    'colla_debt2' => $req->colla_debt2,
                    'colla_avail2' => $req->colla_avail2,
                    'coll_ltv2' => $req->coll_ltv2,
                    'colla_app3' => $req->colla_app3,
                    'colla_debt3' => $req->colla_debt3,
                    'colla_avail3' => $req->colla_avail3,
                    'coll_ltv3' => $req->coll_ltv3,
                    'colla_app4' => $req->colla_app4,
                    'colla_debt4' => $req->colla_debt4,
                    'colla_avail4' => $req->colla_avail4,
                    'coll_ltv4' => $req->coll_ltv4,
                    'colla_app5' => $req->colla_app5,
                    'colla_debt5' => $req->colla_debt5,
                    'colla_avail5' => $req->colla_avail5,
                    'coll_ltv5' => $req->coll_ltv5,
                    'colla_app6' => $req->colla_app6,
                    'colla_debt6' => $req->colla_debt6,
                    'colla_avail6' => $req->colla_avail6,
                    'coll_ltv6' => $req->coll_ltv6,
                    'flood_haz' => $req->flood_haz,
                    'envi_concer' => $req->envi_concer,
                    'bow_type' => $req->bow_type,
                    'bow_open' => $req->bow_open,
                    'bow_high' => $req->bow_high,
                    'bow_bal' => $req->bow_bal,
                    'bow_ren' => $req->bow_ren,
                    'bow_rate' => $req->bow_rate,
                    'bow_terms' => $req->bow_terms,
                    'bow_sec' => $req->bow_sec,
                    'bow_ltv' => $req->bow_ltv,
                    'bow_type2' => $req->bow_type2,
                    'bow_open2' => $req->bow_open2,
                    'bow_high2' => $req->bow_high2,
                    'bow_bal2' => $req->bow_bal2,
                    'bow_ren2' => $req->bow_ren2,
                    'bow_rate2' => $req->bow_rate2,
                    'bow_terms2' => $req->bow_terms2,
                    'bow_sec2' => $req->bow_sec2,
                    'bow_ltv2' => $req->bow_ltv2,
                    'bow_type3' => $req->bow_type3,
                    'bow_open3' => $req->bow_open3,
                    'bow_high3' => $req->bow_high3,
                    'bow_bal3' => $req->bow_bal3,
                    'bow_ren3' => $req->bow_ren3,
                    'bow_rate3' => $req->bow_rate3,
                    'bow_terms3' => $req->bow_terms3,
                    'bow_sec3' => $req->bow_sec3,
                    'bow_ltv3' => $req->bow_ltv3,
                    'days_zero' => $req->days_zero,
                    'other_debts' => $req->other_debts,
                    'low_bal' => $req->low_bal,
                    'othter_debts2' => $req->othter_debts2,
                    'dep_name' => $req->dep_name,
                    'dep_acct' => $req->dep_acct,
                    'dep_type' => $req->dep_type,
                    'dep_opened' => $req->dep_opened,
                    'dep_ren' => $req->dep_ren,
                    'dep_bal' => $req->dep_bal,
                    'dep_avg' => $req->dep_avg,
                    'dep_rate' => $req->dep_rate,
                    'dep_name2' => $req->dep_name2,
                    'dep_acct2' => $req->dep_acct2,
                    'dep_type2' => $req->dep_type2,
                    'dep_opened2' => $req->dep_opened2,
                    'dep_ren2' => $req->dep_ren2,
                    'dep_bal2' => $req->dep_bal2,
                    'dep_avg2' => $req->dep_avg2,
                    'dep_rate2' => $req->dep_rate2,
                    'dep_name3' => $req->dep_name3,
                    'dep_acct3' => $req->dep_acct3,
                    'dep_type3' => $req->dep_type3,
                    'dep_opened3' => $req->dep_opened3,
                    'dep_ren3' => $req->dep_ren3,
                    'dep_bal3' => $req->dep_bal3,
                    'dep_avg3' => $req->dep_avg3,
                    'dep_rate3' => $req->dep_rate3,
                    'ave_cost_fund' => $req->ave_cost_fund,
                    'trust_relati' => $req->trust_relati,
                    'back_info' => $req->back_info,
                    'buss_name' => $req->buss_name,
                    'com_address' => $req->com_address,
                    'buss_tel' => $req->buss_tel,
                    'tax_id' => $req->tax_id,
                    'indi_name' => $req->indi_name,
                    'bussi_address' => $req->bussi_address,
                    'bussi_tel' => $req->bussi_tel,
                    'social_security' => $req->social_security,
                    'date_of_birth' => $req->date_of_birth,
                    'proprietorship' => $req->proprietorship,
                    'partnership' => $req->partnership,
                    'sub_chapter' => $req->sub_chapter,
                    'non_profit' => $req->non_profit,
                    'individual' => $req->individual,
                    'llc' => $req->llc,
                    'own_name' => $req->own_name,
                    'own_title' => $req->own_title,
                    'own_of_year' => $req->own_of_year,
                    'own_name2' => $req->own_name2,
                    'own_title2' => $req->own_title2,
                    'own_of_year2' => $req->own_of_year2,
                    'own_name3' => $req->own_name3,
                    'own_title3' => $req->own_title3,
                    'own_of_year3' => $req->own_of_year3,
                    'nature_bussi' => $req->nature_bussi,
                    'year_estb' => $req->year_estb,
                    'number_emply' => $req->number_emply,
                    'Own' => $req->Own,
                    'accountant' => $req->accountant,
                    'acc_telephone' => $req->acc_telephone,
                    'insur_agent' => $req->insur_agent,
                    'agent_no' => $req->agent_no,
                    'attorney' => $req->attorney,
                    'attorney_no' => $req->attorney_no,
                    'bank_of_account' => $req->bank_of_account,
                    'accnt_no' => $req->accnt_no,
                    'n_creditor' => $req->n_creditor,
                    'p_loan' => $req->p_loan,
                    'r_ammonut' => $req->r_ammonut,
                    'p_owing' => $req->p_owing,
                    'n_creditor2' => $req->n_creditor2,
                    'p_loan2' => $req->p_loan2,
                    'r_ammonut2' => $req->r_ammonut2,
                    'p_owing2' => $req->p_owing2,
                    'n_creditor3' => $req->n_creditor3,
                    'p_loan3' => $req->p_loan3,
                    'r_ammonut3' => $req->r_ammonut3,
                    'p_owing3' => $req->p_owing3,
                    'amount_loan_req' => $req->amount_loan_req,
                    'line_credit' => $req->line_credit,
                    'req_term_laon' => $req->req_term_laon,
                    'bussi_home' => $req->bussi_home,
                    'working_cap' => $req->working_cap,
                    'state_type_loan' => $req->state_type_loan,
                    'finan_purch' => $req->finan_purch,
                    'finan_text' => $req->finan_text,
                    'fin_pur_estate' => $req->fin_pur_estate,
                    'fin_pur_text' => $req->fin_pur_text,
                    'fin_pur_bussi' => $req->fin_pur_bussi,
                    'fin_pur_bussi_text' => $req->fin_pur_bussi_text,
                    'refin_exi_loan' => $req->refin_exi_loan,
                    'refin_exi_loan_text' => $req->refin_exi_loan_text,
                    'all_asset' => $req->all_asset,
                    'spe_equipment' => $req->spe_equipment,
                    'acres' => $req->acres,
                    'cash_dep' => $req->cash_dep,
                    'branch' => $req->branch,
                    'account' => $req->account,
                    'p_assets' => $req->p_assets,
                    'guar_name' => $req->guar_name,
                    'guar_security' => $req->guar_security,
                    'guar_add' => $req->guar_add,
                    'guar_name2' => $req->guar_name2,
                    'guar_security2' => $req->guar_security2,
                    'guar_add2' => $req->guar_add2,
                    'guar_name3' => $req->guar_name3,
                    'guar_security3' => $req->guar_security3,
                    'guar_add3' => $req->guar_add3,
                    'bussi_back' => $req->bussi_back,
                    'per_bussi_exp' => $req->per_bussi_exp,
                    'misc_yes' => $req->misc_yes,
                    'w_contingent' => $req->w_contingent,
                    'buss_pri_yes' => $req->buss_pri_yes,
                    'buss_defe_yes' => $req->buss_defe_yes,
                    'buss_ass_yes' => $req->buss_ass_yes,
                    'what' => $req->what,
                    'by_whom' => $req->by_whom,
                    'amnt' => $req->amnt,
                    'what2' => $req->what2,
                    'by_whom2' => $req->by_whom2,
                    'amnt2' => $req->amnt2,
                    'what3' => $req->what3,
                    'by_whom3' => $req->by_whom3,
                    'amnt3' => $req->amnt3,
                    'does_buss_yes' => $req->does_buss_yes,
                    'profit_yes' => $req->profit_yes,
                    'ifso_yes' => $req->ifso_yes,
                    'buss_laon_app' => $req->buss_laon_app,
                    'accont_pre_busi' => $req->accont_pre_busi,
                    'buss_fed' => $req->buss_fed,
                    'in_financial' => $req->in_financial,
                    'most_recent' => $req->most_recent,
                    'per_finacial' => $req->per_finacial,
                    'org_papers' => $req->org_papers,
                    'other2' => $req->other2,
                    'other_text' => $req->other_text,
                ],
            ];
            // dd($data);
            DB::table('ilrf_data')->insert($data);
            return redirect('ilrf_form');
        }
        else{
            return redirect('login');
        }
    }
    function update_ilrf_form_show(){
        if(session()->has('user')){
            $id = Session::get('user')->id;
            $msp = DB::table('ilrf_data')->where(['user_id'=>$id])->first();
            return view('update_ilrf_form', ['msp'=>$msp]);
        }
        else{
            return redirect('login');
        }
    }
    function update_ilrf_form(Request $req){
        if(session()->has('user')){
            $id = Session::get('user')->id;
            $msp = DB::table('ilrf_data')->where(['user_id'=>$id])->first();
            DB::table('ilrf_data')->where('id', $msp->id)->update(
                [
                    'primary_off'  => $req->primary_off,
                    'date_pre'  => $req->date_pre,
                    'prepared_by' => $req->prepared_by,
                    'loan_request' => $req->loan_request,
                    'bussi_from'     => $req->bussi_from,
                    'organ_date' => $req->organ_date,
                    'type' => $req->type,
                    'manag' => $req->manag,
                    'ownership' => $req->ownership,
                    'guarantors' => $req->guarantors,
                    'reque' => $req->reque,
                    'purpose' => $req->purpose,
                    'terms_type' => $req->terms_type,
                    'terms_amount' => $req->terms_amount,
                    'terms_rate' => $req->terms_rate,
                    'terms_term' => $req->terms_term,
                    'terms_repay' => $req->terms_repay,
                    'terms_type2' => $req->terms_type2,
                    'terms_amount2' => $req->terms_amount2,
                    'terms_rate2' => $req->terms_rate2,
                    'terms_term2' => $req->terms_term2,
                    'terms_repay2' => $req->terms_repay2,
                    'terms_type3' => $req->terms_type3,
                    'terms_amount3' => $req->terms_amount3,
                    'terms_rate3' => $req->terms_rate3,
                    'terms_term3' => $req->terms_term3,
                    'terms_repay3' => $req->terms_repay3,
                    'source_primary' => $req->source_primary,
                    'source_secondary' => $req->source_secondary,
                    'source_teriary' => $req->source_teriary,
                    'source_desi' => $req->source_desi,
                    'colla_app' => $req->colla_app,
                    'colla_debt' => $req->colla_debt,
                    'colla_avail' => $req->colla_avail,
                    'coll_ltv' => $req->coll_ltv,
                    'colla_app2' => $req->colla_app2,
                    'colla_debt2' => $req->colla_debt2,
                    'colla_avail2' => $req->colla_avail2,
                    'coll_ltv2' => $req->coll_ltv2,
                    'colla_app3' => $req->colla_app3,
                    'colla_debt3' => $req->colla_debt3,
                    'colla_avail3' => $req->colla_avail3,
                    'coll_ltv3' => $req->coll_ltv3,
                    'colla_app4' => $req->colla_app4,
                    'colla_debt4' => $req->colla_debt4,
                    'colla_avail4' => $req->colla_avail4,
                    'coll_ltv4' => $req->coll_ltv4,
                    'colla_app5' => $req->colla_app5,
                    'colla_debt5' => $req->colla_debt5,
                    'colla_avail5' => $req->colla_avail5,
                    'coll_ltv5' => $req->coll_ltv5,
                    'colla_app6' => $req->colla_app6,
                    'colla_debt6' => $req->colla_debt6,
                    'colla_avail6' => $req->colla_avail6,
                    'coll_ltv6' => $req->coll_ltv6,
                    'flood_haz' => $req->flood_haz,
                    'envi_concer' => $req->envi_concer,
                    'bow_type' => $req->bow_type,
                    'bow_open' => $req->bow_open,
                    'bow_high' => $req->bow_high,
                    'bow_bal' => $req->bow_bal,
                    'bow_ren' => $req->bow_ren,
                    'bow_rate' => $req->bow_rate,
                    'bow_terms' => $req->bow_terms,
                    'bow_sec' => $req->bow_sec,
                    'bow_ltv' => $req->bow_ltv,
                    'bow_type2' => $req->bow_type2,
                    'bow_open2' => $req->bow_open2,
                    'bow_high2' => $req->bow_high2,
                    'bow_bal2' => $req->bow_bal2,
                    'bow_ren2' => $req->bow_ren2,
                    'bow_rate2' => $req->bow_rate2,
                    'bow_terms2' => $req->bow_terms2,
                    'bow_sec2' => $req->bow_sec2,
                    'bow_ltv2' => $req->bow_ltv2,
                    'bow_type3' => $req->bow_type3,
                    'bow_open3' => $req->bow_open3,
                    'bow_high3' => $req->bow_high3,
                    'bow_bal3' => $req->bow_bal3,
                    'bow_ren3' => $req->bow_ren3,
                    'bow_rate3' => $req->bow_rate3,
                    'bow_terms3' => $req->bow_terms3,
                    'bow_sec3' => $req->bow_sec3,
                    'bow_ltv3' => $req->bow_ltv3,
                    'days_zero' => $req->days_zero,
                    'other_debts' => $req->other_debts,
                    'low_bal' => $req->low_bal,
                    'othter_debts2' => $req->othter_debts2,
                    'dep_name' => $req->dep_name,
                    'dep_acct' => $req->dep_acct,
                    'dep_type' => $req->dep_type,
                    'dep_opened' => $req->dep_opened,
                    'dep_ren' => $req->dep_ren,
                    'dep_bal' => $req->dep_bal,
                    'dep_avg' => $req->dep_avg,
                    'dep_rate' => $req->dep_rate,
                    'dep_name2' => $req->dep_name2,
                    'dep_acct2' => $req->dep_acct2,
                    'dep_type2' => $req->dep_type2,
                    'dep_opened2' => $req->dep_opened2,
                    'dep_ren2' => $req->dep_ren2,
                    'dep_bal2' => $req->dep_bal2,
                    'dep_avg2' => $req->dep_avg2,
                    'dep_rate2' => $req->dep_rate2,
                    'dep_name3' => $req->dep_name3,
                    'dep_acct3' => $req->dep_acct3,
                    'dep_type3' => $req->dep_type3,
                    'dep_opened3' => $req->dep_opened3,
                    'dep_ren3' => $req->dep_ren3,
                    'dep_bal3' => $req->dep_bal3,
                    'dep_avg3' => $req->dep_avg3,
                    'dep_rate3' => $req->dep_rate3,
                    'ave_cost_fund' => $req->ave_cost_fund,
                    'trust_relati' => $req->trust_relati,
                    'back_info' => $req->back_info,
                    'buss_name' => $req->buss_name,
                    'com_address' => $req->com_address,
                    'buss_tel' => $req->buss_tel,
                    'tax_id' => $req->tax_id,
                    'indi_name' => $req->indi_name,
                    'bussi_address' => $req->bussi_address,
                    'bussi_tel' => $req->bussi_tel,
                    'social_security' => $req->social_security,
                    'date_of_birth' => $req->date_of_birth,
                    'proprietorship' => $req->proprietorship,
                    'partnership' => $req->partnership,
                    'sub_chapter' => $req->sub_chapter,
                    'non_profit' => $req->non_profit,
                    'individual' => $req->individual,
                    'llc' => $req->llc,
                    'own_name' => $req->own_name,
                    'own_title' => $req->own_title,
                    'own_of_year' => $req->own_of_year,
                    'own_name2' => $req->own_name2,
                    'own_title2' => $req->own_title2,
                    'own_of_year2' => $req->own_of_year2,
                    'own_name3' => $req->own_name3,
                    'own_title3' => $req->own_title3,
                    'own_of_year3' => $req->own_of_year3,
                    'nature_bussi' => $req->nature_bussi,
                    'year_estb' => $req->year_estb,
                    'number_emply' => $req->number_emply,
                    'Own' => $req->Own,
                    'accountant' => $req->accountant,
                    'acc_telephone' => $req->acc_telephone,
                    'insur_agent' => $req->insur_agent,
                    'agent_no' => $req->agent_no,
                    'attorney' => $req->attorney,
                    'attorney_no' => $req->attorney_no,
                    'bank_of_account' => $req->bank_of_account,
                    'accnt_no' => $req->accnt_no,
                    'n_creditor' => $req->n_creditor,
                    'p_loan' => $req->p_loan,
                    'r_ammonut' => $req->r_ammonut,
                    'p_owing' => $req->p_owing,
                    'n_creditor2' => $req->n_creditor2,
                    'p_loan2' => $req->p_loan2,
                    'r_ammonut2' => $req->r_ammonut2,
                    'p_owing2' => $req->p_owing2,
                    'n_creditor3' => $req->n_creditor3,
                    'p_loan3' => $req->p_loan3,
                    'r_ammonut3' => $req->r_ammonut3,
                    'p_owing3' => $req->p_owing3,
                    'amount_loan_req' => $req->amount_loan_req,
                    'line_credit' => $req->line_credit,
                    'req_term_laon' => $req->req_term_laon,
                    'bussi_home' => $req->bussi_home,
                    'working_cap' => $req->working_cap,
                    'state_type_loan' => $req->state_type_loan,
                    'finan_purch' => $req->finan_purch,
                    'finan_text' => $req->finan_text,
                    'fin_pur_estate' => $req->fin_pur_estate,
                    'fin_pur_text' => $req->fin_pur_text,
                    'fin_pur_bussi' => $req->fin_pur_bussi,
                    'fin_pur_bussi_text' => $req->fin_pur_bussi_text,
                    'refin_exi_loan' => $req->refin_exi_loan,
                    'refin_exi_loan_text' => $req->refin_exi_loan_text,
                    'all_asset' => $req->all_asset,
                    'spe_equipment' => $req->spe_equipment,
                    'acres' => $req->acres,
                    'cash_dep' => $req->cash_dep,
                    'branch' => $req->branch,
                    'account' => $req->account,
                    'p_assets' => $req->p_assets,
                    'guar_name' => $req->guar_name,
                    'guar_security' => $req->guar_security,
                    'guar_add' => $req->guar_add,
                    'guar_name2' => $req->guar_name2,
                    'guar_security2' => $req->guar_security2,
                    'guar_add2' => $req->guar_add2,
                    'guar_name3' => $req->guar_name3,
                    'guar_security3' => $req->guar_security3,
                    'guar_add3' => $req->guar_add3,
                    'bussi_back' => $req->bussi_back,
                    'per_bussi_exp' => $req->per_bussi_exp,
                    'misc_yes' => $req->misc_yes,
                    'w_contingent' => $req->w_contingent,
                    'buss_pri_yes' => $req->buss_pri_yes,
                    'buss_defe_yes' => $req->buss_defe_yes,
                    'buss_ass_yes' => $req->buss_ass_yes,
                    'what' => $req->what,
                    'by_whom' => $req->by_whom,
                    'amnt' => $req->amnt,
                    'what2' => $req->what2,
                    'by_whom2' => $req->by_whom2,
                    'amnt2' => $req->amnt2,
                    'what3' => $req->what3,
                    'by_whom3' => $req->by_whom3,
                    'amnt3' => $req->amnt3,
                    'does_buss_yes' => $req->does_buss_yes,
                    'profit_yes' => $req->profit_yes,
                    'ifso_yes' => $req->ifso_yes,
                    'buss_laon_app' => $req->buss_laon_app,
                    'accont_pre_busi' => $req->accont_pre_busi,
                    'buss_fed' => $req->buss_fed,
                    'in_financial' => $req->in_financial,
                    'most_recent' => $req->most_recent,
                    'per_finacial' => $req->per_finacial,
                    'org_papers' => $req->org_papers,
                    'other2' => $req->other2,
                    'other_text' => $req->other_text, 
                ]
            );
            return redirect('ilrf_form');
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
            $msp->user_id = Session::get('user')->id;
            $msp->premiun_retainer_type = $req->pr;
            if($req->file('pr_file')){
                $file= $req->file('pr_file');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('files/pr/'), $filename);
                $msp['premiun_retainer_doc']= $filename;
            }
            $msp->status= true;
            $msp->save(); 
            return redirect('premiun_retainer');
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
            $msp->user_id = Session::get('user')->id;
            $msp->inspection_type = $req->in;
            if($req->file('in_file')){
                $file= $req->file('in_file');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('files/in/'), $filename);
                $msp['inspection_doc']= $filename;
            }
            
            $msp->status= true;
            $msp->save();
            return redirect('inspection');
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
            $msp->user_id = Session::get('user')->id;
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
        return redirect('spv');
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
            $msp = new Closing;
            $msp->user_id = Session::get('user')->id;
            $msp->closing_type = $req->cl;
            if($req->file('cl_file')){
                $file= $req->file('cl_file');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('files/cl/'), $filename);
                $msp['closing_doc']= $filename;
            }
        $msp->status= true;
        $msp->save();
        return redirect('closing');
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
            $msp->user_id = Session::get('user')->id;
            $msp->collateral_type = $req->col;
            if($req->file('col_file')){
                $file= $req->file('col_file');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('files/col/'), $filename);
                $msp['collateral_doc']= $filename;
            }
        $msp->status= true;
        $msp->save();
        return redirect('collateral');
        }
        else{
            return redirect('login');
        }
        
    }
    function bank_details_show(){
        if(session()->has('user')){
            $email = Session::get('user')->email;
            $msps = DB::table('membership_users')->where(['email'=>$email])->first();
            $user = $msps->user_id;
            $msp = DB::table('cis_data')->where(['user_id'=>$user])->first();
            return view('manage_bank_details', ['msp'=>$msp]);
        }
        else{
            return redirect('login');
        }
        
    }
    function update_bank_show(){
        if(session()->has('user')){
            $id = Session::get('user')->id;
            $msp = DB::table('cis_data')->where(['user_id'=>$id])->first();
            return view('update_bank', ['msp'=>$msp]);
        }
        else{
            return redirect('login');
        }
    }
    function update_bank(Request $req){
        if(session()->has('user')){
            $id = Session::get('user')->id;
            $msp = DB::table('cis_data')->where(['user_id'=>$id])->first();
            DB::table('cis_data')->where('id', $msp->id)->update(
                [
                    'bank_name'  => $req->bank_name,
                    'bank_add'  => $req->bank_add,
                    'acc_no'  => $req->acc_no,
                    'swift_code'  => $req->swift_code,
                    
                ]
            );
            return redirect('bank_details');
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
