@php
$title = "UserSection"
@endphp

@extends('layouts.master')

@section('extended-header')

<tabs>



    <tab name="Service Purchase" :selected="true" icon="fa fa-shopping-basket" id="MyPurchaseAreaServicesPurchase"></tab>

    <tab name="Item Purchase" icon="fa fa-shopping-cart" id="MyPurchaseAreaitemsPurchase"></tab>


</tabs>

@endsection

@section('content')
<div role="tabpanel" class="tab-pane " id="MyPurchaseArea">
                <div style="margin-top: 2px;" class="border-box">
                    <div class=" custom-page-content">

                    </div>
                    <!-- my purchase table -->
                    <div class="main-content">
                        <div class="tab-section">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
                                    <div class=" bhoechie-tab">
                                        <div class="bhoechie-tab-content">
                                            <div>
                                                <div class="tab-content no-t-m">
                                                    <div role="tabpanel" id="MyPurchaseAreaServicesPurchase" class="tab-pane">
                                                        <!--second section-->
                                                        <div style="margin-top: -2px;" class="vd_content-section clearfix p-t-0">
                                                            <div class="row">
                                                                <div style="margin-bottom: -71px;" class="col-md-12">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">

                                                                            <div class="row mrgn30-0 projectRow" data-toggle="modal" data-target="#myModal3">
                                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                                    <div class="col-sm-4 main-log-part">
                                                                                        <div class="main-log-left">
                                                                                            <img src="img/mini.png">
                                                                                        </div>
                                                                                        <div class="main-log-right">
                                                                                            <h4>Company Name</h4>
                                                                                            <p style="color: black;">Company ID</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdLeft brdRight text-align">
                                                                                        <h4>Service Title</h4>
                                                                                        <p style="color: black;">Purchase ID</p>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdRight text-align">
                                                                                        <h4>Paid</h4>
                                                                                        <p style="color: black;">10,-€ Paypal</p>
                                                                                    </div>

                                                                                    <div class="col-sm-4 text-align brdRight">
                                                                                        <h4 style="margin:0;">
                                                                                            Status
                                                                                        </h4>
                                                                                        <button type="button" class="btn btn-primary" style=";font-size: 11px; "><span class="btn-primary-text">Used</span> </button>
                                                                                    </div>
                                                                                    <!-- <div class="col-sm-2 text-align">
                                                                                        <h4 style="margin:0;">
                                                                                            Options
                                                                                        </h4>

                                                                                        <button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal4"><span class="btn-primary-text">View</span></button>

                                                                                    </div> -->
                                                                                </a>
                                                                            </div>
                                                                            <div class="row mrgn30-0 projectRow" data-toggle="modal" data-target="#myModal4">
                                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                                    <div class="col-sm-4 main-log-part">
                                                                                        <div class="main-log-left">
                                                                                            <img src="img/mini.png">
                                                                                        </div>
                                                                                        <div class="main-log-right">
                                                                                            <h4>Company Name</h4>
                                                                                            <p style="color: black;">Company ID</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdLeft brdRight text-align">
                                                                                        <h4>Service Title</h4>
                                                                                        <p style="color: black;">Purchase ID</p>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdRight text-align">
                                                                                        <h4>Paid</h4>
                                                                                        <p style="color: black;">10,-€ Paypal</p>
                                                                                    </div>

                                                                                    <div class="col-sm-4 text-align brdRight">
                                                                                        <h4 style="margin:0;">
                                                                                            Status
                                                                                        </h4>
                                                                                        <button type="button" class="btn btn-primary" style=";font-size: 11px; background-color:red !important;"><span class="btn-primary-text">Unsed</span> </button>
                                                                                        <button type="button" class="btn btn-primary" style=";font-size: 11px;"><span class="btn-primary-text">Gift</span> </button>

                                                                                    </div>
                                                                                    <!-- <div class="col-sm-2 text-align">
                                                                                        <h4 style="margin:0;">
                                                                                            Options
                                                                                        </h4>

                                                                                        <button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal4"><span class="btn-primary-text">View</span></button>

                                                                                    </div> -->
                                                                                </a>
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
                                                    <div role="tabpanel" class="tab-pane  " id="MyPurchaseAreaitemsPurchase">
                                                        <!--second section-->
                                                        <div style="margin-top: -2px;" class="vd_content-section clearfix p-t-0">
                                                            <div class="row">
                                                                <div style="margin-top: 5px;margin-bottom: -71px; margin-top:6px;" class="col-md-12">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">

                                                                            <div class="row mrgn30-0 projectRow">
                                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                                    <div class="col-sm-12 text-align">

                                                                                        <h4>Comming soon</h4>

                                                                                    </div>
                                                                                </a>
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
                                                    <div role="tabpanel" class="tab-pane  " id="MyPurchaseAreaServicesUsed">
                                                        <!--second section-->
                                                        <div style="margin-top: -2px;" class="vd_content-section clearfix p-t-0">
                                                            <div class="row">
                                                                <div style="margin-bottom: -71px;" class="col-md-12">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">

                                                                            <div class="row mrgn30-0 projectRow">
                                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                                    <div class="col-sm-4 main-log-part">
                                                                                        <div class="main-log-left">
                                                                                            <img src="img/mini.png">
                                                                                        </div>
                                                                                        <div class="main-log-right">
                                                                                            <h4>Company Name</h4>
                                                                                            <p style="color: black;">Company ID</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdLeft brdRight text-align">
                                                                                        <h4>Service Title</h4>
                                                                                        <p style="color: black;">Purchase ID</p>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdRight text-align">
                                                                                        <h4>Paid</h4>
                                                                                        <p style="color: black;">10,-€ Paypal</p>
                                                                                    </div>

                                                                                    <div class="col-sm-2 text-align brdRight">
                                                                                        <h4 style="margin:0;">
                                                                                            Status
                                                                                        </h4>

                                                                                        <button type="button" class="btn btn-primary " style="font-size: 11px;"><span class="btn-primary-text">Used</span></button>

                                                                                        <button type="button" class="btn btn-primary" style=";font-size: 11px;"><span class="btn-primary-text">Gift</span> </button>
                                                                                    </div>
                                                                                    <div class="col-sm-2 text-align">
                                                                                        <h4 style="margin:0;">
                                                                                            Options
                                                                                        </h4>

                                                                                        <button type="button" class="btn btn-primary "><span class="btn-primary-text">View</span></button>

                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="row mrgn30-0 projectRow">
                                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                                    <div class="col-sm-4 main-log-part">
                                                                                        <div class="main-log-left">
                                                                                            <img src="img/mini.png">
                                                                                        </div>
                                                                                        <div class="main-log-right">
                                                                                            <h4>Company Name</h4>
                                                                                            <p style="color: black;">Company ID</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdLeft brdRight text-align">
                                                                                        <h4>Service Title</h4>
                                                                                        <p style="color: black;">Purchase ID</p>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdRight text-align">
                                                                                        <h4>Paid</h4>
                                                                                        <p style="color: black;">10,-€ Paypal</p>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdRight text-align">
                                                                                        <h4 style="margin:0;">
                                                                                            Options
                                                                                        </h4>
                                                                                        <h4 class="text-height">
                                                                                            <button type="button" class="btn btn-primary "><span class="btn-primary-text">View</span></button>
                                                                                        </h4>
                                                                                    </div>

                                                                                    <div class="col-sm-2 text-align">
                                                                                        <h4 style="margin:0;">
                                                                                            Options
                                                                                        </h4>
                                                                                        <h4 class="text-height">
                                                                                            <button type="button" class="btn btn-primary "><span class="btn-primary-text-lg">Unused</span></button>
                                                                                        </h4>
                                                                                    </div>
                                                                                </a>
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
                                                    <div role="tabpanel" class="tab-pane  " id="MyPurchaseAreaServicesExpired">
                                                        <!--second section-->
                                                        <div style="margin-top: -2px;" class="vd_content-section clearfix p-t-0">
                                                            <div class="row">
                                                                <div style="margin-bottom: -71px;" class="col-md-12">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">

                                                                            <div class="row mrgn30-0 projectRow">
                                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                                    <div class="col-sm-4 main-log-part">
                                                                                        <div class="main-log-left">
                                                                                            <img src="img/mini.png">
                                                                                        </div>
                                                                                        <div class="main-log-right">
                                                                                            <h4>Company Name</h4>
                                                                                            <p style="color: black;">Company ID</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdLeft brdRight text-align">
                                                                                        <h4>Service Title</h4>
                                                                                        <p style="color: black;">Purchase ID</p>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdRight text-align">
                                                                                        <h4>Paid</h4>
                                                                                        <p style="color: black;">10,-€ Paypal</p>
                                                                                    </div>

                                                                                    <div class="col-sm-2 text-align brdRight">
                                                                                        <h4 style="margin:0;">
                                                                                            Status
                                                                                        </h4>

                                                                                        <button type="button" class="btn btn-primary " style="font-size: 11px"><span class="btn-primary-text">Used</span></button>

                                                                                        <button type="button" class="btn btn-primary" style=";font-size: 11px;"><span class="btn-primary-text">Gift</span> </button>
                                                                                    </div>
                                                                                    <div class="col-sm-2 text-align">
                                                                                        <h4 style="margin:0;">
                                                                                            Options
                                                                                        </h4>

                                                                                        <button type="button" class="btn btn-primary "><span class="btn-primary-text">View</span></button>

                                                                                        <button type="button" class="btn btn-primary" style="font-size: 11px;background: red;border-color: red;"><span class="btn-primary-text-lg">Expired</span></button>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="row mrgn30-0 projectRow">
                                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                                    <div class="col-sm-4 main-log-part">
                                                                                        <div class="main-log-left">
                                                                                            <img src="img/mini.png">
                                                                                        </div>
                                                                                        <div class="main-log-right">
                                                                                            <h4>Company Name</h4>
                                                                                            <p style="color: black;">Company ID</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdLeft brdRight text-align">
                                                                                        <h4>Service Title</h4>
                                                                                        <p style="color: black;">Purchase ID</p>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdRight text-align">
                                                                                        <h4>Paid</h4>
                                                                                        <p style="color: black;">10,-€ Paypal</p>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdRight text-align">
                                                                                        <h4 style="margin:0;">
                                                                                            Options
                                                                                        </h4>
                                                                                        <h4 class="text-height">
                                                                                            <button type="button" class="btn btn-primary "><span class="btn-primary-text-lg">Unused</span></button>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div class="col-sm-2 text-align">
                                                                                        <h4 style="margin:0;">
                                                                                            Options
                                                                                        </h4>

                                                                                        <button type="button" class="btn btn-primary "><span class="btn-primary-text">View</span></button>

                                                                                        <button type="button" class="btn btn-primary" style="font-size: 11px;background: red;border-color: red;"><span class="btn-primary-text-lg">Expired</span></button>
                                                                                    </div>
                                                                                </a>
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
                                                    <div role="tabpanel" class="tab-pane  " id="MyPurchaseAreaSentitasGift">
                                                        <!--second section-->
                                                        <div style="margin-top: -2px;" class="vd_content-section clearfix p-t-0">
                                                            <div class="row">
                                                                <div style="margin-bottom: -71px;" class="col-md-12">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">

                                                                            <div class="row mrgn30-0 projectRow">
                                                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                                    <div class="col-sm-4 brdRight">
                                                                                        <img src="img/mini.png" alt="" style="float: left;margin-top: 11px;height: 80px;">
                                                                                        <div class="text-con">
                                                                                            <h4>
                                                                                                7
                                                                                            </h4>
                                                                                            <p style="color: black;">Company ID</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdRight text-align">
                                                                                        <h4>Service Title</h4>
                                                                                        <p style="color: black;">Purchase ID</p>
                                                                                    </div>
                                                                                    <div class="col-sm-2 brdRight text-align">
                                                                                        <h4>Paid</h4>
                                                                                        <p style="color: black;">10,-€ Paypal</p>
                                                                                    </div>

                                                                                    <div class="col-sm-2 text-align brdRight">
                                                                                        <h4 style="margin:0;">
                                                                                            Status
                                                                                        </h4>

                                                                                        <button type="button" class="btn btn-primary " style="font-size: 11px;"><span class="btn-primary-text">Used</span></button>

                                                                                        <button type="button" class="btn btn-primary" style=";font-size: 11px;"><span class="btn-primary-text">Gift</span> </button>
                                                                                    </div>
                                                                                    <div class="col-sm-2 text-align">
                                                                                        <h4 style="margin:0;">
                                                                                            Options
                                                                                        </h4>

                                                                                        <button type="button" class="btn btn-primary "><span class="btn-primary-text">View</span></button>

                                                                                    </div>
                                                                                </a>
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











            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:650px">
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
                <div class="modal-header" style="padding: 8px;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Service Used</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px; !important"><img src="img/sidebar/logo.png.jpeg"></div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Service Purchase
                                    ID</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Time and Date</strong>
                    </h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">12.07.2017 –
                                    17:30</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:red">Expired Date</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">12.10.2017 –
                                    17:30</strong></h4>
                </div>
                <!-- <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-blue brdl4" style="margin-top:20px !important; border-right:4px solid #3485ef !important">
                  <div class="col-sm-12" style ="height:35px; line-height: -4.5px">
                      <div class="col-sm-5"> <img src="img/code.png" alt="lock" style ="width:20px; height:20px; margin-top:5px"> </div>
                      <div class="col-sm-4 " style="margin-top:5px"> <b> 54545454545 </b></div>

                      <div class="col-sm-1 col-sm-offset-2" style="padding:0px; margin-top:5px"> <img src="img/false.png" style="width: 21px;float:right;"> </div>
                  </div>
              </div> -->
                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important; border-right:4px solid #9DC23A !important">
                    <div class="col-sm-12" style="height:35px; line-height: -4.5px">
                        <div class="col-sm-5"> <img src="img/code.png" alt="lock" style="width:20px; height:20px; margin-top:5px"> </div>
                        <div class="col-sm-4" style="margin-top:5px"> <b> 54545454545 </b></div>

                        <div class="col-sm-1 col-sm-offset-2" style="padding:0px; margin-top:5px"> <img src="img/true.png" style="width: 21px;float:right;"> </div>
                    </div>
                </div>
                <hr class="hfkaniei">
                <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                    <div class="col-lg-5 col-lg-offset-3">
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
    </div>














    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 19px;">
        <div class="modal-dialog" style="width:650px">
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
                <div class="modal-header" style="padding: 8px;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Service Used</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px; !important"><img src="img/sidebar/logo.png.jpeg"></div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Service Purchase
                                ID</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">BS-1234555</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Time and Date</strong>
                    </h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">12.07.2017 –
                                17:30</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:red">Expired Date</strong></h4>
                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">12.10.2017 –
                                17:30</strong></h4>
                </div>
                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important; border-right:4px solid #f85d2c !important">
                    <div class="col-sm-12" style="height:35px; line-height: -4.5px">
                        <div class="col-sm-5"> <img src="img/code.png" alt="lock" style="width:20px; height:20px; margin-top:5px"> </div>
                        <div class="col-sm-4 " style="margin-top:5px"> <b> Unused </b></div>

                        <div class="col-sm-1 col-sm-offset-2" style="padding:0px; margin-top:5px"> <img src="img/true.png" style="width: 21px;float:right;"> </div>
                    </div>
                </div>
                <hr class="hfkaniei">
                <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                    <div class="col-lg-5 col-lg-offset-3">
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
    </div>






    
@endsection