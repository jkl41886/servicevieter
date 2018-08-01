@php
$title = "UserSection"
@endphp

@extends('layouts.master')

@section('extended-header')

<tabs>



  <tab name="Sending Offer" :selected="true" icon="fa fa-bullhorn" id="MyContractsAreaCurrentContracts"></tab>

  <tab name="Started" icon="fa fa-play" id="MyContractsAreaContractsStart"></tab>


  <tab name="Done" icon="fa fa-check-square-o" id="MyContractsAreaContractsDone"></tab>
  <tab name="Work Recieved" icon="fa fa-thumbs-o-up" id="MyContractsAreaWorkRecieved"></tab>
  <tab name="Disputs" icon="fa fa-exclamation-triangle" id="MyContractsAreaContractsdisputes"></tab>
  <tab name="Canceled" icon="fa fa-ban" id="MyContractsAreaCancelledContracts"></tab>


</tabs>

@endsection

@section('content')

<div role="tabpanel" class="tab-pane " id="MyContractsArea">
  <div class="border-box">
    <div class=" custom-page-content">

    </div>
    <!-- my contracts table -->
    <div class="main-content">
      <div class="tab-section">
        <div class="row" style="background: #f3f3f3; margin-top: -9px;">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
            <div class=" bhoechie-tab">
              <div class="bhoechie-tab-content">
                <div>
                  <ul class="nav nav-tabs" role="tablist"></ul>
                  <div class="tab-content no-t-m">
                    <div role="tabpanel" id="MyContractsAreaCurrentContracts" style="margin-bottom: -100px;" class="tab-pane">
                      <!--second section-->
                      <div class="vd_content-section clearfix p-t-0" style=" background: #f3f3f3;">
                        <div class="row">
                          <div style="margin-top: 24px;margin-bottom: 20px;" class="col-md-12">
                            <div class="tab-content no-bd mrgn0 pdng0">
                              <div class="tab-pane active fade in" id="category1">
                                <div class="panel widget container-fluid">
                                  <div class="row mrgn30-0 projectRow">
                                    <a href="javascript:void(0);" title="" class="notice notice-success" style="color: black;">
                                      <div class="col-sm-4 main-log-part" data-toggle="modal" data-target="#sendingModal">
                                        <div class="main-log-left">
                                          <img src="img/mini.png">
                                        </div>
                                        <div class="main-log-right">
                                          <h4>Company Name</h4>
                                          <p style="color: black;">Company ID</p>
                                        </div>
                                      </div>
                                      <div class="col-sm-2 brdLeft brdRight text-align" data-toggle="modal" data-target="#sendingModal">
                                        <h4>Project Title</h4>
                                        <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                      </div>
                                      <div class="col-sm-3 brdRight text-align" data-toggle="modal" data-target="#sendingModal">
                                        <h4>
                                          Budget
                                        </h4>
                                        <h4 class="text-height">
                                          2500,-€ Fix
                                        </h4>
                                      </div>

                                      <div class="col-sm-3 text-align" data-toggle="modal" data-target="#acceptModal">
                                        <h4>
                                          Options
                                        </h4>
                                        <h4 class="text-height">
                                          <button type="button" class="btn btn-primary btn-sm" style="width: 39%"><span class="btn-primary-text">View</span></button>
                                        </h4>
                                      </div>
                                    </a>
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


                    <div role="tabpanel" class="tab-pane  " id="MyContractsAreaWorkRecieved" style="margin-bottom: -100px;">
                      <!--second section-->
                      <div class="vd_content-section clearfix p-t-0">
                        <div class="row">
                          <div style="margin-top: 24px;margin-bottom: 20px;" class="col-md-12">
                            <div class="tab-content no-bd mrgn0 pdng0">
                              <div class="tab-pane active fade in" id="category1">
                                <div class="panel widget container-fluid">
                                  <div class="row mrgn30-0 projectRow">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#recModal" title="" class="notice notice-success" style="color: black;">
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
                                        <h4>Project Title</h4>
                                        <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                      </div>
                                      <div class="col-sm-3  brdRight text-align">
                                        <h4>Waranty</h4>
                                        <p style="color: black;">12.12.2018</p>
                                      </div>

                                      <div class="col-sm-3 text-align">
                                        <h4 style="margin:0;">
                                          Options
                                        </h4>
                                        
                                          <button type="button" class="btn btn-primary btn-sm" style="width: 45%"><span class="btn-primary-text">View</span></button>
                                        </h4>



                                      </div>
                                    </a>
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





                    <div role="tabpanel" class="tab-pane" id="MyContractsAreaContractsdisputes" style="margin-bottom: -100px;">
                      <!--second section-->
                      <div class="vd_content-section clearfix p-t-0">
                        <div class="row">
                          <div style="margin-top: 24px;margin-bottom: 7px;" class="col-md-12">
                            <div class="tab-content no-bd mrgn0 pdng0">
                              <div class="tab-pane active fade in" id="category1">
                                <div class="panel widget container-fluid">
                                  <div class="row mrgn30-0 projectRow">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#desModal" title="" class="notice notice-success" style="color: black;">
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
                                        <h4>Project Title</h4>
                                        <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                      </div>
                                      <div class="col-sm-3  brdRight">
                                        <div class="circleBar" data-percent="65">
                                          <div style="float: left;margin-left: 87px;">
                                            <div class="ab" style=" width:80px; height:80px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                              <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 76px; height: 76px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                                <span class="perc" style="display: block; line-height:79px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">
                                                  65%
                                                </span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-sm-3 text-align">
                                        <h4 style="margin:0;">
                                          Ticket
                                        </h4>
                                        
                                          <button type="button" class="btn btn-primary btn-sm"><span class="btn-primary-text-lg">Open Ticek</span></button>
                                        </h4>

                                      </div>
                                    </a>
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
                      <div class="vd_content-section clearfix p-t-0">
                        <div class="row">
                          <div style="margin-top: 24px;margin-bottom: 7px;" class="col-md-12">
                            <div class="tab-content no-bd mrgn0 pdng0">
                              <div class="tab-pane active fade in" id="category1">
                                <div class="panel widget container-fluid">
                                  <div class="row mrgn30-0 projectRow">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#desModal" title="" class="notice notice-success" style="color: black;">
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
                                        <h4>Project Title</h4>
                                        <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                      </div>


                                      <div class="col-sm-1  brdRight">
                                        <div class="circleBar" data-percent="65" style="margin-top:10px;">
                                          <div style="float: left;margin-left: 7px;">
                                            <div class="ab" style=" width:80px; height:80px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">


                                              <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 76px; height: 76px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                                <span class="perc" style="display: block; line-height:79px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">
                                                  65%
                                                </span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>




                                      <div class="col-sm-2 brdRight text-align">
                                        <button type="button" class="btn btn-primary btn-sm" style="width: 120px;background: #ed7d31;border-color:#ed7d31;margin-top:20px;">New Answer 2</button>
                                      </div>
                                      <div class="col-sm-2 text-align">
                                        <h4 style="margin:0;">
                                          Ticket
                                        </h4>
                                        
                                          <button type="button" class="btn btn-primary btn-sm" style="width: 45%"><span class="btn-primary-text-lg" style="left: 56px;">Ticket ID</span></button>
                                        </h4>

                                      </div>
                                    </a>
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

                    <div role="tabpanel" class="tab-pane  " id="MyContractsAreaCancelledContracts" style="margin-bottom: -100px;">
                      <!--second section-->
                      <div class="vd_content-section clearfix p-t-0">
                        <div class="row">
                          <div style="margin-top: 24px;margin-bottom: 24px;" class="col-md-12">
                            <div class="tab-content no-bd mrgn0 pdng0">
                              <div class="tab-pane active fade in" id="category1">
                                <div class="panel widget container-fluid">
                                  <div class="row mrgn30-0 projectRow">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#canModal" title="" class="notice notice-success" style="color: black;">
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
                                        <h4>Project Title</h4>
                                        <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                      </div>
                                      <div class="col-sm-3  brdRight">
                                        <div class="circleBar" data-percent="65">
                                          <div style="float: left;margin-left: 87px;">
                                            <div class="ab" style=" width:80px; height:80px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                              <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 76px; height: 76px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                                <span class="perc" style="display: block; line-height:79px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">
                                                  65%
                                                </span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-sm-3 text-align">
                                        <h4>
                                          Status
                                        </h4>
                                        <h4 style="margin:0; color: red;">
                                          Canceled
                                        </h4>
                                      </div>
                                    </a>
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
                    <div role="tabpanel" class="tab-pane" id="MyContractsAreaContractsStart" style="margin-bottom: -100px;">
                      <!--second section-->
                      <div class="vd_content-section clearfix p-t-0">
                        <div class="row">
                          <div style="margin-top: 24px;margin-bottom: 20px;" class="col-md-12">
                            <div class="tab-content no-bd mrgn0 pdng0">
                              <div class="tab-pane active fade in" id="category1">
                                <div class="panel widget container-fluid">
                                  <div class="row mrgn30-0 projectRow">
                                    <a href="javascript:void(0);" title="" class="notice notice-success" style="color: black;">
                                      <div class="col-sm-4 main-log-part">
                                        <div class="main-log-left">
                                          <img src="img/mini.png">
                                        </div>
                                        <div class="main-log-right">
                                          <h4>Company Name</h4>
                                          <p style="color: black;">Company ID</p>
                                        </div>
                                      </div>
                                      <div class="col-sm-3 brdLeft brdRight text-align">
                                        <h4>Project Title</h4>
                                        <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                      </div>
                                      <div class="col-sm-2  brdRight">
                                        <div class="circleBar" data-percent="65">
                                          <div style="float: left;margin-left: 7px;margin-top:10px;">
                                            <div class="ab" style=" width:80px; height:80px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%); margin-left: 30% !important;">
                                              <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 76px; height: 76px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                                <span align="center" class="perc" style="display: block; line-height:79px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">
                                                  65%
                                                </span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-3 text-align">
                                        <button type="button" data-toggle="modal" data-target="#startedModal" class="btn btn-primary btn-sm" style="width: 120px;background: #ed7d31;border-color:#ed7d31;margin-top: 35px;">Release/Refund</button>
                                      </div>
                                                                                        <!-- <div class="col-sm-2 text-align">
                                                                                            <h4 style="margin:0;">
                                                                                                Options
                                                                                            </h4>
                                                                                            <h4 class="text-height">
                                                                                                <button type="button" class="btn btn-primary btn-sm" style="width: 45%"><span class="btn-primary-text">View</span></button>
                                                                                            </h4>


                                                                                          </div> -->
                                                                                        </a>
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
                                                                        <div role="tabpanel" class="tab-pane  " id="MyContractsAreaContractsDone" style="margin-bottom: -100px;">
                                                                          <!--second section-->
                                                                          <div class="vd_content-section clearfix">
                                                                            <div class="row">
                                                                              <div style="margin-top: 7px;margin-bottom: 20px;" class="col-md-12">
                                                                                <div class="tab-content no-bd mrgn0 pdng0">
                                                                                  <div class="tab-pane active fade in" id="category1">
                                                                                    <div class="panel widget container-fluid">
                                                                                      <div class="row mrgn30-0 projectRow">
                                                                                        <a href="javascript:void(0);" title="" class="notice notice-success" style="color: black;">
                                                                                          <div class="col-sm-4 main-log-part" data-toggle="modal" data-target="#doneModal">
                                                                                            <div class="main-log-left">
                                                                                              <img src="img/mini.png">
                                                                                            </div>
                                                                                            <div class="main-log-right">
                                                                                              <h4>Company Name</h4>
                                                                                              <p style="color: black;">Company ID</p>
                                                                                            </div>
                                                                                          </div>
                                                                                          <div class="col-sm-2 brdLeft brdRight text-align" data-toggle="modal" data-target="#doneModal">
                                                                                            <h4>Project Title</h4>
                                                                                            <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                                                                          </div>
                                                                                          <div class="col-sm-1  brdRight" data-toggle="modal" data-target="#doneModal">
                                                                                            <div class="circleBar" data-percent="65" style="margin-top:10px;">
                                                                                              <div style="float: left;margin-left: 7px;">
                                                                                                <div class="ab" style=" width:80px; height:80px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                                                                  <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 76px; height: 76px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                                                                                    <span class="perc" style="display: block; line-height:79px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">
                                                                                                      65%
                                                                                                    </span>
                                                                                                  </div>
                                                                                                </div>
                                                                                              </div>
                                                                                            </div>
                                                                                          </div>
                                                                                          <div class="col-sm-2 brdRight text-align" data-toggle="modal" data-target="#doneModal">
                                                                                            <button type="button" class="btn btn-primary btn-sm" style="margin-top:20px;"><span class="btn-primary-text-lg">View Contract</span></button>
                                                                                          </div>
                                                                                          <div class="col-sm-2 text-align">
                                                                                            <h4 style="margin:0;">
                                                                                              Options
                                                                                            </h4>
                                                                                            <h4 class="text-height">
                                                                                              <button type="button" data-toggle="modal" data-target="#closeTheJob" class="btn btn-primary btn-sm"><span class="btn-primary-text-lg">Close The Job</span></button>
                                                                                            </h4>

                                                                                          </div>
                                                                                        </a>
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












