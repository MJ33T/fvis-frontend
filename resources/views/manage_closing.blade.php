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
                            <h3>Closing</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="add_closing" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <select class="form-control" name="cl">
                                        <option selected>Select Closing</option>
                                        <option>Loan Agreement</option>
                                        <option>Agency Commission Agreement</option>
                                        <option>FVIS Terms of Services Agreement</option>
                                        <option>Promisery Note</option>
                                        <option>Central Bank Approval Letter</option>
                                        <option>Membership Upgrade</option>
                                    </select>
                                    <br>
                                    <input type="file" class="form-control" name="cl_file">
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
