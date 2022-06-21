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
                            <form action="/add_ilrfinfo" method="POST">
                            <h3>ILRF Information <button style="float: right" type="submit" class="btn btn-primary">Add ILRF Information</button></h3>
                        </div>
                        <div class="card-body">
                                @csrf
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 style="color: #00a2ff">Internal Loan Review</h5>
                                            </div>
                                            <div class="col-md">
                                                <input type="hidden" name="user_id" value="">
                                                <label for="">Primary Officer</label>
                                                <input type="text" class="form-control" name="primary_off" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">Date Prepared</label>
                                                <input type="text" class="form-control" name="date_pre" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">Prepared By</label>
                                                <input type="text" class="form-control" name="prepared_by" value="" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Loan Request (Business Information)</h5>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Borrower</label>
                                                <textarea type="text" class="form-control" name="loan_request" value="" ></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Business Information</h5>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Form</label>
                                                <input type="text" class="form-control" name="bussi_from" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">Organ Date</label>
                                                <input type="text" class="form-control" name="organ_date" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">Type</label>
                                                <input type="text" class="form-control" name="type" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">Management</label>
                                                <input type="text" class="form-control" name="manag" value="" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <br>
                                                <label for="">Ownership</label>
                                                <input type="text" class="form-control" name="ownership" value="" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <br>
                                                <label for="">Guarantors: Typically the owner of the business</label>
                                                <textarea type="text" class="form-control" name="guarantors" value="" ></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <br>
                                                <label for="">Request</label>
                                                <textarea type="text" class="form-control" name="reque" value="" ></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <br>
                                                <label for="">Purpose</label>
                                                <textarea type="text" class="form-control" name="purpose" value="" ></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Terms</h5>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Type</label>
                                                <input type="text" class="form-control" name="terms_type" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">Amount</label>
                                                <input type="text" class="form-control" name="terms_amount" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">Rate/Fees</label>
                                                <input type="text" class="form-control" name="terms_rate" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">Term</label>
                                                <input type="text" class="form-control" name="terms_term" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">Repayment</label>
                                                <input type="text" class="form-control" name="terms_repay" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_type2" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_amount2" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_rate2" value="">
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_term2" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_repay2" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_type3" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_amount3" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_rate3" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_term3" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="terms_repay3" value="" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Source of Repayment</h5>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Primary</label>
                                                <input type="text" class="form-control" name="source_primary" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">Secondary</label>
                                                <input type="text" class="form-control" name="source_secondary" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">Tertiary</label>
                                                <input type="text" class="form-control" name="source_teriary" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Collateral Description</label>
                                                <textarea type="text" class="form-control" name="source_desi" value="" ></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Collateral Valuation</h5>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Type</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Appraised Value</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">% of ADV</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Debt</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Avail.Equity</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">LTV</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Inventory</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_app" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">30%</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_debt" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_avail" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="coll_ltv" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Equipment</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_app2" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">75%</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_debt2" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_avail2" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="coll_ltv2" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Marketable Securities</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_app3" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">70%</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_debt3" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_avail3" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="coll_ltv3" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">C and R Property</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_app4" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">75%</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_debt4" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_avail4" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="coll_ltv4" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Vacant Land</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_app5" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">30-50%</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_debt5" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_avail5" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="coll_ltv5" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Accounts Receivable</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_app6" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">75% (0-90 days)</label>
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_debt6" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="colla_avail6" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="coll_ltv6" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Flood Hazard</label>
                                                <textarea type="text" class="form-control" name="flood_haz" value="" ></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Environmental Concerns</label>
                                                <textarea type="text" class="form-control" name="envi_concer" value="" ></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Bow Debt</h5>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Type</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Open</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">High</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Bal.</label>
                                            </div>
                                            <div class="col-md">
                                                <label for=""># of REN</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Rate</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Terms</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Sec</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">LTV</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_type" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_open" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_high" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_bal" value="" > 
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_ren" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_rate" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_terms" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_sec" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_ltv" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_type2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_open2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_high2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_bal2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_ren2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_rate2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_terms2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_sec2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_ltv2" value="" >
                                            </div> 
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_type3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_open3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_high3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_bal3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_ren3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_rate3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_terms3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_sec3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="bow_ltv3" value="" >
                                            </div> 
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Bow Payment History</label>
                                                <textarea type="text" class="form-control" name="bow_pay_his" value="" ></textarea> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Line of Credit Usage</h5>
                                            </div>
                                            <div class="col-md-12">
                                                <label for=""># of Days at Zero</label>
                                                <textarea type="text" class="form-control" name="days_zero" value="" ></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <br>
                                                <label for="">Other Debts</label>
                                                <textarea type="text" class="form-control" name="other_debts" value="" ></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <br>
                                                <label for="">Low Balance</label>
                                                <textarea type="text" class="form-control" name="low_bal" value="" ></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <br>
                                                <label for="">Other Debts</label>
                                                <textarea type="text" class="form-control" name="othter_debts2" value="" ></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br>
                                                <h5 style="color: #00a2ff">Depository Relationship</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="">Name</label>
                                            </div>
                                            <div class="col">
                                                <label for="">Acct #</label>
                                            </div>
                                            <div class="col">
                                                <label for="">Type</label>
                                            </div>
                                            <div class="col">
                                                <label for="">Opened</label>
                                            </div>
                                            <div class="col">
                                                <label for=""># of REN</label>
                                            </div>
                                            <div class="col">
                                                <label for="">Balance</label>
                                            </div>
                                            <div class="col">
                                                <label for="">Avg. Col. Bal</label>
                                            </div>
                                            <div class="col">
                                                <label for="">Rate</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_name" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_acct" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_type" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_opened" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_ren" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_bal" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_avg" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_rate" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_name2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_acct2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_type2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_opened2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_ren2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_bal2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_avg2" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_rate2" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_name3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_acct3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_type3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_opened3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_ren3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_bal3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_avg3" value="" >
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="dep_rate3" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Average Cost of Funds</label>
                                                <textarea type="text" class="form-control" name="ave_cost_fund" value="" ></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Trust Relationship</label>
                                                <textarea type="text" class="form-control" name="trust_relati" value="" ></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Background Information</label>
                                                <textarea type="text" class="form-control" name="back_info" value="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="color: #00a2ff">BUSINESS INFORMATION</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Business Name</label>
                                        <input type="text" class="form-control" name="buss_name" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="com_address" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Telephone</label>
                                        <input type="text" class="form-control" name="buss_tel" value="" > 
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Tax I.D.</label>
                                        <input type="text" class="form-control" name="tax_id" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Individual Name(s)</label>
                                        <input type="text" class="form-control" name="indi_name" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="bussi_address" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Telephone</label>
                                        <input type="text" class="form-control" name="bussi_tel" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Social Security</label>
                                        <input type="text" class="form-control" name="social_security" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Date of Birth</label>
                                        <input type="date" class="form-control" name="date_of_birth" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Proprietorship</label>
                                        <input type="text" class="form-control" name="proprietorship" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Partnership</label>
                                        <input type="text" class="form-control" name="partnership" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Sub-Chapter S</label>
                                        <input type="text" class="form-control" name="sub_chapter" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Non-Profit</label>
                                        <input type="text" class="form-control" name="non_profit" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Individual</label>
                                        <input type="text" class="form-control" name="individual" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">LLC</label>
                                        <input type="text" class="form-control" name="llc" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 style="color: #00a2ff">Ownership Distribution: (List stockholders, partners, owner names)</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Name</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Title</label>
                                            </div>
                                            <div class="col-md">
                                                <label for=""># of Years</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_name" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_title" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_of_year" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_name2" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_title2" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_of_year2" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_name3" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_title3" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="own_of_year3" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Nature of Business</label>
                                                <input type="text" class="form-control" name="nature_bussi" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">Year Established</label>
                                                <input type="text" class="form-control" name="year_estb" value="" >
                                            </div>
                                            <div class="col-md">
                                                <label for="">Number of Employees</label>
                                                <input type="text" class="form-control" name="number_emply" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Years at Present Location</label>
                                                <br>
                                                <input type="radio" name="own" value="Own"> Own
                                                <input type="radio" name="own" value="Lease"> Lease
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Accountant</label>
                                        <input type="text" class="form-control" name="accountant" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Telephone</label>
                                        <input type="text" class="form-control" name="acc_telephone" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Insurance Agent</label>
                                        <input type="text" class="form-control" name="insur_agent" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Telephone</label>
                                        <input type="text" class="form-control" name="agent_no" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Attorney</label>
                                        <input type="text" class="form-control" name="attorney" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Telephone</label>
                                        <input type="text" class="form-control" name="attorney_no" value="" >
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <h5 style="color: #00a2ff">FINANCIAL INFORMATION</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Bank of Account</label>
                                        <input type="text" class="form-control" name="bank_of_account" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Account Number</label>
                                        <input type="text" class="form-control" name="accnt_no" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="color: #00a2ff">Credit Relationships: Please provide details of your business credit relationships below</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Name of Creditor</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Purpose of Loan</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Amount</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Presently Owing</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="n_creditor" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="p_loan" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="r_ammonut" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="p_owing" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="n_creditor2" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="p_loan2" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="r_ammonut2" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="p_owing2" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="n_creditor3" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="p_loan3" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="r_ammonut3" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="p_owing3" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="color: #00a2ff">LOAN REQUEST</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Amount of Loan Requested</label>
                                        <input type="text" class="form-control" name="amount_loan_req" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Type of Loan</label>
                                        <br>
                                        <input type="radio" name="line_credit" value="Line of Credit"> Line of Credit
                                        <input type="radio" name="line_credit" value="Term Loan"> Term Loan
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Requested Term of Loan</label>
                                        <input type="text" class="form-control" name="req_term_laon" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <br>
                                        <input type="radio" name="bussi_home" value="Business Home Equity Credit"> Business Home Equity Credit 
                                        <input type="radio" name="bussi_home" value="Commercial Real Estate"> Commercial Real Estate
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="color: #00a2ff">Specific Loan Purpose (Check all that apply)</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="checkbox" name="working_cap" value="" > Working Capital
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox"   name="state_type_loan" value="" > Other (State type of loan required and loan purpose)
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <input type="checkbox"  name="finan_purch" value="" > Finance Purchase
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <input type="text" class="form-control"  name="finan_text" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <input type="checkbox"  name="fin_pur_estate" value="" > Finance Purchase of Real Estate
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <input type="text" class="form-control" name="fin_pur_text" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <input type="checkbox"  name="fin_pur_bussi" value="" > Finance Purchase of Business
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <input type="text" class="form-control" name="fin_pur_bussi_text" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox"  name="refin_exi_loan" value="" > Refinance Existing Loan or Debts
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="refin_exi_loan_text" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="color: #00a2ff">Collateral Available* (Check all that apply)</h5>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="all_asset" value="" > All Assets (accounts receivable, inventory, machinery and equipment)
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="spe_equipment" value="" > Specific Equipment (Please attach equipment list, including serial numbers or description of Equipment, and invoices for new equipment.)
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="real_estate" value="" >  Real Estate (Please attach property address, legal description and a copy of most recent tax bill.)
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Square Feet</label>
                                        <input type="text" class="form-control" name="square_feet" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Acres</label>
                                        <input type="text" class="form-control" name="acres" value="" >
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="cash_dep" value="" > Cash on Deposit at (name of bank)
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <label for="">Branch</label>
                                        <input type="text" class="form-control" name="branch" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <label for="">Account #</label>
                                        <input type="text" class="form-control" name="account" value="" >
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="p_assets" value="" > Personal Assets (As described in Personal Financial Statement.)
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="color: #00a2ff">Guarantors** (Please list)</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="">Name</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Social Security #</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Address</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="guar_name" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="guar_security" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="guar_add" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="guar_name2" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="guar_security2" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="guar_add2" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="guar_name3" value="" >
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="guar_security3" value="" >
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="guar_add3" value="" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-10">
                                        <label for="">BUSINESS BACKGROUND INFORMATION</label>
                                        <textarea type="text" class="form-control" name="bussi_back" value="" ></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-10">
                                        <label for="">PERSONAL BUSINESS EXPERIENCE</label>
                                        <textarea type="text" class="form-control" name="per_bussi_exp" value="" ></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Is the business an endorser, guarantor, or co-maker for any obligation not listed in the financial statements?</label>
                                        <br>
                                        <input type="radio" name="misc_yes" value="Yes" > Yes
                                        <input type="radio" name="misc_yes" value="No" > No
                                    </div>
                                    <div class="col-md-10">
                                        <br>
                                        <label for="">If yes, what is the contingent liability?</label>
                                        <input type="text" class="form-control" name="w_contingent" value="" > 
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Has the business or principal owner ever declared bankruptcy? (If yes, provide details on a separate sheet)</label>
                                        <br>
                                        <input type="radio" name="buss_pri_yes" value="Yes" > Yes
                                        <input type="radio" name="buss_pri_yes" value="No" > No
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <label for="">Is the business a defendant in any lawsuit? (If yes, provide details on a separate sheet.)</label>
                                        <br>
                                        <input type="radio" name="buss_defe_yes" value="Yes" > Yes
                                        <input type="radio" name="buss_defe_yes" value="No" > No
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <label for="">Are any of the business assets encumbered by liens or attachments of any type?</label>
                                        <br>
                                        <input type="radio" name="buss_ass_yes" value="Yes" > Yes
                                        <input type="radio" name="buss_ass_yes" value="No" > No
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">What</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">By Whom</label>
                                            </div>
                                            <div class="col-md">
                                                <label for="">Account $</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="what" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="by_whom" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="amnt" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="what2" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="by_whom2" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="amnt2" value="" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="what3" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="by_whom3" value="" >
                                            </div>
                                            <div class="col-md">
                                                <input type="text" class="form-control" name="amnt3" value="" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Does the business have a pension fund?</label>
                                        <br>
                                        <input type="radio" name="does_buss_yes" value="Yes" > Yes
                                        <input type="radio" name="does_buss_yes" value="No" > No
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Profit-sharing plan?</label>
                                        <br>
                                        <input type="radio" name="profit_yes" value="Yes" > Yes
                                        <input type="radio" name="profit_yes" value="No" > No
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">If so, does the plan have any unfunded pension liabilities?</label>
                                        <br>
                                        <input type="radio" name="ifso_yes" value="Yes" > Yes
                                        <input type="radio" name="ifso_yes" value="No" > No
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 style="color: #00a2ff">BUSINESS LOAN APPLICATION CHECKLIST</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="checkbox" name="buss_laon_app" value="" > Business Loan Application
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="accont_pre_busi" value="" > Accountant-Prepared Business Financial Statements (Profit and Loss, Balance Sheet) for the past three fiscal years
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="buss_fed" value="" > Business Federal Tax Returns for past three fiscal years
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="in_financial" value="" > Interim Financial Statements (if available)
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="most_recent" value="" > Most Recent Federal Tax Returns for each principal owner listed in the first section of the Business Loan Application
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="per_finacial" value="" > Personal Financial Statement
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="org_papers" value="" > Organizational Papers (Articles, dba papers, etc.)
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <input type="checkbox" name="other2" value="" > OTHER
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <textarea type="text" class="form-control" name="other_text" value="" ></textarea>
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