<div class="modal right fade infoModal" id="acceptModal" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="z-index: 1041; display: none;">
        <button type="button" class=" close " data-dismiss="modal" aria-label="Close" style="background-color: #fff; margin-left: 53px; float:left;opacity:1;font-size:4rem;padding: 10px">
            <span aria-hidden="true">X</span>
        </button>

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header vd_bg-green " style="padding: 0">
                    <div class="relative modal-header-projects">
                        <div class="row  vd_white ">
                            <div class="col-lg-12">
                                <div class="col-sm-1">
                                    <i data-dismiss="modal" class="fa fa-arrow-left pull left" style="background: none; box-shadow: none; margin-top: 20px; font-size: 20px; cursor: pointer"></i>
                                </div>
                                <div class="col-sm-11">
                                    <h2 style="color: white; font-weight: bold; margin-left: 35%">Start Contract</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body h100" style="padding: 0; background-color: #f3f3f3">

                    <div class="row" align="center">
                        <div class=" col-lg-12 job-details" style="background-color: white !important;">
                            <div style="margin-top: 6px">
                                <span style=" font-size: 24px; margin-left:35px">Job Title: Create new design</span>
                                <span class="pull-right" style="font-size: 24px;">Job ID</span>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding: 15px; background-color: #f3f3f3; ">
                        <div style="width:95%; margin-left: 20px !important;">
                            <div class="container" style="background:white; margin-bottom: 20px">
                                <div style="margin-top: 10px">
                                    <p style="margin-top: 10px;border-bottom: 1px solid lightgray; font-size: 20px" align="center">Contract Details</p>

                                    <div class="col-sm-12" id="allDet" style="margin-bottom: 10px !important;margin-top: 5px !important;">
                                        <div class=" projectRow vd_bg-light-grey vd_bdl-red brdl4" style=" background-color: #f3f3f3 !important; cursor: pointer">
                                            <!-- <a title=" " class="notice notice-primary " style=" background-color: #f3f3f3 !important;color: black;"> -->
                                            <div class="col-sm-3" style="background-color: #f3f3f3 !important;">

                                                <div class="" style="">
                                                    <h4 style=" font-weight: bold " align="center">Offer Type</h4>
                                                    <p style="color: black; " align="center">Fix / Hourly / Agree</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 brdLeft brdRight text-align ">
                                                <h4 style=" font-weight: bold ">Contract Type</h4>
                                                <p style="color: black; ">Express</p>
                                            </div>
                                            <div class="col-sm-3 brdRight text-align ">
                                                <h4 style=" font-weight: bold ">Warranty</h4>
                                                <p style="color: black; ">3 Month</p>
                                            </div>
                                            <div class="col-sm-3 brdRight text-align ">
                                                <h4 style=" font-weight: bold ">Job ID</h4>
                                                <p style="color: black; ">JD-1000</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding: 15px; background-color: #f3f3f3; ">
                                <div style="width:100%; margin-left: 0px !important;">
                                    <div class="container" style="background:white; margin-bottom: 10px ;">
                                        <div style="margin-top: 10px">
                                            <p style="margin-top: 10px;border-bottom: 1px solid lightgray; font-size: 20px" align="center">Budget Details</p>

                                            <div class="col-sm-12" id="allDet" style="margin-bottom: 10px !important;margin-top: 5px !important;">
                                                <div class=" projectRow vd_bg-light-grey vd_bdl-red brdl4" style=" background-color: #f3f3f3 !important; cursor: pointer">
                                                    <!-- <a title=" " class="notice notice-primary " style=" background-color: #f3f3f3 !important;color: black;"> -->
                                                    <div class="col-sm-3" style="background-color: #f3f3f3 !important;">

                                                        <div class="" style="">
                                                            <h4 style=" font-weight: bold " align="center">Budget Type</h4>
                                                            <p style="color: black; " align="center">Fix / Hourly / Agree</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 brdLeft brdRight text-align ">
                                                        <h4 style=" font-weight: bold ">Price</h4>
                                                        <p style="color: black; ">200,- €</p>
                                                    </div>
                                                    <div class="col-sm-3 brdRight text-align ">
                                                        <h4 style=" font-weight: bold ">Price Type</h4>
                                                        <p style="color: black; ">Fix / Agreement</p>
                                                    </div>
                                                    <div class="col-sm-3 brdRight text-align ">
                                                        <h4 style=" font-weight: bold ">Payout</h4>
                                                        <p style="color: black; ">After Finish / Agreement</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row" style="padding: 15px; background-color: #f3f3f3; ">
                                <div style="width:100%; margin-left: 0px !important;">
                                    <div class="container" style="background:white; margin-bottom: 10px ;">
                                        <div style="margin-top: 10px">
                                            <p style="margin-top: 10px;border-bottom: 1px solid lightgray; font-size: 20px" align="center">Task and Work Start</p>

                                            <div class="col-sm-12" id="allDet" style="margin-bottom: 10px !important;margin-top: 5px !important;">
                                                <div class=" projectRow vd_bg-light-grey vd_bdl-red brdl4" style=" background-color: #f3f3f3 !important; cursor: pointer">
                                                    <!-- <a title=" " class="notice notice-primary " style=" background-color: #f3f3f3 !important;color: black;"> -->
                                                    <div class="col-sm-4" style="background-color: #f3f3f3 !important;">

                                                        <div class="" style="">
                                                            <h4 style=" font-weight: bold " align="center">Totla Task</h4>
                                                            <p style="color: black; " align="center">5</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 brdLeft brdRight text-align ">
                                                        <h4 style=" font-weight: bold ">Work Start</h4>
                                                        <p style="color: black; ">12.10.2017</p>
                                                    </div>
                                                    <div class="col-sm-4 brdRight text-align ">
                                                        <h4 style=" font-weight: bold ">Work Deliver</h4>
                                                        <p style="color: black; ">15.10.2017</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding: 15px; background-color: #f3f3f3; ">
                                <div style="width:100%; margin-left: 0px !important;">
                                    <div class="container" style="background:white; margin-bottom: 10px ;">
                                        <div style="margin-top: 10px">
                                            <p style="margin-top: 10px;border-bottom: 1px solid lightgray; font-size: 20px" align="center">Contract Between</p>

                                            <div class="col-sm-12" id="allDet" style="margin-bottom: 10px !important;margin-top: 5px !important;">
                                                <div class=" projectRow vd_bg-light-grey vd_bdl-red brdl4" style=" background-color: #f3f3f3 !important; cursor: pointer">
                                                    <!-- <a title=" " class="notice notice-primary " style=" background-color: #f3f3f3 !important;color: black;"> -->
                                                    <div class="col-sm-6" style="background-color: #f3f3f3 !important;">

                                                        <div class="" style="">
                                                            <img src="img/mini.png" style="margin-top: 10px; margin-left:50px" alt="" class="pull-left">
                                                            <div class="pull-right" style="margin-right: 100px">
                                                                <h4 style=" font-weight: bold " align="center">Project Price</h4>
                                                                <p style="color: black; " align="center">2000,- €</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 brdLeft brdRight text-align ">
                                                        <div class="pull-left" style="margin-left: 100px">
                                                            <h4 style=" font-weight: bold " align="center">Project Price</h4>
                                                            <p style="color: black; " align="center">2000,- €</p>
                                                        </div>
                                                        <img src="img/bobbyjkane.jpg" style=" border-radius: 50px ; margin-top: 10px; margin-right:50px" alt="" class="pull-right">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding: 15px; background-color: #f3f3f3; ">
                                <div style="width:100%; margin-left: 0px !important;">
                                    <div class="container" style="background:white; margin-bottom: 10px ;">
                                        <div style="margin-top: 10px">
                                            <p style="margin-top: 10px;border-bottom: 1px solid lightgray; font-size: 20px" align="center">Milestones</p>

                                            <div class="col-sm-12" id="allDet" style="margin-bottom: 10px !important;margin-top: 5px !important;">
                                                <div class=" projectRow vd_bg-light-grey vd_bdl-red brdl4" style=" background-color: #f3f3f3 !important; cursor: pointer">
                                                    <!-- <a title=" " class="notice notice-primary " style=" background-color: #f3f3f3 !important;color: black;"> -->
                                                    <div class="col-sm-4" style="background-color: #f3f3f3 !important;">

                                                        <div class="" style="">
                                                            <h4 style=" font-weight: bold " align="center">Project Price</h4>
                                                            <p style="color: black; " align="center">2000,- €</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 brdLeft brdRight text-align ">
                                                        <h4 style=" font-weight: bold ">Express Cost</h4>
                                                        <p style="color: black; ">200,- €</p>
                                                    </div>
                                                    <div class="col-sm-4 brdRight text-align ">
                                                        <h4 style=" font-weight: bold ">Total to Pay</h4>
                                                        <p style="color: black; ">2200,- €</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding: 15px; background-color: #f3f3f3; ">
                                <div style="width:100%; margin-left: 0px !important;">
                                    <div class="container" style="background:white; margin-bottom: 20px ;">
                                        <p style="margin-top: 10px;border-bottom: 1px solid lightgray; font-size: 20px" align="center">Select Payment</p>

                                        <div class="col-sm-12" id="allDet" style="margin-bottom: 10px !important;margin-top: 5px !important;">
                                            <div class=" projectRow vd_bg-light-grey vd_bdl-red brdl4" style=" background-color: #f3f3f3 !important; cursor: pointer">
                                                <!-- <a title=" " class="notice notice-primary " style=" background-color: #f3f3f3 !important;color: black;"> -->
                                                <div class="col-sm-4" style="background-color: #f3f3f3 !important;">

                                                    <div class="" style="">
                                                        <h4 style=" font-weight: bold " align="center">PayPal</h4>
                                                        <p style="color: black; " align="center">Fee</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 brdLeft brdRight text-align ">
                                                    <h4 style=" font-weight: bold ">GiroPay</h4>
                                                    <p style="color: black; ">Fee</p>
                                                </div>
                                                <div class="col-sm-4 brdRight text-align ">
                                                    <h4 style=" font-weight: bold ">Sofort</h4>
                                                    <p style="color: black; ">Fee</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding: 15px; background-color: #f3f3f3; ">
                                <div style="width:100%; margin-left: 0px !important;">
                                    <div class="container" style="background:white; margin-bottom: 20px ;">
                                        <p style="margin-top: 10px;border-bottom: 1px solid lightgray; font-size: 20px" align="center">UpFront</p>

                                        <div class="col-sm-12" id="allDet" style="margin-bottom: 10px !important;margin-top: 5px !important;">
                                            <div class=" projectRow vd_bg-light-grey vd_bdl-red brdl4" style=" background-color: #f3f3f3 !important; cursor: pointer">
                                                <!-- <a title=" " class="notice notice-primary " style=" background-color: #f3f3f3 !important;color: black;"> -->
                                                <div class="col-sm-4" style="background-color: #f3f3f3 !important;">

                                                    <div class="" style="">
                                                        <h4 style=" font-weight: bold " align="center">UpFront Title</h4>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 brdLeft brdRight text-align ">
                                                    <h4 style=" font-weight: bold ">Amount</h4>

                                                </div>
                                                <div class="col-sm-4 brdRight text-align ">
                                                    <h4 style=" font-weight: bold ">Release Date</h4>

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
        </div>
    </div>










    <div class="modal fade in" id="sendingModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="padding-left: 15px; display: none;">
        <div class="modal-dialog" style="width:650px">
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
                <div class="modal-header" style="padding: 8px;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">View Task</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema" style="width:70%">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width : 400px">
                        <img src="img/sidebar/logo.png.jpeg">
                    </div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h2 align="center">Looking blog writer for our blog</h2>
                    <br>
                    <h4 class="text-center2" style="font-size:15px; ">
                        <strong style="color:#48962e">Service Purchase ID
                        </strong>
                    </h4>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#414141">BS-1234555</strong>
                    </h4>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#48962e">Task Started</strong>
                    </h4>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#414141">12.07.2017 – 17:30
                        </strong>
                    </h4>
                </div>

                <hr class="hfkaniei">
                <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                    <div class="col-sm-4 col-lg-offset-2">
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
                            <span class="append-icon" style="text-align:left;margin-right:42">
                                <img src="img/true.png" style="width:20px;"> &nbsp;&nbsp;O.K</span>
                        </button>
                    </div>
                    <div class="col-sm-4 ">
                        <button class="" type="button" data-toggle="modal" data-target="#denne" data-dismiss="modal" style="text-align: left;
                                                                                                          border-radius: 5px !important;
                                                                                                          padding: 3px 10px !important;
                                                                                                          background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important;
                                                                                                          margin-top: 20px !important;
                                                                                                          margin-bottom: 10px !important;
                                                                                                          padding: 4px;
                                                                                                          border-radius: 24px;
                                                                                                          color: black;
                                                                                                          background: white;
                                                                                                          border: 1px solid #cbcbcb;">
                            <span class="append-icon" style="text-align:left;margin-right:42">
                                <img src="img/false.png" style="width:20px;"> &nbsp;&nbsp;Withdraw
                            </span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>









    <div class="modal fade in" id="startedModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="padding-left: 15px; overflow-x: scroll; display: none;">
        <div class="modal-dialog modal-lg" style="width : 650px ;">
            <div style="height: 10px; width: 100%;background-color: blue; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;">
                        <img src="img/sidebar/logo.png.jpeg">
                    </div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#48962e">Project ID
                    </strong>
                    </h4>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#414141">BS-1234555</strong>
                    </h4>

                </div>
                <div class="col-lg-12">
                    <div class="col-lg-6" style="border:1px solid #aab7a2;">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">Job Title</h3>
                    </div>
                    <div class="col-lg-6" style="border:1px solid #aab7a2">
                        <h3 style="margin: 3px;text-align:center;font-size:18px;">200,- €</h3>
                    </div>
                </div>
                <div style="margin-top:80px !important;">
                    <h4 style="border-bottom: 1px solid lightgray" align="center">Release History</h4>
                </div>
                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-1"> 200,- €</div>
                        <div class="col-sm-2" style="padding:0px;">
                            <button type="button" class="btn btn-success btn-sm ">Done</button>
                        </div>
                    </div>
                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-1"> 200,- €</div>
                        <div class="col-sm-2" style="padding:0px;">
                            <button type="button" class="btn btn-success btn-sm ">Done</button>
                        </div>
                    </div>
                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="margin-top:20px !important">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Request Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-1" style="margin-top:8px"> 200,- €</div>
                        <div class="col-sm-2" style="padding:0px;">
                            <button type="button" class="btn btn-success btn-sm " style="background-color: red">Accept</button>
                        </div>
                    </div>
                </div>

                <div style="margin-top:220px !important;">
                    <h4 style="border-bottom: 1px solid lightgray" align="center">Refund History</h4>
                </div>
                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-blue brdl4" style="">
                    <div class="col-sm-12">
                        <div class="col-sm-3">Refund Title</div>
                        <div class="col-sm-3">Date/ Time</div>
                        <div class="col-sm-3 col-sm-offset-1"> 200,- €</div>
                        <div class="col-sm-2" style="padding:0px;">
                            <button type="button" class="btn btn-success btn-sm ">Done</button>
                        </div>
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
    <span class="append-icon" style="text-align:left;margin-right:42">
        <img src="img/true.png" style="width:20px;"> &nbsp;&nbsp;O.K</span>
