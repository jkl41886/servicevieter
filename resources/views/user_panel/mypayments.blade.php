@php
$title = "UserSection"
@endphp

@extends('layouts.master')
@section('head')
    <style>
        .table-striped .btn {
            margin: 10px 0 0;
            padding: 5px 18px;
            width: 26px;
        }
        
        .btn:not(.btn-just-icon):not(.btn-fab) .fa,
        .navbar .navbar-nav>li>a.btn:not(.btn-just-icon):not(.btn-fab) .fa {
            font-size: 18px;
            margin-top: -2px;
            position: relative;
            top: 2px;
            left: 0px;
            padding: 5px;
        }
        
        .modal-open .modal {
            overflow-x: unset;
            overflow-y: unset;
        }
        
        .card-content .td-actions button i {
            background-color: transparent;
        }
        
        .form-droper {
            display: inline;
        }
        
        .form-droper select {
            border-radius: 5px;
        }
    </style>
@endsection

@section('extended-header')

<tabs>



    <tab name="On MileStone" :selected="true" icon="fa fa-university" id="MyPaymentsAreaSettings"></tab>

    <tab name="Release Request" icon="fa fa-exchange" id="MyPaymentsAreaOurFollower"></tab>


    <tab name="Refund Request" icon="fa fa-undo" id="MyPaymentsAreaAboutUs"></tab>
    <tab name="My Payouts" icon="fa fa-eur" id="MyPaymentsAreaOurTeam"></tab>


</tabs>

@endsection

