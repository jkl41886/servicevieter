@php
$title = "UserSection"
@endphp

@extends('layouts.master')

@section('extended-header')

<tabs>



  <tab name="Proposed" :selected="true" icon="fa fa-calendar-plus-o" id="MyContractsAreaCurrentContractsTest"></tab>

  <tab name="Accepted" icon="fa fa-calendar-check-o" id="MyContractsAreaCurrentContractsTest1"></tab>


  <tab name="Canceled" icon="fa fa-calendar-times-o" id="MyContractsAreaCurrentContractsTest2"></tab>
  <tab name="Interviews" icon="fa fa-coffee" id="MyContractsAreaCurrentContracts"></tab>


</tabs>

@endsection

@section('content')
<div role="tabpanel" class="tab-pane " id="MyAppointmentsArea" style="background-color: #f3f3f3">
  <div class="border-box">
    <div class=" custom-page-content"> </div>
    <div class="main-content">
      <div class="tab-section">
        <div class="row" style="background: #eee;">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container" style="margin-top: 0px;">
            <div class=" bhoechie-tab">
              <div class="bhoechie-tab-content">

                <div>
                  <div class="tab-content no-t-m">




                    <div role="tabpanel" style="background: #eee; margin-bottom: -82px;" class="tab-pane" id="MyContractsAreaCurrentContractsTest2">
                                                        <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;">
                                                            <div class="row">
                                                                <div class="col-md-12" style="margin-top: 29px;">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">
                                                                            <div class="panel widget container-fluid">
                                                                                <div class="row mrgn30-0 projectRow" data-toggle="modal" data-target="#myModal">
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
                                                                                        <div class="col-sm-2 brdRight text-align brdLeft">
                                                                                            <h4>Title</h4>
                                                                                            <p style="color: black;">16.3.2017-12:45</p>
                                                                                        </div>
                                                                                        <div class="col-sm-3 brdRight text-align">
                                                                                            <h4>Appointment Date</h4>
                                                                                            <p style="color: black;">20.03.2017 -13:00 Uhr</p>
                                                                                        </div>
                                                                                        <div class="col-sm-3 text-align brdRight">
                                                                                            <h4>Status </h4>
                                                                                            <!-- <h4 class="text-height"> <button type="button" class="btn btn-primary btn-sm">Cancelled Reason</button> </h4> -->
                                                                                            <h2 id="staatus" style="margin-top: 0;color: #ef9d1f;">Waiting</h2>
                                                                                            <!-- <div class="col-sm-12 text-align">
                                                                                                  <h4 style="margin: 21px 0 0 0;">Options</h4>
                                                                                                  <h4 class="text-height" style="margin-top: 0;">
                                                                                                      <button type="button" class="btn btn-primary btn-sm">View</button>
                                                                                                  </h4>
                                                                                              </div> -->
                                                                                        </div>

                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"> </div>
                                                        <br>
                                                    </div>





                    <div role="tabpanel" style="background: #eee; margin-bottom: -82px;" class="tab-pane" id="MyContractsAreaCurrentContractsTest1">
                                                        <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;">
                                                            <div class="row">
                                                                <div class="col-md-12" style="margin-top: 29px;">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">
                                                                            <div class="panel widget container-fluid">
                                                                                <div class="row mrgn30-0 projectRow" data-toggle="modal" data-target="#myModal">
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
                                                                                        <div class="col-sm-2 brdRight text-align brdLeft">
                                                                                            <h4>Title</h4>
                                                                                            <p style="color: black;">16.3.2017-12:45</p>
                                                                                        </div>
                                                                                        <div class="col-sm-3 brdRight text-align">
                                                                                            <h4>Appointment Date</h4>
                                                                                            <p style="color: black;">20.03.2017 -13:00 Uhr</p>
                                                                                        </div>
                                                                                        <div class="col-sm-3 text-align brdRight">
                                                                                            <h4>Status </h4>
                                                                                            <!-- <h4 class="text-height"> <button type="button" class="btn btn-primary btn-sm">Cancelled Reason</button> </h4> -->
                                                                                            <h2 id="staatus" style="margin-top: 0;color: #ef9d1f;">Waiting</h2>
                                                                                            <!-- <div class="col-sm-12 text-align">
                                                                                                  <h4 style="margin: 21px 0 0 0;">Options</h4>
                                                                                                  <h4 class="text-height" style="margin-top: 0;">
                                                                                                      <button type="button" class="btn btn-primary btn-sm">View</button>
                                                                                                  </h4>
                                                                                              </div> -->
                                                                                        </div>

                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"> </div>
                                                        <br>
                                                    </div>

                    <div role="tabpanel" style="background: #eee; margin-bottom: -82px;" class="tab-pane" id="MyContractsAreaCurrentContractsTest">
                                                        <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;">
                                                            <div class="row">
                                                                <div class="col-md-12" style="margin-top: 29px;">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">
                                                                            <div class="panel widget container-fluid">
                                                                                <div class="row mrgn30-0 projectRow" data-toggle="modal" data-target="#myModal">
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
                                                                                        <div class="col-sm-2 brdRight text-align brdLeft">
                                                                                            <h4>Title</h4>
                                                                                            <p style="color: black;">16.3.2017-12:45</p>
                                                                                        </div>
                                                                                        <div class="col-sm-3 brdRight text-align">
                                                                                            <h4>Appointment Date</h4>
                                                                                            <p style="color: black;">20.03.2017 -13:00 Uhr</p>
                                                                                        </div>
                                                                                        <div class="col-sm-3 text-align brdRight">
                                                                                            <h4>Status </h4>
                                                                                            <!-- <h4 class="text-height"> <button type="button" class="btn btn-primary btn-sm">Cancelled Reason</button> </h4> -->
                                                                                            <h2 id="staatus" style="margin-top: 0;color: #ef9d1f;">Waiting</h2>
                                                                                            <!-- <div class="col-sm-12 text-align">
                                                                                                  <h4 style="margin: 21px 0 0 0;">Options</h4>
                                                                                                  <h4 class="text-height" style="margin-top: 0;">
                                                                                                      <button type="button" class="btn btn-primary btn-sm">View</button>
                                                                                                  </h4>
                                                                                              </div> -->
                                                                                        </div>

                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"> </div>
                                                        <br>
                                                    </div>


                  <div role="tabpanel" id="MyContractsAreaCurrentContracts" style="background: #eee; margin-bottom: -82px;" class="tab-pane">
                                                        <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;"><div class="row">
                                                        <div class="col-md-12">
                                                            <div class="sales card">

                                                                <div class="ourteamdiver2" style="float:left;margin-top:0px; width:32%;margin-right:1%;border-top: green 7px solid;background-color: white;">
                                                                    <h3 style="text-align:center;">New Appointments</h3>
                                                                    <div class="overflowhidde2">
                                                                        <div class="ourteamblur22"></div>
                                                                    </div>
                                                                    <hr class="rulerourtema">
                                                                    <div class="imgeourteamperson2 square-img-make">
                                                                        <img src="img/sidebar/logo.png.jpeg">
                                                                    </div>
                                                                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                                                                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Interview For</strong></h4>
                                                                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">Job Title</strong></h4>
                                                                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Time and Date</strong></h4>
                                                                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">20.17.2017 17.30</strong></h4>
                                                                    <button data-toggle="modal" data-target="#notificPop" style="margin-left: 36%;margin-top: 6%;" class="btn btn-danger">Notifications</button>
                                                                </div>
                                                                <div class="ourteamdiver2" style="float:left;margin-top:0px; width:32%;margin-right:1%;border-top: green 7px solid;background-color: white;">
                                                                    <h3 style="text-align:center;">New Appointments</h3>
                                                                    <div class="overflowhidde2">
                                                                        <div class="ourteamblur22"></div>
                                                                    </div>
                                                                    <hr class="rulerourtema">
                                                                    <div class="imgeourteamperson2 square-img-make">
                                                                        <img src="img/sidebar/logo.png.jpeg">
                                                                    </div>
                                                                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                                                                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Interview For</strong></h4>
                                                                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">Job Title</strong></h4>
                                                                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Time and Date</strong></h4>
                                                                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">20.17.2017 17.30</strong></h4>
                                                                    <button data-toggle="modal" data-target="#notificPop" style="margin-left: 36%;margin-top: 6%;" class="btn btn-danger">Notifications</button>
                                                                </div>
                                                                <div class="ourteamdiver2" style="float:left;margin-top:0px; width:32%;margin-right:1%;border-top: green 7px solid;background-color: white;">
                                                                    <h3 style="text-align:center;">New Appointments</h3>
                                                                    <div class="overflowhidde2">
                                                                        <div class="ourteamblur22"></div>
                                                                    </div>
                                                                    <hr class="rulerourtema">
                                                                    <div class="imgeourteamperson2 square-img-make">
                                                                        <img src="img/sidebar/logo.png.jpeg">
                                                                    </div>
                                                                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                                                                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Interview For</strong></h4>
                                                                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">Job Title</strong></h4>
                                                                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#48962e">Time and Date</strong></h4>
                                                                    <h4 class="text-center2" style="font-size:15px;"><strong style="color:#414141">20.17.2017 17.30</strong></h4>
                                                                    <button data-toggle="modal" data-target="#notificPop" style="margin-left: 36%;margin-top: 6%;" class="btn btn-danger">Notifications</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div></div>
                                                        <div class="clearfix"> </div>
                                                        <br>
                                                    </div>



                                                                      <div role="tabpanel" class="tab-pane" id="MyPurchaseAreaitemsPurchase">
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



                                                                    </div>
                                                                  </div>


                                                                </div>
                                                              </div>
                                                            </div>




                                                            <div class="clearfix"> </div>



                                                          </div>
                                                          <div id="InterviewsShowEdit" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                              <div class="modal-content">
                                                                <div class="modal-header">
                                                                  <button type="button" class="close" data-dismiss="modal">×</button>
                                                                  <h3 class="modal-title text-center">New Appionment</h3>
                                                                </div>
                                                                <div class="modal-body text-center">
                                                                  <div class="ov">
                                                                    <div>
                                                                      <div class="cardheader"></div><img class="img" src="img/logo_2.jpg" alt="">
                                                                    </div>
                                                                    <h3 class="username"><b>Amanda Sun</b></h3>
                                                                    <h5><b style="color: #3fa835">Interview For</b></h5>
                                                                    <h5> <b style="black"> Job Titile</b></h5>
                                                                    <br>
                                                                    <h5 style="color: #3fa835"><b>Appoinment Date</b></h5>
                                                                    <h5><b>18.08.2017-7.03AM</b></h5>
                                                                  </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                  <div class="left-float" style="margin-left:230px">
                                                                    <button type="button" class="btn vd_btn m-r-50 okbnt" style="padding:10px 30px;" data-dismiss="modal"> <span class="append-icon" style="text-align:left;margin-right:42"></span>Notification</button>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script src="js/custom.js.html"></script>

                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  @endsection