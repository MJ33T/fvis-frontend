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
                            <form action="/update_bankinfo" method="POST">
                            <h3>Bank Information <button style="float: right" type="submit" class="btn btn-primary">Update Bank Information</button></h3>
                            
                        </div>
                        <div class="card-body">
                            
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Bank Name</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="bank_name" value="{{$msp->bank_name}}" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Bank Address</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="bank_add" value="{{$msp->bank_add}}" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Account Number</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="acc_no" value="{{$msp->acc_no}}" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Swift Code</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="swift_code" value="{{$msp->swift_code}}" >
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
