@php
$title = "UserSection"
@endphp

@extends('layouts.master')
@section('head')
    <style>.custom-dropdown {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            margin: 10px;
        }
        #btn_edit {
            color: black;
        }

            #btn_edit:hover {
                background-color: white;
                color: black;
            }
         .abrakadabra {
             white-space: pre-line;
         }
         .abrakadabra::value {
             white-space: pre-line;
         }
        .btn_edit1:hover {
            color: blue;
        }

        .btn_edit2:hover {
            color: blue;
        }

        .uploaded-img {

            position: relative;
            margin-top: 20px;
        }

            .uploaded-img img {
                max-width: 100%;
            }

        .immer-img {
            left: 0;
            position: absolute;
            top: 50px;
            width: 100%;
            z-index: 99
        }

        .position-absulute {
            position: absolute;
            top: 26px;
            left: 0px;
            width: 100%;
            z-index: 9;
        }

        .paper-doc {
            background: none repeat scroll 0 0 #fff;
            height: 30px;
            margin: auto;
            position: relative;
            border: 1px solid #e1e1e1;
            transition: ease 0.4s
        }

        .paper-doc1 {
            width: 69%;
            top: 0;
            transition: ease 0.4s
        }

        .paper-doc2 {
            top: -22px;
            width: 77%;
            transition: ease 0.6s;
        }

        .paper-doc3 {
            top: -43px;
            width: 80%;
        }

        .uploaded-img:hover .paper-doc1 {
            transition: ease 0.4s;
            top: -8px;
        }

        .uploaded-img:hover .paper-doc2 {
            transition: ease 0.6s;
            top: -26px;
        }

        .abslt-text {
            position: absolute;
            text-align: center;
            top: 72px;
            left: 0px;
            width: 100%;
            z-index: 99;
        }

            .abslt-text h4 {
                font-size: 16px;
            }

            .abslt-text p {
                font-size: 12px;
            }

            .abslt-text span {
                background: none repeat scroll 0 0 #f5f5f5;
                border: 1px solid #e1e1e1;
                border-radius: 10px;
                font-size: 12px;
                padding: 1px 10px 2px;
            }

        .uploaded-img a {
            color: #555;
            text-decoration: none;
        }

        .edit-btn, .save-btn, .cancel-btn {
            background: #ffffff none repeat scroll 0 0;
            border: 1px solid #cccccc;
            cursor: pointer;
            font-weight: 600;
            height: 35px;
            position: absolute;
            right: -1px;
            top: -1px;
            transition: all 0.3s ease 0s;
            width: 76px;
        }

            .edit-btn:hover, .save-btn:hover, .cancel-btn:hover {
                background: white;
            }

        .ne-proect {
            border: 1px solid grey;
            padding: 11px;
            top: 14px;
            float: right;
            background-color: #5e5e5e;
            color: #fff !important;
            margin-right: 20px;
            margin-top: 7px;
            border-radius: 3px;
            padding: 4px 15px;
            font-size: 11px;
        }
         .btn.btn-danger.btn-xs {
            padding-left: 7px !important;
        }

        .search-container button i{
            box-shadow: none;
            background-color: #ddd;
        }
        .search-container button i:hover{
            box-shadow: none;
            background-color: #ccc;
        }
        .searchbar .search-container{
            width: 26%;
            margin-top: 4px;
        }
        .searchbar .search-container input[type=text] {

            margin-bottom: 8px;

        }
        .search-container button {

        padding: 0px 8px;
        margin-top: 8px;
        margin-bottom: 8px;

        }
        .card-content .btn.btn-primary.btn-xs .fa.fa-eye{
            background-color: transparent;
        }
        /*custom end*/

        .ne-proect:hover {
            color: red !important;
        }

        .projectRow {
            float: left;
            margin: -2px 0 -4px !important;
            padding: 10px;
            position: relative;
            transition: all 0.2s ease 0s;
            width: 100%;
        }

        i.fa.fa-eye {
            padding: 2px 4px;
            text-align: center;
        }

        .btn.btn-xs, .btn-group-xs .btn, .navbar .navbar-nav > li > a.btn.btn-xs, .btn-group-xs .navbar .navbar-nav > li > a.btn {
            padding: 9px 7px;
        }

        .btn:not(.btn-just-icon):not(.btn-fab) .fa, .navbar .navbar-nav > li > a.btn:not(.btn-just-icon):not(.btn-fab) .fa {
            left: -3px;
            top: 0px !important;
        }

        .glyphicon {
            left: 5px;
        }

        .fa.fa-eye {
            left: 9px !important;
        }
        .hidden-block{
            display: none;
        }
        .padding15:hover .hidden-block{
            display: block;
        }
        .hidden-block{
            position: absolute;
            background-color: rgba(0,0,0,.8);
            opacity: 0.9;
            top: 0px;
            padding-right: 41px;
            width: 99%;
            height: 100%;
        }
        .hidden-block ul{
            list-style-type: none;
            position: absolute;
            top: 45%;
            left: 14%;
        }
        .hidden-block ul li{
            display: inline-block;
            margin-left: 10px;
        }
        .uploaded-doc .hidden-block ul li i{
            background-color: #97be2e;
            padding: 10px;
            color: #fff;
        }
        .uploaded-img{
            position: relative;
        }
        #adjust-btn-add{
            padding: 4px 3px;
            margin-top: 0;
            top: 0;
            color: #777 !important;
            background-color: #fff;
            box-shadow: 1px 1px 1px 1px #DCD9CD;
            border: none;
        }
        .search-contain .inner-addon button{
            box-shadow: none;
            background-color: transparent;
            border: none;
            position: absolute;
            right: 6%;
            top: 89px;
        }
        .search-contain {
            position: relative;
        }
        .search-contain .inner-addon i{
            background-color: transparent;
            box-shadow: none;
            position: absolute;
            right: 94%;
            top: 17px;
        }
        .search-contain input[type=text]{
            margin-top: 14px;
            margin-right: 22px;
            float: right;
            padding-left: 32px;
            padding-right: 6px;
            border-radius: 20px;
            background-color: #ddd;

        }
        /*search field*/
        /*Pop ups start*/
        .modal-footer.text-center2 .newbie-reject{
            border: 1px solid #cbcbcb;
            margin: 15px 0px;
            font-size: 14px;
            background: linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%);
            padding: 3px 13px;
            box-shadow: none;
            margin-right: 7px;
            display: inline-block;
            padding-left: 0px;
            padding-right: 6px;
        }
        .newbie-reject img{
            width: 25%;
        }
        /*End Popups*/
        /*end seach field*/
        @media(max-width:1200px) {

            .hidden-block ul{

                top: 38%;
                left: 5%;
            }
        }
        @media(max-width:1130px) {

            .hidden-block ul{

                top: 38%;
                left: 0%;
            }
        }
        @media(max-width:992px){
            .hidden-block{

            padding-right: 41px;
            width: 99%;
            height: 85%;
            }
            .hidden-block ul{

                top: 45%;
                left: 32%;
            }

        }
        @media(max-width:767px){
            .hidden-block ul{

                top: 45%;
                left: 44%;
            }
        }
        @media(max-width:500px){
            .hidden-block ul{

                top: 45%;
                left: 40%;
            }
        }
    </style>
@endsection

@section('extended-header')

<tabs>



  <tab name="My Documents" :selected="true" icon="fa fa-files-o" id="SearchaJobAreaMyDocuments"></tab>

  <tab name="My Job Searches" icon="fa fa-briefcase" id="SearchaJobAreaMyjobSearchs"></tab>


  <tab name="My Offers For Work" icon="fa fa-coffee" id="SearchaJobAreaMyOffersForWork"></tab>
  <tab name="Rejected" icon="fa fa-eject" id="SearchaJobAreaRejected"></tab>


