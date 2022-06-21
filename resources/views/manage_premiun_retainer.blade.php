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
                            <h3>Premiun Retainer</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="add_premiun_retainer" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <select class="form-control" name="pr">
                                        <option selected>Select Premiun Retainer</option>
                                        <option>Attache Payment Reciept</option>
                                        <option>Signed Contract</option>
                                    </select>
                                    <br>
                                    <input type="file" class="form-control" name="pr_file">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Premiun Retainer</button>
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
