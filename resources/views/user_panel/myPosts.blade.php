@php
$title = "UserSection"
@endphp

@extends('layouts.master')

@section('extended-header')

<tabs>



    <tab name="In Check" :selected="true" icon="fa fa-eye" id="MyPostsAreaInCheck"></tab>

    <tab name="In Hold" icon="fa fa-hand-paper-o" id="MyPostsAreaInHold"></tab>


    <tab name="Trash" icon="fa fa-trash" id="MyPostsAreaCancelled"></tab>


</tabs>

@endsection

@section('content')

<div role="tabpanel" class="tab-pane " id="MyPostsArea">
    <div class="border-box">
        <div class=" custom-page-content">

        </div>
        <div style="background-color: #f3f3f3;" class="main-content">
            <div class="tab-section">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
                        <div class=" bhoechie-tab">
                            <div class="bhoechie-tab-content">
                                <div>

                                    <div class="tab-content no-t-m">
                                        <div role="tabpanel" class="tab-pane" id="MyPostsAreaInCheck">

                                            <!--second section-->
                                            <div class="vd_content-section clearfix">
                                                <div class="row">
                                                    <div style="margin-bottom: -89px;" class="col-md-12">
                                                        <div class="tab-content no-bd mrgn0 pdng0">
                                                            <div class="tab-pane active fade in" id="category1">
                                                                <!-- My post -->
                                                                <div class="panel widget container-fluid">
                                                                    <div class="row mrgn30-0 projectRow">
                                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#alertModal" title="" class="notice notice-success" style="color: black;">
                                                                            <div class="col-sm-3 brdRight">
                                                                                <h4>Project Title</h4>
                                                                                <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                                                            </div>
                                                                            <div class="col-sm-3 brdRight text-align">
                                                                                <h4>
                                                                                    Budget
                                                                                </h4>
                                                                                <h4 class="text-height">
                                                                                    2500,-€ Fix
                                                                                </h4>
                                                                            </div>
                                                                            <div class="col-sm-3 brdRight text-align">
                                                                                <h4>
                                                                                    Total Task
                                                                                </h4>
                                                                                <h4 class="text-height">
                                                                                    4
                                                                                </h4>
                                                                            </div>
                                                                            <div class="col-sm-3 text-align">
                                                                                <h4>
                                                                                    Status
                                                                                </h4>
                                                                                <h4 class="text-height" style="color: red;">
                                                                                    Waiting
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
                                        <div role="tabpanel" class="tab-pane" id="MyPostsAreaInHold">
                                            <!--second section-->
                                            <div class="vd_content-section clearfix">
                                                <div class="row">
                                                    <div style="margin-bottom: -89px;" class="col-md-12">
                                                        <div class="tab-content no-bd mrgn0 pdng0">
                                                            <div class="tab-pane active fade in" id="category1">
                                                                <div class="panel widget container-fluid">
                                                                    <div class="row mrgn30-0 projectRow">
                                                                        <a href="javascript:void(0);" title="" class="notice notice-success" style="color: black;">
                                                                            <div class="col-sm-3 brdRight" data-toggle="modal" data-target="#viewThisJob">
                                                                                <h4>Project Title</h4>
                                                                                <p style="color: black;">12-02-2017 / 17:30 Uhr</p>
                                                                            </div>
                                                                            <div class="col-sm-3 brdRight text-align" data-toggle="modal" data-target="#viewThisJob">
                                                                                <h4>
                                                                                    Budget
                                                                                </h4>
                                                                                <h4 class="text-height">
                                                                                    15,-€ Hourly
                                                                                </h4>
                                                                            </div>
                                                                            <div class="col-sm-3 brdRight text-align" data-toggle="modal" data-target="#viewThisJob">
                                                                                <h4>
                                                                                    Total Task
                                                                                </h4>
                                                                                <h4 class="text-height">
                                                                                    4
                                                                                </h4>
                                                                            </div>
                                                                            <div class="col-sm-3 text-align" data-toggle="modal" data-target="#reasonAlert">
                                                                                <h4>
                                                                                    Porsonals
                                                                                </h4>
                                                                                <h4 style="color: red;">
                                                                                    On Hold
                                                                                </h4>
                                                                                <p class="mrgn5">
                                                                                    <span class="label label-default vd_bg-blue vd_white" style="background: red !important;">
                                                                                        Reason
                                                                                    </span>
                                                                                </p>
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

                                        <div role="tabpanel" class="tab-pane" id="MyPostsAreaCancelled">
                                            <!--second section-->
                                            <div class="vd_content-section clearfix">
                                                <div class="row">
                                                    <div style="margin-bottom: -89px;" class="col-md-12">
                                                        <div class="tab-content no-bd mrgn0 pdng0">
                                                            <div class="tab-pane active fade in" id="category1">
                                                                <!-- my -->
                                                                <div class="panel widget container-fluid">
                                                                    <div class="row mrgn30-0 projectRow">
                                                                        <a href="javascript:void(0);" title="" class="notice notice-success" style="color: black;">
                                                                            <div class="col-sm-3 brdRight" data-toggle="modal" data-target="#alertModal">
                                                                                <h4>Project Title</h4>
                                                                                <p style="color: black;">12-02-2017 / 17:30 Uhr</p>
                                                                            </div>
                                                                            <div class="col-sm-3 brdRight text-align" data-toggle="modal" data-target="#alertModal">
                                                                                <h4>
                                                                                    Budget
                                                                                </h4>
                                                                                <h4 class="text-height" data-toggle="modal" data-target="#alertModal">
                                                                                    15,-€ Hourly
                                                                                </h4>
                                                                            </div>
                                                                            <div class="col-sm-3 brdRight text-align" data-toggle="modal" data-target="#alertModal">
                                                                                <h4>
                                                                                    Total Task
                                                                                </h4>
                                                                                <h4 class="text-height">
                                                                                    4
                                                                                </h4>
                                                                            </div>
                                                                            <div class="col-sm-3 text-align" data-toggle="modal" data-target="#reasonAlert">
                                                                                <h4>
                                                                                    Porsonals
                                                                                </h4>
                                                                                <h4 style="color: red;">
                                                                                    In Trush
                                                                                </h4>
                                                                                <p class="mrgn5">
                                                                                    <span class="label label-default vd_bg-blue vd_white" style="background: red !important;">
                                                                                        Reason
                                                                                    </span>
                                                                                </p>
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