</button>
                </div>
            </div>

        </div>
    </div>





    <div class="modal fade in" id="doneModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="padding-left: 15px; overflow-x: scroll; display: none;">
        <div class="modal-dialog modal-lg" style="width : 650px ;">
            <div style="height: 10px; width: 100%;background-color: blue; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;">
                        <img src="img/sidebar/logo.png.jpeg">
                    </div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#48962e">Project ID
                        </strong>
                    </h4>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#414141">BS-1234555</strong>
                    </h4>

                </div>
                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important; height:50px">
                    <div class="col-sm-12">
                        <!-- <div class="task-progressbar"> -->
                        <div class="col-sm-3 " style="    border-right: 1px solid rgba(0, 0, 0, 0.1);">
                            <h4 align="center">Task Title</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress green" style="margin-top: 18px">
                                <div class="progress-bar" style="width:100%; background:#70963c;">
                                    <div class="progress-value">100%</div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="col-sm-3 " style=" border-left: 1px solid rgba(0, 0, 0, 0.1);">
                            <div class="col-sm-6">
                                <img src="img/true.png" data-dismiss="modal" onclick="document.getElementById('truebtn').click();" style="cursor:pointer;height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="truebtn" data-dismiss="modal" style="display: none"></button>
                            </div>
                            <div class="col-sm-6">
                                <img src="img/false.png" onclick="document.getElementById('falsebtn').click();" style=" cursor:pointer; height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="falsebtn" data-toggle="modal" data-target="#deniedModal" style="display: none"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important; height:50px">
                    <div class="col-sm-12">
                        <!-- <div class="task-progressbar"> -->
                        <div class="col-sm-3 " style="    border-right: 1px solid rgba(0, 0, 0, 0.1);">
                            <h4 align="center">Task Title</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress green" style="margin-top: 18px">
                                <div class="progress-bar" style="width:100%; background:#70963c;">
                                    <div class="progress-value">100%</div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="col-sm-3 " style=" border-left: 1px solid rgba(0, 0, 0, 0.1);">
                            <div class="col-sm-6">
                                <img src="img/true.png" data-dismiss="modal" onclick="document.getElementById('truebtn').click();" style="cursor:pointer;height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="truebtn" data-dismiss="modal" style="display: none"></button>
                            </div>
                            <div class="col-sm-6">
                                <img src="img/false.png" onclick="document.getElementById('falsebtn').click();" style=" cursor:pointer; height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="falsebtn" data-toggle="modal" data-target="#deniedModal" style="display: none"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-sm-12" style="margin-top: 15px; border: 1px solid red">
                    <h3 align="center">Please Approve the task</h3>
                </div> -->

                <div class=" col-lg-12 " style="margin-top:5px;margin-bottom:8px; margin-top:15px ">
                    <button class=" " type="button " data-dismiss="modal " style="text-align: left; border-radius: 5px !important; padding: 3px 10px !important; background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important; margin-top:
                        20px !important; margin-bottom: 10px !important; padding: 4px; border-radius: 24px; color: black; background: white; margin-left: 40%; border: 1px solid #cbcbcb; ">
                        <span class="append-icon " style="text-align:left;margin-right:42 ">
                            <img src="img/true.png " style="width:20px; "> &nbsp;&nbsp;O.K</span>
                    </button>
                </div>
            </div>

        </div>
    </div>








    <div class="modal fade in" id="recModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="padding-left:
    15px; overflow-x: scroll; display: none;">
        <div class="modal-dialog modal-lg" style="width : 650px ;">
            <div style="height: 10px; width: 100%;background-color: blue; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;">
                        <img src="img/sidebar/logo.png.jpeg">
                    </div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#48962e">Project ID
                    </strong>
                    </h4>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#414141">BS-1234555</strong>
                    </h4>

                </div>
                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important; height:50px">
                    <div class="col-sm-12">
                        <!-- <div class="task-progressbar"> -->
                        <div class="col-sm-3 " style="    border-right: 1px solid rgba(0, 0, 0, 0.1);">
                            <h4 align="center">Task Title</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress green" style="margin-top: 18px">
                                <div class="progress-bar" style="width:100%; background:#70963c;">
                                    <div class="progress-value">100%</div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="col-sm-3 " style=" border-left: 1px solid rgba(0, 0, 0, 0.1);">
                            <div class="col-sm-6">
                                <img src="img/true.png" data-dismiss="modal" onclick="document.getElementById('truebtn').click();" style="cursor:pointer;height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="truebtn" data-dismiss="modal" style="display: none"></button>
                            </div>
                            <div class="col-sm-6">
                                <img src="img/false.png" onclick="document.getElementById('falsebtn').click();" style=" cursor:pointer; height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="falsebtn" data-toggle="modal" data-target="#deniedModal" style="display: none"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important; height:50px">
                    <div class="col-sm-12">
                        <!-- <div class="task-progressbar"> -->
                        <div class="col-sm-3 " style="    border-right: 1px solid rgba(0, 0, 0, 0.1);">
                            <h4 align="center">Task Title</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress green" style="margin-top: 18px">
                                <div class="progress-bar" style="width:100%; background:#70963c;">
                                    <div class="progress-value">100%</div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="col-sm-3 " style=" border-left: 1px solid rgba(0, 0, 0, 0.1);">
                            <div class="col-sm-6">
                                <img src="img/true.png" data-dismiss="modal" onclick="document.getElementById('truebtn').click();" style="cursor:pointer;height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="truebtn" data-dismiss="modal" style="display: none"></button>
                            </div>
                            <div class="col-sm-6">
                                <img src="img/false.png" onclick="document.getElementById('falsebtn').click();" style=" cursor:pointer; height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="falsebtn" data-toggle="modal" data-target="#deniedModal" style="display: none"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12" style="border:1px solid red; margin-top: 20px">
                    <h4 align="center">Waranty Expired</h4>
                </div>

                <div class="col-sm-12" style="border:1px solid green; margin-top: 10px">
                    <h4 align="center">12.12.2018</h4>
                </div>


                <div class=" col-lg-12 " style="margin-top:5px;margin-bottom:8px; margin-top:15px ">
                    <button class=" " type="button " data-dismiss="modal" style="text-align: left; border-radius: 5px !important; padding: 3px 10px !important; background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important; margin-top:
                            20px !important; margin-bottom: 10px !important; padding: 4px; border-radius: 24px; color: black; background: white; margin-left: 40%; border: 1px solid #cbcbcb; ">
                    <span class="append-icon " style="text-align:left;margin-right:42 ">
                        <img src="img/true.png " style="width:20px; "> &nbsp;&nbsp;O.K</span>
                </button>
                </div>
            </div>

        </div>
    </div>










    <div class="modal fade in" id="desModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="padding-left:
    15px; overflow-x: scroll; display: none;">
        <div class="modal-dialog modal-lg" style="width : 650px ;">
            <div style="height: 10px; width: 100%;background-color: blue; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;">
                        <img src="img/sidebar/logo.png.jpeg">
                    </div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#48962e">Project ID
                    </strong>
                    </h4>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#414141">BS-1234555</strong>
                    </h4>

                </div>
                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important; height:50px">
                    <div class="col-sm-12">
                        <!-- <div class="task-progressbar"> -->
                        <div class="col-sm-3 " style="    border-right: 1px solid rgba(0, 0, 0, 0.1);">
                            <h4 align="center">Task Title</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress green" style="margin-top: 18px">
                                <div class="progress-bar" style="width:100%; background:#70963c;">
                                    <div class="progress-value">100%</div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="col-sm-3 " style=" border-left: 1px solid rgba(0, 0, 0, 0.1);">
                            <div class="col-sm-6">
                                <img src="img/true.png" data-dismiss="modal" onclick="document.getElementById('truebtn').click();" style="cursor:pointer;height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="truebtn" data-dismiss="modal" style="display: none"></button>
                            </div>
                            <div class="col-sm-6">
                                <img src="img/false.png" onclick="document.getElementById('falsebtn').click();" style=" cursor:pointer; height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="falsebtn" data-toggle="modal" data-target="#deniedModal" style="display: none"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important; height:50px">
                    <div class="col-sm-12">
                        <!-- <div class="task-progressbar"> -->
                        <div class="col-sm-3 " style="    border-right: 1px solid rgba(0, 0, 0, 0.1);">
                            <h4 align="center">Task Title</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress green" style="margin-top: 18px">
                                <div class="progress-bar" style="width:100%; background:#70963c;">
                                    <div class="progress-value">100%</div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="col-sm-3 " style=" border-left: 1px solid rgba(0, 0, 0, 0.1);">
                            <div class="col-sm-6">
                                <img src="img/true.png" data-dismiss="modal" onclick="document.getElementById('truebtn').click();" style="cursor:pointer;height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="truebtn" data-dismiss="modal" style="display: none"></button>
                            </div>
                            <div class="col-sm-6">
                                <img src="img/false.png" onclick="document.getElementById('falsebtn').click();" style=" cursor:pointer; height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="falsebtn" data-toggle="modal" data-target="#deniedModal" style="display: none"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12" style="border:1px solid red; margin-top: 20px">
                    <h4 align="center">In</h4>
                </div>


                <div class=" col-lg-12 " style="margin-top:5px;margin-bottom:8px; margin-top:15px ">
                    <button class=" " type="button " data-dismiss="modal" style="text-align: left; border-radius: 5px !important; padding: 3px 10px !important; background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important; margin-top:
                                20px !important; margin-bottom: 10px !important; padding: 4px; border-radius: 24px; color: black; background: white; margin-left: 40%; border: 1px solid #cbcbcb; ">
                    <span class="append-icon " style="text-align:left;margin-right:42 ">
                        <img src="img/true.png " style="width:20px; "> &nbsp;&nbsp;O.K</span>
                </button>
                </div>
            </div>

        </div>
    </div>









    <div class="modal fade in" id="canModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="padding-left:
    15px; overflow-x: scroll; display: none;">
        <div class="modal-dialog modal-lg" style="width : 650px ;">
            <div style="height: 10px; width: 100%;background-color: blue; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;">
                        <img src="img/sidebar/logo.png.jpeg">
                    </div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#48962e">Project ID
                    </strong>
                    </h4>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#414141">BS-1234555</strong>
                    </h4>

                </div>
                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important; height:50px">
                    <div class="col-sm-12">
                        <!-- <div class="task-progressbar"> -->
                        <div class="col-sm-3 " style="    border-right: 1px solid rgba(0, 0, 0, 0.1);">
                            <h4 align="center">Task Title</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress green" style="margin-top: 18px">
                                <div class="progress-bar" style="width:100%; background:#70963c;">
                                    <div class="progress-value">100%</div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="col-sm-3 " style=" border-left: 1px solid rgba(0, 0, 0, 0.1);">
                            <div class="col-sm-6">
                                <img src="img/true.png" data-dismiss="modal" onclick="document.getElementById('truebtn').click();" style="cursor:pointer;height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="truebtn" data-dismiss="modal" style="display: none"></button>
                            </div>
                            <div class="col-sm-6">
                                <img src="img/false.png" onclick="document.getElementById('falsebtn').click();" style=" cursor:pointer; height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="falsebtn" data-toggle="modal" data-target="#deniedModal" style="display: none"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important; height:50px">
                    <div class="col-sm-12">
                        <!-- <div class="task-progressbar"> -->
                        <div class="col-sm-3 " style="    border-right: 1px solid rgba(0, 0, 0, 0.1);">
                            <h4 align="center">Task Title</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress green" style="margin-top: 18px">
                                <div class="progress-bar" style="width:100%; background:#70963c;">
                                    <div class="progress-value">100%</div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="col-sm-3 " style=" border-left: 1px solid rgba(0, 0, 0, 0.1);">
                            <div class="col-sm-6">
                                <img src="img/true.png" data-dismiss="modal" onclick="document.getElementById('truebtn').click();" style="cursor:pointer;height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="truebtn" data-dismiss="modal" style="display: none"></button>
                            </div>
                            <div class="col-sm-6">
                                <img src="img/false.png" onclick="document.getElementById('falsebtn').click();" style=" cursor:pointer; height:30px ; width:30px; margin-top: 10px; margin-bottom: 7px" alt="">
                                <button id="falsebtn" data-toggle="modal" data-target="#deniedModal" style="display: none"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12" style="border:1px solid red; margin-top: 20px">
                    <h4 align="center">Cancelled Reason</h4>
                </div>


                <div class=" col-lg-12 " style="margin-top:5px;margin-bottom:8px; margin-top:15px ">
                    <div class="col-lg-6">
                        <button class=" " type="button " data-dismiss="modal" style="text-align: left; border-radius: 5px !important; padding: 3px 10px !important; background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important; margin-top:
                                    20px !important; margin-bottom: 10px !important; padding: 4px; border-radius: 24px; color: black; background: white; margin-left: 40%; border: 1px solid #cbcbcb; ">
                            <span class="append-icon " style="text-align:left;margin-right:42 ">
                            <img src="img/true.png " style="width:20px; "> &nbsp;&nbsp;O.K</span>
                         </button>
                    </div>
                    <div class="col-lg-6">
                        <button class=" " type="button " data-dismiss="modal" style="text-align: left; border-radius: 5px !important; padding: 3px 10px !important; background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important; margin-top:
                                                        20px !important; margin-bottom: 10px !important; padding: 4px; border-radius: 24px; color: black; background: white; margin-left: 40%; border: 1px solid #cbcbcb; ">
                            <span class="append-icon " style="text-align:left;margin-right:42 ">
                                <i class="fa fa-bullhorn" style="width:auto; background: transparent; box-shadow: none" aria-hidden="true"></i> &nbsp;&nbsp;Post Again</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>













    <div class="modal fade in" id="deniedModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="padding-left: 15px; overflow-x: scroll; display: none;">
        <div class="modal-dialog modal-lg" style="width : 650px ;">
            <div style="height: 10px; width: 100%;background-color: blue; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Release Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;">
                        <img src="img/sidebar/logo.png.jpeg">
                    </div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#48962e">Project ID
                        </strong>
                    </h4>
                    <h4 class="text-center2" style="font-size:15px;">
                        <strong style="color:#414141">BS-1234555</strong>
                    </h4>

                </div>

                <div class="col-sm-12" style="margin-top: 10px;">
                    <select name="" id="" style="width: 100%; background-color: white; height: 50px; border: none; text-align: center ">
                        <option value="">Select Reason</option>
                        <option value="">Select Reason</option>
                        <option value="">Select Reason</option>
                    </select>
                </div>
                <div class="col-sm-12" style="margin-top: 10px;">
                    <textarea cols="15" rows="5" style="resize: none">Notification</textarea>
                </div>

                <div class=" col-lg-12 " style="margin-top:5px;margin-bottom:8px; margin-top:15px ">
                    <button class=" " type="button " data-dismiss="modal " style="text-align: left; border-radius: 5px !important; padding: 3px 10px !important; background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important; margin-top:
                            20px !important; margin-bottom: 10px !important; padding: 4px; border-radius: 24px; color: black; background: white; margin-left: 40%; border: 1px solid #cbcbcb; ">
                        <span class="append-icon " style="text-align:left;margin-right:42 ">
                            <img src="img/true.png " style="width:20px; "> &nbsp;&nbsp;Send</span>
                    </button>
                </div>
            </div>

        </div>
    </div>















      <div class="modal right fade infoModal" id="closeTheJob" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="z-index: 1041; display: none;">
        <button type="button" class=" close " data-dismiss="modal" aria-label="Close" style="background-color: #fff; margin-left: 53px; float:left;opacity:1;font-size:4rem;padding: 10px">
            <span aria-hidden="true">X</span>
        </button>

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header vd_bg-green " style="padding: 0">
                    <div class="relative modal-header-projects">
                        <div class="row  vd_white ">
                            <div class="col-lg-12">
                                <div class="col-sm-1">
                                    <i data-dismiss="modal" class="fa fa-arrow-left pull left" style="background: none; box-shadow: none; margin-top: 20px; font-size: 20px; cursor: pointer"></i>
                                </div>
                                <div class="modal-header vd_bg-green  relative modal-header-projects" style="padding: 0">
                                    <h3 style=" margin-left: 35%; color:white; font-weight: bold">End Contract and Close the Job</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body h100" style="padding: 0; background-color: #f3f3f3">

                    <div class="row" align="center">
                        <div class=" col-lg-12 job-details" style="background-color: white !important;">
                            <div style="margin-top: 6px">
                                <span style=" font-size: 24px; margin-left:35px">Job Title: Create new design</span>

                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding: 15px;  background-color: #f3f3f3; ">
                        <div style="width:95%; margin-left: 20px !important;">
                            <div class="container" style=" border-top:6px solid #9dc23a ;background:white; margin-bottom: 20px">
                                <div style="margin-top: 10px">
                                    <p style="margin-top: 10px;font-size: 20px" align="center">Task And Work Start</p>

                                    <div class="col-sm-12" id="allDet" style="margin-bottom: 10px !important;margin-top: 5px !important;">
                                        <div class=" projectRow vd_bg-light-grey vd_bdl-red brdl4" style=" background-color: #f3f3f3 !important; cursor: pointer" data-toggle="modal" data-target="#viewThsJob">
                                            <div class="col-sm-3 brdLeft brdRight text-align ">
                                                <h4>Total Task</h4>
                                                <p style="color: black; ">5</p>
                                            </div>
                                            <div class="col-sm-3 brdLeft brdRight text-align ">
                                                <h4>Work Started</h4>
                                                <p style="color: black; ">12.10.2017</p>
                                            </div>
                                            <div class="col-sm-3 brdRight text-align ">
                                                <h4>Delivery Agreement</h4>
                                                <p style="color: black; ">15.10.2017</p>
                                            </div>
                                            <div class="col-sm-3 brdRight text-align ">
                                                <h4>Work Deliverd </h4>
                                                <p style="color: black; ">20.10.2017</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12" id="allDet" style="margin-bottom: 10px !important;margin-top: 5px !important;">
                                        <div class=" projectRow vd_bg-light-grey vd_bdl-red brdl4" style=" background-color: #f3f3f3 !important; cursor: pointer" data-toggle="modal" data-target="#viewThsJob">
                                            <div class="col-sm-3 brdLeft brdRight text-align ">
                                                <h4>Total Task</h4>
                                                <p style="color: black; ">5</p>
                                            </div>
                                            <div class="col-sm-3 brdLeft brdRight text-align ">
                                                <h4>Work Started</h4>
                                                <p style="color: black; ">12.10.2017</p>
                                            </div>
                                            <div class="col-sm-3 brdRight text-align ">
                                                <h4>Delivery Agreement</h4>
                                                <p style="color: black; ">15.10.2017</p>
                                            </div>
                                            <div class="col-sm-3 brdRight text-align ">
                                                <h4>Work Deliverd </h4>
                                                <p style="color: black; ">20.10.2017</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="row" style="padding: 15px; background-color: #f3f3f3; ">
                                <div style="width:100%; margin-left: 0px !important;">
                                    <div class="container" style="background:white; margin-bottom: 10px ;">
                                        <div style="margin-top: 10px">
                                            <p style="margin-top: 10px; font-size: 20px" align="center">Contract</p>

                                            <div class="col-sm-12" id="allDet" style="margin-bottom: 10px !important;margin-top: 5px !important;">
                                                <div class="col-sm-4">
                                                    <select style="background-color: white; width: 100%">
                                                        <option value="">Select Status</option>
                                                        <option value="">Select Status</option>
                                                        <option value="">Select Status</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select style="background-color: white; width: 100%">
                                                        <option value="">Set Payment</option>
                                                        <option value="">Set Payment</option>
                                                        <option value="">Set Payment</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input placeholder="2300 €" style="background-color: white; width: 100%" type="text">

                                                </div>
                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row" style="padding: 15px; background-color: #f3f3f3; ">
                                <div style="width:100%; margin-left: 0px !important;">
                                    <div class="container" style="background:white; margin-bottom: 10px ;">
                                        <div style="margin-top: 10px">
                                            <p style="margin-top: 10px; font-size: 20px" align="center">Reviews</p>

                                            <div class="col-sm-12" id="allDet" style="margin-bottom: 10px !important;margin-top: 5px !important;">
                                                <div class="col-lg-12" style="width: 80%; margin-left: 10%">
                                                    <div class="col-sm-6" style="border:1px solid rgba(0, 0, 0, 0.1); height: 32px">
                                                        Skills
                                                    </div>
                                                    <div class="col-sm-6" style="border:1px solid rgba(0, 0, 0, 0.1)">
                                                        <form id="ratingsForm">
                                                            <div class="stars">
                                                                <input name="star" class="star-1" id="star-1" type="radio">
                                                                <label class="star-1" for="star-1">1</label>
                                                                <input name="star" class="star-2" id="star-2" type="radio">
                                                                <label class="star-2" for="star-2">2</label>
                                                                <input name="star" class="star-3" id="star-3" type="radio">
                                                                <label class="star-3" for="star-3">3</label>
                                                                <input name="star" class="star-4" id="star-4" type="radio">
                                                                <label class="star-4" for="star-4">4</label>
                                                                <input name="star" class="star-5" id="star-5" type="radio">
                                                                <label class="star-5" for="star-5">5</label>
                                                                <span></span>
                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>
                                                <div class="col-lg-12" style="width: 80%; margin-left: 10%; margin-top: 10px">
                                                    <div class="col-sm-6" style="border:1px solid rgba(0, 0, 0, 0.1);  height: 32px">
                                                        Work Quality
                                                    </div>
                                                    <div class="col-sm-6" style="border:1px solid rgba(0, 0, 0, 0.1)">
                                                        <form id="ratingsForm">
                                                            <div class="stars">
                                                                <input name="star" class="star-1" id="star-1" type="radio">
                                                                <label class="star-1" for="star-1">1</label>
                                                                <input name="star" class="star-2" id="star-2" type="radio">
                                                                <label class="star-2" for="star-2">2</label>
                                                                <input name="star" class="star-3" id="star-3" type="radio">
                                                                <label class="star-3" for="star-3">3</label>
                                                                <input name="star" class="star-4" id="star-4" type="radio">
                                                                <label class="star-4" for="star-4">4</label>
                                                                <input name="star" class="star-5" id="star-5" type="radio">
                                                                <label class="star-5" for="star-5">5</label>
                                                                <span></span>
                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>
                                                <div class="col-lg-12" style="width: 80%; margin-left: 10%; margin-top: 10px">
                                                    <div class="col-sm-6" style="border:1px solid rgba(0, 0, 0, 0.1);  height: 32px ">
                                                        Availability
                                                    </div>
                                                    <div class="col-sm-6" style="border:1px solid rgba(0, 0, 0, 0.1)">
                                                        <form id="ratingsForm">
                                                            <div class="stars">
                                                                <input name="star" class="star-1" id="star-1" type="radio">
                                                                <label class="star-1" for="star-1">1</label>
                                                                <input name="star" class="star-2" id="star-2" type="radio">
                                                                <label class="star-2" for="star-2">2</label>
                                                                <input name="star" class="star-3" id="star-3" type="radio">
                                                                <label class="star-3" for="star-3">3</label>
                                                                <input name="star" class="star-4" id="star-4" type="radio">
                                                                <label class="star-4" for="star-4">4</label>
                                                                <input name="star" class="star-5" id="star-5" type="radio">
                                                                <label class="star-5" for="star-5">5</label>
                                                                <span></span>
                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>

                                                <div class="col-lg-12" style="width: 80%; margin-left: 10%; margin-top: 10px">
                                                    <div class="col-sm-6" style="border:1px solid rgba(0, 0, 0, 0.1);  height: 32px">
                                                        Communications
                                                    </div>
                                                    <div class="col-sm-6" style="border:1px solid rgba(0, 0, 0, 0.1)">
                                                        <form id="ratingsForm">
                                                            <div class="stars">
                                                                <input name="star" class="star-1" id="star-1" type="radio">
                                                                <label class="star-1" for="star-1">1</label>
                                                                <input name="star" class="star-2" id="star-2" type="radio">
                                                                <label class="star-2" for="star-2">2</label>
                                                                <input name="star" class="star-3" id="star-3" type="radio">
                                                                <label class="star-3" for="star-3">3</label>
                                                                <input name="star" class="star-4" id="star-4" type="radio">
                                                                <label class="star-4" for="star-4">4</label>
                                                                <input name="star" class="star-5" id="star-5" type="radio">
                                                                <label class="star-5" for="star-5">5</label>
                                                                <span></span>
                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>

                                                <div class="col-lg-12" style="width: 80%; margin-left: 10%; margin-top: 10px; margin-bottom: 20px !important">
                                                    <div class="col-sm-6" style="border:1px solid rgba(0, 0, 0, 0.1);  height: 32px">
                                                        Cooperation
                                                    </div>
                                                    <div class="col-sm-6" style="border:1px solid rgba(0, 0, 0, 0.1)">
                                                        <form id="ratingsForm">
                                                            <div class="stars">
                                                                <input name="star" class="star-1" id="star-1" type="radio">
                                                                <label class="star-1" for="star-1">1</label>
                                                                <input name="star" class="star-2" id="star-2" type="radio">
                                                                <label class="star-2" for="star-2">2</label>
                                                                <input name="star" class="star-3" id="star-3" type="radio">
                                                                <label class="star-3" for="star-3">3</label>
                                                                <input name="star" class="star-4" id="star-4" type="radio">
                                                                <label class="star-4" for="star-4">4</label>
                                                                <input name="star" class="star-5" id="star-5" type="radio">
                                                                <label class="star-5" for="star-5">5</label>
                                                                <span></span>
                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding: 15px; background-color: #f3f3f3; ">
                                    <div style="width:100%; margin-left: 0px !important;">
                                        <div class="container" style="background:white; margin-bottom: 10px ;">
                                            <div style="margin-top: 10px">
                                                <p style="margin-top: 10px; font-size: 20px" align="center">Say Something about the Company</p>

                                                <div class="col-sm-12" id="allDet" style="margin-bottom: 10px !important;margin-top: 5px !important;">
                                                    <textarea name="" id="" cols="30" rows="10" style="resize: none">Text Box</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding: 15px; background-color: #f3f3f3; ">
                                    <div style="width:100%; margin-left: 0px !important;">
                                        <div class="container" style="background:white; margin-bottom: 10px ;">
                                            <div style="margin-top: 10px">
                                                <p style="margin-top: 10px; font-size: 20px" align="center">Do u will Recommand this Company to other User</p>

                                                <div class="col-sm-12" id="allDet" style="margin-bottom: 10px !important;margin-top: 5px !important;">
                                                    <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                                                        <div class="col-sm-4 col-lg-offset-2">
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
                                                                <span class="append-icon" style="text-align:left;margin-right:42">
                                                                    <img src="img/true.png" style="width:20px;"> &nbsp;&nbsp;Yes</span>
                                                            </button>
                                                        </div>
                                                        <div class="col-sm-4 ">
                                                            <button class="" type="button" data-toggle="modal" data-target="#denne" data-dismiss="modal" style="text-align: left;
                                                                                                                                                                                              border-radius: 5px !important;
                                                                                                                                                                                              padding: 3px 10px !important;
                                                                                                                                                                                              background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important;
                                                                                                                                                                                              margin-top: 20px !important;
                                                                                                                                                                                              margin-bottom: 10px !important;
                                                                                                                                                                                              padding: 4px;
                                                                                                                                                                                              margin-left: 50% !important;
                                                                                                                                                                                              border-radius: 24px;
                                                                                                                                                                                              color: black;
                                                                                                                                                                                              background: white;
                                                                                                                                                                                              border: 1px solid #cbcbcb;">
                                                                <span class="append-icon" style="text-align:left;margin-right:42">
                                                                    <img src="img/false.png" style="width:20px;"> &nbsp;&nbsp;No
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding: 15px; background-color: #f3f3f3; ">
                                    <div style="width:100%; margin-left: 0px !important;">
                                        <div class="container" style="background:white; margin-bottom: 20px ;">
                                            <button class="" type="button" data-toggle="modal" data-target="#denne" data-dismiss="modal" style="text-align: left;
                                                                                                                                                                                                                                          border-radius: 5px !important;
                                                                                                                                                                                                                                          padding: 3px 10px !important;
                                                                                                                                                                                                                                          background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important;
                                                                                                                                                                                                                                          margin-top: 20px !important;
                                                                                                                                                                                                                                          margin-bottom: 10px !important;
                                                                                                                                                                                                                                          margin-left: 45% !important;
                                                                                                                                                                                                                                          padding: 4px;
                                                                                                                                                                                                                                          border-radius: 24px;
                                                                                                                                                                                                                                          color: black;
                                                                                                                                                                                                                                          background: white;
                                                                                                                                                                                                                                          border: 1px solid #cbcbcb;">
                                                <span class="append-icon" style="text-align:left;margin-right:42">
                                                    <img src="img/false.png" style="width:20px;"> &nbsp;&nbsp;Close This Job
                                                </span>
                                            </button>

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
                                                    @endsection