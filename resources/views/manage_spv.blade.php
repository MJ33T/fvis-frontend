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
                            <h3>SPV</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="add_spv" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <select id="id1" class="form-control" name="spv" onclick="myFunction()">
                                        <option selected>Select SPV</option>
                                        <option value="1">Company Acquisition</option>
                                        <option value="2">Bank Account Openning</option>
                                        <option value="3">Office Setup and Requirement</option>
                                        <option value="4">Licensing</option>

                                    </select>
                                    <br>
                                    <select id="id2" class="form-control" name="lc">
                                        <option selected>Select License Type</option>
                                        <option>MOF</option>
                                        <option>CIDB</option>
                                        <option>EPF</option>
                                        <option>DBKL</option>
                                        <option>Tenancy Agreement</option>
                                        <option>Utility Bills</option>
                                    </select>
                                    <br>
                                    <input type="file" class="form-control" name="spv_file">
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
<style>
    #id2{
        display: none;
    }
</style>
<script>
  function myFunction() {
    var x = document.getElementById("id1").value;
    if (x == "4") document.getElementById("id2").style.display = "block";
    else document.getElementById("id2").style.display = "none";
}
</script>

@endsection
