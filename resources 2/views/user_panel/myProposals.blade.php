@php
$title = "UserSection"
@endphp

@extends('layouts.master')

@section('extended-header')
<div class="searchbar">
    <a id="nav2button" href="javascript:void(0);" class="icon" onclick="responsive_header2()">⏬</a>
    <div class="tab" role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#MyPostsAreaInCheck" aria-controls="MyPostsAreaInCheck" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-bullhorn" style="width:auto" aria-hidden="true"></i> All Proposals </a></li>
            <li role="presentation" class=""><a href="#MyPostsAreaInHold" aria-controls="MyPostsAreaInHold" role="tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-thumbs-o-down" style="width:auto" aria-hidden="true"></i> Projects Failed </a></li>
            <li role="presentation" class=""><a href="#MyPostsAreaCancelled" aria-controls="MyPostsAreaCancelled" role="tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-ban" aria-hidden="true" style="width:auto"></i> Projects Canceled </a></li>
        </ul>
    </div>

    <div class="search-contain">
        <form action="">
            <div class="inner-addon left-addon">
                <span><i class="fa fa-search"></i></span>
                <input placeholder="Search.." name="search" type="text">
            </div>
        </form>
    </div>

</div>
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
                                        <div role="tabpanel" class="tab-pane active" id="MyPostsAreaInCheck">

                                            <!--second section-->
                                            <div class="vd_content-section clearfix">
                                                <div class="row">
                                                    <div style="margin-bottom: -89px;" class="col-md-12">
                                                        <div class="tab-content no-bd mrgn0 pdng0">
                                                            <div class="tab-pane active fade in" id="category1">
                                                                <!-- My post -->
                                                                <div class="panel widget container-fluid">
                                                                    <div class="row mrgn30-0 projectRow">
                                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="" class="notice notice-success" style="color: black;">
                                                                            <div class="col-sm-3 brdRight">
                                                                                <h4>Project Title</h4>
                                                                                <p style="color: black;">12-02-2017 /17:30 Uhr</p>
                                                                            </div>
                                                                            <div class="col-sm-2 brdRight text-align">
                                                                                <h4>
                                                                                    Budget
                                                                                </h4>
                                                                                <h4 class="text-height">
                                                                                    2500,-€ Fix
                                                                                </h4>
                                                                            </div>
                                                                            <div class="col-sm-2 brdRight text-align">
                                                                                <h4>
                                                                                    Total Task
                                                                                </h4>
                                                                                <h4 class="text-height">
                                                                                    4
                                                                                </h4>
                                                                            </div>
                                                                            <div class="col-sm-2 brdRight text-align">
                                                                                <h4>
                                                                                    Personals
                                                                                </h4>
                                                                                <h4 class="text-height" style="color: red;">
                                                                                    24
                                                                                </h4>
                                                                            </div>
                                                                            <div class="col-sm-3 text-align">
                                                                                <h4>
                                                                                    Proposals
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
                                        <div role="tabpanel" class="tab-pane" id="MyPostsAreaInHold">
                                            <!--second section-->
                                            <div class="vd_content-section clearfix">
                                                <div class="row">
                                                    <div style="margin-bottom: -89px;" class="col-md-12">
                                                        <div class="tab-content no-bd mrgn0 pdng0">
                                                            <div class="tab-pane active fade in" id="category1">
                                                                <div class="panel widget container-fluid">
                                                                    <div class="row mrgn30-0 projectRow">
                                                                        <a href="javascript:void(0);" title="" data-toggle="modal" data-target="#failedModal" class="notice notice-success" style="color: black;">
                                                                            <div class="col-sm-3 brdRight">
                                                                                <h4>Project Title</h4>
                                                                                <p style="color: black;">12-02-2017 / 17:30 Uhr</p>
                                                                            </div>
                                                                            <div class="col-sm-3 brdRight text-align">
                                                                                <h4>
                                                                                    Budget
                                                                                </h4>
                                                                                <h4 class="text-height">
                                                                                    15,-€ Hourly
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
                                                                                    Proposals
                                                                                </h4>
                                                                                <h4 class="text-height" style="color: red;">
                                                                                    0
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
                                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#cancelModal" title="" class="notice notice-success" style="color: black;">
                                                                            <div class="col-sm-3 brdRight">
                                                                                <h4>Project Title</h4>
                                                                                <p style="color: black;">12-02-2017 / 17:30 Uhr</p>
                                                                            </div>
                                                                            <div class="col-sm-3 brdRight text-align">
                                                                                <h4>
                                                                                    Budget
                                                                                </h4>
                                                                                <h4 class="text-height">
                                                                                    Agreement
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
                                                                                    Proposals
                                                                                </h4>
                                                                                <h4 class="text-height" style="color: red;">
                                                                                    12
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










