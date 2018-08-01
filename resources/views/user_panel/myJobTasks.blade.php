@php
$title = "UserSection"
@endphp

@extends('layouts.master')

@section('extended-header')

<tabs>



    <tab name="Progress" :selected="true" icon="fa fa-hourglass-half" id="tasksInProgress"></tab>

    <tab name="Pause" icon="fa fa-pause" id="tasksInPause"></tab>


    <tab name="Stopped" icon="fa fa-stop-circle-o" id="tasksStoped"></tab>
    <tab name="Done" icon="fa fa-check-square-o" id="tasksDone"></tab>
    <tab name="Reported" icon="fa fa-exclamation-triangle" id="tasksRepored"></tab>


</tabs>

@endsection

@section('content')

<div role="tabpanel" class="tab-pane " id="MyJobArea">
    <div class="border-box" style="margin-top: 29px;">

        <!-- my contracts table -->
        <div style="background-color: #f3f3f3;" class="main-content">
            <div class="tab-section">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
                        <div class=" bhoechie-tab">
                            <div class="bhoechie-tab-content">
                                <div>

                                    <!--second section-->
                                    <div class="tab-content no-t-m">
                                        <div role="tabpanel" class="tab-pane" id="tasksInProgress">

                                            <div class="vd_content-section clearfix p-t-0" style="margin-top: -4px;" data-toggle="modal" data-target="#myModal">
                                                <div class="row">
                                                    <div style="margin-top: 30px; margin-bottom: -89px;" class="col-md-12">
                                                        <div class="tab-content no-bd mrgn0 pdng0">
                                                            <div class="tab-pane active fade in" id="category1">
                                                                <div class="panel widget container-fluid">
                                                                    <div class="row mrgn30-0 projectRow">
                                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                            <div class="col-sm-4 brdRight" style="width:348px; display: flex;flex-direction: row;align-items: center;">
                                                                                <img src="img/mini.png" alt="" style="float: left;">
                                                                                <div class="text-con" style="margin-top: -1px; margin-left: 20px">
                                                                                    <h4>Company Name</h4>
                                                                                    <p style="color: black;">Company ID</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-3 brdRight text-align">

                                                                                <div class="text-con">
                                                                                    <h4>Task Name</h4>
                                                                                    <p style="color: black;">Started: 16.8.2017</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-5 brdRight" style="border-right: none">
                                                                                <div class="task-progressbar">
                                                                                    <div class="progress blue">
                                                                                        <div class="progress-bar" style="width:50%; background:#007bff;">
                                                                                            <div class="progress-value">50%</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                        <!-- <div class="col-sm-3 text-align">

                                                                                            <h4 class="text-height">
                                                                                                <button type="button" class="btn btn-primary btn-sm" style="width: 39%"><span class="btn-primary-text">View</span></button>
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


                                                    <div role="tabpanel" class="tab-pane" id="tasksInPause">

                                                        <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;">
                                                            <div class="row">
                                                                <div style="margin-top: 30px; margin-bottom: -89px;" class="col-md-12">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">
                                                                            <div class="panel widget container-fluid">
                                                                                <div class="row mrgn30-0 projectRow">
                                                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                                        <!-- <div class="col-sm-4 brdRight ">

                                                                                            <img src="img/mini.png" alt="user" style="border-radius: 50px; margin-top: 10px; height: 70px; width: 120px; float: left; margin-left: 15px ">


                                                                                            <div class="text-con" style="float: right;">
                                                                                                <h4>Company Name</h4>
                                                                                                <p style="color: black;">Employee Name</p>

                                                                                            </div>
                                                                                        </div> -->
                                                                                        <div class="col-sm-4 brdRight" data-toggle="modal" data-target="#myModal4" style="width:348px; display: flex;flex-direction: row;align-items: center;">
                                                                                            <img src="img/mini.png" alt="" style="float: left;">
                                                                                            <div class="text-con" style="margin-top: -1px; margin-left: 20px">
                                                                                                <h4>Company Name</h4>
                                                                                                <p style="color: black;">Company ID</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-3 brdRight text-align" data-toggle="modal" data-target="#myModal4 ">

                                                                                            <div class="text-con">
                                                                                                <h4>Task Name</h4>
                                                                                                <p style="color: black;">Started: 16.8.2017</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-3  brdRight" data-toggle="modal" data-target="#myModal4 ">
                                                                                            <div class="task-progressbar">
                                                                                                <div class="progress yellow">
                                                                                                    <div class="progress-bar" style="width:70%; background:#ffc805;">
                                                                                                        <div class="progress-value">70%</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-1 brdRight text-align" style="border-right: none">
                                                                                            <button type="button" class="btn btn-primary btn-sm" style="width: 100px !important;background: #ed7d31;border-color:#ed7d31;margin-top: 24px;" data-toggle="modal" data-target="#reasonPause" data-dismiss="modal">Reason</button>
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
                                                    <div role="tabpanel" class="tab-pane" id="tasksStoped">

                                                        <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;">
                                                            <div class="row">
                                                                <div style="margin-top: 30px; margin-bottom: -89px;" class="col-md-12">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">
                                                                            <div class="panel widget container-fluid">
                                                                                <div class="row mrgn30-0 projectRow">
                                                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                                        <div class="col-sm-4 brdRight" style="width:348px; display: flex;flex-direction: row;align-items: center;" data-toggle="modal" data-target="#myModal3">
                                                                                            <img src="img/mini.png" alt="" style="float: left;">
                                                                                            <div class="text-con" style="margin-top: -1px; margin-left: 20px">
                                                                                                <h4>Company Name</h4>
                                                                                                <p style="color: black;">Company ID</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-3 brdRight text-align" data-toggle="modal" data-target="#myModal3">

                                                                                            <div class="text-con">
                                                                                                <h4>Task Name</h4>
                                                                                                <p style="color: black;">Started: 16.8.2017</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-3 brdRight" data-toggle="modal" data-target="#myModal3">
                                                                                            <div class="task-progressbar">
                                                                                                <div class="progress red">
                                                                                                    <div class="progress-bar" style="width:20%; background:red;">
                                                                                                        <div class="progress-value">20%</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-2 brdRight text-align" style="border-right: none">
                                                                                            <button type="button" class="btn btn-primary btn-sm" style="width: 75px !important ;background: #ed7d31;border-color:#ed7d31;margin-top: 24px;" data-toggle="modal" data-target="#reasonStopped">Reason</button>
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
                                                    <div role="tabpanel" class="tab-pane" id="tasksDone">

                                                        <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;" data-toggle="modal" data-target="#myModal2">
                                                            <div class="row">
                                                                <div style="margin-top: 30px; margin-bottom: -89px;" class="col-md-12">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">
                                                                            <div class="panel widget container-fluid">
                                                                                <div class="row mrgn30-0 projectRow">
                                                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                                        <!-- <div class="col-sm-4 brdRight ">

                                                                                            <img src="img/mini.png" alt="user" style="border-radius: 50px; margin-top: 10px; height: 70px; width: 120px; float: left; margin-left: 15px ">


                                                                                            <div class="text-con" style="float: right;">
                                                                                                <h4>Company Name</h4>
                                                                                                <p style="color: black;">Employee Name</p>

                                                                                            </div>
                                                                                        </div> -->
                                                                                        <div class="col-sm-4 brdRight" style="width:348px; display: flex;flex-direction: row;align-items: center;">
                                                                                            <img src="img/mini.png" alt="" style="float: left;">
                                                                                            <div class="text-con" style="margin-top: -1px; margin-left: 20px">
                                                                                                <h4>Company Name</h4>
                                                                                                <p style="color: black;">Company ID</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-3 brdRight text-align">

                                                                                            <div class="text-con">
                                                                                                <h4>Task Name</h4>
                                                                                                <p style="color: black;">Started: 16.8.2017</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-5 brdRight" style="border-right: none">
                                                                                            <div class="task-progressbar">
                                                                                                <div class="progress green">
                                                                                                    <div class="progress-bar" style="width:100%; background:#70963c;">
                                                                                                        <div class="progress-value">100%</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
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
                                                    <div role="tabpanel" id="tasksRepored" class="tab-pane">

                                                        <div class="vd_content-section clearfix p-t-0" style="margin-top: -3px;">
                                                            <div class="row">
                                                                <div style="margin-top: 30px; margin-bottom: -89px;" class="col-md-12">
                                                                    <div class="tab-content no-bd mrgn0 pdng0">
                                                                        <div class="tab-pane active fade in" id="category1">
                                                                            <div class="panel widget container-fluid">
                                                                                <div class="row mrgn30-0 projectRow">
                                                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                                        <div class="col-sm-4 brdRight" style="width:348px; display: flex;flex-direction: row;align-items: center;">
                                                                                            <img src="img/mini.png" alt="" style="float: left;">
                                                                                            <div class="text-con" style="margin-top: -1px; margin-left: 20px">
                                                                                                <h4>Company Name</h4>
                                                                                                <p style="color: black;">Company ID</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-3 brdRight text-align">

                                                                                            <div class="text-con">
                                                                                                <h4>Task Name</h4>
                                                                                                <p style="color: black;">Started: 16.8.2017</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-3 brdRight">
                                                                                            <div class="task-progressbar">
                                                                                                <div class="progress orange">
                                                                                                    <div class="progress-bar" style="width:80%; background:#db9f08;">
                                                                                                        <div class="progress-value">80%</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-2 text-align" style="border-right: none">

                                                                                            <h4 class="text-height">
                                                                                                <button type="button" class="btn btn-primary btn-sm" style="width: 100px !important;background: #ed7d31;border-color:#ed7d31;" data-toggle="modal" data-target="#reasonRepo">Reason</button>
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







            <div class="modal fade" id="reasonPause" tabindex="-1" role="dialog" aria-hidden="true" style="overflow-x: scroll; display: none;">

        <div class="modal-dialog modal-lg" style="width:650px">
            <div style="height: 10px; width: 100%;background-color: #ffc805; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Reason</h4>
                </div>
                <!-- <hr style="color:grey" /> -->
                <div class="">
                    <textarea readonly="" name="reasonPause" rows="5" cols="18" style="background: white ;padding:20px">Here we will see the Reason why the Task is Pause</textarea>
                </div>
                <!-- <hr style="color:grey" /> -->
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
                        <span class="append-icon" style="text-align:left;margin-right:42">
                            <img src="img/true.png" style="width:20px;"> &nbsp;&nbsp;O.K</span>
                    </button>
                </div>
            </div>
        </div>
    </div>









    <div class="modal fade" id="reasonStopped" tabindex="-1" role="dialog" aria-hidden="true" style="overflow-x:scroll">

        <div class="modal-dialog modal-lg" style="width:650px">
            <div style="height: 10px; width: 100%;background-color: red; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Reason</h4>
                </div>
                <!-- <hr style="color:grey" /> -->
                <div class="">
                    <textarea name="reasonStoped" rows="5" cols="18" style="background: white ; padding:20px" readonly="">Here we will see the Reason why the Task is Stopped</textarea>
                </div>
                <!-- <hr style="color:grey" /> -->
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
                    <span class="append-icon" style="text-align:left;margin-right:42">
                        <img src="img/true.png" style="width:20px;"> &nbsp;&nbsp;O.K</span>
                </button>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="reasonRepo" tabindex="-1" role="dialog" aria-hidden="true" style="overflow-x:scroll">

        <div class="modal-dialog modal-lg" style="width:650px">
            <div style="height: 10px; width: 100%;background-color: #db9f08; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Reason</h4>
                </div>
                <hr style="color:grey">
                <div>
                    <h4 style="padding : 20px">View The Adding Text</h4>
                </div>
                <hr style="color:grey">
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
                    <span class="append-icon" style="text-align:left;margin-right:42">
                        <img src="img/true.png" style="width:20px;"> &nbsp;&nbsp;O.K</span>
                </button>
                </div>
            </div>
        </div>
    </div>






    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none; padding-left: 19px;">
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
                        <div class="ourteamblur22" recommended=""></div>
                    </div>
                    <hr class="rulerourtema" style="width:70%">
                    <div class="imgeourteamperson2" style="border-radius:5px !important; width : 400px">
                        <img src="img/sidebar/logo.png.jpeg">
                    </div>
                    <h3 class="ourteamjopposition22 text-center2 col97be2e">Amanda Sun </h3>
                    <h4 style="margin-left: 30%">Looking blog writer for our blog</h4>
                    <br>

                </div>

                <div class="row margin6 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="margin-top:20px !important; height:50px">
                    <div class="col-sm-12">
                        <!-- <div class="task-progressbar"> -->
                        <div class="progress green" style="margin-top: 18px">
                            <div class="progress-bar" style="width:100%; background:#70963c;">
                                <div class="progress-value">100%</div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-12" style="margin-top:15px">
                    <div class="col-sm-3">
                        <img src="img/country_road_summer_drive.jpg" alt="">
                    </div>
                    <div class="col-sm-3">
                        <img src="img/country_road_summer_drive.jpg" alt="">
                    </div>
                    <div class="col-sm-3">
                        <img src="img/country_road_summer_drive.jpg" alt="">
                    </div>
                    <div class="col-sm-3">
                        <img src="img/country_road_summer_drive.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-12" style="margin-top:15px">
                    <div class="col-sm-3">
                        <img src="img/country_road_summer_drive.jpg" alt="">
                    </div>
                    <div class="col-sm-3">
                        <img src="img/country_road_summer_drive.jpg" alt="">
                    </div>
                    <div class="col-sm-3">
                        <img src="img/country_road_summer_drive.jpg" alt="">
                    </div>
                    <div class="col-sm-3">
                        <img src="img/country_road_summer_drive.jpg" alt="">
                    </div>
                </div>


                <hr class="hfkaniei">
                <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                    <div class="col-sm-4 col-lg-offset-1">
                        <button class="" type="button" data-dismiss="modal" style="text-align: left;
                                                                                          border-radius: 5px !important;
                                                                                          padding: 3px 10px !important;
                                                                                          background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important;
                                                                                          margin-top: 20px !important;
                                                                                          margin-bottom: 10px !important;
                                                                                          padding: 4px;
                                                                                          border-radius: 24px;
                                                                                          color: black;
                                                                                          width: 80% !important ;
                                                                                          background: white;
                                                                                          margin-left: 40%;
                                                                                          border: 1px solid #cbcbcb;">
                            <span class="append-icon" style="text-align:left;margin-right:42">
                                <img src="img/true.png" style="width:20px;"> &nbsp;&nbsp;Accept</span>
                        </button>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 ">
                        <button class="" type="button" data-toggle="modal" data-target="#denne2" data-dismiss="modal" style="text-align: left;
                                                                                                              border-radius: 5px !important;
                                                                                                              padding: 3px 10px !important;
                                                                                                              background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%) !important;
                                                                                                              margin-top: 20px !important;
                                                                                                              margin-bottom: 10px !important;
                                                                                                              padding: 4px;
                                                                                                              border-radius: 24px;
                                                                                                              color: black;
                                                                                          width: 80% !important ;
                                                                                                              background: white;
                                                                                                              border: 1px solid #cbcbcb;">
                            <span class="append-icon" style="text-align:left;margin-right:42">
                                <img src="img/false.png" style="width:20px;"> &nbsp;&nbsp;Denied
                            </span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>




            @endsection