@section('content')
<div role="tabpanel" class="tab-pane " id="MyPaymentsArea" style="background: #eeeeee;">
                <div class="border-box" style="margin-top: 2px;">
                    <div class=" custom-page-content">

                    </div>
                    <!--  My Payments table -->
                    <div class="main-content">
                        <div class="tab-section">
                            <div class="row" style="background: #eeeeee;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
                                    <div class=" bhoechie-tab">
                                        <div class="bhoechie-tab-content">
                                            <div>
                                                <div class="tab-content">
                                                    <div role="tabpanel" id="MyPaymentsAreaSettings" style="background: #eeeeee;" class="tab-pane">


                                                        <div class="row pdng10-0 searchBar" style="border-bottom: 1px solid #eeeeee;">
                                                            <div class="">

                                                                <div class="col-lg-4" style="  width: 25%; margin-top: 12px;">

                                                                    <div class="pamentstats" style="  background-color: white; border-top: 5px solid green;">
                                                                        <h2 class="text-center2 paymenfont2">Total Open Jobs</h2>
                                                                        <hr class="pauruler2">
                                                                        <h2 class="text-center2">10</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4" style="  width: 25%; margin-top: 12px;">

                                                                    <div class="pamentstats" style="  background-color: white; border-top: 5px solid green;">
                                                                        <h2 class="text-center2 paymenfont2">Total Released</h2>
                                                                        <hr class="pauruler2">
                                                                        <h2 class="text-center2">1000.€</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4" style="  width: 25%; margin-top: 12px;">

                                                                    <div class="pamentstats" style="  background-color: white;border-top: 5px solid green;">
                                                                        <h2 class="text-center2 paymenfont2">Total Refund</h2>
                                                                        <hr class="pauruler2">
                                                                        <h2 class="text-center2">1000.€</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4" style="  width: 25%; margin-top: 12px;">

                                                                    <div class="pamentstats" style="  background-color: white; border-top: 5px solid green;">
                                                                        <h2 class="text-center2 paymenfont2">On Milestone</h2>
                                                                        <hr class="pauruler2">
                                                                        <h2 class="text-center2">5000.€</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--second section-->
                                                        <div class="vd_content-section clearfix" style="margin-top: -11px; border-top: 1px solid #eeeeee;">
                                                            <div class="row">
                                                                <div class="col-md-12" style="margin-top: 26px;">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">
                                                                            <div class="panel widget container-fluid" style="background: #eee;">
                                                                                <div class="row mrgn30-0 projectRow" style=" background: #eeeeee;">
                                                                                    <div class="container">
                                                                                        <div class="row" style=" margin-top: -34px;">
                                                                                            <div class="col-md-12" style="margin-top: 26px;">

                                                                                                <div class="sales card">
                                                                                                    <div class="card-header card-header-icon" data-background-color="rose">
                                                                                                        <i class="material-icons">assignment</i>
                                                                                                    </div>
                                                                                                    <!--start form-->
                                                                                                    <div class="form-droper form-group">
                                                                                                        <div class="col-md-2 pull-right">
                                                                                                            <select>
                                                                                            <option value="" disabled="" selected="">
                                                                                            Status
                                                                                            </option>
                                                                                            <option value="1">
                                                                                            On Hold
                                                                                            </option>
                                                                                            <option value="2">
                                                                                            Denied
                                                                                            </option>
                                                                                            <option value="3">
                                                                                            Blocked
                                                                                            </option>
                                                                                            <option value="4">
                                                                                            Removed
                                                                                            </option>
                                                                                        </select>
                                                                                                        </div>



                                                                                                        <div class="col-md-2 pull-right">

                                                                                                            <select>
                                                                                                <option value="" disabled="" selected="">
                                                                                                Status
                                                                                                </option>
                                                                                                <option value="1">
                                                                                                On Hold
                                                                                                </option>
                                                                                                <option value="2">
                                                                                                Denied
                                                                                                </option>
                                                                                                <option value="3">
                                                                                                Blocked
                                                                                                </option>
                                                                                                <option value="4">
                                                                                                Removed
                                                                                                </option>
                                                                                            </select>

                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <!--end of form-->

                                                                                                    <div class="card-content">
                                                                                                        <h4 class="card-title">Simple Table</h4>
                                                                                                        <div class="table-responsive">
                                                                                                            <table class="table">
                                                                                                                <thead>
                                                                                                                    <tr>
                                                                                                                        <th><input id="checkall" type="checkbox"></th>
                                                                                                                        <th>No</th>
                                                                                                                        <th>Title</th>
                                                                                                                        <th>Job ID</th>
                                                                                                                        <th>Company Name</th>
                                                                                                                        <th>Paid By</th>
                                                                                                                        <th>Amount</th>
                                                                                                                        <th>Date</th>
                                                                                                                        <th>Option</th>
                                                                                                                    </tr>
                                                                                                                </thead>
                                                                                                                <tbody>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>Williams</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>12-05-18</td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>Williams</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>12-05-18</td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true">
                                                                                                        </span>
                                                                                                    </button>
                                                                                                    <h4 class="modal-title custom_align" id="Heading">
                                                                                                        Edit Your Detail
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control " placeholder="Mohsin" type="text">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control " placeholder="Irshad" type="text">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan">                                                                                                                                </textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer ">
                                                                                                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;">
                                                                                                        <span class="glyphicon glyphicon-ok-sign">
                                                                                                        </span>&nbsp;Update
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- /.modal-content -->
                                                                                        </div>
                                                                                        <!-- /.modal-dialog -->
                                                                                    </div>
                                                                                    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true">
                                                                                                        </span>
                                                                                                    </button>
                                                                                                    <h4 class="modal-title custom_align" id="Heading">
                                                                                                        Delete this entry
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="alert alert-danger">
                                                                                                        <span class="glyphicon glyphicon-warning-sign">
                                                                                                        </span> Are you sure you want to delete this
                                                                                                        Record?
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer ">
                                                                                                    <button type="button" class="btn btn-success">
                                                                                                        <span class="glyphicon glyphicon-ok-sign">
                                                                                                        </span>&nbsp;Yes
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                                                                        <span class="glyphicon glyphicon-remove">
                                                                                                        </span>&nbsp;No
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- /.modal-content -->
                                                                                        </div>
                                                                                        <!-- /.modal-dialog -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--tab-pane end -->
                                                                    </div>
                                                                    <!-- tab-content end -->
                                                                </div>
                                                                <!-- Projects List col-md-10 end -->
                                                            </div>
                                                            <!-- row end -->
                                                        </div>
                                                        <div class="clearfix">
                                                        </div>
                                                        <br>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="MyPaymentsAreaOurFollower" style="background: #eeeeee;">
                                                        <div class="row pdng10-0 searchBar" style="border-bottom: 1px solid #eeeeee;">
                                                            <div class="">
                                                                <div class="col-lg-4" style="    margin-top: 12px;">
                                                                    <div class="pamentstats" style="  background-color: white;">
                                                                        <h2 class="text-center2 paymenfont2">New Release Request</h2>
                                                                        <hr class="pauruler2">
                                                                        <h2 class="text-center2">10</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4" style="    margin-top: 12px;">
                                                                    <div class="pamentstats" style="  background-color: white;">
                                                                        <h2 class="text-center2 paymenfont2">Accepted Release Request</h2>
                                                                        <hr class="pauruler2">
                                                                        <h2 class="text-center2">5</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4" style="    margin-top: 12px;">
                                                                    <div class="pamentstats" style="  background-color: white;">
                                                                        <h2 class="text-center2 paymenfont2">Denied Release Request</h2>
                                                                        <hr class="pauruler2">
                                                                        <h2 class="text-center2">5</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--second section-->
                                                        <div class="vd_content-section clearfix" style="margin-top: -11px; border-top: 1px solid #eeeeee;">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">
                                                                            <div class="panel widget container-fluid" style="background: #eee;">
                                                                                <div class="row mrgn30-0 projectRow" style=" background: #eeeeee;">
                                                                                    <div class="container">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" style="margin-top: 26px;">

                                                                                                <div class="sales card">
                                                                                                    <div class="card-header card-header-icon" data-background-color="rose">
                                                                                                        <i class="material-icons">assignment</i>
                                                                                                    </div>
                                                                                                    <!--start form-->
                                                                                                    <div class="form-droper form-group">
                                                                                                        <div class="col-md-2 pull-right">
                                                                                                            <select>
                                                                                            <option value="" disabled="" selected="">
                                                                                            Status
                                                                                            </option>
                                                                                            <option value="1">
                                                                                            On Hold
                                                                                            </option>
                                                                                            <option value="2">
                                                                                            Denied
                                                                                            </option>
                                                                                            <option value="3">
                                                                                            Blocked
                                                                                            </option>
                                                                                            <option value="4">
                                                                                            Removed
                                                                                            </option>
                                                                                        </select>
                                                                                                        </div>



                                                                                                        <div class="col-md-2 pull-right">

                                                                                                            <select>
                                                                                                <option value="" disabled="" selected="">
                                                                                                Status
                                                                                                </option>
                                                                                                <option value="1">
                                                                                                On Hold
                                                                                                </option>
                                                                                                <option value="2">
                                                                                                Denied
                                                                                                </option>
                                                                                                <option value="3">
                                                                                                Blocked
                                                                                                </option>
                                                                                                <option value="4">
                                                                                                Removed
                                                                                                </option>
                                                                                            </select>

                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <!--end of form-->
                                                                                                    <div class="card-content">
                                                                                                        <h4 class="card-title">Simple Table</h4>
                                                                                                        <div class="table-responsive">
                                                                                                            <table class="table">
                                                                                                                <thead>
                                                                                                                    <tr>
                                                                                                                        <th><input id="checkall" type="checkbox"></th>
                                                                                                                        <th>No</th>
                                                                                                                        <th>Date</th>
                                                                                                                        <th>Service type</th>
                                                                                                                        <th>Title</th>
                                                                                                                        <th>Amount Total</th>
                                                                                                                        <th>Payment Fee</th>
                                                                                                                        <th>Portal Fee</th>
                                                                                                                        <th>Payouts</th>
                                                                                                                        <th>Status</th>
                                                                                                                        <th>Option</th>
                                                                                                                    </tr>
                                                                                                                </thead>
                                                                                                                <tbody>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td>
                                                                                                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Done</button>
                                                                                                                        </td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal2">Denied</button></td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Done</button></td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Done</button></td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal2">Denied</button></td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true">
                                                                                                        </span>
                                                                                                    </button>
                                                                                                    <h4 class="modal-title custom_align" id="Heading">
                                                                                                        Edit Your Detail
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control " placeholder="Mohsin" type="text">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control " placeholder="Irshad" type="text">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan">                                                                                                                                </textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer ">
                                                                                                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;">
                                                                                                        <span class="glyphicon glyphicon-ok-sign">
                                                                                                        </span>&nbsp;Update
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- /.modal-content -->
                                                                                        </div>
                                                                                        <!-- /.modal-dialog -->
                                                                                    </div>
                                                                                    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true">
                                                                                                        </span>
                                                                                                    </button>
                                                                                                    <h4 class="modal-title custom_align" id="Heading">
                                                                                                        Delete this entry
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="alert alert-danger">
                                                                                                        <span class="glyphicon glyphicon-warning-sign">
                                                                                                        </span> Are you sure you want to delete this
                                                                                                        Record?
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer ">
                                                                                                    <button type="button" class="btn btn-success">
                                                                                                        <span class="glyphicon glyphicon-ok-sign">
                                                                                                        </span>&nbsp;Yes
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                                                                        <span class="glyphicon glyphicon-remove">
                                                                                                        </span>&nbsp;No
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- /.modal-content -->
                                                                                        </div>
                                                                                        <!-- /.modal-dialog -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--tab-pane end -->
                                                                    </div>
                                                                    <!-- tab-content end -->
                                                                </div>
                                                                <!-- Projects List col-md-10 end -->
                                                            </div>
                                                            <!-- row end -->
                                                        </div>
                                                        <div class="clearfix">
                                                        </div>
                                                        <br>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="MyPaymentsAreaAboutUs" style="background: #eeeeee;">
                                                        <div class="row pdng10-0 searchBar" style="border-bottom: 1px solid #eeeeee;">
                                                            <div class="">
                                                                <div class="col-lg-4" style="    margin-top: 12px;">
                                                                    <div class="pamentstats3" style="background-color:white;">
                                                                        <h2 class="text-center2 paymenfont2">New Release Request</h2>
                                                                        <hr class="pauruler2">
                                                                        <h2 class="text-center2">10</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4" style="    margin-top: 12px;">
                                                                    <div class="pamentstats3" style="background-color:white;">
                                                                        <h2 class="text-center2 paymenfont2">Accepted Release Request</h2>
                                                                        <hr class="pauruler2">
                                                                        <h2 class="text-center2">2</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4" style="    margin-top: 12px;">
                                                                    <div class="pamentstats3" style="background-color:white;">
                                                                        <h2 class="text-center2 paymenfont2">Denied Release Request</h2>
                                                                        <hr class="pauruler2">
                                                                        <h2 class="text-center2">8</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--second section-->
                                                        <div class="vd_content-section clearfix" style="margin-top: -11px; border-top: 1px solid #eeeeee;">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">
                                                                            <div class="panel widget container-fluid" style="background: #eee;">
                                                                                <div class="row mrgn30-0 projectRow" style=" background: #eeeeee;">
                                                                                    <div class="container">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" style="margin-top: 26px;">

                                                                                                <div class="sales card">
                                                                                                    <div class="card-header card-header-icon" data-background-color="rose">
                                                                                                        <i class="material-icons">assignment</i>
                                                                                                    </div>

                                                                                                    <!--start form-->
                                                                                                    <div class="form-droper form-group">
                                                                                                        <div class="col-md-2 pull-right">
                                                                                                            <select>
                                                                                            <option value="" disabled="" selected="">
                                                                                            Status
                                                                                            </option>
                                                                                            <option value="1">
                                                                                            On Hold
                                                                                            </option>
                                                                                            <option value="2">
                                                                                            Denied
                                                                                            </option>
                                                                                            <option value="3">
                                                                                            Blocked
                                                                                            </option>
                                                                                            <option value="4">
                                                                                            Removed
                                                                                            </option>
                                                                                        </select>
                                                                                                        </div>



                                                                                                        <div class="col-md-2 pull-right">

                                                                                                            <select>
                                                                                                <option value="" disabled="" selected="">
                                                                                                Status
                                                                                                </option>
                                                                                                <option value="1">
                                                                                                On Hold
                                                                                                </option>
                                                                                                <option value="2">
                                                                                                Denied
                                                                                                </option>
                                                                                                <option value="3">
                                                                                                Blocked
                                                                                                </option>
                                                                                                <option value="4">
                                                                                                Removed
                                                                                                </option>
                                                                                            </select>

                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <!--end of form-->
                                                                                                    <div class="card-content">
                                                                                                        <h4 class="card-title">Simple Table</h4>
                                                                                                        <div class="table-responsive">
                                                                                                            <table class="table">
                                                                                                                <thead>
                                                                                                                    <tr>
                                                                                                                        <th><input id="checkall" type="checkbox"></th>
                                                                                                                        <th>No</th>
                                                                                                                        <th>Job Title</th>
                                                                                                                        <th>Job ID</th>
                                                                                                                        <th>Company Name</th>
                                                                                                                        <th>Amount Total</th>
                                                                                                                        <th>Ready Paid</th>
                                                                                                                        <th>Released</th>
                                                                                                                        <th>Status</th>
                                                                                                                        <th>Option</th>
                                                                                                                    </tr>
                                                                                                                </thead>
                                                                                                                <tbody>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal3">Denied</button></td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal4">Open</button></td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal5">Accept</button></td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal3">Denied</button></td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal4">Open</button></td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true">
                                                                                                        </span>
                                                                                                    </button>
                                                                                                    <h4 class="modal-title custom_align" id="Heading">
                                                                                                        Edit Your Detail
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control " placeholder="Mohsin" type="text">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control " placeholder="Irshad" type="text">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan">                                                                                                                                </textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer ">
                                                                                                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;">
                                                                                                        <span class="glyphicon glyphicon-ok-sign">
                                                                                                        </span>&nbsp;Update
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- /.modal-content -->
                                                                                        </div>
                                                                                        <!-- /.modal-dialog -->
                                                                                    </div>
                                                                                    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true">
                                                                                                        </span>
                                                                                                    </button>
                                                                                                    <h4 class="modal-title custom_align" id="Heading">
                                                                                                        Delete this entry
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="alert alert-danger">
                                                                                                        <span class="glyphicon glyphicon-warning-sign">
                                                                                                        </span> Are you sure you want to delete this
                                                                                                        Record?
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer ">
                                                                                                    <button type="button" class="btn btn-success">
                                                                                                        <span class="glyphicon glyphicon-ok-sign">
                                                                                                        </span>&nbsp;Yes
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                                                                        <span class="glyphicon glyphicon-remove">
                                                                                                        </span>&nbsp;No
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- /.modal-content -->
                                                                                        </div>
                                                                                        <!-- /.modal-dialog -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--tab-pane end -->
                                                                    </div>
                                                                    <!-- tab-content end -->
                                                                </div>
                                                                <!-- Projects List col-md-10 end -->
                                                            </div>
                                                            <!-- row end -->
                                                        </div>
                                                        <div class="clearfix">
                                                        </div>
                                                        <br>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="MyPaymentsAreaOurTeam" style="margin-top: -36px;">
                                                        <!--second section-->
                                                        <div class="vd_content-section clearfix" style="margin-top: -11px; border-top: 1px solid #eeeeee;">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">
                                                                            <div class="panel widget container-fluid" style="background: #eee;">
                                                                                <div class="row mrgn30-0 projectRow" style=" background: #eeeeee;">
                                                                                    <div class="container">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" style="margin-top: 26px;">

                                                                                                <div class="sales card">
                                                                                                    <div class="card-header card-header-icon" data-background-color="rose">
                                                                                                        <i class="material-icons">assignment</i>
                                                                                                    </div>
                                                                                                    <!--start form-->
                                                                                                    <div class="form-droper form-group">
                                                                                                        <div class="col-md-2 pull-right">
                                                                                                            <select>
                                                                                            <option value="" disabled="" selected="">
                                                                                            Status
                                                                                            </option>
                                                                                            <option value="1">
                                                                                            On Hold
                                                                                            </option>
                                                                                            <option value="2">
                                                                                            Denied
                                                                                            </option>
                                                                                            <option value="3">
                                                                                            Blocked
                                                                                            </option>
                                                                                            <option value="4">
                                                                                            Removed
                                                                                            </option>
                                                                                        </select>
                                                                                                        </div>



                                                                                                        <div class="col-md-2 pull-right">

                                                                                                            <select>
                                                                                                <option value="" disabled="" selected="">
                                                                                                Status
                                                                                                </option>
                                                                                                <option value="1">
                                                                                                On Hold
                                                                                                </option>
                                                                                                <option value="2">
                                                                                                Denied
                                                                                                </option>
                                                                                                <option value="3">
                                                                                                Blocked
                                                                                                </option>
                                                                                                <option value="4">
                                                                                                Removed
                                                                                                </option>
                                                                                            </select>

                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <!--end of form-->
                                                                                                    <div class="card-content">
                                                                                                        <h4 class="card-title">Simple Table</h4>
                                                                                                        <div class="table-responsive">
                                                                                                            <table class="table">
                                                                                                                <thead>
                                                                                                                    <tr>
                                                                                                                        <th><input id="checkall" type="checkbox"></th>
                                                                                                                        <th>No</th>
                                                                                                                        <th>Date</th>
                                                                                                                        <th>Service type</th>
                                                                                                                        <th>Title</th>
                                                                                                                        <th>Payouts</th>
                                                                                                                        <th>Invoice</th>
                                                                                                                    </tr>
                                                                                                                </thead>
                                                                                                                <tbody>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>

                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>

                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>

                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>

                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>

                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true">
                                                                                                        </span>
                                                                                                    </button>
                                                                                                    <h4 class="modal-title custom_align" id="Heading">
                                                                                                        Edit Your Detail
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control " placeholder="Mohsin" type="text">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control " placeholder="Irshad" type="text">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan">                                                                                                                                </textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer ">
                                                                                                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;">
                                                                                                        <span class="glyphicon glyphicon-ok-sign">
                                                                                                        </span>&nbsp;Update
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- /.modal-content -->
                                                                                        </div>
                                                                                        <!-- /.modal-dialog -->
                                                                                    </div>
                                                                                    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true">
                                                                                                        </span>
                                                                                                    </button>
                                                                                                    <h4 class="modal-title custom_align" id="Heading">
                                                                                                        Delete this entry
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="alert alert-danger">
                                                                                                        <span class="glyphicon glyphicon-warning-sign">
                                                                                                        </span> Are you sure you want to delete this
                                                                                                        Record?
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer ">
                                                                                                    <button type="button" class="btn btn-success">
                                                                                                        <span class="glyphicon glyphicon-ok-sign">
                                                                                                        </span>&nbsp;Yes
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                                                                        <span class="glyphicon glyphicon-remove">
                                                                                                        </span>&nbsp;No
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- /.modal-content -->
                                                                                        </div>
                                                                                        <!-- /.modal-dialog -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--tab-pane end -->
                                                                    </div>
                                                                    <!-- tab-content end -->
                                                                </div>
                                                                <!-- Projects List col-md-10 end -->
                                                            </div>
                                                            <!-- row end -->
                                                        </div>
                                                        <div class="clearfix">
                                                        </div>
                                                        <br>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane  " id="MyPaymentsAreaMyPay" style="margin-top: -36px; background: #eeeeee;">
                                                        <!--second section-->
                                                        <div class="vd_content-section clearfix" style="margin-top: -11px; border-top: 1px solid #eeeeee;">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">
                                                                            <div class="panel widget container-fluid" style="background: #eee;">
                                                                                <div class="row mrgn30-0 projectRow" style=" background: #eeeeee;">
                                                                                    <div class="container">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" style="margin-top: 26px;">

                                                                                                <div class="sales card">
                                                                                                    <div class="card-header card-header-icon" data-background-color="rose">
                                                                                                        <i class="material-icons">assignment</i>
                                                                                                    </div>
                                                                                                    <!--start form-->
                                                                                                    <div class="form-droper form-group">
                                                                                                        <div class="col-md-2 pull-right">
                                                                                                            <select>
                                                                                            <option value="" disabled="" selected="">
                                                                                            Status
                                                                                            </option>
                                                                                            <option value="1">
                                                                                            On Hold
                                                                                            </option>
                                                                                            <option value="2">
                                                                                            Denied
                                                                                            </option>
                                                                                            <option value="3">
                                                                                            Blocked
                                                                                            </option>
                                                                                            <option value="4">
                                                                                            Removed
                                                                                            </option>
                                                                                        </select>
                                                                                                        </div>



                                                                                                        <div class="col-md-2 pull-right">

                                                                                                            <select>
                                                                                                <option value="" disabled="" selected="">
                                                                                                Status
                                                                                                </option>
                                                                                                <option value="1">
                                                                                                On Hold
                                                                                                </option>
                                                                                                <option value="2">
                                                                                                Denied
                                                                                                </option>
                                                                                                <option value="3">
                                                                                                Blocked
                                                                                                </option>
                                                                                                <option value="4">
                                                                                                Removed
                                                                                                </option>
                                                                                            </select>

                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <!--end of form-->
                                                                                                    <div class="card-content">
                                                                                                        <h4 class="card-title">Simple Table</h4>
                                                                                                        <div class="table-responsive">
                                                                                                            <table class="table">
                                                                                                                <thead>
                                                                                                                    <tr>
                                                                                                                        <th><input id="checkall" type="checkbox"></th>
                                                                                                                        <th>No</th>
                                                                                                                        <th>Date</th>
                                                                                                                        <th>Service type</th>
                                                                                                                        <th>Title</th>
                                                                                                                        <th>Amount Total</th>
                                                                                                                        <th>Payment Fee</th>
                                                                                                                        <th>Portal Fee</th>
                                                                                                                        <th>Payouts</th>
                                                                                                                        <th>Option</th>
                                                                                                                    </tr>
                                                                                                                </thead>
                                                                                                                <tbody>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>01</td>
                                                                                                                        <td>01.07.2017</td>
                                                                                                                        <td>Job</td>
                                                                                                                        <td>Repaire mobile</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>1000,-€</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td>100,00 €</td>
                                                                                                                        <td class="td-actions">
                                                                                                                            <button type="button" rel="tooltip" data-toggle="modal" data-target="#viewinvoice" class="btn btn-preview" data-original-title="" title="">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true">
                                                                                                        </span>
                                                                                                    </button>
                                                                                                    <h4 class="modal-title custom_align" id="Heading">
                                                                                                        Edit Your Detail
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control " placeholder="Mohsin" type="text">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <input class="form-control " placeholder="Irshad" type="text">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan">                                                                                                                                </textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer ">
                                                                                                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;">
                                                                                                        <span class="glyphicon glyphicon-ok-sign">
                                                                                                        </span>&nbsp;Update
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- /.modal-content -->
                                                                                        </div>
                                                                                        <!-- /.modal-dialog -->
                                                                                    </div>
                                                                                    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true">
                                                                                                        </span>
                                                                                                    </button>
                                                                                                    <h4 class="modal-title custom_align" id="Heading">
                                                                                                        Delete this entry
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="alert alert-danger">
                                                                                                        <span class="glyphicon glyphicon-warning-sign">
                                                                                                        </span> Are you sure you want to delete this
                                                                                                        Record?
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer ">
                                                                                                    <button type="button" class="btn btn-success">
                                                                                                        <span class="glyphicon glyphicon-ok-sign">
                                                                                                        </span>&nbsp;Yes
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                                                                        <span class="glyphicon glyphicon-remove">
                                                                                                        </span>&nbsp;No
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- /.modal-content -->
                                                                                        </div>
                                                                                        <!-- /.modal-dialog -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--tab-pane end -->
                                                                    </div>
                                                                    <!-- tab-content end -->
                                                                </div>
                                                                <!-- Projects List col-md-10 end -->
                                                            </div>
                                                            <!-- row end -->
                                                        </div>
                                                        <div class="clearfix">
                                                        </div>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                </div>
                <br>
            </div>









            {{-- modal --}}
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">

        <div class="modal-dialog modal-lg" style="width:650px">
            <div style="height: 10px; width: 100%;background-color: red; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;"><img src="img/sidebar/logo.png.jpeg"></div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Project
                                      ID</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>
                </div>
                <div class="col-sm-12">
                    <div class="col-lg-6" style="border:1px solid #aab7a2;">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work Start</h3>
                    </div>
                    <div class="col-lg-6" style="border:1px solid #aab7a2">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work End</h3>
                    </div>
                </div>
                <div class="col-sm-12">

                    <div class="bacgcustom row margin6 projectRow brdl4" style="margin-bottom: 0px !important;padding:4px; margin-top:20px !important; border:1px solid grey; border-bottom:none; background-color:#9DC23A !important ">
                        <div class="col-sm-12" style="">
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Job Budget</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Ready Paid</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Remain</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Refund</div>
                        </div>
                    </div>
                    <div class="row margin6 projectRow vd_bg-light-grey  brdl4" style="border:1px solid grey">
                        <div class="col-sm-12">
                            <div class="col-sm-3 text-center2">2000,- €</div>
                            <div class="col-sm-3 text-center2">2000,- €</div>
                            <div class="col-sm-3 col-sm-offset-1"> 2000,- €</div>
                            <div class="col-sm-2" style="padding:0px;"> 2000,- €</div>
                        </div>
                    </div>

                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important; height:50px; padding-top:10px">
                    <div class="col-sm-12">
                        <div class="col-sm-5" style="font-size:18px; "> <b>Reason : </b></div>
                        <div class="col-sm-7" style="font-size:18px; ">User Not Responsive</div>
                    </div>
                </div>
                <br>
                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important; height:50px; padding-top:10px">
                    <div class="col-sm-12">
                        <div class="col-sm-offset-3"></div>
                        <div class="col-sm-12" style="font-size:18px; text-align:center"> <b>Open a Ticket </b></div>
                    </div>
                </div>


                <div style="margin-top:5px;margin-bottom:8px;">
                    <button class="" type="button" data-dismiss="modal" style="text-align: left;
                                        border-radius: 5px !important;
                                        padding: 3px 10px !important;
                                        background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important;
                                        margin-top: 20px !important;
                                        margin-bottom: 10px !important;
                                        padding: 4px;
                                        border-radius: 24px;
                                        color: black;
                                        background: white;
                                        margin-left: 40%;
                                        border: 1px solid #cbcbcb;">
                                            <span class="append-icon" style="text-align:left;margin-right:42"><img src="img/false.png" style="width:20px;"> &nbsp;&nbsp;O.K</span>
                                        </button>
                </div>
            </div>

        </div>
    </div>


    {{-- modal open --}}
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">

        <div class="modal-dialog modal-lg" style="width:650px">
            <div style="height: 10px; width: 100%;background-color: red; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;"><img src="img/sidebar/logo.png.jpeg"></div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Project
                                          ID</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>
                </div>
                <div class="col-sm-12">
                    <div class="col-lg-6" style="border:1px solid #aab7a2;">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work Start</h3>
                    </div>
                    <div class="col-lg-6" style="border:1px solid #aab7a2">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work End</h3>
                    </div>
                </div>
                <div class="col-sm-12">

                    <div class="bacgcustom row margin6 projectRow brdl4" style="margin-bottom: 0px !important;padding:4px; margin-top:20px !important; border:1px solid grey; border-bottom:none; background-color:#9DC23A !important ">
                        <div class="col-sm-12" style="">
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Job Budget</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Ready Paid</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Remain</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Refund</div>
                        </div>
                    </div>
                    <div class="row margin6 projectRow vd_bg-light-grey  brdl4" style="border:1px solid grey">
                        <div class="col-sm-12">
                            <div class="col-sm-3 text-center2">2000,- €</div>
                            <div class="col-sm-3 text-center2">2000,- €</div>
                            <div class="col-sm-3 col-sm-offset-1"> 2000,- €</div>
                            <div class="col-sm-2" style="padding:0px;"> 2000,- €</div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-12">
                    <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important; height:50px; padding-top:10px">
                        <div class="col-sm-5" style="font-size:18px; "> <b>Reason : </b></div>
                        <div class="col-sm-7" style="font-size:18px; float: right">User Not Responsive</div>
                    </div>
                </div>
                <br>

                <div class="col-sm-12">
                    <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important; height:50px; padding-top:10px">

                        <div class="col-sm-5" style="font-size:18px; "> <b>Refund Ammount : </b></div>
                        <div class="col-sm-7" style="font-size:18px;  float: right ">1000.€</div>
                    </div>
                </div>
                <div style="margin-top:5px;margin-bottom:8px;">
                    <button class="" type="button" data-dismiss="modal" style="text-align: left;
                                            border-radius: 5px !important;
                                            padding: 3px 10px !important;
                                            background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important;
                                            margin-top: 20px !important;
                                            margin-bottom: 10px !important;
                                            padding: 4px;
                                            border-radius: 24px;
                                            color: black;
                                            background: white;
                                            margin-left: 40%;
                                            border: 1px solid #cbcbcb;">
                                                <span class="append-icon" style="text-align:left;margin-right:42"><img src="img/send.png" style="width:20px;"> &nbsp;&nbsp;O.K</span>
                                            </button>
                </div>
            </div>

        </div>
    </div>




    {{-- accept modal --}}
    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">

        <div class="modal-dialog modal-lg" style="width:650px">
            <div style="height: 10px; width: 100%;background-color: green; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;"><img src="img/sidebar/logo.png.jpeg"></div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Project
                                          ID</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>
                </div>
                <div class="col-sm-12">
                    <div class="col-lg-6" style="border:1px solid #aab7a2;">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work Start</h3>
                    </div>
                    <div class="col-lg-6" style="border:1px solid #aab7a2">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work End</h3>
                    </div>
                </div>
                <div class="col-sm-12">

                    <div class="bacgcustom row margin6 projectRow brdl4" style="margin-bottom: 0px !important;padding:4px; margin-top:20px !important; border:1px solid grey; border-bottom:none; background-color:#9DC23A !important ">
                        <div class="col-sm-12" style="">
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Job Budget</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Ready Paid</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Remain</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Refund</div>
                        </div>
                    </div>
                    <div class="row margin6 projectRow vd_bg-light-grey  brdl4" style="border:1px solid grey">
                        <div class="col-sm-12">
                            <div class="col-sm-3 text-center2">2000,- €</div>
                            <div class="col-sm-3 text-center2">2000,- €</div>
                            <div class="col-sm-3 col-sm-offset-1"> 2000,- €</div>
                            <div class="col-sm-2" style="padding:0px;"> 2000,- €</div>
                        </div>
                    </div>

                </div>
                <!--
                      <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important; height:50px; padding-top:10px">
                          <div class="col-sm-12">
                              <div class="col-sm-5" style="font-size:18px; "> <b>Reason : </b></div>
                              <div class="col-sm-7" style="font-size:18px; ">User Not Responsive</div>
                          </div>
                      </div>
    <br />
                      <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important; height:50px; padding-top:10px">
                          <div class="col-sm-12">
                            <div class="col-sm-offset-3"></div>
                              <div class="col-sm-12" style="font-size:18px; text-align:center"> <b>Open a Ticket </b></div>
                          </div>
                      </div> -->


                <div style="margin-top:5px;margin-bottom:8px;">
                    <button class="" type="button" data-dismiss="modal" style="text-align: left;
                                            border-radius: 5px !important;
                                            padding: 3px 10px !important;
                                            background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important;
                                            margin-top: 20px !important;
                                            margin-bottom: 10px !important;
                                            padding: 4px;
                                            border-radius: 24px;
                                            color: black;
                                            background: white;
                                            margin-left: 40%;
                                            border: 1px solid #cbcbcb;">
                                                <span class="append-icon" style="text-align:left;margin-right:42"><img src="img/true.png" style="width:20px;"> &nbsp;&nbsp;O.K</span>
                                            </button>
                </div>
            </div>

        </div>
    </div>




    {{-- done modal --}}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="overflow-x: scroll; display: none;">
        <div class="modal-dialog modal-lg" style="width : 650px ;">
            <div style="height: 10px; width: 100%;background-color: green; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;"><img src="img/sidebar/logo.png.jpeg"></div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Project
                                    ID</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>

                </div>
                <div class="col-lg-12">
                    <div class="col-lg-6" style="border:1px solid #aab7a2;">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work Start</h3>
                    </div>
                    <div class="col-lg-6" style="border:1px solid #aab7a2">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work End</h3>
                    </div>
                </div>
                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-2"> 200,- €</div>
                        <div class="col-sm-1" style="padding:0px;"> <img src="img/true.png" style="width: 21px;float:right;"> </div>
                    </div>
                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-2"> 200,- €</div>
                        <div class="col-sm-1" style="padding:0px;"> <img src="img/true.png" style="width: 21px;float:right;"> </div>
                    </div>
                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-2" style="margin-top:8px"> 200,- €</div>
                        <div class="col-sm-1" style="padding:0px;"> <img src="img/false.png" style="width: 21px;float:right; margin-top:10px"> </div>
                    </div>
                </div>
                <div class="bacgcustom row margin6 projectRow brdl4" style="margin-bottom: 0px !important;padding:4px; margin-top:20px !important; border:1px solid grey; border-bottom:none; background-color:#9DC23A !important ">
                    <div class="col-sm-12" style="">
                        <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Job Budget</div>
                        <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Ready Paid</div>
                        <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Remain</div>
                        <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Refund</div>
                    </div>
                </div>
                <div class="row margin6 projectRow vd_bg-light-grey  brdl4" style="border:1px solid grey">
                    <div class="col-sm-12">
                        <div class="col-sm-3 text-center2">2000,- €</div>
                        <div class="col-sm-3 text-center2">2000,- €</div>
                        <div class="col-sm-3 col-sm-offset-1"> 2000,- €</div>
                        <div class="col-sm-2" style="padding:0px;"> 2000,- €</div>
                    </div>
                </div>

                <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px; margin-top:15px">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-success " data-dismiss="modal">Accept</button>
                    </div>
                    <div class="col-sm-6 ">
                        <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#denne" data-dismiss="modal">Denied</button>
                    </div>
                </div>
            </div>

        </div>
    </div>








    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">

        <div class="modal-dialog modal-lg" style="width:650px">
            <div style="height: 10px; width: 100%;background-color: red; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;"><img src="img/sidebar/logo.png.jpeg"></div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Project
                                      ID</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-6" style="border:1px solid #aab7a2;">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work Start</h3>
                    </div>
                    <div class="col-lg-6" style="border:1px solid #aab7a2">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work End</h3>
                    </div>
                </div>
                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-2"> 200,- €</div>
                        <div class="col-sm-1" style="padding:0px;"> <img src="img/true.png" style="width: 21px;float:right;"> </div>
                    </div>
                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-2"> 200,- €</div>
                        <div class="col-sm-1" style="padding:0px;"> <img src="img/true.png" style="width: 21px;float:right;"> </div>
                    </div>
                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-2" style="margin-top:8px"> 200,- €</div>
                        <div class="col-sm-1" style="padding:0px;"> <img src="img/false.png" style="width: 21px;float:right; margin-top:10px"> </div>
                    </div>
                </div>
                <div class="col-sm-12" style=" margin-top:20px">
                    <textarea style="border:1px solid red; width:100%;  height:150px; background-color: white;" readonly="">Enter Reason</textarea>
                </div>


                <div style="margin-top:5px;margin-bottom:8px;">
                    <button class="" type="button" data-dismiss="modal" style="text-align: left;
                                        border-radius: 5px !important;
                                        padding: 3px 10px !important;
                                        background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important;
                                        margin-top: 20px !important;
                                        margin-bottom: 10px !important;
                                        padding: 4px;
                                        border-radius: 24px;
                                        color: black;
                                        background: white;
                                        margin-left: 40%;
                                        border: 1px solid #cbcbcb;">
                                            <span class="append-icon" style="text-align:left;margin-right:42"><img src="img/send.png" style="width:20px;"> &nbsp;&nbsp;O.K</span>
                                        </button>
                </div>
            </div>

        </div>
    </div>
















    <div class="modal right fade infoModal" id="viewinvoice" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="z-index: 1041; display: none;">
        <button type="button" class=" close " data-dismiss="modal" aria-label="Close" style="background: #fff; margin-left: 53px; float:left;opacity:1;font-size:4rem;padding: 10px">
            <span aria-hidden="true">X</span>
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header vd_bg-green text-center relative modal-header-projects" style="padding: 0">

                </div>
                <div class="modal-body h100" style="padding: 0; background: #ebebeb;">
                    <button class="btn btn-info btn-bg" style="position:absolute; left:10px; top:20px;width:143px">Print</button>
                    <button class="btn btn-info btn-bg" style="position:absolute; left:10px; top:80px; width:143px">Sent As E-Mail</button>
                    <page size="A4" layout="portrait">
                        <div class="header" align="center">
                            <img src="img/sidebar/logo.png.jpeg" width="200" height="50">
                        </div>

                        <div class="page-heading">
                            <h3>Invoice to User</h3>
                        </div>

                        <div class="first-content">
                            <table width="100%">
                                <tbody><tr>
                                    <td align="left">
                                        <div class="identity">
                                            <p align="left">
                                                Shop Name <br> Username / Lastname <br> Shop Address &nbsp; Houseno. <br><br> City - Zipcode

                                            </p>
                                        </div>
                                    </td>

                                    <td align="right">
                                        <div class="status" align="right">
                                            <table width="60%">
                                                <tbody><tr>
                                                    <th align="left">Company</th>
                                                    <td align="right">Shop Name</td>
                                                </tr>
                                                <tr>
                                                    <th align="left">Company ID</th>
                                                    <td align="right">De-10001</td>
                                                </tr>
                                                <tr>
                                                    <th align="left">Invoice No.</th>
                                                    <td align="right">Yami-10001</td>
                                                </tr>
                                                <tr>
                                                    <th align="left">Date - Time</th>
                                                    <td align="right">31.11.2017 – 00:00</td>
                                                </tr>
                                                <tr>
                                                    <th align="left">Invoice For</th>
                                                    <td style="font-weight:bold;" align="right">Assignments</td>
                                                </tr>
                                                <tr>
                                                    <th align="left">Status</th>
                                                    <td style="font-weight:bold;" align="right">Paid</td>
                                                </tr>
                                            </tbody></table>
                                        </div>
                                    </td>
                                </tr>
                            </tbody></table>
                        </div>
                        <br>
                        <div id="main-content">
                            <h3>Assignment Payment Invoice 17.07.2017</h3>

                            <table class="main" border="1" width="100%">
                                <tbody><tr>
                                    <th>#</th>
                                    <th>Job ID</th>
                                    <th>Assignment Title</th>
                                    <th>Budget</th>
                                    <th>Paid To</th>
                                </tr>
                                <tr bgcolor=" #f2f2f2">
                                    <td>01</td>
                                    <td>AS-10002</td>
                                    <td>Create Logo</td>
                                    <td>2.000,00 €</td>
                                    <td>Milestone</td>
                                </tr>
                            </tbody></table>
                        </div>

                        <div class="right-table">
                            <hr style="width: 39.5%;" align="right"><table class="sub-total" cellspacing="0" border="0" align="right" width="40%">
                                
                                <tbody><tr class="border_top">
                                    <td style="font-weight: bold;">Sub Total</td>
                                    <td style="font-weight: bold;" align="right">2.000,00 €</td>
                                </tr>

                                <tr style="background-color: #F2F2F2;">
                                    <td style="border-top: 2px solid #d9d9d9;">+ 19 %</td>
                                    <td style="border-top: 2px solid #d9d9d9;" align="right">380,00 €</td>
                                </tr>

                                <tr class="border_bottom">
                                    <td style="font-weight: bold; font-size: large;">Total</td>
                                    <td style="font-weight: bold; font-size: large;" align="right">2.000,00 €</td>
                                </tr>
                            </tbody></table>
                        </div>

                        <br>
                        <div class="bottom-table">
                            <table border="1" width="100%">
                                <tbody><tr>
                                    <th>Notifications</th>
                                </tr>
                                <tr style="background-color: #d9d9d9;;">
                                    <td>Payment can´t be Released without your Permission</td>
                                </tr>

                            </tbody></table>
                        </div>
                    </page>

                </div>

            </div>
        </div>
    </div>











    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 19px;">

        <div class="modal-dialog modal-lg" style="width:650px">
            <div style="height: 10px; width: 100%;background-color: red; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;"><img src="img/sidebar/logo.png.jpeg"></div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Project
                                          ID</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>
                </div>
                <div class="col-sm-12">
                    <div class="col-lg-6" style="border:1px solid #aab7a2;">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work Start</h3>
                    </div>
                    <div class="col-lg-6" style="border:1px solid #aab7a2">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work End</h3>
                    </div>
                </div>
                <div class="col-sm-12">

                    <div class="bacgcustom row margin6 projectRow brdl4" style="margin-bottom: 0px !important;padding:4px; margin-top:20px !important; border:1px solid grey; border-bottom:none; background-color:#9DC23A !important ">
                        <div class="col-sm-12" style="">
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Job Budget</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Ready Paid</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Remain</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Refund</div>
                        </div>
                    </div>
                    <div class="row margin6 projectRow vd_bg-light-grey  brdl4" style="border:1px solid grey">
                        <div class="col-sm-12">
                            <div class="col-sm-3 text-center2">2000,- €</div>
                            <div class="col-sm-3 text-center2">2000,- €</div>
                            <div class="col-sm-3 col-sm-offset-1"> 2000,- €</div>
                            <div class="col-sm-2" style="padding:0px;"> 2000,- €</div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-12">
                    <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important; height:50px; padding-top:10px">
                        <div class="col-sm-5" style="font-size:18px; "> <b>Reason : </b></div>
                        <div class="col-sm-7" style="font-size:18px; float: right">User Not Responsive</div>
                    </div>
                </div>
                <br>

                <div class="col-sm-12">
                    <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important; height:50px; padding-top:10px">

                        <div class="col-sm-5" style="font-size:18px; "> <b>Refund Ammount : </b></div>
                        <div class="col-sm-7" style="font-size:18px;  float: right ">1000.€</div>
                    </div>
                </div>
                <div style="margin-top:5px;margin-bottom:8px;">
                    <button class="" type="button" data-dismiss="modal" style="text-align: left;
                                            border-radius: 5px !important;
                                            padding: 3px 10px !important;
                                            background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important;
                                            margin-top: 20px !important;
                                            margin-bottom: 10px !important;
                                            padding: 4px;
                                            border-radius: 24px;
                                            color: black;
                                            background: white;
                                            margin-left: 40%;
                                            border: 1px solid #cbcbcb;">
                                                <span class="append-icon" style="text-align:left;margin-right:42"><img src="img/send.png" style="width:20px;"> &nbsp;&nbsp;O.K</span>
                                            </button>
                </div>
            </div>

        </div>
    </div>











    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 19px;">

        <div class="modal-dialog modal-lg" style="width:650px">
            <div style="height: 10px; width: 100%;background-color: green; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;"><img src="img/sidebar/logo.png.jpeg"></div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Project
                                          ID</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>
                </div>
                <div class="col-sm-12">
                    <div class="col-lg-6" style="border:1px solid #aab7a2;">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work Start</h3>
                    </div>
                    <div class="col-lg-6" style="border:1px solid #aab7a2">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work End</h3>
                    </div>
                </div>
                <div class="col-sm-12">

                    <div class="bacgcustom row margin6 projectRow brdl4" style="margin-bottom: 0px !important;padding:4px; margin-top:20px !important; border:1px solid grey; border-bottom:none; background-color:#9DC23A !important ">
                        <div class="col-sm-12" style="">
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Job Budget</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Ready Paid</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Remain</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Refund</div>
                        </div>
                    </div>
                    <div class="row margin6 projectRow vd_bg-light-grey  brdl4" style="border:1px solid grey">
                        <div class="col-sm-12">
                            <div class="col-sm-3 text-center2">2000,- €</div>
                            <div class="col-sm-3 text-center2">2000,- €</div>
                            <div class="col-sm-3 col-sm-offset-1"> 2000,- €</div>
                            <div class="col-sm-2" style="padding:0px;"> 2000,- €</div>
                        </div>
                    </div>

                </div>
                <!--
                      <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important; height:50px; padding-top:10px">
                          <div class="col-sm-12">
                              <div class="col-sm-5" style="font-size:18px; "> <b>Reason : </b></div>
                              <div class="col-sm-7" style="font-size:18px; ">User Not Responsive</div>
                          </div>
                      </div>
    <br />
                      <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important; height:50px; padding-top:10px">
                          <div class="col-sm-12">
                            <div class="col-sm-offset-3"></div>
                              <div class="col-sm-12" style="font-size:18px; text-align:center"> <b>Open a Ticket </b></div>
                          </div>
                      </div> -->


                <div style="margin-top:5px;margin-bottom:8px;">
                    <button class="" type="button" data-dismiss="modal" style="text-align: left;
                                            border-radius: 5px !important;
                                            padding: 3px 10px !important;
                                            background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important;
                                            margin-top: 20px !important;
                                            margin-bottom: 10px !important;
                                            padding: 4px;
                                            border-radius: 24px;
                                            color: black;
                                            background: white;
                                            margin-left: 40%;
                                            border: 1px solid #cbcbcb;">
                                                <span class="append-icon" style="text-align:left;margin-right:42"><img src="img/true.png" style="width:20px;"> &nbsp;&nbsp;O.K</span>
                                            </button>
                </div>
            </div>

        </div>
    </div>







    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 19px;">

        <div class="modal-dialog modal-lg" style="width:650px">
            <div style="height: 10px; width: 100%;background-color: red; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;"><img src="img/sidebar/logo.png.jpeg"></div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Project
                                      ID</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>
                </div>
                <div class="col-sm-12">
                    <div class="col-lg-6" style="border:1px solid #aab7a2;">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work Start</h3>
                    </div>
                    <div class="col-lg-6" style="border:1px solid #aab7a2">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work End</h3>
                    </div>
                </div>
                <div class="col-sm-12">

                    <div class="bacgcustom row margin6 projectRow brdl4" style="margin-bottom: 0px !important;padding:4px; margin-top:20px !important; border:1px solid grey; border-bottom:none; background-color:#9DC23A !important ">
                        <div class="col-sm-12" style="">
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Job Budget</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Ready Paid</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Remain</div>
                            <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Refund</div>
                        </div>
                    </div>
                    <div class="row margin6 projectRow vd_bg-light-grey  brdl4" style="border:1px solid grey">
                        <div class="col-sm-12">
                            <div class="col-sm-3 text-center2">2000,- €</div>
                            <div class="col-sm-3 text-center2">2000,- €</div>
                            <div class="col-sm-3 col-sm-offset-1"> 2000,- €</div>
                            <div class="col-sm-2" style="padding:0px;"> 2000,- €</div>
                        </div>
                    </div>

                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important; height:50px; padding-top:10px">
                    <div class="col-sm-12">
                        <div class="col-sm-5" style="font-size:18px; "> <b>Reason : </b></div>
                        <div class="col-sm-7" style="font-size:18px; ">User Not Responsive</div>
                    </div>
                </div>
                <br>
                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important; height:50px; padding-top:10px">
                    <div class="col-sm-12">
                        <div class="col-sm-offset-3"></div>
                        <div class="col-sm-12" style="font-size:18px; text-align:center"> <b>Open a Ticket </b></div>
                    </div>
                </div>


                <div style="margin-top:5px;margin-bottom:8px;">
                    <button class="" type="button" data-dismiss="modal" style="text-align: left;
                                        border-radius: 5px !important;
                                        padding: 3px 10px !important;
                                        background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important;
                                        margin-top: 20px !important;
                                        margin-bottom: 10px !important;
                                        padding: 4px;
                                        border-radius: 24px;
                                        color: black;
                                        background: white;
                                        margin-left: 40%;
                                        border: 1px solid #cbcbcb;">
                                            <span class="append-icon" style="text-align:left;margin-right:42"><img src="img/false.png" style="width:20px;"> &nbsp;&nbsp;O.K</span>
                                        </button>
                </div>
            </div>

        </div>
    </div>










    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 19px;">

        <div class="modal-dialog modal-lg" style="width:650px">
            <div style="height: 10px; width: 100%;background-color: red; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;"><img src="img/sidebar/logo.png.jpeg"></div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Project
                                      ID</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-6" style="border:1px solid #aab7a2;">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work Start</h3>
                    </div>
                    <div class="col-lg-6" style="border:1px solid #aab7a2">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work End</h3>
                    </div>
                </div>
                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-2"> 200,- €</div>
                        <div class="col-sm-1" style="padding:0px;"> <img src="img/true.png" style="width: 21px;float:right;"> </div>
                    </div>
                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-2"> 200,- €</div>
                        <div class="col-sm-1" style="padding:0px;"> <img src="img/true.png" style="width: 21px;float:right;"> </div>
                    </div>
                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-2" style="margin-top:8px"> 200,- €</div>
                        <div class="col-sm-1" style="padding:0px;"> <img src="img/false.png" style="width: 21px;float:right; margin-top:10px"> </div>
                    </div>
                </div>
                <div class="col-sm-12" style=" margin-top:20px">
                    <textarea style="border:1px solid red; width:100%;  height:150px; background-color: white;" readonly="">Enter Reason</textarea>
                </div>


                <div style="margin-top:5px;margin-bottom:8px;">
                    <button class="" type="button" data-dismiss="modal" style="text-align: left;
                                        border-radius: 5px !important;
                                        padding: 3px 10px !important;
                                        background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important;
                                        margin-top: 20px !important;
                                        margin-bottom: 10px !important;
                                        padding: 4px;
                                        border-radius: 24px;
                                        color: black;
                                        background: white;
                                        margin-left: 40%;
                                        border: 1px solid #cbcbcb;">
                                            <span class="append-icon" style="text-align:left;margin-right:42"><img src="img/send.png" style="width:20px;"> &nbsp;&nbsp;O.K</span>
                                        </button>
                </div>
            </div>

        </div>
    </div>








    <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style=" display: none; padding-left: 19px; overflow-x: scroll; width 750px !important;