<div class="modal fade" id="reasonAlert" tabindex="-1" role="dialog" aria-hidden="true" style="overflow-x: scroll; display: none;">

        <div class="modal-dialog ">
            <div style="height: 10px; width: 100%;background-color: red ; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Reason</h4>
                </div>

                <div class="modal-body" style="border-top: 1px solid lightgray; width: 100%">
                    <p align="center">Will view in Hold Reason</p>
                </div>
                <div class="modal-footer" style="border-top: 1px solid lightgray; width: 100%">
                    <button class="search-employer-acc" type="button" data-toggle="modal" data-dismiss="modal" data-target="#" style="text-align: left;
                                                                    width: 80px !important;padding: 4px;border-radius: 24px;color: black;background: white;border: 1px solid #cbcbcb;
                                                                    margin-right: 150px">
                        <span class="append-icon" style="text-align:left;margin-right:42">
                            <img src="img/true.png" style="width:20px; text-align:center">O.K</span>
                    </button>
                </div>
            </div>
        </div>
    </div>









    <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-hidden="true" style="overflow-x: scroll; display: none;">

        <div class="modal-dialog ">
            <div style="height: 10px; width: 100%;background-color: red; margin-top:-8px; border-radius-top:5px"></div>
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                <div class="modal-header" style="padding: 8px;">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Alert</h4>
                </div>

                <div class="modal-body" style="border-top: 1px solid lightgray; width: 100%">
                    <p align="center">No Action Till the job in check</p>
                </div>
                <div class="modal-footer" style="border-top: 1px solid lightgray; width: 100%">
                    <button class="search-employer-acc" type="button" data-toggle="modal" data-dismiss="modal" data-target="#" style="text-align: left;
                                                                width: 80px !important;padding: 4px;border-radius: 24px;color: black;background: white;border: 1px solid #cbcbcb;
                                                                margin-right: 150px">
                        <span class="append-icon" style="text-align:left;margin-right:42">
                            <img src="img/true.png" style="width:20px; text-align:center">O.K</span>
                    </button>
                </div>



            </div>

        </div>
    </div>
@endsection