</tabs>

@endsection

@section('content') 
<div role="tabpanel" class="tab-pane " id="SearchaJobArea">
                <div class="border-box" style="margin-top: 2px;">
                    <div class=" custom-page-content">
                        <!--
                                    <section class="content-header">
                                        <div class='row'>
                                            <div class="col-lg-2">
                                                <h4>
                                                    <i class="fa fa fa-briefcase">
                                                    </i>Search a Job
                                                </h4>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row" style="margin-top:5px;margin-bottom:5px;">
                                                    <form>
                                                        <div class="col-md-2 col-md-offset-2">
                                                            <div class="filter-cell">
                                                                <select class="form-control">
                                                                    <option>Price</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="filter-cell">
                                                                <select class="form-control">
                                                                    <option>Brand</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4" style="float:right;">
                                                            <input class="searchbox-ov" type="search" placeholder="Search">
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-lg-2" style="text-align:right;margin-top:5px;" data-toggle="modal" data-target="#searchajobAddNewJobSearch">
                                                <button type="button" class="btn vd_btn" data-toggle="modal" data-target="#newJobSearchModal" style="max-height:32px;color: white;background-color: #5d6367; margin-left: -33%;">
                                                    <span class="glyphicon glyphicon-plus">
                                                    </span> Add New Job Search
                                                </button>
                                            </div>
                                        </div>
                                    </section>
            -->
                    </div>
                    <div class="main-content">
                        <div class="tab-section">
                            <div class="row" style="background: #eee;margin-top: -10px;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
                                    <div class=" bhoechie-tab">
                                        <div class="bhoechie-tab-content" style="background: #eee;">
                                            <div>

                                                <div class="tab-content no-t-m" style="background: #eee;">
                                                    <div role="tabpanel" class="tab-pane  active" id="MyContractsAreaCurrentContracts">

                                                        <div class="tab-content no-t-m">
                                                            <div role="tabpanel" id="SearchaJobAreaMyDocuments" class="tab-pane m-t-35">
                                                                <div class="tab-main-content">
                                                                    <div class="row" style="margin-bottom: -137px;">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                            <div class="editabl" style="margin-top:30px">

                                                                                <div class="edittable-title">
                                                                                    <h2>My documents</h2>
                                                                                </div>

                                                                                <div class="editable" style="padding-top:30px;">
                                                                                    <div class="newbutton" id="" style="float: left;background: white;">

                                                                                        <!-- <button type="button" class="btn_edit1" style="float:left;border: 1px solid #cdcdcd;background: white;margin-top: -30px;border-left: white;border-top: white;font-weight: 600;"><i class="fa fa-upload" aria-hidden="true"></i>Edit</button> -->

                                                                                    </div>
                                                                                    <div>
                                                                                        <button type="button" onclick="document.getElementById('upFile').click();" class="btn_edit2 pull-right" style="float:left; background: #43a047; font-size:12px; color:white; border: 1px solid white;">
                                                                                            <i class="glyphicon glyphicon-plus-sign" style="margin-left:-10px" aria-hidden="true"></i>
                                                                                            Add New File
                                                                                        </button>
                                                                                        <input style="display:none" id="upFile" type="file">
                                                                                    </div>
                                                                                    <div class="text">
                                                                                        <div class="col-md-12">
                                                                                            <div class="uploaded-doc">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-2 col-sm-4 padding15">
                                                                                                      <button type="button" class="btn_edit2 pull-right" style="float:left; background: white; font-size:12px; border: 1px solid grey; margin:20px 20px; border-radius:20px; width:70%">
                                                                                                          PDF Title
                                                                                                      </button>
                                                                                                        <div class="uploaded-img">
                                                                                                            <a href="">
                                                                                                                <img src="img/pdf-icon-elarge.png">
                                                                                                                <div class="immer-img">
                                                                                                                </div>
                                                                                                                <div class="">
                                                                                                                    <div class=""></div>
                                                                                                                    <div class=""></div>
                                                                                                                    <div class=""></div>
                                                                                                                </div>
                                                                                                                <div class="abslt-text">
                                                                                                                    <h4></h4>
                                                                                                                    <p></p>

                                                                                                                </div>
                                                                                                            </a>

                                                                                                            <!-- <div class="hidden-block">
                                                                                                  <h3>Main Title</h3>
                                                                                                  <ul>
                                                                                                    <li><i class="fa fa-eye"></i></li>
                                                                                                    <li><i class="fa fa-trash"></i></li>
                                                                                                  </ul>
                                                                                            </div> -->
                                                                                                        </div>
                                                                                                        <div class="" style="margin-left:20%">
                                                                                                          <!-- <p  style="float:left;margin-right: 5px;">
                                                                                                                <button class="btn btn-primary btn-xs" title="View" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-eye-open"></span></button>
                                                                                                          </p> -->
                                                                                                          <p style="float:left;margin-right: 5px; width:50px">
                                                                                                              <button data-toggle="modal" data-target="#dell" class="btn btn-primary btn-xs" title="Remove" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp; Remove</button>
                                                                                                          </p>
                                                                                                      </div>

                                                                                                </div>

                                                                                            <div class="col-md-2 col-sm-4 padding15">
                                                                                              <button type="button" class="btn_edit2 pull-right" style="float:left; background: white; font-size:12px; border: 1px solid grey; margin:20px 20px; border-radius:20px; width:70%">
                                                                                                  PDF Title
                                                                                              </button>
                                                                                                <div class="uploaded-img">
                                                                                                    <a href="">
                                                                                                                <img src="img/pdf-icon-elarge.png">
                                                                                                                <div class="immer-img">

                                                                                                                </div>
                                                                                                                <div class="">
                                                                                                                    <div class=""></div>
                                                                                                                    <div class=""></div>
                                                                                                                    <div class=""></div>
                                                                                                                </div>
                                                                                                                <div class="abslt-text">
                                                                                                                    <h4></h4>
                                                                                                                    <p></p>

                                                                                                                </div>
                                                                                                            </a>
                                                                                                <!-- <div class="hidden-block">
                                                                                                  <h3>Main Title</h3>
                                                                                                  <ul>
                                                                                                    <li><i class="fa fa-eye"></i></li>
                                                                                                    <li><i class="fa fa-trash"></i></li>
                                                                                                  </ul>
                                                                                            </div> -->

                                                                                                </div>
                                                                                                <div class="" style="margin-left:20%">
                                                                                                  <!-- <p  style="float:left;margin-right: 5px;">
                                                                                                        <button class="btn btn-primary btn-xs" title="View" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-eye-open"></span></button>
                                                                                                  </p> -->
                                                                                                  <p style="float:left;margin-right: 5px; width:50px">
                                                                                                        <button data-toggle="modal" data-target="#dell" class="btn btn-primary btn-xs" title="Remove" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp; Remove</button>
                                                                                                  </p>
                                                                                                </div>

                                                                                            </div>

                                                                                                <div class="col-md-2 col-sm-4 padding15">
                                                                                                  <button type="button" class="btn_edit2 pull-right" style="float:left; background: white; font-size:12px; border: 1px solid grey; margin:20px 20px; border-radius:20px; width:70%">
                                                                                                      PDF Title
                                                                                                  </button>
                                                                                                        <div class="uploaded-img">
                                                                                                            <a href="">
                                                                                                                <img src="img/pdf-icon-elarge.png">
                                                                                                                <div class="immer-img">

                                                                                                                </div>
                                                                                                                <div class="">
                                                                                                                    <div class=""></div>
                                                                                                                    <div class=""></div>
                                                                                                                    <div class=""></div>
                                                                                                                </div>
                                                                                                                <div class="abslt-text">
                                                                                                                    <h4></h4>
                                                                                                                    <p></p>

                                                                                                                </div>
                                                                                                            </a>

                                                                                                            <!-- <div class="hidden-block">
                                                                                                  <h3>Main Title</h3>
                                                                                                  <ul>
                                                                                                    <li><i class="fa fa-eye"></i></li>
                                                                                                    <li><i class="fa fa-trash"></i></li>
                                                                                                  </ul>
                                                                                            </div> -->
                                                                                                        </div>
                                                                                                        <div class="" style="margin-left:20%">
                                                                                                          <!-- <p  style="float:left;margin-right: 5px;">
                                                                                                                <button class="btn btn-primary btn-xs" title="View" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-eye-open"></span></button>
                                                                                                          </p> -->
                                                                                                          <p style="float:left;margin-right: 5px; width:50px">
                                                                                                              <button data-toggle="modal" data-target="#dell" class="btn btn-primary btn-xs" title="Remove" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp; Remove</button>
                                                                                                          </p>
                                                                                                        </div>
                                                                                            </div>

                                                                                                <div class="col-md-2 col-sm-4 padding15">
                                                                                                  <button type="button" class="btn_edit2 pull-right" style="float:left; background: white; font-size:12px; border: 1px solid grey; margin:20px 20px; border-radius:20px; width:70%">
                                                                                                      PDF Title
                                                                                                  </button>
                                                                                                        <div class="uploaded-img">
                                                                                                            <a href="">
                                                                                                                <img src="img/pdf-icon-elarge.png">
                                                                                                                <div class="immer-img">

                                                                                                                </div>
                                                                                                                <div class="">
                                                                                                                    <div class=""></div>
                                                                                                                    <div class=""></div>
                                                                                                                    <div class=""></div>
                                                                                                                </div>
                                                                                                                <div class="abslt-text">
                                                                                                                    <h4></h4>
                                                                                                                    <p></p>

                                                                                                                </div>
                                                                                                            </a>


                                                                                                            <!-- <div class="hidden-block">
                                                                                                  <h3>Main Title</h3>
                                                                                                  <ul>
                                                                                                    <li><i class="fa fa-eye"></i></li>
                                                                                                    <li><i class="fa fa-trash"></i></li>
                                                                                                  </ul>
                                                                                            </div> -->
                                                                                                        </div>
                                                                                                        <div class="" style="margin-left:20%">
                                                                                                          <!-- <p  style="float:left;margin-right: 5px;">
                                                                                                                <button class="btn btn-primary btn-xs" title="View" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-eye-open"></span></button>
                                                                                                          </p> -->
                                                                                                          <p style="float:left;margin-right: 5px; width:50px">
                                                                                                                <button data-toggle="modal" data-target="#dell" class="btn btn-primary btn-xs" title="Remove" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp; Remove</button>
                                                                                                          </p>
                                                                                                        </div>
                                                                                                </div>

                                                                                            <div class="col-md-2 col-sm-4 padding15">
                                                                                              <button type="button" class="btn_edit2 pull-right" style="float:left; background: white; font-size:12px; border: 1px solid grey; margin:20px 20px; border-radius:20px; width:70%">
                                                                                                  PDF Title
                                                                                              </button>
                                                                                                        <div class="uploaded-img">
                                                                                                            <a href="">
                                                                                                                <img src="img/pdf-icon-elarge.png">
                                                                                                                <div class="immer-img">

                                                                                                                </div>
                                                                                                                <div class="">
                                                                                                                    <div class=""></div>
                                                                                                                    <div class=""></div>
                                                                                                                    <div class=""></div>
                                                                                                                </div>
                                                                                                                <div class="abslt-text">
                                                                                                                    <h4></h4>
                                                                                                                    <p></p>

                                                                                                                </div>
                                                                                                            </a>


