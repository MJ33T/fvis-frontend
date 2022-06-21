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
                                        <option value="Company Acquisition">Company Acquisition</option>
                                        <option value="Bank Account Openning">Bank Account Openning</option>
                                        <option value="Office Setup and Requirement">Office Setup and Requirement</option>
                                        <option value="Licensing">Licensing</option>

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
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
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
    if (x == "Licensing") document.getElementById("id2").style.display = "block";
    else document.getElementById("id2").style.display = "none";
}
</script>

@endsection
