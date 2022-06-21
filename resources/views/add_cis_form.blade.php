@extends('master')
@section('master')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <br>
    <section class="content">
        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <form action="/add_cisinfo" method="POST">
                            <h3>CIS Information <button style="float: right" type="submit" class="btn btn-primary">Add CIS Information</button></h3>
                        </div>
                        <div class="card-body">
                            
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">User Name</label>
                                        <input type="text" class="form-control" name="username" value="" >
                                        <br>
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" name="f_name" value="" >
                                        <br>
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" name="l_name" value="" >
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="address" value="" >
                                        <br>
                                        <label for="">Mobile</label>
                                        <input type="text" class="form-control" name="mobile" value="" >
                                        <br>
                                        <label for="">Home Number</label>
                                        <input type="text" class="form-control" name="h_tell_no" value="" >
                                        <br>
                                        <label for="">Fax No</label>
                                        <input type="text" class="form-control" name="fax_no" value="" > 
                                        <br>
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email" value="" >
                                        <br>
                                        <label for="">Languages Spoken</label>
                                        <input type="text" class="form-control" name="lang_spoke" value="" >
                                        <br>
                                        <label for="">Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" value="" >
                                        <br>
                                        <label for="">Place of Birth - City/Country</label>
                                        <input type="text" class="form-control" name="birth_place" value="" >
                                        <br>
                                        <label for="">I.D./Social Security - Number</label>
                                        <input type="text" class="form-control" name="social_security_no" value="" >
                                        <br>
                                        <label for="">Country of Citizenship</label>
                                        <input type="text" class="form-control" name="citizenship" value="" >
                                        <br>
                                        <label for="">Passport Number</label>
                                        <input type="text" class="form-control" name="pass_no" value="" >
                                        <br>
                                        <label for="">Issuing Authority</label>
                                        <input type="text" class="form-control" name="issuing_authority" value="" >
                                        <br>
                                        <label for="">Date of Issue</label>
                                        <input type="date" class="form-control" name="date_issue" value="" >
                                        <br>
                                        <label for="">Date of Expiry</label>
                                        <input type="date" class="form-control" name="date_expiry" value="" >
                                        <br>
                                        <label for="">Country</label>
                                        <input type="text" class="form-control" name="country" value="" >
                                        <br>
                                        <label for="">Business Activities - Describe</label>
                                        <input type="text" class="form-control" name="buss_activities" value="" >
                                        <br>
                                        <label for="">Business Name</label>
                                        <input type="text" class="form-control" name="buss_name" value="" >
                                        <br>
                                        <label for="">Place of Activities</label>
                                        <input type="text" class="form-control" name="place_activities" value="" >
                                        <br>
                                        <h5 style="color: #00a2ff">Bank Coordinate (2)</h5>
                                        <br>
                                        <label for="">Bank Name</label>
                                        <input type="text" class="form-control" name="bank_name" value="" >
                                        <br>
                                        <label for="">Bank Branch</label>
                                        <input type="text" class="form-control" name="bank_branch" value="" >
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="bank_add" value="">
                                        <br>
                                        <label for="">Account Name</label>
                                        <input type="text" class="form-control" name="acc_name" value="">
                                        <br>
                                        <label for="">Account Number</label>
                                        <input type="text" class="form-control" name="acc_no" value="">
                                        <br>
                                        <label for="">Account Signatory</label>
                                        <input type="text" class="form-control" name="acc_siganorty" value="">
                                        <br>
                                        <label for="">SWIFT Code</label>
                                        <input type="text" class="form-control" name="swift_code" value="">
                                        <br>
                                        <label for="">IBAN/Sort Code/ABA No</label>
                                        <input type="text" class="form-control" name="IBAN_no" value="">
                                        <br>
                                        <label for="">Bank Officer Name</label>
                                        <input type="text" class="form-control" name="bank_officer_name" value="">
                                        <br>
                                        <label for="">Telephone Number</label>
                                        <input type="text" class="form-control" name="bank_tell_no" value="">
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 style="color: #00a2ff">Languages/Translator</h5>
                                        <label for="">Does the Signatory speak English?</label>
                                        <input type="text" class="form-control" name="sing_speak_eng" value="">
                                        <br>
                                        <label for="">If No - Name of Translator</label>
                                        <input type="text" class="form-control" name="translator_name" value="">
                                        <br>
                                        <label for="">Translator Tel No</label>
                                        <input type="text" class="form-control" name="translator_tell" value="">
                                        <br>
                                        <label for="">Translator e-mail address</label>
                                        <input type="text" class="form-control" name="translator_email" value="">
                                        <br>
                                        <h5 style="color: #00a2ff">Legal Advisor – (if required)</h5>
                                        <br>
                                        <label for="">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" value="">
                                        <br>
                                        <label for="">Company</label>
                                        <input type="text" class="form-control" name="cpmpany" value="">
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="com_address" value="">
                                        <br>
                                        <label for="">Telephone Number</label>
                                        <input type="text" class="form-control" name="com_tell" value="">
                                        <br>
                                        <label for="">Fax Number</label>
                                        <input type="text" class="form-control" name="com_fax" value="">
                                        <br>
                                        <label for="">Email Address</label>
                                        <input type="text" class="form-control" name="com_email" value="">
                                        <br>
                                        <h5 style="color: #00a2ff">Bank Information – Company</h5>
                                        <br>
                                        <label for="">Bank Name</label>
                                        <input type="text" class="form-control" name="b_name" value="">
                                        <br>
                                        <label for="">Branch Name</label>
                                        <input type="text" class="form-control" name="br_name" value="">
                                        <br>
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="b_add" value="" >
                                        <br>
                                        <label for="">Account Name</label>
                                        <input type="text" class="form-control" name="b_acc_name" value="">
                                        <br>
                                        <label for="">Account Number</label>
                                        <input type="text" class="form-control" name="b_acc_no" value="">
                                        <br>
                                        <label for="">SWIFT Code</label>
                                        <input type="text" class="form-control" name="b_swift_code" value="">
                                        <br>
                                        <h5 style="color: #00a2ff">Client Information Sheet</h5>
                                        <br>
                                        <label for="">IBAN/Sort Code/ABA No</label>
                                        <input type="text" class="form-control" name="iban_aba_no" value="">
                                        <br>
                                        <label for="">Account Signatory (1)</label>
                                        <input type="text" class="form-control" name="acc_signatory1" value="">
                                        <br>
                                        <label for="">Account Signatory (2)</label>
                                        <input type="text" class="form-control" name="acc_signatory2" value="">
                                        <br>
                                        <label for="">Bank Officer Name (1)</label>
                                        <input type="text" class="form-control" name="b_officer1" value="" >
                                        <br>
                                        <label for="">Bank Officer Name (2)</label>
                                        <input type="text" class="form-control" name="b_officer2" value="" >
                                        <br>
                                        <label for="">Telephone Number</label>
                                        <input type="text" class="form-control" name="b_tell_no" value="">
                                        <br>
                                        <label for="">Fax Number</label>
                                        <input type="text" class="form-control" name="b_fax_no" value="" >
                                    </div>
                                </div>
                            
                        </div>
                        <div class="card-footer">
                            
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
          <!-- Main row -->
    </section>
</div>

@endsection