">
        <div class="modal-dialog modal-lg" style="width : 650px ;">
            <div style="height: 10px; width: 100%;background-color: green; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;"><img src="img/sidebar/logo.png.jpeg"></div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Project
                                    ID</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>

                </div>
                <div class="col-lg-12">
                    <div class="col-lg-6" style="border:1px solid #aab7a2;">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work Start</h3>
                    </div>
                    <div class="col-lg-6" style="border:1px solid #aab7a2">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Work End</h3>
                    </div>
                </div>
                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-2"> 200,- €</div>
                        <div class="col-sm-1" style="padding:0px;"> <img src="img/true.png" style="width: 21px;float:right;"> </div>
                    </div>
                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-2"> 200,- €</div>
                        <div class="col-sm-1" style="padding:0px;"> <img src="img/true.png" style="width: 21px;float:right;"> </div>
                    </div>
                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-2" style="margin-top:8px"> 200,- €</div>
                        <div class="col-sm-1" style="padding:0px;"> <img src="img/false.png" style="width: 21px;float:right; margin-top:10px"> </div>
                    </div>
                </div>
                <div class="bacgcustom row margin6 projectRow brdl4" style="margin-bottom: 0px !important;padding:4px; margin-top:20px !important; border:1px solid grey; border-bottom:none; background-color:#9DC23A !important ">
                    <div class="col-sm-12" style="">
                        <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Job Budget</div>
                        <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Ready Paid</div>
                        <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Remain</div>
                        <div class="col-sm-3 text-center2" style="font-family: 'Poppins', sans-serif">Refund</div>
                    </div>
                </div>
                <div class="row margin6 projectRow vd_bg-light-grey  brdl4" style="border:1px solid grey">
                    <div class="col-sm-12">
                        <div class="col-sm-3 text-center2">2000,- €</div>
                        <div class="col-sm-3 text-center2">2000,- €</div>
                        <div class="col-sm-3 col-sm-offset-1"> 2000,- €</div>
                        <div class="col-sm-2" style="padding:0px;"> 2000,- €</div>
                    </div>
                </div>

                <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px; margin-top:15px">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-success " data-dismiss="modal">Accept</button>
                    </div>
                    <div class="col-sm-6 ">
                        <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#denne" data-dismiss="modal">Denied</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection