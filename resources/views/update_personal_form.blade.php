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
                            <form action="/update_perinfo" method="POST">
                            <h3>Personal Information <button style="float: right" type="submit" class="btn btn-primary">Update Personal Information</button></h3>
                        </div>
                        <div class="card-body">
                            
                                @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">User First Name</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="f_name" value="{{$msp->f_name}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">User Last Name</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="l_name" value="{{$msp->l_name}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Address One</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="add_one" value="{{$msp->add_one}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Address Two</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="add_two" value="{{$msp->add_two}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Country</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="country" value="{{$msp->country}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Date Of Birth</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" name="dob" value="{{$msp->dob}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Your Plan</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="plan_name" value="{{$msp->plan_name}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Membership Plan Fee</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="plan_fee" value="{{$msp->plan_fee}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Annual Membership Fee</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="country" value="{{$msp->annual_membership_fee}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Investment</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="country" value="{{$msp->investment}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Investment Duration</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="country" value="{{$msp->investment_duration}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Monthly fixed Income</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="country" value="{{$msp->monthly_fix_income}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Payment Request Form</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="country" value="{{$msp->payment_status}}" disabled>
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
