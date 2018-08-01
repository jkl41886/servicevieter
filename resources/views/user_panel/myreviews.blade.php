@php
$title = "UserSection"
@endphp

@extends('layouts.master')

@section('extended-header')

<tabs></tabs>

@endsection

@section('content')
<div role="tabpanel" class="tab-pane " id="MyReviewsArea">
  <div class="border-box">
    <div class=" custom-page-content">

    </div>
    <div class="main-content" style="background: #eee;">
      <div class="tab-section">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
            <div class=" bhoechie-tab">
              <div class="bhoechie-tab-content">
                <div>
                                                <!-- <ul class="nav nav-tabs" role="tablist">
                                      <li class="active" role="presentation">
                                        <a href="index.html#MyReviewsAreaSettings" MyContractsAreaCurrentContracts-controls="MyReviewsAreaSettings" role="tab" data-toggle="tab">
                                          <div class='row'>
                                            <div class='col-md-2' style="text-align: right">
                                              <i class="fa fa-cogs" aria-hidden="true">
                                              </i>
                                            </div>
                                            <div class='col-md-10' style="text-align: left">My Settings
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li role="presentation">
                                        <a href="index.html#MyReviewsAreaOurFollower" MyContractsAreaCurrentContracts-controls="MyReviewsAreaOurFollower" role="tab" data-toggle="tab">
                                          <div class='row'>
                                            <div class='col-md-2' style="text-align: right">
                                              <i class="fa fa-star" aria-hidden="true">
                                              </i>
                                            </div>
                                            <div class='col-md-10' style="text-align: left">My Favourite
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li role="presentation">
                                        <a href="index.html#MyReviewsAreaAboutUs" MyContractsAreaCurrentContracts-controls="MyReviewsAreaAboutUs" role="tab" data-toggle="tab">
                                          <div class='row'>
                                            <div class='col-md-2' style="text-align: right">
                                              <i class="fa fa-handshake-o" aria-hidden="true">
                                              </i>
                                            </div>
                                            <div class='col-md-10' style="text-align: left"> Service offers
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                      <li role="presentation">
                                        <a href="index.html#MyReviewsAreaOurTeam" MyContractsAreaCurrentContracts-controls="MyReviewsAreaOurTeam" role="tab" data-toggle="tab">
                                          <div class='row'>
                                            <div class='col-md-2' style="text-align: right">
                                              <i class="fa fa-briefcase" aria-hidden="true">
                                              </i>
                                            </div>
                                            <div class='col-md-10' style="text-align: left"> Jobs Offers
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                    </ul> -->
                                    <div class="tab-content no-t-m">
                                      <div role="tabpanel" class="tab-pane  active" id="MyContractsAreaCurrentContracts">
                                        <!--second section-->
                                        <div class="vd_content-section clearfix p-t-0" style="background: #eee; border-top: 1px solid #eee; border-bottom: 1px solid #eee;">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="tab-content no-bd mrgn0 pdng0">
                                                <div class="tab-pane active fade in" id="category1">
                                                  <div class="" style="background: #eee; border-bottom: 1px solid #eee; border-top: 1px solid #eee; margin-bottom: -59px;">


                                                    <div class="row mrgn30-0 projectRow">
                                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                        <div class="col-sm-3 brdRight">
                                                          <img src="{{asset('img/briant.png')}}" alt="" class="projectImg" style="float: left;">
                                                          <div style="float: right;margin-top: 14px;margin-right: 14px;">
                                                            <h4>
                                                              User Name
                                                            </h4>
                                                            <h4>
                                                              User ID
                                                            </h4>
                                                          </div>
                                                        </div>
                                                        <div class="col-sm-6 brdRight">
                                                          <h4>
                                                            Job Title
                                                          </h4>
                                                          <p class="mrgn5" style="float: left;">
                                                            Mohamed alaa is a really skilled freelancer.His skills are <br> above the average, he can sort out many problems.

                                                          </p>
                                                          <p class="mrgn5" style="float: right;margin-top: 24px;">
                                                            <span>
                                                              More...
                                                            </span>
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-3 " style="margin-top: 13px;float: right;">
                                                          <div class="rating cust-rating" style="padding: 0 !important;margin-left:-6px; ">
                                                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half" style="color: #ffd800;"></i>
                                                          </div><div class="time"><p>2 months ago</p></div><p>23,Dec 2016</p>
                                                        </div>
                                                      </a>
                                                    </div>

                                                    <div class="row mrgn30-0 projectRow" style="float: right; width: 92%;margin-bottom:20px!important">
                                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                        <div class="col-sm-3 larger-imgur" style="text-align: center;margin-top: 12px;">
                                                          <img src="{{asset('img/mini.png')}}" alt="">
                                                        </div>
                                                        <div class="col-sm-6 brdRight" style="    border-left: 1px solid rgba(0, 0, 0, 0.1);">
                                                          <h4>
                                                            Job Title
                                                          </h4>
                                                          <p class="mrgn5" style="float: left;">
                                                            Mohamed alaa is a really skilled freelancer.His skills are <br> above the average, he can sort out many problems.

                                                          </p>
                                                          <p class="mrgn5" style="float: right;margin-top: 24px;">
                                                            <span>
                                                              More...
                                                            </span>
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-2 col-md-3" style="margin-top: 13px;float: right;">
                                                          <div class="rating cust-rating" style="padding: 0 !important;margin-left:-6px; ">
                                                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half" style="color: #ffd800;"></i>
                                                          </div><div class="time"><p>2 months ago</p></div><p>23,Dec 2016</p>
                                                        </div>
                                                      </a>
                                                    </div>

                                                    <div class="row mrgn30-0 projectRow">
                                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                        <div class="col-sm-3 brdRight">
                                                          <img src="{{asset('img/briant.png')}}" alt="" class="projectImg" style="float: left;">
                                                          <div style="float: right;margin-top: 14px;margin-right: 14px;">
                                                            <h4>
                                                              User Name
                                                            </h4>
                                                            <h4>
                                                              User ID
                                                            </h4>
                                                          </div>
                                                        </div>
                                                        <div class="col-sm-6 brdRight">
                                                          <h4>
                                                            Job Title
                                                          </h4>
                                                          <p class="mrgn5" style="float: left;">
                                                            Mohamed alaa is a really skilled freelancer.His skills are <br> above the average, he can sort out many problems.

                                                          </p>
                                                          <p class="mrgn5" style="float: right;margin-top: 24px;">
                                                            <span>
                                                              More...
                                                            </span>
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-3" style="margin-top: 13px;float: right;">
                                                          <div class="rating cust-rating" style="padding: 0 !important;margin-left:-6px; ">
                                                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half" style="color: #ffd800;"></i>
                                                          </div><div class="time"><p>2 months ago</p></div><p>23,Dec 2016</p>
                                                        </div>
                                                      </a>
                                                    </div>
                                                    <div class="row mrgn30-0 projectRow" style="float: right; width: 92%;">
                                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                        <div class="col-sm-3 larger-imgur" style="text-align: center;margin-top: 12px;">
                                                          <img src="{{asset('img/mini.png')}}" alt="">
                                                        </div>
                                                        <div class="col-sm-6 brdRight" style="    border-left: 1px solid rgba(0, 0, 0, 0.1);">
                                                          <h4>
                                                            Job Title
                                                          </h4>
                                                          <p class="mrgn5" style="float: left;">
                                                            Mohamed alaa is a really skilled freelancer.His skills are <br> above the average, he can sort out many problems.

                                                          </p>
                                                          <p class="mrgn5" style="float: right;margin-top: 24px;">
                                                            <span>
                                                              More...
                                                            </span>
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-2 col-md-3" style="margin-top: 13px;float: right;">
                                                          <div class="rating cust-rating" style="padding: 0 !important;margin-left:-6px; ">
                                                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half" style="color: #ffd800;"></i>
                                                          </div><div class="time"><p>2 months ago</p></div><p>23,Dec 2016</p>
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
                                      <div role="tabpanel" class="tab-pane  " id="MyContractsAreaContractsdisputes">
                                        <div class="row pdng10-0 searchBar">
                                          <form>
                                            <div class="col-md-2 col-md-offset-2">
                                              <div>
                                                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
                                                </span>
                                                <input class="ui-autocomplete-input" placeholder="Contract ID" id="project-autocomplete" autocomplete="off" type="text">
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div>
                                                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
                                                </span>
                                                <input class="ui-autocomplete-input" placeholder="User Name" id="company-autocomplete" autocomplete="off" type="text">
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div>
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
                                            <div class="col-md-2">
                                              <button type="button" class="btn vd_btn vd_bg-blue" data-toggle="modal" data-target="" style="max-height:32px;color: white;">
                                                <span class="append-icon">
                                                  <i class="fa fa-search fa-fw">
                                                  </i>
                                                </span>Search Projects
                                              </button>
                                            </div>
                                          </form>
                                        </div>
                                        <!--second section-->
                                        <div class="vd_content-section clearfix">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="tab-content no-bd mrgn0 pdng0">
                                                <div class="tab-pane active fade in" id="category1">
                                                  <div class="panel widget container-fluid">
                                                    <div class="row mrgn30-0 projectRow">
                                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                        <div class="col-sm-2 brdRight">
                                                          <img src="{{asset('img/briant2.png')}}" alt="" class="projectImg">
                                                        </div>
                                                        <div class="col-sm-4 brdRight">
                                                          <h4>
                                                            Design Concept
                                                          </h4>
                                                          <p class="mrgn5">
                                                            Work Start: 05-07-2017 12:05:00
                                                          </p>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              In Progress
                                                            </span>
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-2  brdRight">
                                                          <div class="circleBar" data-percent="65">
                                                            <div style="width: 100px; height: 100px;">
                                                              <div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                                <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                                                  <span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">
                                                                    65%
                                                                  </span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-sm-2 brdRight">
                                                          <h4>
                                                            All Tasks
                                                          </h4>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              0
                                                            </span> Pending
                                                          </p>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              1
                                                            </span> Behind
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-2 contractLogo">
                                                          <img src="{{asset('img/mini.png')}}" alt="">
                                                        </div>
                                                      </a>
                                                    </div>
                                                    <div class="row mrgn30-0 projectRow">
                                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                        <div class="col-sm-2 brdRight">
                                                          <img src="{{asset('img/briant2.png')}}" alt="" class="projectImg">
                                                        </div>
                                                        <div class="col-sm-4 brdRight">
                                                          <h4>
                                                            Design Concept
                                                          </h4>
                                                          <p class="mrgn5">
                                                            Work Start: 05-07-2017 12:05:00
                                                          </p>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              In Progress
                                                            </span>
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-2  brdRight">
                                                          <div class="circleBar" data-percent="65">
                                                            <div style="width: 100px; height: 100px;">
                                                              <div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                                <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                                                  <span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">
                                                                    65%
                                                                  </span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-sm-2 brdRight">
                                                          <h4>
                                                            All Tasks
                                                          </h4>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              0
                                                            </span> Pending
                                                          </p>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              1
                                                            </span> Behind
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-2 contractLogo">
                                                          <img src="{{asset('img/mini.png')}}" alt="">
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
                                      <div role="tabpanel" class="tab-pane  " id="MyContractsAreaCancelledContracts">
                                        <div class="row pdng10-0 searchBar">
                                          <form>
                                            <div class="col-md-2 col-md-offset-2">
                                              <div>
                                                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
                                                </span>
                                                <input class="ui-autocomplete-input" placeholder="Contract ID" id="project-autocomplete" autocomplete="off" type="text">
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div>
                                                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
                                                </span>
                                                <input class="ui-autocomplete-input" placeholder="User Name" id="company-autocomplete" autocomplete="off" type="text">
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div>
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
                                            <div class="col-md-2">
                                              <button type="button" class="btn vd_btn vd_bg-blue" data-toggle="modal" data-target="" style="max-height:32px;color: white;">
                                                <span class="append-icon">
                                                  <i class="fa fa-search fa-fw">
                                                  </i>
                                                </span>Search Projects
                                              </button>
                                            </div>
                                          </form>
                                        </div>
                                        <!--second section-->
                                        <div class="vd_content-section clearfix">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="tab-content no-bd mrgn0 pdng0">
                                                <div class="tab-pane active fade in" id="category1">
                                                  <div class="panel widget container-fluid">
                                                    <div class="row mrgn30-0 projectRow">
                                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                        <div class="col-sm-2 brdRight">
                                                          <img src="{{asset('img/briant3.png')}}" alt="" class="projectImg">
                                                        </div>
                                                        <div class="col-sm-4 brdRight">
                                                          <h4>
                                                            Design Concept
                                                          </h4>
                                                          <p class="mrgn5">
                                                            Work Start: 05-07-2017 12:05:00
                                                          </p>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              In Progress
                                                            </span>
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-2  brdRight">
                                                          <div class="circleBar" data-percent="65">
                                                            <div style="width: 100px; height: 100px;">
                                                              <div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                                <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                                                  <span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">
                                                                    65%
                                                                  </span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-sm-2 brdRight">
                                                          <h4>
                                                            All Tasks
                                                          </h4>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              0
                                                            </span> Pending
                                                          </p>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              1
                                                            </span> Behind
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-2 contractLogo">
                                                          <img src="{{asset('img/mini.png')}}" alt="">
                                                        </div>
                                                      </a>
                                                    </div>
                                                    <div class="row mrgn30-0 projectRow">
                                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                        <div class="col-sm-2 brdRight">
                                                          <img src="{{asset('img/briant3.png')}}" alt="" class="projectImg">
                                                        </div>
                                                        <div class="col-sm-4 brdRight">
                                                          <h4>
                                                            Design Concept
                                                          </h4>
                                                          <p class="mrgn5">
                                                            Work Start: 05-07-2017 12:05:00
                                                          </p>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              In Progress
                                                            </span>
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-2  brdRight">
                                                          <div class="circleBar" data-percent="65">
                                                            <div style="width: 100px; height: 100px;">
                                                              <div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                                <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                                                  <span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">
                                                                    65%
                                                                  </span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-sm-2 brdRight">
                                                          <h4>
                                                            All Tasks
                                                          </h4>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              0
                                                            </span> Pending
                                                          </p>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              1
                                                            </span> Behind
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-2 contractLogo">
                                                          <img src="{{asset('img/mini.png')}}" alt="">
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
                                      <div role="tabpanel" class="tab-pane  " id="MyContractsAreaContractsDone">
                                        <div class="row pdng10-0 searchBar">
                                          <form>
                                            <div class="col-md-2 col-md-offset-2">
                                              <div>
                                                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
                                                </span>
                                                <input class="ui-autocomplete-input" placeholder="Contract ID" id="project-autocomplete" autocomplete="off" type="text">
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div>
                                                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
                                                </span>
                                                <input class="ui-autocomplete-input" placeholder="User Name" id="company-autocomplete" autocomplete="off" type="text">
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div>
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
                                            <div class="col-md-2">
                                              <button type="button" class="btn vd_btn vd_bg-blue" data-toggle="modal" data-target="" style="max-height:32px;color: white;">
                                                <span class="append-icon">
                                                  <i class="fa fa-search fa-fw">
                                                  </i>
                                                </span>Search Projects
                                              </button>
                                            </div>
                                          </form>
                                        </div>
                                        <!--second section-->
                                        <div class="vd_content-section clearfix">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="tab-content no-bd mrgn0 pdng0">
                                                <div class="tab-pane active fade in" id="category1">
                                                  <div class="panel widget container-fluid">
                                                    <div class="row mrgn30-0 projectRow">
                                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                        <div class="col-sm-2 brdRight">
                                                          <img src="{{asset('img/briant.png')}}" alt="" class="projectImg">
                                                        </div>
                                                        <div class="col-sm-4 brdRight">
                                                          <h4>
                                                            Design Concept
                                                          </h4>
                                                          <p class="mrgn5">
                                                            Work Start: 05-07-2017 12:05:00
                                                          </p>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              In Progress
                                                            </span>
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-2  brdRight">
                                                          <div class="circleBar" data-percent="65">
                                                            <div style="width: 100px; height: 100px;">
                                                              <div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                                <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                                                  <span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">
                                                                    65%
                                                                  </span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-sm-2 brdRight">
                                                          <h4>
                                                            All Tasks
                                                          </h4>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              0
                                                            </span> Pending
                                                          </p>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              1
                                                            </span> Behind
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-2 contractLogo">
                                                          <img src="{{asset('img/mini.png')}}" alt="">
                                                        </div>
                                                      </a>
                                                    </div>
                                                    <div class="row mrgn30-0 projectRow">
                                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                        <div class="col-sm-2 brdRight">
                                                          <img src="{{asset('img/briant.png')}}" alt="" class="projectImg">
                                                        </div>
                                                        <div class="col-sm-4 brdRight">
                                                          <h4>
                                                            Design Concept
                                                          </h4>
                                                          <p class="mrgn5">
                                                            Work Start: 05-07-2017 12:05:00
                                                          </p>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              In Progress
                                                            </span>
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-2  brdRight">
                                                          <div class="circleBar" data-percent="65">
                                                            <div style="width: 100px; height: 100px;">
                                                              <div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(324deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);">
                                                                <div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);">
                                                                  <span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">
                                                                    65%
                                                                  </span>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-sm-2 brdRight">
                                                          <h4>
                                                            All Tasks
                                                          </h4>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              0
                                                            </span> Pending
                                                          </p>
                                                          <p class="mrgn5">
                                                            <span class="label label-default vd_bg-blue vd_white">
                                                              1
                                                            </span> Behind
                                                          </p>
                                                        </div>
                                                        <div class="col-sm-2 contractLogo">
                                                          <img src="{{asset('img/mini.png')}}" alt="">
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
                  @endsection