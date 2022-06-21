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
                            <h3>Bank Details <a style="float: right" href="update_bankinfo" class="btn btn-primary">Update Bank Information</a></h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Bank Name</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="bank_name" value="{{$msp->bank_name}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Bank Address</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="bank_add" value="{{$msp->bank_add}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Account Number</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="acc_no" value="{{$msp->acc_no}}" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Swift Code</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="swift_code" value="{{$msp->swift_code}}" disabled>
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
