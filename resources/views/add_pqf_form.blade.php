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
                            <form action="/add_pqfinfo" method="POST">
                            <h3>PQF Information <button style="float: right" type="submit" class="btn btn-primary">Add PQF Information</button></h3>
                        </div>
                        <div class="card-body">
                           
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="">Name the major company shareholders / owners and percentage of ownership</label>
                                        <textarea type="text" class="form-control" name="name_major" value=""></textarea>
                                        <br>
                                        <label for="">Company Name</label>
                                        <input type="text" class="form-control" name="com_name" value="" >
                                        <br>
                                        <label for="">Web Address</label>
                                        <input type="text" class="form-control" name="web_url" value="" >
                                        <br>
                                        <h5 style="color: #00a2ff">SCOPE OF PROJECT</h5>
                                        <label for="">Provide a detailed description of the business, what the business does and/or is proposing to do</label>
                                        <textarea type="text" class="form-control" name="buss_disc" value="" ></textarea>
                                        <br>
                                        <label for="">Number Of year in business</label>
                                        <input type="text" class="form-control" name="buss_year" value="" >
                                        <br>
                                        <label for="">Number Of Employees</label>
                                        <input type="text" class="form-control" name="buss_emply" value="" >
                                        <br>
                                        <label for="">Do you have a Legal Representative or Broker for this Loan acquisition (if any)</label>
                                        <input type="text" class="form-control" name="broker" value="" >
                                        <br>
                                        <h5 style="color: #00a2ff">INVESTMENT PURCHASES</h5>
                                        <label for="">Length of Investment - how long will you need these invested funds</label>
                                        <textarea type="text" class="form-control" name="length_Investment" value="" ></textarea>
                                        <br>
                                        <label for="">Assets to be purchased (attach a schedule if not enough space below)</label>
                                        <textarea type="text" class="form-control" name="assets_purch" value="" ></textarea>
                                        <br>
                                        <h5 style="color: #00a2ff">FUNDING PROCESS</h5>
                                        <label for="">Have you acquired all the licenses and permits from the government (is the project shovel ready?)</label>
                                        <textarea type="text" class="form-control" name="licenses_permits" value="" ></textarea>
                                        <br>
                                        <h5 style="color: #00a2ff">MANAGEMENT EXPERIENCE</h5>
                                        <label for="">Briefly list your management experience</label>
                                        <textarea type="text" class="form-control" name="manag_exp" value="" ></textarea>
                                        <br>
                                        <h5 style="color: #00a2ff">FUNDING PROCESS</h5>
                                        <label for="">Ammount Of loan required</label>
                                        <textarea type="text" class="form-control" name="loan_req" value="" ></textarea>
                                        <br>
                                        <label for="">How much money do you need to reach your immediate goals</label>
                                        <textarea type="text" class="form-control" name="money_need" value="" ></textarea>
                                        <br>
                                        <label for="">If applicable, please indicate the amount of funding already invested into this project</label>
                                        <textarea type="text" class="form-control" name="indicate_amount" value="" ></textarea>
                                        <br>
                                        <label for="">What are your Project / Venture Return on Investment (ROI)</label>
                                        <textarea type="text" class="form-control" name="ROI" value="" ></textarea>
                                        <br>
                                        <label for="">How long have you been searching for funding</label>
                                        <textarea type="text" class="form-control" name="searching_funding" value="" ></textarea>
                                        <br>
                                        <label for="">Which Companies or Investors have you contacted in the past</label>
                                        <textarea type="text" class="form-control" name="com_Investors" value="" ></textarea>
                                        <br>
                                        <label for="">If your Project financing request has been rejected in the past, then why was it rejected?</label>
                                        <textarea type="text" class="form-control" name="financing_request" value="" ></textarea>
                                        <br>
                                        <label for="">What sort of collateral can you offer for this Loan finance: (if any please specify)</label>
                                        <textarea type="text" class="form-control" name="collateral" value="" ></textarea>
                                        <br>
                                        <label for="">What is the net worth of company and value of the total assets? (If any please specify)</label>
                                        <textarea type="text" class="form-control" name="worth_company" value="" ></textarea>
                                        <br>
                                        <label for="">Does your company own other properties outside this project venture</label>
                                        <textarea type="text" class="form-control" name="project_venture" value="" ></textarea>
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