{{-- show proposal modal --}}
<div class="modal right fade infoModal" id="viewThisJob" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="z-index: 1041; overflow-x: hidden; display: none;">
        <button type="button" class=" close " data-dismiss="modal" aria-label="Close" style="background-color: #fff; margin-left: 53px; float:left;opacity:1;font-size:4rem;padding: 10px">
        <span aria-hidden="true">X</span>
    </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header vd_bg-green text-center relative modal-header-projects" style="padding: 0">
                    <h3 style="color:white; font-weight: bold" align="center">Overview</h3>
                </div>
                <div class="modal-body h100" style="padding: 0">
                    <div class="col-sm-12" style="border-bottom:1px solid lightgray">
                        <div class="col-sm-4" id="viewPro" onclick="
                                document.getElementById('allDet').style.display='block';
                                document.getElementById('rejDet').style.display='block';
                                document.getElementById('remDet').style.display='block';
                                document.getElementById('mesDet').style.display='block';
                                document.getElementById('repDet').style.display='block';
                         document.getElementById('viewinv').style.borderBottom='none';
                         document.getElementById('ViewRe').style.borderBottom='none';
                        document.getElementById('recoNotThumb').style.display='block';
                        document.getElementById('recoThumb').style.display='none';
                        document.getElementById('recNotThumb').style.display='block';
                        document.getElementById('recThumb').style.display='none';
                        document.getElementById('tabbs').style.display='block';
                         document.getElementById('viewPro').style.borderBottom='8px solid #9DC23A'" style="border-bottom:8px solid #9DC23A; cursor :pointer ">
                            <h4 align="center">View Poposals</h4>
                        </div>
                        <div class="col-sm-4" onclick=" document.getElementById('allDet').style.display='none'; 
                        document.getElementById('rejDet').style.display='block';
                        document.getElementById('remDet').style.display='block'; 
                        document.getElementById('mesDet').style.display='none';
                         document.getElementById('repDet').style.display='none';
                         document.getElementById('viewPro').style.borderBottom='none';
                         document.getElementById('ViewRe').style.borderBottom='none';
                        document.getElementById('recoNotThumb').style.display='block';
                        document.getElementById('recoThumb').style.display='none';
                        document.getElementById('recNotThumb').style.display='block';
                        document.getElementById('recThumb').style.display='none';
                        document.getElementById('tabbs').style.display='none';
                         document.getElementById('viewinv').style.borderBottom='8px solid #9DC23A'" style="cursor: pointer" id="viewinv">
                            <h4 align="center">Invent Company</h4>
                        </div>
                        <div class="col-sm-4" onclick=" document.getElementById('allDet').style.display='none'; document.getElementById('rejDet').style.display='block';
                        document.getElementById('remDet').style.display='block'; document.getElementById('mesDet').style.display='none'; document.getElementById('repDet').style.display='none';
                        document.getElementById('viewPro').style.borderBottom='none'; 
                        document.getElementById('viewinv').style.borderBottom='none';
                        document.getElementById('ViewRe').style.borderBottom='8px solid #9DC23A';
                        document.getElementById('tabbs').style.display='none';    
                        document.getElementById('recNotThumb').style.display='none';
                        document.getElementById('recThumb').style.display='block';
                        document.getElementById('recoNotThumb').style.display='none';
                        document.getElementById('recoThumb').style.display='block';" style="cursor: pointer" id="ViewRe">
                            <h4 align="center">Recommended</h4>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding: 15px; background-color: #f3f3f3; ">
                    <div style="width:95%; margin-left: 20px !important;">
                        <div class="container" style="background:white;">
                            <div class="col-sm-12" id="tabbs" style="  border-bottom:1px solid lightgray">
                                <div id="popPro" class="col-sm-2" style="border-bottom:5px solid #9DC23A">
                                    <h4 onclick="
                                    document.getElementById('popPro').style.borderBottom='5px solid #9DC23A';
                                    document.getElementById('popRem').style.borderBottom='none';
                                    document.getElementById('popRej').style.borderBottom='none';
                                    document.getElementById('popMess').style.borderBottom='none';
                                    document.getElementById('popRep').style.borderBottom='none';
                                    document.getElementById('allDet').style.display='block';
                                    document.getElementById('remDet').style.display='block';
                                    document.getElementById('rejDet').style.display='block';
                                    document.getElementById('mesDet').style.display='block';
                                    document.getElementById('repDet').style.display='block';" style="cursor: pointer" align="center">All Proposals</h4>
                                </div>
                                <div id="popRem" class="col-sm-2" onclick=" document.getElementById('popPro').style.borderBottom='none';
                                 document.getElementById('popRem').style.borderBottom='5px solid #9DC23A';
                                document.getElementById('popRej').style.borderBottom='none';
                                 document.getElementById('popMess').style.borderBottom='none';
                                document.getElementById('popRep').style.borderBottom='none';
                                document.getElementById('allDet').style.display='none';
                                document.getElementById('rejDet').style.display='none';
                                document.getElementById('remDet').style.display='block';
                                document.getElementById('mesDet').style.display='none';
                                document.getElementById('repDet').style.display='none';
                                ">
                                    <h4 style="cursor: pointer" align="center">Remember</h4>
                                </div>
                                <div id="popRej" class="col-sm-2" onclick=" document.getElementById('popPro').style.borderBottom='none';
                                 document.getElementById('popRem').style.borderBottom='none';
                                document.getElementById('popRej').style.borderBottom='5px solid #9DC23A';
                                 document.getElementById('popMess').style.borderBottom='none';
                                document.getElementById('popRep').style.borderBottom='none';
                                 document.getElementById('allDet').style.display='none';
                                document.getElementById('remDet').style.display='none';
                                document.getElementById('mesDet').style.display='none';
                                document.getElementById('rejDet').style.display='block';
                                document.getElementById('repDet').style.display='none';
                                ">
                                    <h4 style="cursor: pointer" align="center">Rejected</h4>
                                </div>
                                <div id="popMess" class="col-sm-2" onclick=" document.getElementById('popPro').style.borderBottom='none';
                                 document.getElementById('popRem').style.borderBottom='none';
                                document.getElementById('popRej').style.borderBottom='none';
                                 document.getElementById('popMess').style.borderBottom='5px solid #9DC23A';
                                document.getElementById('popRep').style.borderBottom='none';
                                 document.getElementById('allDet').style.display='none';
                                document.getElementById('rejDet').style.display='none';
                                document.getElementById('remDet').style.display='none';
                                document.getElementById('repDet').style.display='none';
                                document.getElementById('mesDet').style.display='block';
                                ">
                                    <h4 style="cursor: pointer" align="center">Messagesed</h4>
                                </div>
                                <div id="popRep" class="col-sm-2" onclick=" document.getElementById('popPro').style.borderBottom='none';
                                 document.getElementById('popRem').style.borderBottom='none';
                                document.getElementById('popRej').style.borderBottom='none';
                                 document.getElementById('popMess').style.borderBottom='none';
                                document.getElementById('popRep').style.borderBottom='5px solid #9DC23A';
                                 document.getElementById('allDet').style.display='none';
                                document.getElementById('rejDet').style.display='none';
                                document.getElementById('mesDet').style.display='none';
                                document.getElementById('repDet').style.display='block';
                                document.getElementById('remDet').style.display='none';">
                                    <h4 style="cursor: pointer" align="center">Reported</h4>
                                </div>
                                <div class="col-sm-2">
                                    <select name="status" id="statuss" style="height: 40px !important;background-color:white; margin-top: 5px">
                                        <option value="Status">Status</option>
                                        <option value="Status">Status</option>
                                        <option value="Status">Status</option>
                                    </select>
                                </div>
                            </div>
                            <div>

                                <div class="col-sm-12" id="allDet" style="margin-top: 30px !important;">
                                    <div class=" projectRow vd_bg-light-grey vd_bdl-blue brdl4" style=" background-color: #f3f3f3 !important; cursor: pointer" data-toggle="modal" data-target="#viewThsJob">
                                        <!-- <a title=" " class="notice notice-primary " style=" background-color: #f3f3f3 !important;color: black;"> -->
                                        <div class="col-sm-4 main-log-part " style="background-color: #f3f3f3 !important;">
                                            <div class="main-log-left " style="float: left; ">
                                                <img style="margin-top: 10px " src="img/mini.png ">
                                            </div>
                                            <div class="main-log-right " style="float: left; margin-left: 25px ">
                                                <h4 style=" ">Company Name</h4>
                                                <p style="color: black; ">Company ID</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 brdLeft brdRight text-align ">
                                            <h4>Budget</h4>
                                            <p style="color: black; ">1000.€</p>
                                        </div>
                                        <div class="col-sm-3 brdRight text-align ">
                                            <h4>Location</h4>
                                            <p style="color: black; ">30419 Hannover</p>
                                        </div>

                                        <div class="col-sm-2 text-align ">
                                            <h4 style="margin:10; ">
                                                Option
                                            </h4>
                                            <button type="button " class="btn btn-primary btn-sm " style="width: 39% ">
                                                <span class="btn-primary-text ">View</span>
                                                <div></div>
                                            </button>
                                        </div>
                                        <!-- </a> -->
                                    </div>
                                </div>

                                <div class="col-sm-12" id="rejDet" style="margin-top: 30px !important;">
                                    <div class=" projectRow vd_bg-light-grey vd_bdl-red brdl4" style="cursor: pointer; background-color: #f3f3f3 !important; " data-toggle="modal" data-dismiss="modal" data-target="#viewThsJob">
                                        <!-- <a title=" " class="notice notice-primary " style=" background-color: #f3f3f3 !important;color: black;"> -->
                                        <div class="col-sm-4 main-log-part " style="background-color: #f3f3f3 !important;">
                                            <div class="main-log-left " style="float: left; ">
                                                <img style="margin-top: 10px " src="img/mini.png ">
                                            </div>
                                            <div class="main-log-right " style="float: left; margin-left: 25px ">
                                                <h4 style=" ">Company Name</h4>
                                                <p style="color: black; ">Company ID</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 brdLeft brdRight text-align ">
                                            <h4>Budget</h4>
                                            <p style="color: black; ">1000.-€ fix</p>
                                        </div>
                                        <div class="col-sm-3 brdRight text-align ">
                                            <h4>Location</h4>
                                            <p style="color: black; ">30419 Hannover</p>
                                        </div>

                                        <div class="col-sm-2 text-align ">
                                            <div id="recNotThumb">
                                                <h4 style="margin-top:10; ">
                                                    Option
                                                </h4>
                                                <button type="button " class="btn btn-primary btn-sm " style="width: 39% ">
                                                <span class="btn-primary-text ">View</span>
                                                <div></div>
                                            </button>
                                            </div>
                                            <div id="recThumb" style="display: none">
                                                <span class="fa fa-thumbs-up" style="background-color: #f3f3f3 !important; color: #f85d2c; box-shadow: none; font-size: 36px; margin-top: 20px"></span>
                                            </div>
                                        </div>
                                        <!-- </a> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12" id="remDet" style="margin-top: 30px !important;">
                                <div class=" projectRow vd_bg-light-grey vd_bdl-green brdl4" style=" cursor: pointer; background-color: #f3f3f3 !important; " data-toggle="modal" data-dismiss="modal" data-target="#viewThsJob">
                                    <!-- <a title=" " class="notice notice-primary " style=" background-color: #f3f3f3 !important;color: black;"> -->
                                    <div class="col-sm-4 main-log-part " style="background-color: #f3f3f3 !important;">
                                        <div class="main-log-left " style="float: left; ">
                                            <img style="margin-top: 10px " src="img/mini.png ">
                                        </div>
                                        <div class="main-log-right " style="float: left; margin-left: 25px ">
                                            <h4 style=" ">Company Name</h4>
                                            <p style="color: black; ">Company ID</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 brdLeft brdRight text-align ">
                                        <h4>Budget</h4>
                                        <p style="color: black; ">1000.-€ fix</p>
                                    </div>
                                    <div class="col-sm-3 brdRight text-align ">
                                        <h4>Location</h4>
                                        <p style="color: black; ">30419 Hannover</p>
                                    </div>
                                    <div class="col-sm-2 text-align ">
                                        <div id="recoNotThumb">
                                            <h4 style="margin-top:10; ">
                                                Option
                                            </h4>
                                            <button type="button " class="btn btn-primary btn-sm " style="width: 39% ">
                                            <span class="btn-primary-text ">View</span>
                                            <div></div>
                                        </button>
                                        </div>
                                        <div id="recoThumb" style="display: none">
                                            <span class="fa fa-thumbs-up" style="background-color: #f3f3f3 !important; color: #9DC23A; box-shadow: none; font-size: 36px; margin-top: 20px"></span>
                                        </div>
                                    </div>
                                    <!-- </a> -->
                                </div>
                            </div>
                            <div class="col-sm-12" id="mesDet" style="margin-top: 30px !important;">
                                <div class=" projectRow vd_bg-light-grey vd_bdl-orange brdl4" style="cursor: pointer; background-color: #f3f3f3 !important; " data-toggle="modal" data-dismiss="modal" data-target="#viewThsJob">
                                    <!-- <a title=" " class="notice notice-primary " style=" background-color: #f3f3f3 !important;color: black;"> -->
                                    <div class="col-sm-4 main-log-part " style="background-color: #f3f3f3 !important;">
                                        <div class="main-log-left " style="float: left; ">
                                            <img style="margin-top: 10px " src="img/mini.png ">
                                        </div>
                                        <div class="main-log-right " style="float: left; margin-left: 25px ">
                                            <h4 style=" ">Company Name</h4>
                                            <p style="color: black; ">Company ID</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 brdLeft brdRight text-align ">
                                        <h4>Budget</h4>
                                        <p style="color: black; ">1000.-€ fix</p>
                                    </div>
                                    <div class="col-sm-3 brdRight text-align ">
                                        <h4>Location</h4>
                                        <p style="color: black; ">30419 Hannover</p>
                                    </div>

                                    <div class="col-sm-2 text-align ">
                                        <h4 style="margin-top:10; ">
                                            Option
                                        </h4>
                                        <button type="button " class="btn btn-primary btn-sm " style="width: 39% ">
                                            <span class="btn-primary-text ">View</span>
                                            <div></div>
                                        </button>
                                    </div>
                                    <!-- </a> -->
                                </div>
                            </div>

                            <div class="col-sm-12" id="repDet" style="margin-bottom : 20px ;margin-top: 30px !important;">
                                <div class=" projectRow vd_bg-light-grey vd_bdl-yellow brdl4" style="cursor: pointer; background-color: #f3f3f3 !important; " data-toggle="modal" data-dismiss="modal" data-target="#viewThsJob">
                                    <!-- <a title=" " class="notice notice-primary " style=" background-color: #f3f3f3 !important;color: black;"> -->
                                    <div class="col-sm-4 main-log-part " style="background-color: #f3f3f3 !important;">
                                        <div class="main-log-left " style="float: left; ">
                                            <img style="margin-top: 10px " src="img/mini.png ">
                                        </div>
                                        <div class="main-log-right " style="float: left; margin-left: 25px ">
                                            <h4 style=" ">Company Name</h4>
                                            <p style="color: black; ">Company ID</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 brdLeft brdRight text-align ">
                                        <h4>Budget</h4>
                                        <p style="color: black; ">1000.-€ fix</p>
                                    </div>
                                    <div class="col-sm-3 brdRight text-align ">
                                        <h4>Location</h4>
                                        <p style="color: black; ">30419 Hannover</p>
                                    </div>

                                    <div class="col-sm-2 text-align ">
                                        <h4 style="margin-top:10; ">
                                            Option
                                        </h4>
                                        <button type="button " class="btn btn-primary btn-sm " style="width: 39% ">
                                            <span class="btn-primary-text ">View</span>
                                            <div></div>
                                        </button>
                                    </div>
                                    <!-- </a> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="failedModal" role="dialog" style="display: none;">

        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding: 0 !important;">
                    <div style="height: 10px; width: 100%;background-color: #9dc23a"></div>
                    <h4 style="text-align: center">Option</h4>
                    <hr style="color: #f3f3f3">
                </div>
                <div class="col-sm-12">

                    <div class="col-sm-6" style="background-color:#f0f0f0;background-color: #fff;display: flex;justify-content: center;align-items: center;">
                        <button class="search-employer-acc" type="button" data-toggle="modal" data-dismiss="modal" data-target="#editModal" style="text-align: left;
                                                                                                width: 160px !important;border-radius: 24px;color: black;background: white;border: 1px solid #cbcbcb;  margin-top: -10px !important; margin-bottom: -3px !important">
                            <span class="append-icon" style="text-align:left;margin-right:42">
                                <i class="fa fa-edit" style="width:auto; background: transparent; color: #9dc23a; box-shadow: none" aria-hidden="true"></i> Edit / Repost</span>
                        </button>

                    </div>
                    <div class="col-sm-6" style="background-color:#f0f0f0;background-color: #fff;display: flex;justify-content: center;align-items: center;">
                        <button class="search-employer-acc" type="button" data-toggle="modal" data-dismiss="modal" data-target="#alertModal" style="text-align: left;
                                                                                                                width: 120px !important;border-radius: 24px;color: black;background: white;border: 1px solid #cbcbcb;  margin-top: -10px !important; margin-bottom: -3px !important">
                            <span class="append-icon" style="text-align:left;margin-right:42">
                                <i class="fa fa-trash-o" style="width:auto; background:  transparent; color: #9dc23a; box-shadow: none" aria-hidden="true"></i> Remove</span>
                        </button>

                    </div>


                </div>
                <div class="modal-footer  text-center2">
                    <hr style="color:#f3f3f3">
                    <button class="search-employer-acc" type="button" data-toggle="modal" data-dismiss="modal" data-target="#StatusWaitinginterviewuser2" style="text-align: left;
                                                            width: 80px !important;padding: 4px;border-radius: 24px;color: black;background: white;border: 1px solid #cbcbcb;">
                        <span class="append-icon" style="text-align:left;margin-right:42">
                            <img src="img/true.png" style="width:20px; text-align:center">O.K</span>
                    </button>
                </div>
            </div>

        </div>

    </div>








    <div class="modal right fade infoModal in" id="editModal" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="z-index: 1041; display: none;">
        <button type="button" class=" close " data-dismiss="modal" aria-label="Close" style="background: #fff; margin-left: 53px; float:left;opacity:1;font-size:4rem;padding: 10px">
            <span aria-hidden="true">X</span>
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header vd_bg-green text-center relative modal-header-projects" style="padding: 0">
                    <h3 style="color:white; font-weight: bold" align="center">Edit / Repost Your Request</h3>
                </div>
                <div style="background-color: #f3f3f3; width: 100%; min-height: 600px;">

                    <div style=" background-color: white !important; width: 100%; height: 40px"></div>
                    <div style="background-color: white !important; width: 80%; height: 450px; margin-top: 75px; margin-left: 10%; border-top: 6px solid blue">

                        <h4 style="font-weight: bold" align="center">Edit Post</h4>
                        <hr>

                    </div>
                </div>
            </div>
        </div>
    </div>







    <div class="modal fade in" id="reportModal" role="dialog" style="display: none; padding-left: 14px;">

        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding: 0 !important;">
                    <div style="height: 10px; width: 100%;background-color: #EA3226"></div>
                    <h4 class="modal-title text-center2" style="margin-top: 8px !important; font-size: 15px;font-weight: 500" id="Heading">Rejected</h4>
                </div>
                <div class="modal-body" style="background-color:#f0f0f0;border-top: 1px solid #f0f0f0;background-color: #fff; border-bottom: 1px solid #f0f0f0;padding: 25px 10px 25px 10px;display: flex;justify-content: center;align-items: center;">


                    <select style="color:black; background-color: white ;border:none; text-align:center; width:310px; color:#d5d5d5; height:35px; padding:5px"> 
                        <option value="">Select Reason</option>
                        <option value="">Select Reason</option>
                        <option value="">Select Reason</option>
                    </select>

                </div>
                <div class="modal-footer  text-center2">
                    <button type="button " data-dismiss="modal" class="btn btn-danger btn-sm " style=" margin-top: 10px; width: 45%; height: 25px ">
                        <span class="btn-primary-text ">Report</span>
                        <div></div>
                    </button>
                </div>
            </div>

        </div>

    </div>








    <div class="modal fade" id="cancelModal" role="dialog" style="display: none;">

        <div class="modal-dialog" style="width: 570px">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding: 0 !important;">
                    <div style="height: 10px; width: 100%;background-color: #9dc23a"></div>
                    <h4 style="text-align: center">Option</h4>
                    <hr style="color: #f3f3f3">
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-4" style="background-color:#f0f0f0; background-color: #fff; display: flex;justify-content: center;align-items: center;">
                        <button class="search-employer-acc" type="button" data-toggle="modal" data-target="#viewThsJob" data-dismiss="modal" style="text-align: left;
                                                                                width: 100px !important;border-radius: 24px;color: black;background: white;border: 1px solid #cbcbcb; margin-top: -10px !important; margin-bottom: -3px !important">
                            <span class="append-icon" style="text-align:left;margin-right:42">
                                <i class="fa fa-eye" style="width:auto; background: transparent; color: #9dc23a; box-shadow: none" aria-hidden="true"></i>View</span>
                        </button>

                    </div>
                    <div class="col-sm-4" style="background-color:#f0f0f0;background-color: #fff;display: flex;justify-content: center;align-items: center;">
                        <button class="search-employer-acc" type="button" data-toggle="modal" data-dismiss="modal" data-target="#editModal" style="text-align: left;
                                                                                                width: 160px !important;border-radius: 24px;color: black;background: white;border: 1px solid #cbcbcb;  margin-top: -10px !important; margin-bottom: -3px !important">
                            <span class="append-icon" style="text-align:left;margin-right:42">
                                <i class="fa fa-edit" style="width:auto; background: transparent; color: #9dc23a; box-shadow: none" aria-hidden="true"></i> Edit / Repost</span>
                        </button>

                    </div>
                    <div class="col-sm-4" style="background-color:#f0f0f0;background-color: #fff;display: flex;justify-content: center;align-items: center;">
                        <button class="search-employer-acc" type="button" data-toggle="modal" data-dismiss="modal" data-target="#alertModal" style="text-align: left;
                                                                                                                width: 120px !important;border-radius: 24px;color: black;background: white;border: 1px solid #cbcbcb;  margin-top: -10px !important; margin-bottom: -3px !important">
                            <span class="append-icon" style="text-align:left;margin-right:42">
                                <i class="fa fa-trash-o" style="width:auto; background:  transparent; color: #9dc23a; box-shadow: none" aria-hidden="true"></i> Remove</span>
                        </button>

                    </div>


                </div>
                <div class="modal-footer  text-center2">
                    <hr style="color: #f3f3f3">
                    <button class="search-employer-acc" type="button" data-toggle="modal" data-dismiss="modal" data-target="#StatusWaitinginterviewuser2" style="text-align: left;
                                                                width: 80px !important;padding: 4px;border-radius: 24px;color: black;background: white;border: 1px solid #cbcbcb;">
                        <span class="append-icon" style="text-align:left;margin-right:42">
                            <img src="img/true.png" style="width:20px; text-align:center">O.K</span>
                    </button>
                </div>
            </div>

        </div>

    </div>








    <div class="modal right fade infoModal" id="viewThsJob" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0) !important; z-index: 1041; display: none;">
        <button type="button" class=" close " data-dismiss="modal" aria-label="Close" style="background-color: #fff;background-color: rgba(0,0,0,0) !important; margin-left: 53px; float:left;opacity:1;font-size:4rem;padding: 10px">
        <span aria-hidden="true">X</span>
    </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header vd_bg-green text-center relative modal-header-projects" style="padding: 0">

                    <div class="row  vd_white ">
                        <div class="col-lg-12">

                            <h3 style="color: white; font-weight: bold">View Company offer</h3>
                        </div>
                    </div>
                </div>
                <div class="modal-body h100" style="padding: 0">

                    <div class="row" style=" border-bottom: 8px solid #9DC23A;margin: 0; " align="center">
                        <div class=" col-lg-12 job-details">
                            <ul class="nav   user-profile-menu job-list col-lg-12" align="center" style="border-bottom: none;width: 100%;">
                                <li class="col-sm-2" style="font-size: 14px">
                                    <a>
                                        <span aria-hidden="true" style="font-size: 16px; background-color: #f3f3f3 !important" class="">Offer Type</span> <span style="font-size: 16px;">Type</span>
                                    </a>
                                </li>
                                <li class="col-sm-3">
                                    <a>
                                        <span aria-hidden="true" style="font-size: 16px; background-color: #f3f3f3 !important" class="">Contract Type</span> <span style="font-size: 16px;"> Standard</span>
                                    </a>
                                </li>
                                <li class="col-sm-3">
                                    <a>
                                        <span aria-hidden="true" style="font-size: 16px; background-color: #f3f3f3 !important" class=""> Offer Duration</span> <span style="font-size: 16px;"> 2 weeks</span>
                                    </a>
                                </li>
                                <li class="col-sm-2">
                                    <a>
                                        <span aria-hidden="true" style="font-size: 16px; background-color: #f3f3f3 !important" class="">Warranty</span> <span style="font-size: 16px;"> 3 Months</span>
                                    </a>
                                </li>
                                <li class="col-sm-2">
                                    <a>
                                        <span aria-hidden="true" style="font-size: 16px; background-color: #f3f3f3 !important" class="">Job ID</span> <span style="font-size: 16px;"> FO-10032</span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding: 15px; background-color: #f3f3f3">

                    <div class="col-lg-4 text-center">
                        <div class="col-lg-12" style="border-top: 8px solid #9DC23A;margin-bottom: 4px"></div>
                        <div class="col-lg-12 profile-bc">
                            <div class=" profile-bg" style="background-image: url('img/avatarBg.png')">
                                <img class="profile-pic" style="width: 200px; border-radius: 0px; margin-left: -50px" src="img/bobbyjkane.jpg">
                            </div>
                            <div class="col-lg-12" style="margin-top: 30px">
                                <h4>
                                    <b>Mark Tailor</b>
                                </h4>
                                <p>User ID:2454</p>
                                <a href="#" data-toggle="modal" data-target="#profileModal" class="btn btn-primary">View profile</a>
                            </div>
                        </div>

                        <!-- <div class="col-lg-12" style="border: 1px solid #DDD; padding: 0; margin-top: 10px;">
                            <div class="col-lg-12" align='left' style="background-color: #286090; padding: 5px; color: #fff">
                                <h5 style="color: #fff">
                                    <b>Google Inc.</b>
                                </h5>
                                <small>Material design task</small>
                            </div>
                            <div class="col-lg-12" style="background-color: #fff">

                                <div class="col-lg-4" style="border-right: 1px solid #DDD">
                                    <h6>45%</h6>
                                    <small>Complete</small>
                                </div>
                                <div class="col-lg-4" style="border-right: 1px solid #DDD">
                                    <h6>3</h6>
                                    <small>My Tasks</small>
                                </div>
                                <div class="col-lg-4">
                                    <h6>22</h6>
                                    <small>Days Due</small>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-12" style="border: 1px solid #DDD; padding: 0; margin-top: 10px;">
                            <div class="col-lg-12" align='left' style="background-color: #5cb85c; padding: 5px; color: #fff">
                                <h5 style="color: #fff">
                                    <b>Facebook Inc.</b>
                                </h5>
                                <small>Material design task</small>
                            </div>
                            <div class="col-lg-12" style="background-color: #fff">

                                <div class="col-lg-4" style="border-right: 1px solid #DDD">
                                    <h6>45%</h6>
                                    <small>Complete</small>
                                </div>
                                <div class="col-lg-4" style="border-right: 1px solid #DDD">
                                    <h6>3</h6>
                                    <small>My Tasks</small>
                                </div>
                                <div class="col-lg-4">
                                    <h6>22</h6>
                                    <small>Days Due</small>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-8 " style="padding:0;border-top: 8px solid #9DC23A;background-color: #f3f3f3">


                        <div class=" col-lg-12" style="border-bottom: 1px solid #dbdbdb;margin-bottom: 10px;background-color: #fff;padding-top:5px" align="center">
                            <ul class="nav  user-profile-menu popup-list" align="center" style="border-bottom: none">
                                <div class="com-sm-2">
                                    <li role="presentation">
                                        <a href="#" style="color: black;" data-toggle="modal" data-target="#acceptModal">
                                            <i class="fa fa-check-circle-o" aria-hidden="true" style="color: #9DC23A"></i>&nbsp;Accepted
                                        </a>
                                    </li>
                                </div>
                                <div class="com-sm-2">
                                    <li role="presentation">
                                        <a href="#" style="color: black; ">
                                            <i class="fa fa-bookmark " aria-hidden="true" style="color:#ff6200"></i>&nbsp;Rememmber
                                        </a>
                                    </li>
                                </div>
                                <div class="com-sm-2">
                                    <li role="presentation" class="">
                                        <a style="color: black; ">
                                            <i class="fa fa-ban " aria-hidden="true" style="color:red"></i> Rejected
                                        </a>
                                    </li>
                                </div>
                                <div class="com-sm-2">
                                    <li role="presentation">
                                        <a href="#" style="color: black; " data-toggle="modal" data-target="#reportModal">
                                            <i class="fa fa-exclamation-triangle " aria-hidden="true" style="color:red"></i> Report
                                        </a>
                                    </li>
                                </div>
                                <div class="com-sm-2">
                                    <li role="presentation">
                                        <a href="http://ihannoveraner.de/user/chat.html" style="color: black;">
                                            <i class="fa fa-comments" aria-hidden="true" style="color:blue"></i> Messgae
                                        </a>
                                    </li>
                                </div>
                                <div class="com-sm-2">
                                    <li role="presentation">
                                        <a href="#" style="color: black; " data-toggle="modal" data-target="#printInv">
                                            <i class="fa fa-print " aria-hidden="true" style="color:blue"></i> &nbsp;Print
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8" style="background-color: #f3f3f3;padding-left: 0">
                        <div class="col-lg-12" style="padding:0px;">
                            <div class="col-lg-12" style="padding:0px;">
                                <textarea disabled="" class="textareas" style="resize: none" rows="5">Hello there,I´m Planing my Birthday with Family and Friends and i´m looking for a Partyservice who can Deliver us with Drinks and Food .. I´m Planing my Birthday with Family and Friends and i´m looking for a Partyservice who can Deliver us with Drinks and Food ..</textarea>                                </div>
                        </div>

                        <div class="col-lg-12" style="    background-color: #fff;padding:0 5px 5px 5px;margin-top: 10px">

                            <div class="col-lg-12" style="padding:0px;">
                                <h5 class="col-lg-12" style="background-color: #f3f3f3;padding: 10px;">Project Image</h5>
                                <div class="borderpopmohamed" style="min-height: 340px; overflow: hidden;">
                                    <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="padding: 10px;margin: 5px 0 5px !important;">
                                        <div class="vd_panel-menu">
                                            <div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
                                                <div data-action="click-trigger" class="menu-trigger">
                                                    <i class="fa fa-cog"></i>
                                                </div>
                                                <div class="vd_mega-menu-content width-xs-2 left-xs" data-action="click-target" style="display: none;">
                                                    <div class="child-menu">
                                                        <div class="content-list content-menu">
                                                            <ul class="list-wrapper pd-lr-10">
                                                                <li>
                                                                    <a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob">
                                                                        <span class="iconOption">
                                                                        <i class="fa fa-minus"></i>
                                                                    </span> Block</a>
                                                                </li>
                                                                <li>
                                                                    <a class="vd_red" data-toggle="modal" data-target="#removeThisJob">
                                                                        <span class="iconOption">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </span> Remove</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 pdng5-0 text-center" style="margin: 5px 0 5px !important;">
                                            <a data-toggle="modal" data-target="#showFile" href="javascript:void(0);">
                                                <img src="img/svg.png" alt="" width="25" height="80">
                                            </a>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="col-sm-3">06_plan.jpg</div>
                                            <div class="col-sm-3">
                                                <i class="icon-user"></i> Vint Cerf</div>
                                            <div class="col-sm-3">320 KB</div>
                                            <div class="col-sm-3">
                                                <span class="label label-default vd_bg-green vd_white">Seen</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="padding: 10px;margin: 5px 0 5px !important;">
                                        <div class="vd_panel-menu">
                                            <div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
                                                <div data-action="click-trigger" class="menu-trigger">
                                                    <i class="fa fa-cog"></i>
                                                </div>
                                                <div class="vd_mega-menu-content width-xs-2 left-xs" data-action="click-target" style="display: none;">
                                                    <div class="child-menu">
                                                        <div class="content-list content-menu">
                                                            <ul class="list-wrapper pd-lr-10">
                                                                <li>
                                                                    <a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob">
                                                                        <span class="iconOption">
                                                                        <i class="fa fa-minus"></i>
                                                                    </span> Block</a>
                                                                </li>
                                                                <li>
                                                                    <a class="vd_red" data-toggle="modal" data-target="#removeThisJob">
                                                                        <span class="iconOption">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </span> Remove</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 pdng5-0 text-center">
                                            <a data-toggle="modal" data-target="#showFile" href="javascript:void(0);">
                                                <img src="img/svg.png" alt="" width="25" height="80">
                                            </a>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="col-sm-3">06_plan.jpg</div>
                                            <div class="col-sm-3">
                                                <i class="icon-user"></i> Vint Cerf</div>
                                            <div class="col-sm-3">320 KB</div>
                                            <div class="col-sm-3">
                                                <span class="label label-default vd_bg-green vd_white">Seen</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="padding: 10px;margin: 5px 0 5px !important;">
                                        <div class="vd_panel-menu">
                                            <div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
                                                <div data-action="click-trigger" class="menu-trigger">
                                                    <i class="fa fa-cog"></i>
                                                </div>
                                                <div class="vd_mega-menu-content width-xs-2 left-xs" data-action="click-target" style="display: none;">
                                                    <div class="child-menu">
                                                        <div class="content-list content-menu">
                                                            <ul class="list-wrapper pd-lr-10">
                                                                <li>
                                                                    <a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob">
                                                                        <span class="iconOption">
                                                                        <i class="fa fa-minus"></i>
                                                                    </span> Block</a>
                                                                </li>
                                                                <li>
                                                                    <a class="vd_red" data-toggle="modal" data-target="#removeThisJob">
                                                                        <span class="iconOption">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </span> Remove</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 pdng5-0 text-center">
                                            <a data-toggle="modal" data-target="#showFile" href="javascript:void(0);">
                                                <img src="img/ppt.png" alt="" width="25" height="80">
                                            </a>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="col-sm-3">06_plan.jpg</div>
                                            <div class="col-sm-3">
                                                <i class="icon-user"></i> Vint Cerf</div>
                                            <div class="col-sm-3">320 KB</div>
                                            <div class="col-sm-3">
                                                <span class="label label-default vd_bg-green vd_white">Seen</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="padding: 10px;margin: 5px 0 5px !important;">
                                        <div class="vd_panel-menu">
                                            <div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
                                                <div data-action="click-trigger" class="menu-trigger">
                                                    <i class="fa fa-cog"></i>
                                                </div>
                                                <div class="vd_mega-menu-content width-xs-2 left-xs" data-action="click-target" style="display: none;">
                                                    <div class="child-menu">
                                                        <div class="content-list content-menu">
                                                            <ul class="list-wrapper pd-lr-10">
                                                                <li>
                                                                    <a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob">
                                                                        <span class="iconOption">
                                                                        <i class="fa fa-minus"></i>
                                                                    </span> Block</a>
                                                                </li>
                                                                <li>
                                                                    <a class="vd_red" data-toggle="modal" data-target="#removeThisJob">
                                                                        <span class="iconOption">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </span> Remove</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 pdng5-0 text-center">
                                            <a data-toggle="modal" data-target="#showFile" href="javascript:void(0);">
                                                <img src="img/png.png" alt="" width="25" height="80">
                                            </a>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="col-sm-3">06_plan.jpg</div>
                                            <div class="col-sm-3">
                                                <i class="icon-user"></i> Vint Cerf</div>
                                            <div class="col-sm-3">320 KB</div>
                                            <div class="col-sm-3">
                                                <span class="label label-default vd_bg-green vd_white">Seen</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" style="padding:0px; background-color: #fff;padding:0 5px 5px 5px;margin-top: 10px">
                            <h5 class="col-lg-12" style="background-color: #f3f3f3;padding: 10px;">Project Tasks</h5>

                            <div class="col-lg-12" style="padding:0px;">
                                <div class="borderspka" style="min-height: 200px; overflow: auto">
                                    <div class="col-lg-12">
                                        <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="padding: 10px;margin: 5px 0 5px !important;">
                                            <div class="col-sm-12 pdng5-0">
                                                <h5 class="mrgn0">Project desc.</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-red brdl4" style="padding: 10px;margin: 5px 0 5px !important;">
                                            <div class="col-sm-12 pdng5-0">
                                                <h5 class="mrgn0">Project desc.</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="padding: 10px;margin: 5px 0 5px !important;">
                                            <div class="col-sm-12 pdng5-0">
                                                <h5 class="mrgn0">Project desc.</h5>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" style="padding:0px; background-color: #fff;padding:0 5px 5px 5px;margin-top: 10px">
                            <h5 class="col-lg-12" style="background-color: #f3f3f3;padding: 10px;">Company Skills</h5>

                            <div class="col-lg-12" style="padding:0px;">
                                <div class="borderspka " style="background-color: #fff">
                                    <div class="col-lg-4">
                                        <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="padding: 10px;margin: 5px 0 5px !important;">
                                            <div class="col-sm-12 pdng5-0">
                                                <h5 class="mrgn0">On Time</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="padding: 10px;margin: 5px 0 5px !important;">
                                            <div class="col-sm-12 pdng5-0">
                                                <h5 class="mrgn0">On Time</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="padding: 10px;margin: 5px 0 5px !important;">
                                            <div class="col-sm-12 pdng5-0">
                                                <h5 class="mrgn0">On Time</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="padding: 10px;margin: 5px 0 5px !important;">
                                            <div class="col-sm-12 pdng5-0">
                                                <h5 class="mrgn0">On Time</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="padding: 10px;margin: 5px 0 5px !important;">
                                            <div class="col-sm-12 pdng5-0">
                                                <h5 class="mrgn0">On Time</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="padding: 10px;margin: 5px 0 5px !important;">
                                            <div class="col-sm-12 pdng5-0">
                                                <h5 class="mrgn0">On Time</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12" style="padding:0px; background-color: #fff;padding:0 5px 5px 5px;margin-top: 10px">
                            <h5 class="col-lg-12" style="background-color: #f3f3f3;padding: 10px;">Work delivery</h5>
                            <div class="col-lg-12" style="padding:0px;">
                                <div class="borderspka2" style="height: 111px; overflow: hidden; text-align: center">
                                    <div class="col-lg-12">
                                        <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-green brdl4" style="padding: 10px;margin: 5px 0 5px !important;">
                                            <div class="col-sm-12 pdng5-0">
                                                <div class="col-sm-6" style=" border-right: 1px solid #DDD;">
                                                    <h4 class="mrgn0">Work Start</h4>
                                                    <p>10.12.2017</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h4 class="mrgn0">Work Delivery</h4>
                                                    <p>10.12.2017</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" style="padding:0px; background-color: #fff;padding:0 5px 5px 5px;margin-top: 10px">
                            <h5 class="col-lg-12" style="background-color: #f3f3f3;padding: 10px;">Payments</h5>
                            <div class="col-lg-12" style="padding:0px;">
                                <div class="borderspka2" style="height: 142px; overflow: hidden; text-align: center">
                                    <div class="col-lg-12">
                                        <div class="row mrgn15-0 projectRow vd_bg-light-grey vd_bdl-red brdl4">
                                            <div class="col-sm-12 pdng5-0">
                                                <div class="col-sm-3" style=" border-right: 1px solid #DDD;">
                                                    <h4 class="mrgn0">Budget Type</h4>
                                                    <p>Fix / Hourly / Agree</p>
                                                </div>
                                                <div class="col-sm-3" style=" border-right: 1px solid #DDD;">
                                                    <h4 class="mrgn0">Price</h4>
                                                    <p>200,$</p>
                                                </div>
                                                <div class="col-sm-3" style=" border-right: 1px solid #DDD;">
                                                    <h4 class="mrgn0">Price Type</h4>
                                                    <p>Fix / Agreement</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <h4 class="mrgn0">Payout</h4>
                                                    <p>After Finish / Agreement</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" style="padding:0px; background-color: #fff;padding: 5px;">

                            <div class="col-lg-12" style=" background-color: #fff;padding: 5px;">
                                <ul class="nav  user-profile-menu popup-list" align="center" style="border-bottom: none; width: 100%">
                                    <!-- <div class="col-sm-6">
                                        <li role="presentation" style="float: right">
                                            <a href="#" data-dismiss="modal">
                                                <i class="fa fa-ban" aria-hidden="true" style="color: red"></i>&nbsp;Reject
                                            </a>
                                        </li>
                                    </div>
                                    <div class="col-sm-6">
                                        <li role="presentation" class="">
                                            <a data-toggle="modal" data-target="#makeoffer">
                                                <i class="fa fa-bullhorn  " aria-hidden="true" style="color:#ff6200"></i>&nbsp;Make Offer
                                            </a>
                                        </li>
                                    </div> -->
                                </ul>
                            </div>
                        </div>
                    </div>
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