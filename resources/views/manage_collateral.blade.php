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
                            <h3>Collateral</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="add_collateral" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <select class="form-control" name="col">
                                        <option selected>Select Collateral</option>
                                        <option>Insurance</option>
                                        <option>Financial instrument</option>
                                        <option>Property Documents</option>
                                        <option>Others</option>

                                    </select>
                                    <br>
                                    <input type="file" class="form-control" name="col_file">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
          <!-- Main row -->
    </section>
</div>

@endsection