<!--
                                                                                                            <div class="hidden-block">
                                                                                                  <h3>Main Title</h3>
                                                                                                  <ul>
                                                                                                    <li><i class="fa fa-eye"></i></li>
                                                                                                    <li><i class="fa fa-trash"></i></li>
                                                                                                  </ul>
                                                                                            </div> -->
                                                                                                        </div>
                                                                                                        <div class="" style="margin-left:20%">
                                                                                                          <!-- <p  style="float:left;margin-right: 5px;">
                                                                                                                <button class="btn btn-primary btn-xs" title="View" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-eye-open"></span></button>
                                                                                                          </p> -->
                                                                                                          <p style="float:left;margin-right: 5px; width:50px">
                                                                                                                <button data-toggle="modal" data-target="#dell" class="btn btn-primary btn-xs" title="Remove" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp; Remove</button>
                                                                                                          </p>
                                                                                                      </div>


                                                                                                </div>
                                                                                                    <div class="col-md-2 col-sm-4 padding15">
                                                                                                      <button type="button" class="btn_edit2 pull-right" style="float:left; background: white; font-size:12px; border: 1px solid grey; margin:20px 20px; border-radius:20px; width:70%">
                                                                                                          PDF Title
                                                                                                      </button>
                                                                                                        <div class="uploaded-img">
                                                                                                            <a href="">
                                                                                                                <img src="img/pdf-icon-elarge.png">
                                                                                                                <div class="immer-img">

                                                                                                                </div>
                                                                                                                <div class="">
                                                                                                                    <div class=""></div>
                                                                                                                    <div class=""></div>
                                                                                                                    <div class=""></div>
                                                                                                                </div>
                                                                                                                <div class="abslt-text">
                                                                                                                    <h4></h4>
                                                                                                                    <p></p>

                                                                                                                </div>
                                                                                                            </a>

                                                                                                             <!-- <div class="hidden-block">
                                                                                                  <h3>Main Title</h3>
                                                                                                  <ul>
                                                                                                    <li><i class="fa fa-eye"></i></li>
                                                                                                    <li><i class="fa fa-trash"></i></li>
                                                                                                  </ul>
                                                                                            </div> -->
                                                                                                        </div>
                                                                                                        <div class="" style="margin-left:20%">
                                                                                                          <!-- <p  style="float:left;margin-right: 5px;">
                                                                                                                <button class="btn btn-primary btn-xs" title="View" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-eye-open"></span></button>
                                                                                                          </p> -->
                                                                                                          <p style="float:left;margin-right: 5px; width:50px">
                                                                                                                <button data-toggle="modal" data-target="#dell" class="btn btn-primary btn-xs" title="Remove" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp; Remove</button>
                                                                                                          </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="text_div" style="display:none">
                                                                                        <textarea id="in_text" class="form-control textarea"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane m-t-35" id="SearchaJobAreaMyjobSearchs">
                                                                <div class="vd_content-section clearfix" style="margin-top: -38px; margin-bottom: -122px;">
                                                                    <div class="row">
                                                                        <div class="col-md-12" style="margin-top: 35px;">
                                                                            <div class="tab-content no-bd mrgn0 pdng0">
                                                                                <div class="tab-pane active fade in" id="category1">

                                                                                    <div class="container">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="sales card">
                                                                                                    <div class="card-header card-header-icon" data-background-color="rose">
                                                                                                        <i class="material-icons">assignment</i>
                                                                                                    </div>
                                                                                                    <div class="card-content">
                                                                                                        <h4 class="card-title">Simple Table</h4>
                                                                                                        <div class="table-responsive">
                                                                                                            <table class="table">
                                                                                                                <thead>
                                                                                                                    <tr>
                                                                                                                        <th><input id="checkall" type="checkbox"></th>
                                                                                                                        <th>No </th>
                                                                                                                        <th>Title </th>
                                                                                                                        <th>Work Type </th>
                                                                                                                        <th>Work Time </th>
                                                                                                                        <th>Work Start </th>
                                                                                                                        <th>Start Date </th>
                                                                                                                        <th>End Date </th>
                                                                                                                        <th>Option </th>
                                                                                                                    </tr>
                                                                                                                </thead>
                                                                                                                <tbody>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>1</td>
                                                                                                                        <td>This is work title </td>
                                                                                                                        <td>Fix</td>
                                                                                                                        <td>20.03.2017 -13:00 Uhr</td>
                                                                                                                        <td> </td>
                                                                                                                        <td>20.03.2017 </td>
                                                                                                                        <td>23.03.2017 </td>
                                                                                                                        <td>
                                                                                                                            <p style="float:left;margin-right: 8px;">
                                                                                                                                  <button data-toggle="modal" data-target="#AddsearchMatchedEmployeer" class="btn btn-primary btn-xs" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-pencil"></span></button>
                                                                                                                            </p>
                                                                                                                            <p data-toggle="modal" data-target="#viewAccept" style="float:left;margin-right: 8px;">
                                                                                                                                <button class="btn btn-primary btn-xs" data-title="View" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 5px;"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                                                                            </p>
                                                                                                                            <p data-toggle="modal" data-target="#dell" style="float:left">
                                                                                                                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete5" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button>
                                                                                                                            </p>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>1</td>
                                                                                                                        <td>This is work title </td>
                                                                                                                        <td>Fix</td>
                                                                                                                        <td>20.03.2017 -13:00 Uhr</td>
                                                                                                                        <td> </td>
                                                                                                                        <td>20.03.2017 </td>
                                                                                                                        <td>23.03.2017 </td>
                                                                                                                        <td>
                                                                                                                            <p data-toggle="modal" data-target="#AddsearchMatchedEmployeer" style="float:left;margin-right: 8px;">
                                                                                                                                <button class="btn btn-primary btn-xs" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-pencil"></span></button>
                                                                                                                            </p>
                                                                                                                            <p data-toggle="modal" data-target="#viewAccept" style="float:left;margin-right: 8px;">
                                                                                                                                <button class="btn btn-primary btn-xs" data-title="View" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 5px;"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                                                                            </p>
                                                                                                                            <p data-toggle="modal" data-target="#dell" style="float:left">
                                                                                                                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete5" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button>
                                                                                                                            </p>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>1</td>
                                                                                                                        <td>This is work title </td>
                                                                                                                        <td>Fix</td>
                                                                                                                        <td>20.03.2017 -13:00 Uhr</td>
                                                                                                                        <td> </td>
                                                                                                                        <td>20.03.2017 </td>
                                                                                                                        <td>23.03.2017 </td>
                                                                                                                        <td>
                                                                                                                            <p data-toggle="modal" data-target="#AddsearchMatchedEmployeer" style="float:left;margin-right: 8px;">
                                                                                                                                <button class="btn btn-primary btn-xs" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-pencil"></span></button>
                                                                                                                            </p>
                                                                                                                            <p data-toggle="modal" data-target="#viewAccept" style="float:left;margin-right: 8px;">
                                                                                                                                <button class="btn btn-primary btn-xs" data-title="View" data-toggle="modal" data-target="#view5" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 5px;"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                                                                            </p>
                                                                                                                            <p data-toggle="modal" data-target="#dell" style="float:left">
                                                                                                                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete5" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button>
                                                                                                                            </p>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>1</td>
                                                                                                                        <td>This is work title </td>
                                                                                                                        <td>Fix</td>
                                                                                                                        <td>20.03.2017 -13:00 Uhr</td>
                                                                                                                        <td> </td>
                                                                                                                        <td>20.03.2017 </td>
                                                                                                                        <td>23.03.2017 </td>
                                                                                                                        <td>
                                                                                                                            <p data-toggle="modal" data-target="#AddsearchMatchedEmployeer" style="float:left;margin-right: 8px;">
                                                                                                                                <button class="btn btn-primary btn-xs" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-pencil"></span></button>
                                                                                                                            </p>
                                                                                                                            <p data-toggle="modal" data-target="#viewAccept" style="float:left;margin-right: 8px;">
                                                                                                                                <button class="btn btn-primary btn-xs" data-title="View" data-toggle="modal" data-target="#view5" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 5px;"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                                                                            </p>
                                                                                                                            <p data-toggle="modal" data-target="#dell" style="float:left">
                                                                                                                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete5" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button>
                                                                                                                            </p>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td><input class="checkthis" type="checkbox"></td>
                                                                                                                        <td>1</td>
                                                                                                                        <td>This is work title </td>
                                                                                                                        <td>Fix</td>
                                                                                                                        <td>20.03.2017 -13:00 Uhr</td>
                                                                                                                        <td> </td>
                                                                                                                        <td>20.03.2017 </td>
                                                                                                                        <td>23.03.2017 </td>
                                                                                                                        <td>
                                                                                                                            <p data-toggle="modal" data-target="#AddsearchMatchedEmployeer" style="float:left;margin-right: 8px;">
                                                                                                                                <button class="btn btn-primary btn-xs" style="padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-pencil"></span></button>
                                                                                                                            </p>
                                                                                                                            <p data-toggle="modal" data-target="#viewAccept" style="float:left;margin-right: 8px;">
                                                                                                                                <button class="btn btn-primary btn-xs" data-title="View" data-toggle="modal" data-target="#view5" style=" padding-left: 0;padding-right: 19px;background-color: #23709e;border: none;padding-bottom: 5px;"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                                                                            </p>
                                                                                                                            <p data-toggle="modal" data-target="#dell" style="float:left">
                                                                                                                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete5" style=" padding-left: 6px; padding-right: 19px;"><span class="glyphicon glyphicon-trash"></span></button>
                                                                                                                            </p>
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
                                                                                                        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan">                                                                                                        </textarea>
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
                                                                                                        </span> Are you sure you want to delete this Record?
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
                                                                            <!-- tab-content end -->
                                                                        </div>
                                                                        <!-- Projects List col-md-10 end -->
                                                                    </div>
                                                                    <!-- row end -->
                                                                </div>
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane " id="SearchaJobAreaMyOffersForWork">
                                                                <div class="vd_content-section clearfix" style="margin-bottom: -111px;margin-top: 31px; background: #eee; border-top: #eee;">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="tab-content no-bd mrgn0 pdng0">
                                                                                <div class="tab-pane active fade in" id="category1">
                                                                                    <div class="panel widget container-fluid">
                                                                                        <div class="row mrgn30-0 projectRow">
                                                                                            <a href="javascript:void(0);" onclick="document.getElementById('Her').style.display = 'block'" title="" class="notice notice-success" style="color: black;">
                                                                                                <div class="col-sm-4 brdRight" style="width:348px; display: flex;flex-direction: row;align-items: center;">
                                                                                                    <img src="img/mini.png" alt="" style="float: left;">
                                                                                                    <div class="text-con" style="margin-top: 20px;">
                                                                                                        <h4>Company Name</h4>
                                                                                                        <p style="color: black;">Company ID</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-2 brdRight text-align">
                                                                                                    <h4 style="margin-top: 24px;">Request Time</h4>
                                                                                                    <p style="color: black;">16.03.2017 -12:45</p>
                                                                                                </div>
                                                                                                <div class="col-sm-2 brdRight text-align">
                                                                                                    <h4 style="margin-top: 24px;">Work Start</h4>
                                                                                                    <p style="color: black;">20.03.2017 -13:00 Uhr</p>
                                                                                                </div>

                                                                                                <div class="col-sm-2 text-align brdRight">
                                                                                                    <h4 style=" margin-top: 20px;margin-bottom: 0;">Status</h4>
                                                                                                    <h2 style="margin-top: 0;color: #ef9d1f;">Waiting</h2>
                                                                                                </div>
                                                                                                <div class="col-sm-2 text-align">
                                                                                                    <h4 style="margin: 21px 0 0 0;">Options</h4>
                                                                                                    <h4 class="text-height" style="margin-top: 0;">
                                                                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">View</button>
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
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="tab-content no-bd mrgn0 pdng0">
                                                                                <div class="tab-pane active fade in" id="category1">
                                                                                    <div class="panel widget container-fluid">
                                                                                        <div class="row mrgn30-0 projectRow">
                                                                                            <a href="javascript:void(0);" data-target="" data-toggle="modal" title="" class="notice notice-success" style="color: black;">
                                                                                                <div class="col-sm-4 brdRight" style="width: 348px;">
                                                                                                    <img src="img/mini.png" alt="" style="float: left; margin-top: 23px;">
                                                                                                    <div class="text-con" style="margin-top: 31px;">
                                                                                                        <h4>Company Name</h4>
                                                                                                        <p style="color: black;">Company ID</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-2 brdRight text-align">
                                                                                                    <h4 style="margin-top: 29px;">Request Time</h4>
                                                                                                    <p style="color: black;">16.03.2017 -12:45</p>
                                                                                                </div>
                                                                                                <div class="col-sm-2 brdRight text-align">
                                                                                                    <h4 style="margin-top: 29px;">Work Start</h4>
                                                                                                    <p style="color: black;">20.03.2017 -13:00 Uhr</p>
                                                                                                </div>

                                                                                                <div class="col-sm-2 text-align brdRight">
                                                                                                    <h4 style="margin-bottom: 0;margin-top: 28px;">Status</h4>
                                                                                                    <h2 style="color: #ff0000; margin-top: 0">Canceled</h2>
                                                                                                </div>
                                                                                                <div class="col-sm-2 text-align">
                                                                                                    <h4 style="margin:31px 0 0 0;">
                                                                                                        Options
                                                                                                    </h4>
                                                                                                    <h4 class="text-height" style="margin-top: 0">
                                                                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#mymodel2">View</button>
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
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="tab-content no-bd mrgn0 pdng0">
                                                                                <div class="tab-pane active fade in" id="category1">
                                                                                    <div class="panel widget container-fluid">
                                                                                        <div class="row mrgn30-0 projectRow">
                                                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#MyOffersForWorkAccepted" title="" class="notice notice-success" style="color: black;">
                                                                                                <div class="col-sm-4 brdRight" style="width: 348px;">
                                                                                                    <img src="img/mini.png" alt="" style="float: left; margin-top: 23px;">
                                                                                                    <div class="text-con" style="margin-top: 31px;">
                                                                                                        <h4>Company Name</h4>
                                                                                                        <p style="color: black; ">Company ID</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-2 brdRight text-align">
                                                                                                    <h4 style="margin-top: 29px;">Request Time</h4>
                                                                                                    <p style="color: black;">16.03.2017 -12:45</p>
                                                                                                </div>
                                                                                                <div class="col-sm-2 brdRight text-align">
                                                                                                    <h4 style="margin-top: 29px;">Work Start</h4>
                                                                                                    <p style="color: black;">20.03.2017 -13:00 Uhr</p>
                                                                                                </div>

                                                                                                <div class="col-sm-2 text-align brdRight">
                                                                                                    <h4 style="margin-bottom: 0;margin-top: 28px;">Status</h4>
                                                                                                    <h2 style="color: green; margin-top: 0">Accepted</h2>
                                                                                                </div>
                                                                                                <div class="col-sm-2 text-align" data-toggle="modal" data-target="#mymodel3">
                                                                                                    <h4 style="margin:31px 0 0 0;">
                                                                                                        Options
                                                                                                    </h4>
                                                                                                    <h4 class="text-height" style="margin-top: 0">
                                                                                                        <button type="button" class="btn btn-primary btn-sm">View</button>
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
                                                                </div>
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane  " id="SearchaJobAreaRejected">
                                                                <div class="vd_content-section clearfix" style="margin-bottom: -103px; margin-top: -3px; background: #eee;">
                                                                    <div class="row">
                                                                        <div class="col-md-12" style="margin-top: 35px;">
                                                                            <div class="tab-content no-bd mrgn0 pdng0">
                                                                                <div class="tab-pane active fade in" id="category1">
                                                                                    <div class="panel widget container-fluid">
                                                                                        <div class="row mrgn30-0 projectRow">
                                                                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                                                <div class="col-sm-4 brdRight" style="display: flex;flex-direction: row;align-items: center;">
                                                                                                    <img src="img/mini.png" alt="" style="float: left;">
                                                                                                    <div class="text-con" style="margin-top: 23px">
                                                                                                        <h4>Company Name</h4>
                                                                                                        <p style="color: black;">Company ID</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-4 brdRight text-align" style="display: flex;flex-direction: column;align-items: center;">
                                                                                                    <h4>Request Time</h4>
                                                                                                    <p style="color: black;">16.03.2017 -12:45</p>
                                                                                                </div>
                                                                                                <div data-toggle="modal" onclick="document.getElementById('notifydenied').style.zIndex = 1100;document.getElementById('notifydenied').style.display = 'block'; document.body.className = 'modal-open'" data-target="#notifydenied" class="col-sm-4 text-align" style="display: flex;flex-direction: column;align-items: center;">
                                                                                                    <h4 style="margin-bottom: 0;">Status</h4>
                                                                                                    <h2 style="color: #ff0000; margin-top: 0">Rejected</h2>
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
                                                            </div>
                                                        </div>
                                                        <!--second section-->
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
                                                                                            <img src="img/briant2.png" alt="" class="projectImg">
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
                                                                                            <img src="img/mini.png" alt="">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="row mrgn30-0 projectRow">
                                                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                                                        <div class="col-sm-2 brdRight">
                                                                                            <img src="img/briant2.png" alt="" class="projectImg">
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
                                                                                            <img src="img/mini.png" alt="">
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
                                                                                            <img src="img/briant3.png" alt="" class="projectImg">
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
                                                                                            <img src="img/mini.png" alt="">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="row mrgn30-0 projectRow">
                                                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                                                        <div class="col-sm-2 brdRight">
                                                                                            <img src="img/briant3.png" alt="" class="projectImg">
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
                                                                                            <img src="img/mini.png" alt="">
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
                                                                                            <img src="img/briant.png" alt="" class="projectImg">
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
                                                                                            <img src="img/mini.png" alt="">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="row mrgn30-0 projectRow">
                                                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
                                                                                        <div class="col-sm-2 brdRight">
                                                                                            <img src="img/briant.png" alt="" class="projectImg">
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
                                                                                            <img src="img/mini.png" alt="">
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





            {{-- modal --}}
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
                <div class="modal-header" style="padding: 8px;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">File Review Request</h4>
                </div>
                <div class="ourteamdiver2" style="margin-top:0px;">
                    <div class="overflowhidde2">
                        <div class="ourteamblur22"></div>
                    </div>
                    <hr class="rulerourtema">
                    <div class="imgeourteamperson2" style="border-radius:5px !important"><img src="img/testi_07.png"></div>
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
                <div class="col-lg-12" style="padding:0px;">
                    <div class="payementnotification">
                        <h4 class="text-center2" style="font-family: 'Poppins', sans-serif">Notification</h4>
                    </div>
                </div>
                <hr class="hfkaniei">
                <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
                    <div class="col-lg-5 col-lg-offset-1">
                        <button class="search-employer-acc" type="button" data-toggle="modal" data-target="#StatusWaitinginterviewuser2" data-dismiss="modal" style="text-align: left;
                            width: 100%;padding: 4px;border-radius: 24px;color: black;background: white;border: 1px solid #cbcbcb;">
                            <span class="append-icon" style="text-align:left;margin-right:42"><img src="img/true.png" style="width:20px;">Allow</span>
                        </button>
                    </div>
                    <div class="col-lg-5">
                        <button class="search-employer-acc" type="button" data-toggle="modal" data-target="#denne" data-dismiss="modal" style="text-align: left;
                width: 100%;
                padding: 4px;
                border-radius: 24px;
                color: black;
                background: white;
                border: 1px solid #cbcbcb;

                ">
                            <span class="append-icon" style="text-align:left;margin-right:42"><img src="img/false.png" style="width:20px;">Denied</span>
                        </button>
                    </div>
                </div>
            </div>

    </div>
    </div>













    <div id="viewAccept" class="modal right fade" role="dialog" style="display: none;">
      <div class="modal-dialog" role="document">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header vd_bg-green text-center" style="padding:10px">
            <button type="button" class="vd_white close" data-dismiss="modal" aria-label="Close" style="float:left;font-size:3rem;">
                <span aria-hidden="true"><i class="glyphicon glyphicon-arrow-right"></i></span>
            </button>
            <h4 class="modal-title" style="color:white">View Services</h4>
          </div>

          <div class="modal-body view-service">
                              <div class="col-md-12 col-sm-12 col-xs-12 ">
                                  <div class="border-top"></div>
                                  <div class="title" style="text-align:center; background:white">
                                      <h2> Service Title </h2>
                                  </div>
                                  <div class="job-detail-single">
                                      <div class="post-single-job">
                                          <div class="single-content">
                                              <h4 class="small-title">What I am Looking?</h4>
                                              <p class="lead">100% Result Till now with 5/5 rating with Preferred Freelancer chosen by Freelancer itself..</p>
                                              <p>
                                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                              </p>
                                              <p>
                                                  Rremaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                              </p>
                                              <div class="row">
                                                  <div class="col-md-6 col-sm-12 col-xs-12">
                                                      <h5 class="small-title">Job Features &amp; Overviews</h5>
                                                      <ul class="customlist">
                                                          <li>WordPress Expert</li>
                                                          <li>Opencart listed Partner</li>
                                                          <li>Magento Certified</li>
                                                          <li>Php Larvel ,Zend Framework</li>
                                                          <li>Certified Social Engine</li>
                                                          <li>Prestashop , CS cart and Drupal, ZenCart developer</li>
                                                      </ul>
                                                  </div>
                                                  <div class="col-md-6 col-sm-12 col-xs-12">
                                                      <h5 class="small-title">Experience Requirements</h5>
                                                      <ul class="customlist">
                                                          <li>PSD TO HTML5 ( Elite author in themeforest)</li>
                                                          <li>
                                                              Great experience with Linux, Server Optimizing, Failover Clustering, Security, Virtualization know common used utilites, scripts and services such as Apache, PHP, MySQL, Nginx and many others.
                                                          </li>
                                                          <li>Donec venenatis ante a imperdiet maximus. Sed in justo porta, rutrum velit non, blandit lorem.
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="pull pull-center-remove" style="width:100%; margin-left:43%">
                                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete5">
                                                  <span class=""><i class="glyphicon glyphicon-trash"></i></span>&nbsp;&nbsp;Remove
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

        </div>

      </div>
    </div>

















    <div class="modal fade" id="AddsearchMatchedEmployeer" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:100%">
            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;width:520px;padding:0px;margin:auto;padding-bottom: 0;">


              <div id="frst">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" id="Heading">Search Emplyeer</h4>
                </div>
                <div class="single5" id="a4" style="display: block; margin-left: 3%; margin-right: 3%;">
                    <div class="col-lg-12" style="border:1px solid #aab7a2;padding:0px;margin-top: 15px;"><input class="form-control" placeholder="Service Titlea" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;" type="text"></div>
                    <div class="col-lg-12" style="height: 180px; border:1px solid #aab7a2;padding:0px;margin-top:10px;margin-bottom:15px">
                        <div style="background: url('img/costil.png.html');background-size: cover; width: 100%; height: 20px; display: block">
                            <img src="img/costil.png.html" alt="">
                        </div>
                        <div class="reviewcontent" id="editor1fefabc"> Type... </div>
                        <!-- <textarea class="form-control" placeholder="Text Editor and Text Box here to add the Desc." aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;height:102px;resize:none"></textarea> -->
                    </div>
                </div>
                <div class="col-lg-12" style="margin-top:15px;&nbsp;margin-left: -12px; background-color:grey;">
                    <!-- <div type="button" class="closeds4" data-dismiss="modal">Close</div><button type="button" class="closeds4" data-dismiss="modal" style="background-color: #6cb5f3;height: 100%;border:1px #6cb5f3 solid;width:200px;float: left;margin-left: -40px;">CLOSE</button> -->
                    <button type="button" class="next4" style="background-color: rgb(108, 181, 243); height: 100%; border: 1px solid rgb(108, 181, 243); width: 200px; float: right; margin-right: -40px; display: block;" onclick="document.getElementById('frst').style.display='none';  document.getElementById('scnd').style.display='block'">
                      NEXT
                    </button>
                </div>
              </div>



              <div id="scnd" style="display:none">
                <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
           <h4 class="modal-title custom_align text-center2" id="Heading">Search Emplyeer</h4>
       </div>
       <div class="single5" id="a4" style="display: none; margin-left: 3%; margin-right: 3%;">
           <div class="col-lg-12" style="border:1px solid #aab7a2;padding:0px;margin-top: 15px;"><input class="form-control" placeholder="Service Title" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;" type="text"></div>
           <div class="col-lg-12" style="border:1px solid #aab7a2;padding:0px;margin-top:10px;margin-bottom:15px">
               <div class="reviewcontent" id="editortest2" style="visibility: hidden; display: none;">
                   Type...

               </div><div id="cke_editortest2" class="cke_1 cke cke_reset cke_chrome cke_editor_editortest2 cke_ltr cke_browser_gecko" dir="ltr" role="application" aria-labelledby="cke_editortest2_arialbl" lang="en"><span id="cke_editortest2_arialbl" class="cke_voice_label">Rich Text Editor, editortest2</span><div class="cke_inner cke_reset" role="presentation"><span id="cke_1_top" class="cke_top cke_reset_all" role="presentation" style="height: auto; -moz-user-select: none;"><span id="cke_11" class="cke_voice_label">Editor toolbars</span><span id="cke_1_toolbox" class="cke_toolbox" role="group" aria-labelledby="cke_11" onmousedown="return false;"><span id="cke_12" class="cke_toolbar" aria-labelledby="cke_12_label" role="toolbar"><span id="cke_12_label" class="cke_voice_label">Basic Styles</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_13" class="cke_button cke_button__bold cke_button_off" title="Bold (Ctrl+B)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_13_label" aria-describedby="cke_13_description" aria-haspopup="false" onblur="this.style.cssText = this.style.cssText;" onkeydown="return CKEDITOR.tools.callFunction(2,event);" onfocus="return CKEDITOR.tools.callFunction(3,event);" onclick="CKEDITOR.tools.callFunction(4,this);return false;"><span class="cke_button_icon cke_button__bold_icon" style="background-image:url('http://dienstleister.myserviceguide.de/ckeditor/plugins/icons.png?t=H5SC');background-position:0 -24px;background-size:auto;">&nbsp;</span><span id="cke_13_label" class="cke_button_label cke_button__bold_label" aria-hidden="false">Bold</span><span id="cke_13_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+B</span></a><a id="cke_14" class="cke_button cke_button__italic cke_button_off" title="Italic (Ctrl+I)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_14_label" aria-describedby="cke_14_description" aria-haspopup="false" onblur="this.style.cssText = this.style.cssText;" onkeydown="return CKEDITOR.tools.callFunction(5,event);" onfocus="return CKEDITOR.tools.callFunction(6,event);" onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span class="cke_button_icon cke_button__italic_icon" style="background-image:url('http://dienstleister.myserviceguide.de/ckeditor/plugins/icons.png?t=H5SC');background-position:0 -48px;background-size:auto;">&nbsp;</span><span id="cke_14_label" class="cke_button_label cke_button__italic_label" aria-hidden="false">Italic</span><span id="cke_14_description" class="cke_button_label" aria-hidden="false">Keyboard shortcut Ctrl+I</span></a><a id="cke_15" class="cke_button cke_button__strike cke_button_off" title="Strikethrough" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_15_label" aria-describedby="cke_15_description" aria-haspopup="false" onblur="this.style.cssText = this.style.cssText;" onkeydown="return CKEDITOR.tools.callFunction(8,event);" onfocus="return CKEDITOR.tools.callFunction(9,event);" onclick="CKEDITOR.tools.callFunction(10,this);return false;"><span class="cke_button_icon cke_button__strike_icon" style="background-image:url('http://dienstleister.myserviceguide.de/ckeditor/plugins/icons.png?t=H5SC');background-position:0 -72px;background-size:auto;">&nbsp;</span><span id="cke_15_label" class="cke_button_label cke_button__strike_label" aria-hidden="false">Strikethrough</span><span id="cke_15_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_16" class="cke_toolbar cke_toolbar_last" aria-labelledby="cke_16_label" role="toolbar"><span id="cke_16_label" class="cke_voice_label">Paragraph</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_17" class="cke_button cke_button__numberedlist cke_button_off" title="Insert/Remove Numbered List" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_17_label" aria-describedby="cke_17_description" aria-haspopup="false" onblur="this.style.cssText = this.style.cssText;" onkeydown="return CKEDITOR.tools.callFunction(11,event);" onfocus="return CKEDITOR.tools.callFunction(12,event);" onclick="CKEDITOR.tools.callFunction(13,this);return false;"><span class="cke_button_icon cke_button__numberedlist_icon" style="background-image:url('http://dienstleister.myserviceguide.de/ckeditor/plugins/icons.png?t=H5SC');background-position:0 -648px;background-size:auto;">&nbsp;</span><span id="cke_17_label" class="cke_button_label cke_button__numberedlist_label" aria-hidden="false">Insert/Remove Numbered List</span><span id="cke_17_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_18" class="cke_button cke_button__bulletedlist cke_button_off" title="Insert/Remove Bulleted List" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_18_label" aria-describedby="cke_18_description" aria-haspopup="false" onblur="this.style.cssText = this.style.cssText;" onkeydown="return CKEDITOR.tools.callFunction(14,event);" onfocus="return CKEDITOR.tools.callFunction(15,event);" onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span class="cke_button_icon cke_button__bulletedlist_icon" style="background-image:url('http://dienstleister.myserviceguide.de/ckeditor/plugins/icons.png?t=H5SC');background-position:0 -600px;background-size:auto;">&nbsp;</span><span id="cke_18_label" class="cke_button_label cke_button__bulletedlist_label" aria-hidden="false">Insert/Remove Bulleted List</span><span id="cke_18_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span></span></span><div id="cke_1_contents" class="cke_contents cke_reset" role="presentation" style="height: 200px;"><span id="cke_23" class="cke_voice_label">Press ALT 0 for help</span><iframe src="" style="width: 100%; height: 100%;" class="cke_wysiwyg_frame cke_reset" title="Rich Text Editor, editortest2" aria-describedby="cke_23" tabindex="0" allowtransparency="true" frameborder="0"></iframe></div><span id="cke_1_bottom" class="cke_bottom cke_reset_all" role="presentation" style="-moz-user-select: none;"><span id="cke_1_resizer" class="cke_resizer cke_resizer_vertical cke_resizer_ltr" title="Resize" onmousedown="CKEDITOR.tools.callFunction(0, event)">◢</span><span id="cke_1_path_label" class="cke_voice_label">Elements path</span><span id="cke_1_path" class="cke_path" role="group" aria-labelledby="cke_1_path_label"><span class="cke_path_empty">&nbsp;</span></span></span></div></div>
           </div>
       </div>
       <div class="single5" id="b4" style="display: block;">
           <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Work Details</h3>
           <div class="col-lg-6" style="padding-top:10px;padding-bottom:10px;border-right:none;">
               <label for="poststart">Post Start</label>
               <input name="poststart" id="poststart" type="date">
           </div>
           <div class="col-lg-6" style="padding-top:10px;padding-bottom:10px;border-right:none; float:right">
               <label for="postend">Post End</label>
               <input name="postend" id="postend" type="date">
           </div>
           <hr class="addsericenew">
           <div>
               <div class="col-lg-6" style="width:33%;padding-top:10px;padding-bottom:10px;&nbsp;margin-bottom: 20px; border-right:none">
                   <select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1">
                       <option>Full Time</option>
                       <option>Part Time</option>
                       <option selected="" disabled="">Work Type</option>
                   </select></div>
               <div class="col-lg-6" style="width:33%;padding-top:10px;padding-bottom:10px;"><select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1">
                   <option>Fix</option>
                   <option>Hourly</option>
                   <option selected="" disabled="">Payment Type</option>
               </select></div>
               <div class="col-lg-6" style="width:33%;padding-top:10px;padding-bottom:10px;"><select type="text" class="form-control" placeholder="Ende Date" aria-describedby="basic-addon1">
                   <option>Now</option>
                   <option>Agreement</option>
                   <option selected="" disabled="">Work Start</option>
               </select></div>
           </div>
       </div>
       <div class="single5" id="c4" style="display: none;">
           <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Notifications</h3>
           <div class="notificationredsaleservice">
               <h4 class="text-center2" style="color:white">!! Please Note !!</h4>
               <h4 class="text-center2" style="color:white">Your Offer will be viewd form Admin</h4>
           </div>
       </div>
       <div class="col-lg-12" style="margin-top:15px;&nbsp;margin-left: -12px; background-color:grey;">
           <button type="button" class="back4" style="background-color: rgb(108, 181, 243); height: 100%; border: 1px solid rgb(108, 181, 243); width: 200px; float: left; margin-left: -40px; display: block;" onclick="document.getElementById('frst').style.display='block';  document.getElementById('scnd').style.display='none'">
               PREVIOUS
           </button>
           <!-- <div type="button" class="closeds4" data-dismiss="modal">Close</div><button type="button" class="closeds4" data-dismiss="modal" style="background-color: #6cb5f3;height: 100%;border:1px #6cb5f3 solid;width:200px;float: left;margin-left: -40px;">CLOSE</button> -->

           <button type="button" class="next4" style="background-color: rgb(108, 181, 243); height: 100%; border: 1px solid rgb(108, 181, 243); width: 200px; float: right; margin-right: -40px; display: block;" onclick="document.getElementById('thrd').style.display='block';  document.getElementById('scnd').style.display='none'">
               NEXT
           </button>
           <button type="button" class="savebutton4" data-dismiss="modal" style="background-color: rgb(108, 181, 243); height: 100%; border: 1px solid rgb(108, 181, 243); width: 200px; float: right; margin-right: -40px; display: none;">
               SAVE
           </button>
       </div>
              </div>


              <div id="thrd" style="display:none">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align text-center2" style="line-height: 1.42857143; font-family: " roboto";="" font-weight:="" 300;"="" id="Heading">Search Emplyeer</h4>
                </div>
                <div class="modal-body">
                  <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Notifications</h3>
                <div class="modal-footer">
                  <div class="notificationredsaleservice" style="  width: 100%;
                    height: auto;
                    background: red;
                    padding: 3px 0;
                    margin-bottom: 25px;
                }">
                    <h4 class="text-center2" style="color:white">!! Please Note !!</h4>
                    <h4 class="text-center2" style="color:white">Your Offer will be viewd form Admin</h4>
                  </div>
                </div>

                <div class="col-lg-12" style="margin-bottom:-17px;&nbsp;margin-left: -12px; background-color:grey;">
                    <button type="button" class="back4" style="background-color: rgb(108, 181, 243); height: 100%; border: 1px solid rgb(108, 181, 243); width: 200px; float: left; margin-left: -40px; display: block;" onclick="document.getElementById('thrd').style.display='none';  document.getElementById('scnd').style.display='block'">
                        PREVIOUS
                    </button>
                    <button type="button" class="savebutton4" data-dismiss="modal" style="background-color: rgb(108, 181, 243); height: 100%; border: 1px solid rgb(108, 181, 243); width: 200px; float: right; margin-right: -40px; display: block;">
                                        SAVE
                                    </button>
                                  </div>
              </div>





            </div>
        </div>

    </div>




    <!--   Core JS Files   -->
    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script>
        var el = document.getElementById('notifydenied');
        function closeModal() {
          el.className = 'modal fade'
          if (document.getElementsByClassName('modal-backdrop')[0]) {
            document.getElementsByClassName('modal-backdrop')[0].style.zIndex = 0;
            document.getElementsByClassName('modal-backdrop')[0].style.opacity = 0;
          }
          if (document.getElementById('notifydenied1')) {
            document.getElementById('notifydenied1').style.zIndex = 0;
            document.getElementById('notifydenied1').style.display = 'none';
            document.getElementById('Her').style.display = 'none';
          }

          document.body.className = '';
          el.style.zIndex = 0;
          el.style.display = 'none';
        }
        el.onclick = function (e) {
          if (e.target.className === 'modal fade in show' || e.target.className === 'modal fade show') {
            el.style.zIndex = 0;
          }
        }
    </script>

    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>


    <script src="js/header.js"></script>
    <!--  PerfectScrollbar Library -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="js/material-dashboard5438-v=1.2.0.js"></script>


    </div>














    <div id="dell" class="modal fade" role="dialog" style="display: none;">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete</h4>
            </div>
            <div class="modal-body">
                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> &nbsp;&nbsp;&nbsp; Are you sure you want to delete?</div>
                </div>
                <div class="modal-footer" style="">
                      <button type="button" class="btn btn-success btn-primary mr-auto pull-left"><span class="glyphicon glyphicon-ok-sign"></span> &nbsp;&nbsp;&nbsp;Yes</button>
                      <button type="button" class="btn btn-danger btn-secondary pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;&nbsp;No</button>
                  </div>
        </div>

      </div>
    </div>





    <div class="modal fade" id="mymodel3" role="dialog" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content" tabindex="6" style="overflow: hidden; outline: none;">
                <div class="modal-header" style="padding: 0 !important;">
                    <div style="height: 10px; width: 100%;background-color: green"></div>
                    <h4 class="modal-title text-center2" style="margin-top: 8px !important;font-size: 15px;font-weight: 500" id="Heading">Accepted</h4>
                </div>
                <div class="modal-body" style="background-color:#f0f0f0;border-top: 1px solid #f0f0f0;background-color: #fff; border-bottom: 1px solid #f0f0f0;padding: 25px 10px 25px 10px;display: flex;justify-content: center;align-items: center;">
                  <input placeholder="Time and Date" style="width: 310px;text-align: center;" type="text">
                    <!-- <input type="text" placeholder="Time and Date" style="width: 310px;text-align: center;"> -->
                </div>
                <div class="modal-footer text-center2">

                   <button onclick="closeModal()" type="button" class="btn vd_btn newbie-reject" data-dismiss="modal">
                        <span class="append-icon"><img src="img/true.png"></span>Ok
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        <div id="ascrail2009" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2009-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2011" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;">
          <div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2011-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2021" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2021-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2028" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2028-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2051" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2051-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div>
        <div id="ascrail2002" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2002-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div></div></div>







        <div class="modal fade" id="mymodel2" role="dialog" style="display: none;">

          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="padding: 0 !important;">
                <div style="height: 10px; width: 100%;background-color: #EA3226"></div>
                <h4 class="modal-title text-center2" style="margin-top: 8px !important; font-size: 15px;font-weight: 500" id="Heading">Rejected</h4>
              </div>
              <div class="modal-body" style="background-color:#f0f0f0;border-top: 1px solid #f0f0f0;background-color: #fff; border-bottom: 1px solid #f0f0f0;padding: 25px 10px 25px 10px;display: flex;justify-content: center;align-items: center;">

                              <!-- <input type="text"  placeholder="Select Reason: "style="width: 310px;text-align: center;" readonly> -->
                              <p style="border:1px solid #d5d5d5; text-align:center; width:310px; color:#d5d5d5; height:35px; padding:5px">Select Reason </p>

                              <!-- <span>You Are Rejected</span>
                              <span class="custom-dropdown"> -->
                                  <!-- add content later-->
                              <!-- </span> -->
              </div>
              <div class="modal-footer  text-center2">
                <!-- <button onclick="closeModal()" type="button" class="btn vd_btn btn-lg newbie-reject" data-dismiss="modal" style="width:150px; height:50px; border-radius:30px">
                    <span class="append-icon"><img src="img/true.png"></span>Ok
                </button> -->
                <button onclick="closeModal()" type="button" class="btn vd_btn newbie-reject" data-dismiss="modal">
                        <span class="append-icon"><img src="img/true.png"></span>Ok
                    </button>
              </div>
            </div>

          </div>

        </div>










        <div class="modal fade" onclick="document.getElementById('notifydenied').style.zIndex = 0" id="notifydenied" tabindex="-1" role="dialog" aria-labelledby="edit" style="z-index: 1100; display: none;">
        <div class="modal-dialog">
            <div class="modal-content" tabindex="6" style="overflow: hidden; outline: none;">
                <div class="modal-header" style="padding: 0 !important;">
                    <div style="height: 10px; width: 100%;background-color: #EA3226"></div>
                    <h4 class="modal-title text-center2" style="margin-top: 8px !important; font-size: 15px;font-weight: 500" id="Heading">Rejected</h4>
                </div>
                <div class="modal-body" style="background-color:#f0f0f0;border-top: 1px solid #f0f0f0;background-color: #fff; border-bottom: 1px solid #f0f0f0;padding: 25px 10px 25px 10px;display: flex;justify-content: center;align-items: center;">

                    <!--<input type="text" class="abrakadabra" placeholder="Please select: " value="Please select: 1 2 3 4" style="width: 310px;text-align: center;">-->

                    <span>You Are Rejected</span>
                    <span class="custom-dropdown">
                        <!--add content later-->
                    </span>
                </div>
                <div class="modal-footer text-center2">

                              <button onclick="closeModal()" type="button" class="btn vd_btn newbie-reject" data-dismiss="modal">
                        <span class="append-icon"><img src="img/true.png"></span>Ok
                    </button>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        <div id="ascrail2009" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2009-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2011" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2011-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2021" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2021-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(154, 192, 52); background-clip: padding-box;"></div></div><div id="ascrail2028" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2028-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2051" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2051-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div>
        <div id="ascrail2002" class="nicescroll-rails" style="width: 5px; z-index: 1050; cursor: default; position: absolute; top: 0px; left: -5px; height: 0px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2002-hr" class="nicescroll-rails" style="height: 5px; z-index: 1050; top: -5px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;"><div style="position: absolute; top: 0px; height: 5px; width: 0px; background-color: rgb(154, 192, 52); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px; left: 0px;"></div></div></div>
@endsection