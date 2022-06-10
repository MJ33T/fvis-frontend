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
                            <h3>Bank Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Bank Name: </h3>
                                </div>
                                <div class="col-md-6">
                                    <label></label>
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <h3>Bank Address: </h3>
                                </div>
                                <div class="col-md-6">
                                    <label></label>
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <h3>Bank Account Number: </h3>
                                </div>
                                <div class="col-md-6">
                                    <label></label>
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <h3>Bank Swift Code: </h3>
                                </div>
                                <div class="col-md-6">
                                    <label></label>
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <h3>Transfer Amount: </h3>
                                </div>
                                <div class="col-md-6">
                                    <label></label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Bank Details</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
          <!-- Main row -->
    </section>
</div>

@endsection
