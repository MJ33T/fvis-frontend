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
                            <h3>Company Information <a style="float: right" href="update_cominfo" class="btn btn-primary">Update Personal Information</a></h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Company Name</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="com_name" value="{{$msp->com_name}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Company Phone</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="com_phone" value="{{$msp->com_phone}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Company Address</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="com_add" value="{{$msp->com_add}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Company Fax</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="com_fax" value="{{$msp->com_fax}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">State</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="state" value="{{$msp->state}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Country</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="company_country" value="{{$msp->company_country}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Website</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="web_url" value="{{$msp->web_url}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
          <!-- Main row -->
    </section>
</div>

@endsection
