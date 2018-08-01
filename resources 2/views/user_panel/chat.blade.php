<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>freelance Guru</title>

    <link href="https://fonts.googleapis.com/css?family=Bitter:400,700%7COpen+Sans:400,600i,700,800%7CRaleway:400,500i,700,800,900" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="frameworks/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="css/flag-icon.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/plugin.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/custom.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/colors.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/style2.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/style3.css" media="screen" rel="stylesheet" type="text/css"> -->
    <!-- update css indra2017 -->
    <link href="css/chat/fileupload.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/chat/chatboard.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/chat/main.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/chat/responsive.css" media="screen" rel="stylesheet" type="text/css">
    <link href="img/favicon.png" rel="shortcut icon">
    <link href="img/favicon.png" rel="icon">
    <link rel="stylesheet" href="css/styles.css">

    <style>body {
            background-color: #fff;
        }
        header{
            position: fixed;
            z-index: 999;
            width: 100%;
        }
        .search-contain .inner-addon i {
            
            right: 75%;
            top: 17px;
        }
        .search-contain input[type=text] , input {
            width: 80%;
            margin-bottom: 15px;
        }

        
        
        
        
        
        
        .chat-box-cust button i{
            background-color: transparent;
            box-shadow: none;
            font-size: 25px;
        }
            .border-box{
            border: none;
        }
        
        #chatHistory{
            margin-top: 81px;
        }

        /*start here*/
        .message-chat-box{
            background-color: #ddd;
            clear: both;
            position: fixed;
            width: 60%;
            bottom: 0px;
        }

        .parameters{
            display: inline-block;
            background-color: #2c3e50;
            width: 100%;
            padding-bottom: 4px;
            padding-top: 3px;
        }
        .chat-left-cont{
            display: inline-block;
            text-align: center;
        }
        .chat-left-cont button {
            box-shadow: none;
            border: none;
            background-color: #2c3e50;
            color: #fff;
        }
        .chat-left-cont button i{
            background-color: transparent;
            box-shadow: none;
            padding-right: 23px;
        }
        
        .chat-right-set{
            display: inline-block;
            padding-right: 21px;
        }
        .chat-right-set button{
            box-shadow: none;
            border: none;
            background-color: #2c3e50;
            color: #fff;
        }
        .chat-right-set button i{
            background-color: transparent;
            box-shadow: none;
            padding-right: 25px;
        }
        .small-row-adjust{
            padding-right: 0px
        }
        .small-right-adjust{
            padding-left: 0px;
            padding-right: 0px;
        }
        .message-input{
            position: relative;
        }
        .message-input input {
            padding: 8px 12px;
            margin-bottom: 0px;
        }
        .pos-mover button{
            position: absolute;
            right: 3px;
            bottom: 0px;
            background-color: transparent;
            box-shadow: none;
            border: none;
            top: 3px;
        }
        .pos-mover i{
            box-shadow: none;
        }
        .repeater-remove{
            padding-left: 0px;
            padding-right: 0px;
        }
        .repeater-remove button{
            box-shadow: none;
            background-color: #2c3e50;
            border: none;
        }
        .repeater-remove button i{
            background-color: transparent;
            box-shadow: none;
            color: #fff;
            padding-bottom: 12px;
            padding-top: 15px;
            padding-left: 14px;
            padding-right: 14px;
        }
        .message-chat-box .message-input button:focus {
          outline: none;
        }
        footer{
            background-color: #ddd;
        }
        #myTopnav{
            box-shadow: 0px 0px 21px 2px;
            margin-bottom: 30px;
        }

        /*Repair Template*/
        .wrapper {
            position: relative;
            top: 0;
            height: inherit; 
            overflow: scroll;
            overflow-x: hidden;
        }
        
        .pos-adjust{
            position: fixed;
            overflow: scroll;
            top: 88px;
            padding-right: 14px;
        }
        .pos-left-adjust{
            position: fixed;
            top: 87px;
        }
        .middle-chat-area{
            top: 30px;
        }
        .border-box, .new-chat, .searching-box{
            border:none;
        }
        .searching-box-type {
            border-bottom: none;
        }
        .middle-chat-area .fixed-nav{
            position: fixed;
            background-color: #fff;
            width: 60%;
            z-index: 9999;
        }
        .bhoechie-tab-content .tab-content {
            margin-bottom: 0px;
        }
        .searching-box-type ul>li>a {
            padding: 6px 2px;
        }
        .new-chat .status ul, .searching-box-type ul{
            width: 97%;
        }
        .cust-right-bar ul{
            margin: 0 auto;
            text-align: center;
        }
        .cust-right-bar ul li{
            width: 50%;
        }
        .fa-star {
            color: #E0E4DD;
        }
        .search-contain.extra-contain .inner-addon i{
            right: -13%;
            top: 22px;
        }
        .search-contain.extra-contain{
            display: inline-block;
            width: 88%;
        }
        .senter-button{
            margin-right:15px; 
        }
        .senter-button button{
            width: 100%;
        }
        .afix-content {
            
            width: 81%;
        }
        .main-box ul.mainnav>li>a {
            margin-top: 13px;
        }
        #Statics{
            background-color: #ddd;
        }
        .only-color{
            background-color: #ddd;
            margin-top: 4%;
            padding: 100%;
        }
        
        #Profile{
            margin-top: 116px;
        }
        .subnav ul li a{
            padding: 15px 15px;
        }
        .tab-adjust{
            padding-bottom: 0px;
        }
        .card-title{
            color: #fff;
        }
        .img-styler .framesa{
            background-position-y: 246px;
            background-position-x: -241px;
        }
        #Profile .tab-main-content .picprofile .framesa, #Profile .tab-main-content .picprofile .framesa .upload{
            width: 100%;
        }
        .time-age{
            background-color: #ddd;
            border-radius: 5px;
            padding: 5px;
            font-size: 12px;
        }
        .modal-backdrop {
            position: relative;
        }
        .madal-title-cust{
            font-size: 30px;
            font-weight: 600;
            text-align: center;
        }
        .text-changer{
            text-align: center;
            font-size: 21px;
            color: #e91e63;
        }
        .madal-title-cust i{
            color: red;
            font-size: 46px;
            box-shadow: none;
        }
        .modal-footer{
            text-align: center;
        }
        #Profile .tab-main-content {
            position: fixed;
            width: 60%;
        }
        .file-modal-title{
            text-align: center;
            font-size: 40px;
            
            padding:30px 0px; 
            color: #fff;
        }
        .file-modal-title i {
            font-size: 40px;
            box-shadow: none;
            background-color: transparent;
            color: #fff;
        }
        .file-modal-title{
            font-weight: bold;
        }
        .file-modal-header{
            background-color: #4db6ac;
        }
        .modal-file-body{
            text-align: center;
            padding: 55px 0px;
        }
        .modal-file-body i{
            font-size: 65px;
            border: none;
            box-shadow: none;
            color: #ccc;
            padding-bottom: 25px;
        }
        .modal-file-body p b{
            color: #4db6ac;
        }
        .modal-file-body button{
            color: #4db6ac;
            border: none;
            background-color: transparent;
        }
        #file-opener-cap{
            display: none;
            visibility: hidden;
        }
        #extra-opener-cap{
            display: none;
        }
        
        .progressive-file{
            background: linear-gradient(to left, rgba(77, 182, 172, 0.2), rgba(77, 182, 172, 0.8)) no-repeat;
            width: 1px;
            height: 5px;
            border: solid 1px lightgray;
            border-radius: 2px;
            background-size: 100% 100%;
        }
        .progressive-file-loader{
            
            -webkit-transition: width 2s ease-in-out;
            -moz-transition: width 2s ease-in-out;
            -o-transition: width 2s ease-in-out;
            transition: width 2s ease-in-out;
            width:100% !important;
        }
    
        .progressive-file{
            display: none;
        }
        .after-drag{
            width: 50%;
            text-align: center;
            margin: 0 auto;
        }
        .cust-modale-adjust{
            width: 70%;
            text-align: center; 
            margin: 0 auto;
            padding-bottom: 50px;
        }
        .after-selector{
            display: none;
            width: 50%;
            text-align: center;
            margin: 0 auto;
        }
        .progressive-2{
            background: linear-gradient(to left, rgba(77, 182, 172, 0.2), rgba(77, 182, 172, 0.8)) no-repeat;
            width: 1px;
            height: 5px;
            border: solid 1px lightgray;
            border-radius: 2px;
            background-size: 100% 100%;
            
            margin-top: 25px;
        }
        .after-selector button {
            border: solid 1px #4db6ac;
            background-color: transparent;
            border-radius: 5px;
            padding: 5px 28px;
            font-size: 12px;
            text-align: center;
            margin: 0 auto;
            margin-top: 87px;
            clear: both;
            
        }
        .after-selector button:hover{
            background-color: #4db6ac;
            color: #fff;
        } 
        .anims{
            width: 40px;
            height: 40px;
            background: #4db6ac;
            cursor: pointer;
            float: right;
            margin-top: -22px;
            clear: both;
            border-radius: 50%;
            left: 46px;
            position: relative;
        }
        .anims i{
            background-color: transparent;
            box-shadow: none;
            color: #fff;
            font-size: 17px;
            padding-top: 11px;
            padding-right: 9px;
        }
        .filetitle{
            text-align: center;

        }
        .dz-success-mark{
            display: none;
        }
        .dz-error-message{
            display: none;
        }
        .dz-success-mark{
            display: none;
        }
        .dz-error-mark{
            display: none;
        }
        .dz-default.dz-message{
            display: none;
        }
        .dz-image{
            display: none;
        }
        .dz-preview.dz-file-preview.dz-processing.dz-error.dz-complete{
            display: none;
        }
        .dz-details{
            display: none;
        }
        .dropzone .dz-preview, .dropzone-previews .dz-preview{
            border: none;
        }
        .newer-tab-ach button{
            background-color: transparent;
            border: none;
            padding: 0;
        }
        .newer-tab-ach li:hover{
            background-color: #97be2e !important;
        }

        .newer-tab-ach li:hover .details h5{
            color: #fff;
        }
        /*user tabe section*/
        .chatHistory1{
            display: none;
            padding-bottom: 50%;
        }
        .chatHistory2{
            display: none;
            padding-bottom: 50%;
        }
        .chatHistory3{
            display: none;
            padding-bottom: 50%;
        }
        .chatHistory4{
            display: none;
            padding-bottom: 50%;
        }
        .chatHistory5{
            display: none;
            padding-bottom: 50%;
        }
        .chatHistory6{
            display: none;
            padding-bottom: 50%;
        }
        .chatHistory7{
            display: none;
            padding-bottom: 50%;
        }
        .chatHistory8{
            display: none;
            padding-bottom: 50%;
        }
        .chatHistory9{
            display: none;
            padding-bottom: 50%;
        }

        /*End user Tab section*/
        .this-close span{
            font-size: 21px;
            color: #fff;
        }
        .newer-tab-ach{
            margin-right: 0px;
        }
        .combine-progress{
            margin-bottom: 21px;
        }
    </style>

</head>
<body>
<header>
    <div class="user-dropdown show chat-user" style="z-index:6;">
        <a class="btn btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle"></i> <span class="user-profile-text">Rohan Sulaiman ... <i class="fa fa-angle-down"></i></span></a>

        <div style="z-index:5; left: 10px !important; top: 71px" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <div style="padding:8px" class="btn-group btn-group-justified btn-group-sm" data-ng-click="$event.stopPropagation()" data-eo-halt="check($event)">
                <label id="online" class="btn btn-default ng-untouched ng-valid ng-not-empty ng-dirty ng-valid-parse active" style="background-color: #9ac034" data-ng-model="dash.visibility" data-ng-click="setVisibility('VISIBLE')" data-eo-btn-radio="'VISIBLE'">Online</label>
                <label id="invisible" class="btn btn-light ng-untouched ng-valid ng-not-empty ng-dirty label-bg-2" data-ng-model="dash.visibility" data-ng-click="setVisibility('INVISIBLE')" data-eo-btn-radio="'INVISIBLE'" title="Appear offline to other users">Invisible</label>
            </div>

            <li><a class="dropdown-item" href="#"><i class="fa fa-user-circle"></i><span> Rohan Sulaiman</span></a></li>
            <li><a class="dropdown-item" href="settings.html"><i class="fa fa-cogs setting-icon"></i> Setting</a></li>
            <li><a class="dropdown-item" href="service/Layout/login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
        </div>
    </div>
    <div class="w-100">
        <!--first-menu-->
        <div class="topnav" id="myTopnav">
            <div class="logo">
                <a href="dashboard.html" class="simple-text">
                    <img src="img/sidebar/logo.png.jpeg">
                </a>
            </div>
            <a class="responsive-logo">
                <img src="img/header/logo.jpeg">
            </a>
            <a href="index.html#Statics" aria-controls="Statics" role="tab" data-toggle="tab"><i class="fa fa-bar-chart" style="width:auto" aria-hidden="true"></i></a>
            <div class="appointment">
                <a class="dropdown-toggle" id="apointments" href="#" role="button" data-toggle="dropdown" expanded="false">
                    <i aria-hidden="true" class="fa fa-calendar-times-o">
                    </i>
                    <span class="noty-bubble">
                                2
                            </span>

                </a>
                <div id="dropdown1" class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(335px, 65px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <div class="notification-container">
                        <h3>Notifications
                            <i class="material-icons dp48 right">settings</i>
                        </h3>

                        <input class="checkbox" type="checkbox" id="size_1" value="small" checked="">
                        <label class="notification new" for="size_1"><em>1</em> new <a href="">guest account(s)</a> have been created.<i class="material-icons dp48 right">clear</i></label>

                        <input class="checkbox" type="checkbox" id="size_2" value="small" checked="">
                        <label class="notification new" for="size_2"><em>3</em> new <a href="">lead(s)</a> are available in the system.<i class="material-icons dp48 right">clear</i></label>

                        <input class="checkbox" type="checkbox" id="size_3" value="small" checked="">
                        <label class="notification" for="size_3"><em>5</em> new <a href="">task(s)</a>.<i class="material-icons dp48 right">clear</i></label>

                        <input class="checkbox" type="checkbox" id="size_4" value="small" checked="">
                        <label class="notification" for="size_4"><em>9</em> new <a href=""> event(s)</a> are scheduled for today.<i class="material-icons dp48 right">clear</i></label>

                        <input class="checkbox" type="checkbox" id="size_5" value="small" checked="">
                        <label class="notification" for="size_5"><em>1</em> blog post <a href="">comment(s)</a> need approval.<i class="material-icons dp48 right">clear</i></label>

                    </div>
                </div>
            </div>

            <!--<div class="notification-container">-->
            <!--<h3>Notifications-->
            <!--<i class="material-icons dp48 right">settings</i>-->
            <!--</h3>-->

            <!--<input class="checkbox" type="checkbox" id="size_1" value="small" checked="">-->
            <!--<label class="notification new" for="size_1"><em>1</em> new <a href="">guest account(s)</a> have been created.<i class="material-icons dp48 right">clear</i></label>-->

            <!--<input class="checkbox" type="checkbox" id="size_2" value="small" checked="">-->
            <!--<label class="notification new" for="size_2"><em>3</em> new <a href="">lead(s)</a> are available in the system.<i class="material-icons dp48 right">clear</i></label>-->

            <!--<input class="checkbox" type="checkbox" id="size_3" value="small" checked="">-->
            <!--<label class="notification" for="size_3"><em>5</em> new <a href="">task(s)</a>.<i class="material-icons dp48 right">clear</i></label>-->

            <!--<input class="checkbox" type="checkbox" id="size_4" value="small" checked="">-->
            <!--<label class="notification" for="size_4"><em>9</em> new <a href=""> event(s)</a> are scheduled for today.<i class="material-icons dp48 right">clear</i></label>-->

            <!--<input class="checkbox" type="checkbox" id="size_5" value="small" checked="">-->
            <!--<label class="notification" for="size_5"><em>1</em> blog post <a href="">comment(s)</a> need approval.<i class="material-icons dp48 right">clear</i></label>-->

            <!--</div>-->
            <a href="chat.html">
                <i aria-hidden="true" class="fa fa-envelope-open-o">
                </i>
                <span class="noty-bubble">
                                15
                            </span>
            </a>
            <div class="appointment">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" expanded="false">
                    <i aria-hidden="true" class="fa fa-bullhorn">
                    </i>
                    <span class="noty-bubble">
                                2
                            </span>
                </a>
                <div id="dropdown2" class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(335px, 65px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <div class="notification-container">
                        <h3>Notifications
                            <i class="material-icons dp48 right">settings</i>
                        </h3>

                        <input class="checkbox" type="checkbox" id="size_1" value="small" checked="">
                        <label class="notification new" for="size_1"><em>1</em> new <a href="">guest account(s)</a> have been created.<i class="material-icons dp48 right">clear</i></label>

                        <input class="checkbox" type="checkbox" id="size_2" value="small" checked="">
                        <label class="notification new" for="size_2"><em>3</em> new <a href="">lead(s)</a> are available in the system.<i class="material-icons dp48 right">clear</i></label>

                        <input class="checkbox" type="checkbox" id="size_3" value="small" checked="">
                        <label class="notification" for="size_3"><em>5</em> new <a href="">task(s)</a>.<i class="material-icons dp48 right">clear</i></label>

                        <input class="checkbox" type="checkbox" id="size_4" value="small" checked="">
                        <label class="notification" for="size_4"><em>9</em> new <a href=""> event(s)</a> are scheduled for today.<i class="material-icons dp48 right">clear</i></label>

                        <input class="checkbox" type="checkbox" id="size_5" value="small" checked="">
                        <label class="notification" for="size_5"><em>1</em> blog post <a href="">comment(s)</a> need approval.<i class="material-icons dp48 right">clear</i></label>

                    </div>
                </div>
            </div>

            <div class="appointment">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" expanded="false">
                    <i aria-hidden="true" class="fa fa-info-circle">
                    </i>
                    <span class="noty-bubble">
                                2
                            </span>
                </a>
                <div id="dropdown3" class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(335px, 65px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <div class="notification-container">
                        <h3>Notifications
                            <i class="material-icons dp48 right">settings</i>
                        </h3>

                        <input class="checkbox" type="checkbox" id="size_1" value="small" checked="">
                        <label class="notification new" for="size_1"><em>1</em> new <a href="">guest account(s)</a> have been created.<i class="material-icons dp48 right">clear</i></label>

                        <input class="checkbox" type="checkbox" id="size_2" value="small" checked="">
                        <label class="notification new" for="size_2"><em>3</em> new <a href="">lead(s)</a> are available in the system.<i class="material-icons dp48 right">clear</i></label>

                        <input class="checkbox" type="checkbox" id="size_3" value="small" checked="">
                        <label class="notification" for="size_3"><em>5</em> new <a href="">task(s)</a>.<i class="material-icons dp48 right">clear</i></label>

                        <input class="checkbox" type="checkbox" id="size_4" value="small" checked="">
                        <label class="notification" for="size_4"><em>9</em> new <a href=""> event(s)</a> are scheduled for today.<i class="material-icons dp48 right">clear</i></label>

                        <input class="checkbox" type="checkbox" id="size_5" value="small" checked="">
                        <label class="notification" for="size_5"><em>1</em> blog post <a href="">comment(s)</a> need approval.<i class="material-icons dp48 right">clear</i></label>

                    </div>
                </div>
            </div>

            <a href="favorite.html" aria-controls="favorite" ><i class="fa fa-star" style="width:auto; color: #777" aria-hidden="true"></i> </a>
            <a href="index.html#ServiceOffers" aria-controls="ServiceOffers" role="tab" data-toggle="tab"><i class="fa fa-handshake-o" aria-hidden="true" style="width:auto"></i>                              <span class="noty-bubble">
                                2
                            </span>
            </a>
            <a href="index.html#JobsOffers" aria-controls="JobsOffers" role="tab" data-toggle="tab"><i class="fa fa-briefcase" aria-hidden="true"></i>                               <span class="noty-bubble">
                                2
                            </span></a>
            <a href="supportticket.html"><i class="fa fa-life-ring" aria-hidden="true"></i>                              <span class="noty-bubble">
                                2
                            </span></a>
            <a href="http://clubgoodfood.com/freelance/post-job.html" class="post-job-btn">
                <i aria-hidden="true" class="fa fa-plus-square">
                </i>
                <span>Post Your Job</span>

            </a>

            <a href="javascript:void(0);" style="font-size:-webkit-xxx-large;" class="icon" onclick="responsive_header()">&#9776;</a>
        </div>
        <!--fm-end-->
    </div>


</header>
    <div class="wrapper">
        <div class="container">
            <div class="desh-content">
                <div class="row">
                    <div class="afix-content client-desh">
                        <div class="sidebar-afix affix nicescroll-rails client-desh pos-adjust" style="border-right: 2px solid #E0E4DD;">
                            <div class="col-sm-12 col-xs-12 col-md-12 no-padding">
                                <div class="main-content">
                                    <div class="tab-section">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="fixed-right" style="position: absolute;width: 100%; ">
                                                    
                                                    <!--
                                                    <div class="form-group searching-box" style="border:none;">
                                                        <input type="email" class="form-control" placeholder="Search Documents">
                                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                                    </div>
                                                    -->
                                                    <div class="search-contain">
                                                        <form action="">
                                                            <div class="inner-addon left-addon">
                                                                <span><i class="fa fa-search"></i></span>
                                                                <input type="text" placeholder="Search.." name="search">
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="searching-box-type cust-right-bar">
                                                        <ul>
                                                            <li class="active">
                                                                <a href="#" data-toggle="tab">
                                                                    <i class="fa fa-users" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="tab">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-xs-12 search-result">
                                                <h5 class="jobtitle">Job Title</h5>
                                                <div class="bhoechie-tab-menu menubr">
                                                    <div class="list-group">

                                                        <ul class=" companylist newer-tab-ach">
                                                            <li class="company">
                                                            <button id="cust-chat1">
                                                                <div class="avatar">
                                                                    <img src="img/ashi.jpg" alt="...">
                                                                    <span class="online">●</span>
                                                                </div>
                                                                <div class="details">
                                                                    <h5>Company Name</h5>
                                                                    <!-- <h6>15.07.2017</h6> -->
                                                                </div>
                                                                <span class="notification">2</span>
                                                                <div class="notifications-dropdown">
                                                                    <a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
                                                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu notifications-tabs">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
                                                                            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                </button>
                                                            </li>
                                                            <li class="company">
                                                            <button id="cust-chat2">
                                                                <div class="avatar">
                                                                    <img src="img/ashi.jpg" alt="...">
                                                                    <span class="online">●</span>
                                                                </div>
                                                                <div class="details">
                                                                    <h5>Company Name</h5>
                                                                    <!-- <h6>15.07.2017</h6> -->
                                                                </div>
                                                                <span class="notification">2</span>
                                                                <div class="notifications-dropdown">
                                                                    <a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
                                                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu notifications-tabs">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
                                                                            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </button>   
                                                            </li>
                                                            <li class="company">
                                                            <button id="cust-chat3">
                                                                <div class="avatar">
                                                                    <img src="img/ashi.jpg" alt="...">
                                                                    <span class="online">●</span>
                                                                </div>
                                                                <div class="details">
                                                                    <h5>Company Name</h5>
                                                                    <!-- <h6>15.07.2017</h6> -->
                                                                </div>
                                                                <span class="notification">2</span>
                                                                <div class="notifications-dropdown">
                                                                    <a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
                                                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu notifications-tabs">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
                                                                            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </button>   
                                                            </li>                                                           
                                                        </ul>

                                                        <!-- indra 2017 -->
                                                        <!-- <ul class=" companylist row sideBar">

                                                            <li class="company">
                                                                <div class="avatar">
                                                                    <img src="img/ashi.jpg" alt="...">
                                                                    <span class="online">●</span>
                                                                </div>
                                                                <div class="details">
                                                                    <h5>Company Name</h5>
                                                                    <h6>15.07.2017</h6>
                                                                </div>
                                                                <span class="notification">2</span>
                                                                <div class="notifications-dropdown">
                                                                    <a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
                                                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu notifications-tabs">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
                                                                            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>                                                           
                                                            
                                                            <li class="company row sideBar-body">
                                                                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                                                                    <div class="avatar-icon">
                                                                      <img src="img/ashi.jpg" alt="...">    
                                                                      <span class="online">●</span>                                     
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-9 col-xs-9 sideBar-main">
                                                                    <div class="row">
                                                                        <div class="col-sm-8 col-xs-8 sideBar-name">
                                                                            <span class="name-meta">Company Name
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                                                                            <span class="notification">2</span>
                                                                            <div class="notifications-dropdown">
                                                                                <a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
                                                                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                                                                </a>
                                                                                <div class="dropdown-menu notifications-tabs">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <a href="#">
                                                                                                <i class="fa fa-pause" aria-hidden="true"></i> Hold
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="#">
                                                                                            <i class="fa fa-times" aria-hidden="true"></i> Deny
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="#">
                                                                                                <i class="fa fa-lock" aria-hidden="true"></i> Block
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="#">
                                                                                                <i class="fa fa-trash" aria-hidden="true"></i> Remove
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>                              
                                                            </li>               


                                                        </ul> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 search-result" style="margin:0px;">
                                                <h5 class="jobtitle">Job Title</h5>
                                                <div class="bhoechie-tab-menu menubr">
                                                    <div class="list-group">
                                                        <ul class=" companylist newer-tab-ach">
                                                            <li class="company">
                                                            <button id="cust-chat4">
                                                                <div class="avatar">
                                                                    <img src="img/ashi.jpg" alt="...">
                                                                    <span class="online">●</span>
                                                                </div>
                                                                <div class="details">
                                                                    <h5>Company Name</h5>
                                                                    <!-- <h6>15.07.2017</h6> -->
                                                                </div>
                                                                <span class="notification">2</span>
                                                                <div class="notifications-dropdown">
                                                                    <a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
                                                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu notifications-tabs">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
                                                                            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </button>   
                                                            </li>
                                                            <li class="company">
                                                            <button id="cust-chat5">
                                                                <div class="avatar">
                                                                    <img src="img/ashi.jpg" alt="...">
                                                                    <span class="online">●</span>
                                                                </div>
                                                                <div class="details">
                                                                    <h5>Company Name</h5>
                                                                    <!-- <h6>15.07.2017</h6> -->
                                                                </div>
                                                                <span class="notification">2</span>
                                                                <div class="notifications-dropdown">
                                                                    <a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
                                                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu notifications-tabs">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
                                                                            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </button>   
                                                            </li>
                                                            <li class="company">
                                                            <button id="cust-chat6">
                                                                <div class="avatar">
                                                                    <img src="img/ashi.jpg" alt="...">
                                                                    <span class="online">●</span>
                                                                </div>
                                                                <div class="details">
                                                                    <h5>Company Name</h5>
                                                                    <!-- <h6>15.07.2017</h6> -->
                                                                </div>
                                                                <span class="notification">2</span>
                                                                <div class="notifications-dropdown">
                                                                    <a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
                                                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu notifications-tabs">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
                                                                            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </button>   
                                                            </li>
                                                            <li class="company">
                                                            <button id="cust-chat7">
                                                                <div class="avatar">
                                                                    <img src="img/ashi.jpg" alt="...">
                                                                    <span class="online">●</span>
                                                                </div>
                                                                <div class="details">
                                                                    <h5>Company Name</h5>
                                                                    <!-- <h6>15.07.2017</h6> -->
                                                                </div>
                                                                <span class="notification">2</span>
                                                                <div class="notifications-dropdown">
                                                                    <a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
                                                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu notifications-tabs">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
                                                                            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </button>   
                                                            </li>
                                                            <li class="company">
                                                            <button id="cust-chat8">
                                                                <div class="avatar">
                                                                    <img src="img/ashi.jpg" alt="...">
                                                                    <span class="online">●</span>
                                                                </div>
                                                                <div class="details">
                                                                    <h5>Company Name</h5>
                                                                    <!-- <h6>15.07.2017</h6> -->
                                                                </div>
                                                                <span class="notification">2</span>
                                                                <div class="notifications-dropdown">
                                                                    <a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
                                                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu notifications-tabs">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
                                                                            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </button>   
                                                            </li>
                                                            <li class="company">
                                                            <button id="cust-chat9">
                                                                <div class="avatar">
                                                                    <img src="img/ashi.jpg" alt="...">
                                                                    <span class="online">●</span>
                                                                </div>
                                                                <div class="details">
                                                                    <h5>Company Name</h5>
                                                                    <!-- <h6>15.07.2017</h6> -->
                                                                </div>
                                                                <span class="notification">2</span>
                                                                <div class="notifications-dropdown">
                                                                    <a href="#" class="btn-notification dropdown-toggle  moreinfo" data-toggle="dropdown">
                                                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu notifications-tabs">
                                                                        <ul>
                                                                            <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Block</a></li>
                                                                            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Report</a></li>
                                                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favourite</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </button>   
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="left: 10px;" class="col-md-9 col-sm-9 col-xs-9 pull-right no-padding middle-chat-area">
                            <div class="border-box">
                                <div class="main-content">
                                    <div class="tab-section">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container main-box">
                                                <div class=" bhoechie-tab">
                                                    <div class="bhoechie-tab-content">
                                                        <div>
                                                            <ul class="nav nav-tabs mainnav fixed-nav" role="tablist">
                                                                <li style="border-left:1px solid #e0e4dd;" role="presentation"><a onclick ="hiderp()" aria-controls="Profile" data-toggle="tab" href="index.html#Profile" role="tab"><i class="fa fa-id-card-o" aria-hidden="true"></i> User Profile</a></li>
                                                                <!-- <li style="border-left:1px solid #e0e4dd;" role="presentation"><a  aria-controls="Profile" data-toggle="tab" href="index.html#Profile" role="tab"><i class="fa fa-id-card-o" aria-hidden="true"></i> Client Profile</a></li> -->
                                                                <li role="presentation"><a onclick="hiderp()" aria-controls="Statics" data-toggle="tab" href="index.html#Statics" role="tab"><i class="fa fa-terminal" aria-hidden="true"></i> Job Details</a></li>
                                                                <li role="presentation"><a onclick ="showerp()" aria-controls="chatHistory" class="chatHistoryTab"  data-toggle="tab" href="index.html#chatHistory" role="tab"><i class="fa fa-comments-o" aria-hidden="true"></i> Chat History</a></li>
                                                                <li>
                                                                    <div class="search-contain extra-contain">
                                                                        <form action="">
                                                                            <div class="inner-addon left-addon">
                                                                                <span><i class="fa fa-search"></i></span>
                                                                                <input type="text" placeholder="Search.." name="search">
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="Statics" role="tabpanel">
                                                                    <div class="only-color">
                                                                        <p>Additional Area</p>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="tab-pane" id="Portfolio" role="tabpanel">
                                                                </div>
                                                                <div class="tab-pane" id="OurFollower" role="tabpanel">
                                                                </div>
                                                                <div class="tab-pane" id="Profile" role="tabpanel">
                                                                    <div class="tab-main-content">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="picprofile" style="background-image:url('img/index.jpg')">
                                                                                    <!--
                                                                                    <div class="picgraycolor">
                                                                                        <input id="imgupload" style="display:none" type="file"><i aria-hidden="true" class="fa fa-camera caproimg1" onclick="$('#imgupload').trigger('click'); return false;"></i>
                                                                                    </div>
                                                                                    -->
                                                                                    <div class="imgusersa imgusersa-square img-styler">
                                                                                        <div class="framesa" style="background-image:url('img/pexels-photo.jpeg')">
                                                                                            <!--
                                                                                            <div class="upload">
                                                                                                <input id="imgupload2" style="display:none" type="file"><i aria-hidden="true" class="fa fa-camera caproimg" onclick="$('#imgupload2').trigger('click'); return false;"></i>
                                                                                            </div>
                                                                                            -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <h2 class="card-title">Pamela Anderson</h2>
                                                                                </div>
                                                                                <div class="main-content tab-adjust">
                                                                                    <div class="tab-section">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class=" bhoechie-tab">
                                                                                                    <div class="bhoechie-tab-content active">
                                                                                                        <div>
                                                                                                            <ul class="nav nav-tabs subnav" role="tablist">
                                                                                                                <li role="presentation">
                                                                        <a href="index.html#AboutUs" aria-controls="AboutUs" role="tab" data-toggle="tab">
                                                                            <i class="fa fa-address-book" aria-hidden="true"></i> About Us
                                                                        </a>
                                                                    </li>

                                                                    <li role="presentation">
                                                                        <a href="index.html#OurTeam" aria-controls="OurTeam" role="tab" data-toggle="tab">
                                                                            <i class="fa fa-users" aria-hidden="true"></i> Our Team
                                                                        </a>
                                                                    </li>

                                                                    <li role="presentation">
                                                                        <a href="index.html#OurServices" aria-controls="OurServices" role="tab" data-toggle="tab">
                                                                            <i class="fa fa-wrench" aria-hidden="true"></i> Our Services
                                                                        </a>
                                                                    </li>

                                                                    <li role="presentation">
                                                                        <a href="index.html#Portfolio" aria-controls="Portfolio" role="tab" data-toggle="tab">
                                                                            <i class="fa fa-picture-o" aria-hidden="true"></i> Portfolio
                                                                        </a>
                                                                    </li>

                                                                    <li role="presentation">
                                                                        <a href="index.html#OurFollower" aria-controls="OurFollower" role="tab" data-toggle="tab">
                                                                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> Our Follower
                                                                        </a>
                                                                    </li>

                                                                    <li class="" role="presentation"><a aria-controls="" aria-expanded="false" data-toggle="tab" href="index.html#compsaswda" role="tab"><i aria-hidden="true" class="fa fa-star-half-o"></i>Reviews</a></li>
                                                                                                            </ul>
                                                                                                            <div class="tab-content">
                                                                                                                <div class="tab-pane active" id="myprofile" role="tabpanel">
                                                                                                                </div>
                                                                                                                <div class="tab-pane" id="payment" role="tabpanel">
                                                                                                                </div>
                                                                                                                <div class="tab-pane" id="compsaswda" role="tabpanel">
                                                                                                                </div>
                                                                                                                <div class="tab-pane" id="ownerinfo" role="tabpanel">
                                                                                                                </div>
                                                                                                                <div class="tab-pane" id="Securityques" role="tabpanel">
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
                                                                    <div class="only-color">
                                                                        <p>Additional Area</p>
                                                                    </div>
                                                                </div>

                                                                <!-- CHAT HISTORY -->
                                                                <div class="tab-pane" id="chatHistory" role="tabpanel">
                                                                    <div class="chatHistory">
                                                                        <div class="col-md-12">
                                                                            <div class="message_received clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Hello</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Hi </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Hi cutie! You have tumblr user alwayscomewhenyoucall for the June Secret Admirer.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="message_received clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details img_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    
                                                                                    <img id="chatImg" class="chatter" src="https://assets.servedby-buysellads.com/p/manage/asset/id/28536" alt="Trolltunga, Norway" width="300" height="200">
                                                                                    
                                                                                    <!-- The Modal -->
                                                                                    <div id="chatImgModal" class="modal">
                                                                                        
                                                                                        <img class="modal-content" id="img01">
                                                                                        
                                                                                        <div id="caption"></div>
                                                                                        <span class="close">&times;</span>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details link_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <a href="http://google.com" data-toggle="modal" data-target="#exampleModalCenter" onclick="siteleaving()" style="background-image: url('https://assets.servedby-buysellads.com/p/manage/asset/id/28536');" target="_blank">
                                                                                        <span class="url_caption">
                                                                                            <h6>Google Site</h6>
                                                                                            <p>http://google.com</p>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                <div class="modal-content">
                                                                                  <div class="modal-header">
                                                                                    <h5 class="madal-title-cust">
                                                                                        <i class="fa fa-exclamation-triangle"></i>
                                                                                    </h5>
                                                                                    
                                                                                  </div>
                                                                                  <div class="modal-body">
                                                                                    <p class="text-changer">You are leaving the site on your own risk</p>
                                                                                  </div>
                                                                                  <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary remover" data-dismiss="modal">cancel</button>
                                                                                    <button type="button" class="btn btn-primary opener">continue</button>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                            </div>

                                                                <!--End modal-->
                                                                        </div>
                                                                    </div>

                                                                    <!--Additional tab-->
                                                                    <div class="chatHistory chatHistory1">
                                                                        <div class="col-md-12">
                                                                            <div class="message_received clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Yes</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>No</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Hi cutie! You have facebook user always good to see you for the June Secret Admirer.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        </div>
                                                                    <div class="chatHistory chatHistory2">
                                                                        <div class="col-md-12">
                                                                            <div class="message_received clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Hello sir</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>What's about business</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Hi John! You have Twitter user  good to see you for the July</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="chatHistory chatHistory3">
                                                                        <div class="col-md-12">
                                                                            <div class="message_received clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Man</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>how you going</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Hi cutie! You have facebook user always good to see you for the June Secret Admirer.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="chatHistory chatHistory4">
                                                                        <div class="col-md-12">
                                                                            <div class="message_received clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Hello Ali</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>aliraza8492586</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Hi cutie! You have skype user and good to see you  see you for the June Secret Admirer.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="chatHistory chatHistory5">
                                                                        <div class="col-md-12">
                                                                            <div class="message_received clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Thanks</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>No</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Hi cutie! You have linkedin user How is going</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="chatHistory chatHistory6">
                                                                        <div class="col-md-12">
                                                                            <div class="message_received clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>No yup</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>No</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Hi cutie! You have facebook user always good to see you for the June Secret Admirer.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="chatHistory chatHistory7">
                                                                        <div class="col-md-12">
                                                                            <div class="message_received clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Yes</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>No</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Hi cutie! You have facebook user always good to see you for the June Secret Admirer.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="chatHistory chatHistory8">
                                                                        <div class="col-md-12">
                                                                            <div class="message_received clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://secure.assets.tumblr.com/images/anonymous_avatar_64.gif');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>how are you</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Fine</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="message_send clearfix">
                                                                                <div class="post_avatar ">
                                                                                    <div class="post_avatar_link" style="background-image: url('https://66.media.tumblr.com/avatar_a648d19f0830_64.png');"><span class="online">●</span></div>
                                                                                </div>
                                                                                <div class="message_details text_message">
                                                                                    <p class="time-age">12.05.2018 - 17:30:45</p>
                                                                                    <p>Hi cutie! You have facebook user always good to see you for the June Secret Admirer.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <!--End additional tab-->
                                                                    <!--<div class="frame">
                                                                        <ul></ul>
                                                                    </div>-->
                                                                </div>
                                                                <!-- /.CHAT HISTORY -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="message-chat-box">
                                    <div class="row">
                                        <div class="col-md-4 small-row-adjust">
                                            <div class="parameters">
                                                <div class="chat-left-cont">
                                                    <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
                                                </div>
                                                <div class="chat-right-set">    
                                                    <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="col-md-7 small-right-adjust">
                                            <div class="message-input">
                                                <input type="text" placeholder="Write your message..." />
                                                <div class="pos-mover">
                                                    <button type="button" data-toggle="modal" data-target="#filemodal">
                                                    <i class="fa fa-paperclip attachment" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                        </div>

                                            
                                            
                                        <div class="col-md-1 repeater-remove">
                                            <div class="senter-button">
                                                <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                <!-- Modal -->
                                            <div class="modal fade" id="filemodal" tabindex="-1" role="dialog" aria-labelledby="filemodal" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content cust-modale-adjust">
                                                  <div class="modal-header file-modal-header">
                                                    <button type="button" class="close this-close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h5 class="file-modal-title">
                                                        <i class="fa fa-cloud-upload" aria-hidden="true"></i> <span>up</span>load
                                                    </h5>
                                                    
                                                  </div>

                                                  <div class="modal-file-body" id="dropzone">
                                                    <form action="file-upload.html" class="dropzone" id="my-awesome-dropzone" method="post"  enctype="multipart/form-data">
                                                       <i class="fa fa-file-text-o pointer-none" aria-hidden="true"></i>
                                                       <p class="pointer-none"><b>Drag and drop</b> files here <br /> or <button id="opener-trig">browse</button> to begin the upload</p>
                                                        
                                                        <div class="after-drag">
                                                            <div class="progressive-file"></div>
                                                        </div>
                                                        <div class="">
                                                            <input id="file-opener-cap" type="file" name="file" multiple/>
                                                        </div>
                                                            
                                                    </form>

                                                    
                                                            
                                                        
                                                  </div>

                                                  <div class="after-selector">
                                                        <p>Files</p>
                                                        <div class="filetitle"></div>
                                                        

                                                        <p id="thisandthis"></p>
                                                        <ul id="fileList"></ul> 
                                                        <!--
                                                        <div class="combine-progress">
                                                            <div class="progressive-2"></div>
                                                            <div class="anims">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                        </div>  
                                                        -->
                                                        <button id="retreverse">UPDATE</button>
                                                    </div>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                            <!--End Modal-->
                            </div>
                        </div>
                        <div class="sidebar-afix affix nicescroll-rails client-desh-left pos-left-adjust" style="border-left: 2px solid #E0E4DD;">
                            <div class="col-sm-12 col-xs-12 col-md-12 no-padding">
                                <div class="main-content">
                                    <div class="tab-section">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="fixed-left" style="position: absolute;width: 100%;">
                                    <!--                <div class="form-group searching-box ">
                                                        <input type="email" class="form-control" placeholder="Search Documents">
                                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                                    </div>
                                    -->             
                                                    <div class="search-contain">
                                                        <form action="">
                                                            <div class="inner-addon left-addon">
                                                                <span><i class="fa fa-search"></i></span>
                                                                <input type="text" placeholder="Search Documents" name="search">
                                                            </div>
                                                        </form>
                                                    </div>



                                                    <div class="searching-box-type">
                                                        <ul>
                                                            <li>
                                                                <a href="#tab_default_1" data-toggle="tab">
                                                                    <i class="fa fa-link" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab_default_2" data-toggle="tab">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab_default_3" data-toggle="tab">
                                                                    <i class="fa fa-file-word-o" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 search-result">
                                                <div class="bhoechie-tab-menu menubr">
                                                    <div class="list-group">
                                                        <div class="tab-content">
                                                                <div class="tab-pane active" id="tab_default_1">
                                                                        
                                                                    <div class="padding10">
                                                                        <div class="mybox">
                                                                        <div class="media">
                                                                          <div class="pull-left">
                                                                            <a href="#">
                                                                              <img class="media-object" src="img/app.png" alt="...">
                                                                            </a>
                                                                          </div>
                                                                          <div class="media-body">
                                                                            <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
                                                                            
                                                                          </div>
                                                                        </div>
                                                                        <div class="media">
                                                                          <div class="pull-left">
                                                                            <a href="#">
                                                                              <img class="media-object" src="img/app.png" alt="...">
                                                                            </a>
                                                                          </div>
                                                                          <div class="media-body">
                                                                            <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
                                                                          </div>
                                                                        </div>
                                                                        <div class="media">
                                                                          <div class="pull-left">
                                                                            <a href="#">
                                                                              <img class="media-object" src="img/app.png" alt="...">
                                                                            </a>
                                                                          </div>
                                                                          <div class="media-body">
                                                                            <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
                                                                          </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                    
                                                                </div>
                                                                <div class="tab-pane" id="tab_default_2">
                                                                    <div class="padding10"> 
                                                                    <div class="mybox">
                                                                        <div class="media">
                                                                          <div class="pull-left">
                                                                            <a href="#">
                                                                              <img class="media-object" src="img/app.png" alt="...">
                                                                            </a>
                                                                          </div>
                                                                          <div class="media-body">
                                                                            <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
                                                                            
                                                                          </div>
                                                                        </div>
                                                                        <div class="media">
                                                                          <div class="pull-left">
                                                                            <a href="#">
                                                                              <img class="media-object" src="img/app.png" alt="...">
                                                                            </a>
                                                                          </div>
                                                                          <div class="media-body">
                                                                            <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
                                                                          </div>
                                                                        </div>
                                                                        <div class="media">
                                                                          <div class="pull-left">
                                                                            <a href="#">
                                                                              <img class="media-object" src="img/app.png" alt="...">
                                                                            </a>
                                                                          </div>
                                                                          <div class="media-body">
                                                                            <h4 class="media-heading">Image (Title) <span class="pull-right">17:30</span></h4>
                                                                          </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="tab_default_3">
                                                                    <div class="padding10">
                                                                        
                                                                        <div class="mybox">
                                                                        <div class="media">
                                                                          <div class="pull-left">
                                                                            <a href="#">
                                                                              <img class="media-object" src="img/doc.png" alt="...">
                                                                            </a>
                                                                          </div>
                                                                          <div class="media-body">
                                                                            <h4 class="media-heading">Title <span class="pull-right">17:30</span></h4>
                                                                            
                                                                          </div>
                                                                        </div>
                                                                        <div class="media">
                                                                          <div class="pull-left">
                                                                            <a href="#">
                                                                              <img class="media-object" src="img/doc.png" alt="...">
                                                                            </a>
                                                                          </div>
                                                                          <div class="media-body">
                                                                            <h4 class="media-heading">Title <span class="pull-right">17:30</span></h4>
                                                                          </div>
                                                                        </div>
                                                                        <div class="media">
                                                                          <div class="pull-left">
                                                                            <a href="#">
                                                                              <img class="media-object" src="img/doc.png" alt="...">
                                                                            </a>
                                                                          </div>
                                                                          <div class="media-body">
                                                                            <h4 class="media-heading">Title <span class="pull-right">17:30</span></h4>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div aria-labelledby="myModalLabel" class="modal fade" id="langmodal" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Select your Favorite Language</h4>
                    </div>
                    <div class="modal-body text-center">
                        <a class="flags activeflag" href="#">
                            <div class="flag-icon flag-icon-us flag-big"></div><br>
                            English<span><i class="fa fa-fw fa-check-circle"></i></span>
                        </a>
                        <a class="flags" href="#">
                            <div class="flag-icon flag-icon-in flag-big"></div><br>
                            Hindi<span><i class="fa fa-fw fa-check-circle"></i></span>
                        </a>
                        <a class="flags" href="#">
                            <div class="flag-icon flag-icon-ch flag-big"></div><br>
                            China<span><i class="fa fa-fw fa-check-circle"></i></span>
                        </a>
                        <a class="flags" href="#">
                            <div class="flag-icon flag-icon-af flag-big"></div><br>
                            Afria<span><i class="fa fa-fw fa-check-circle"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div aria-labelledby="myModalLabel" class="modal fade" id="langmodal" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Select your Favorite Language</h4>
                    </div>
                    <div class="modal-body text-center">
                        <a class="flags activeflag" href="index.html#"></a>
                        <div class="flag-icon flag-icon-us flag-big"></div><br>
                        English<span><i class="fa fa-fw fa-check-circle"></i></span> <a class="flags" href="index.html#"></a>
                        <div class="flag-icon flag-icon-in flag-big"></div><br>
                        Hindi<span><i class="fa fa-fw fa-check-circle"></i></span> <a class="flags" href="index.html#"></a>
                        <div class="flag-icon flag-icon-ch flag-big"></div><br>
                        China<span><i class="fa fa-fw fa-check-circle"></i></span> <a class="flags" href="index.html#"></a>
                        <div class="flag-icon flag-icon-af flag-big"></div><br>
                        Afria<span><i class="fa fa-fw fa-check-circle"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/dropzone.js"></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/chat/plugin.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js">
    </script>
    
    <script src="js/chat/index.js" type="text/javascript">  
    </script>
    <!-- update js indra2017 -->
    <script src="js/chat/main.js" type="text/javascript"></script>
        <script>

        $('body').on('click','.save',function(e){
        $('input', $(this).parent().parent()).each(function () {
        var x = $(this);
        /*console.log(x);*/
        var id =  x.attr('id');
        var v = x.val();
        var input = "<div class='form-value'><span id='"+id+"'>"+v+"</span></div>";
        x.parent().replaceWith(input);

        });
          var edit = "<a href='javascript:void(0)' class='edit'>Edit</a>";
          $(this).parent('.sc_btn').replaceWith(edit);

        });

        $('body').on('click','.edit',function(){
          $('span', $(this).parent()).each(function () {
           var x = $(this);
           /*console.log(x);*/
           var id =  x.attr('id');
           var v = x.text();
          /* console.log(v);*/
           var span = "<input type='text' class='form-control' name='"+id+"' id='"+id+"' value='"+v+"'>";
           var hidden_el = "<span style='display:none;' class='or_value' id='"+id+"'>"+v+"</span>"
           x.replaceWith(span+hidden_el);
         /* console.log(x);*/
        });
          var save_cancel = "<div class='sc_btn'><a href='javascript:void(0)' class='save'>Save</a> <a href='javascript:void(0)' class='cancel'> cancel</a></div>";
          $(this).replaceWith(save_cancel);

        });

        $('body').on('click','.cancel',function(e){
        $('.or_value', $(this).parent().parent()).each(function () {
           var x = $(this);
           var id =  x.attr('id');
           var v = x.text();
           var input = "<div class='form-value'><span id='"+id+"'>"+v+"</span></div>";
           x.parent('div').replaceWith(input);
        });

          var edit = "<a href='javascript:void(0)' class='edit'>Edit</a>";
          $(this).parent('.sc_btn').replaceWith(edit);
        });


        </script>

    <script src="js/chat/fileupload.js" type="text/javascript"></script>
    <script type="text/javascript">
        $("#open_btn").click(function() {
            $.FileDialog({multiple: true}).on('files.bs.filedialog', function(ev) {
                var files = ev.files;
                var text = "";
                files.forEach(function(f) {
                    text += f.name + "<br/>";
                });
                $("#output").html(text);
            }).on('cancel.bs.filedialog', function(ev) {
                $("#output").html("Cancelled!");
            });
        });
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById('chatImgModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('chatImg');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");

        var span = document.getElementsByClassName("close")[0];
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
            span.onclick = function() {
                modal.style.display = "none";
            }
        }

        // Get the <span> element that closes the modal


        // When the user clicks on <span> (x), close the modal

    </script>
    <script>
    function hiderp(){
        $(".message-chat-box").hide();
    }
    function showerp(){
        $(".message-chat-box").show();
    }
    $(".chatter").click(function(){
        
        $(".message-chat-box").hide();
        
        $(".fixed-nav").hide();
        
        $(".sidebar-afix.affix").hide();
    });
    $(".close").click(function(){
        
        $(".message-chat-box").show();
        
        $(".fixed-nav").show();
        
        $(".sidebar-afix.affix").show();
    });
        
    function siteleaving(){
        
        
        $(".message-chat-box").css({'z-index':'-1'});
        
        $(".fixed-nav").css({'z-index':'-1'});
        
        $(".sidebar-afix.affix").css({'z-index':'-1'});

    }   
    
    $(".remover").click(function(){
        
        $(".message-chat-box").delay(300).queue(function(next){
            $(this).css({'z-index':'9999'}); 
            next();     
        });

        $(".fixed-nav").delay(300).queue(function(next){
            $(this).css({'z-index':'9999'}); 
            next();
        });
        $(".sidebar-afix.affix").delay(300).queue(function(next){
            $(this).css({'z-index':'9999'}); 
            next();
        });
        
        
    });
    $(".opener").click(function () {
        
     //   var linker = $(".message_details").attr("href");
       
     //   window.location = "";
        var url= "http://google.com";
        window.open(url, '_blank');
        return false;
    });
    $("#opener-trig").click(function(){
        $("#file-opener-cap").click();

        return false;
    });

    
    Dropzone.options.myAwesomeDropzone = {
      init: function() {
        this.on("drop", function(file) { 
        



    //    alert("A file has been selected.");

            $('.modal-file-body').hide();
            $('.after-selector').show();
            $(".filetitle").hide();
            

                    
           
            
            $('.progressive-2')
                .delay(200)
                .queue(function (next) { 
                $(this).addClass( "progressive-file-loader" ); 
                next(); 
            });

            $("#retreverse").click(function(){
                $('.modal-file-body').show();
                $('.after-selector').hide();
            });

            

            
            // end delayed function  
        });



      }
    };

    $(document).ready(function(){
        $('input[type="file"]').change(function(){
        //    alert("A file has been selected.");
            $('.modal-file-body').hide();
            $('.after-selector').show();
            

            var fileName = $(this).val();
            var trimmed = fileName.substring(12);
        //  $(".filetitle").html(trimmed);  


            /*Multiple files selected*/
            var names = [];
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                names.push($(this).get(0).files[i].name);

            //    var everys =  $( "<div class='progressive-2'></div>" ).insertAfter(".filetitle");
            //    var signboard = $("<div class='anims'><i class='fa fa-check'></i></div>").insertAfter(".filetitle");
                var combineffect =  $("<div class='combine-progress'><div class='progressive-2'></div><div class='anims'><i class='fa fa-check'></i></div></div>" ).insertAfter(".filetitle");
                
                

                names.push(combineffect);               
            }
            $(".filetitle").html(names);


            /*Multiple file selected*/

            $('.progressive-2')
                .delay(200)
                .queue(function (next) { 
                $(this).addClass( "progressive-file-loader" ); 
                next(); 
            });

            $("#retreverse").click(function(){
                $('.modal-file-body').show();
                $('.after-selector').hide();
            }); 
           
           
            

        });
    });

    
    
    </script>

    <script>
    /**/
            $('.dropzone').on({
    'dragover dragenter': function(e) {
        e.preventDefault();
        e.stopPropagation();
    },
    'drop': function(e) {
        //console.log(e.originalEvent instanceof DragEvent);
        var dataTransfer =  e.originalEvent.dataTransfer;
        if( dataTransfer && dataTransfer.files.length) {
            e.preventDefault();
            e.stopPropagation();
            $.each( dataTransfer.files, function(i, file) { 
              var reader = new FileReader();
              reader.onload = $.proxy(function(file, $fileList, event) {
            //    var img = file.type.match('image.*') ? "<img src='" + event.target.result + "' /> " : "";
              

                $fileList.prepend( $("<div class='combine-progress'><div class='progressive-2'></div><div class='anims'><i class='fa fa-check'></i></div></div>").append(" "));
                $fileList.prepend( $("<li class='progbarexam'>").append( file.name ) );
                
                $('.progressive-2')
                    .delay(200)
                    .queue(function (next) { 
                    $(this).addClass( "progressive-file-loader" ); 
                    next(); 
                });

              }, this, file, $("#fileList"));
              reader.readAsDataURL(file);
            });
        }


    }


}); 
            /**/  
    </script>

    <script type="text/javascript">
    
    
    $('#cust-chat1').click(function(){
        $('.chatHistory').hide();
        $('.chatHistory1').show();
        $('.chatHistory2').hide();
        $('.chatHistory3').hide();
        $('.chatHistory4').hide();
        $('.chatHistory5').hide();
        $('.chatHistory6').hide();
        $('.chatHistory7').hide();
        $('.chatHistory8').hide();
        $('.chatHistory9').hide();

        $( "#cust-chat1" ).closest( "li" ) .css( "background-color", "#97be2e" );
        $( "#cust-chat2" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat3" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat4" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat5" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat6" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat7" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat8" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat9" ).closest( "li" ) .css( "background-color", "transparent" );

    });
    $('#cust-chat2').click(function(){
        $('.chatHistory').hide();
        $('.chatHistory1').hide();
        $('.chatHistory2').show();
        $('.chatHistory3').hide();
        $('.chatHistory4').hide();
        $('.chatHistory5').hide();
        $('.chatHistory6').hide();
        $('.chatHistory7').hide();
        $('.chatHistory8').hide();
        $('.chatHistory9').hide();
        

        $( "#cust-chat1" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat2" ).closest( "li" ) .css( "background-color", "#97be2e" );
        $( "#cust-chat3" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat4" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat5" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat6" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat7" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat8" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat9" ).closest( "li" ) .css( "background-color", "transparent" );
    });
    $('#cust-chat3').click(function(){
        $('.chatHistory').hide();
        $('.chatHistory1').hide();
        $('.chatHistory2').hide();
        $('.chatHistory3').show();
        $('.chatHistory4').hide();
        $('.chatHistory5').hide();
        $('.chatHistory6').hide();
        $('.chatHistory7').hide();
        $('.chatHistory8').hide();
        $('.chatHistory9').hide();
        
        $( "#cust-chat1" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat2" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat3" ).closest( "li" ) .css( "background-color", "#97be2e" );
        $( "#cust-chat4" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat5" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat6" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat7" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat8" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat9" ).closest( "li" ) .css( "background-color", "transparent" );
    });
    $('#cust-chat4').click(function(){
        $('.chatHistory').hide();
        $('.chatHistory1').hide();
        $('.chatHistory2').hide();
        $('.chatHistory3').hide();
        $('.chatHistory4').show();
        $('.chatHistory5').hide();
        $('.chatHistory6').hide();
        $('.chatHistory7').hide();
        $('.chatHistory8').hide();
        $('.chatHistory9').hide();
        
        $( "#cust-chat1" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat2" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat3" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat4" ).closest( "li" ) .css( "background-color", "#97be2e" );
        $( "#cust-chat5" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat6" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat7" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat8" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat9" ).closest( "li" ) .css( "background-color", "transparent" );
    });
    $('#cust-chat5').click(function(){
        $('.chatHistory').hide();
        $('.chatHistory1').hide();
        $('.chatHistory2').hide();
        $('.chatHistory3').hide();
        $('.chatHistory4').hide();
        $('.chatHistory5').show();
        $('.chatHistory6').hide();
        $('.chatHistory7').hide();
        $('.chatHistory8').hide();
        $('.chatHistory9').hide();
        
        $( "#cust-chat1" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat2" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat3" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat4" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat5" ).closest( "li" ) .css( "background-color", "#97be2e" );
        $( "#cust-chat6" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat7" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat8" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat9" ).closest( "li" ) .css( "background-color", "transparent" );
    });
    $('#cust-chat6').click(function(){
        $('.chatHistory').hide();
        $('.chatHistory1').hide();
        $('.chatHistory2').hide();
        $('.chatHistory3').hide();
        $('.chatHistory4').hide();
        $('.chatHistory5').hide();
        $('.chatHistory6').show();
        $('.chatHistory7').hide();
        $('.chatHistory8').hide();
        $('.chatHistory9').hide();
        

        $( "#cust-chat1" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat2" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat3" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat4" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat5" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat6" ).closest( "li" ) .css( "background-color", "#97be2e" );
        $( "#cust-chat7" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat8" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat9" ).closest( "li" ) .css( "background-color", "transparent" );
    });
    $('#cust-chat7').click(function(){
        $('.chatHistory').hide();
        $('.chatHistory1').hide();
        $('.chatHistory2').hide();
        $('.chatHistory3').hide();
        $('.chatHistory4').hide();
        $('.chatHistory5').hide();
        $('.chatHistory6').hide();
        $('.chatHistory7').show();
        $('.chatHistory8').hide();
        $('.chatHistory9').hide();

        $( "#cust-chat1" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat2" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat3" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat4" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat5" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat6" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat7" ).closest( "li" ) .css( "background-color", "#97be2e" );
        $( "#cust-chat8" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat9" ).closest( "li" ) .css( "background-color", "transparent" );
    });
    $('#cust-chat8').click(function(){
        $('.chatHistory').hide();
        $('.chatHistory1').hide();
        $('.chatHistory2').hide();
        $('.chatHistory3').hide();
        $('.chatHistory4').hide();
        $('.chatHistory5').hide();
        $('.chatHistory6').hide();
        $('.chatHistory7').hide();
        $('.chatHistory8').show();
        $('.chatHistory9').hide();
        
        $( "#cust-chat1" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat2" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat3" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat4" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat5" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat6" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat7" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat8" ).closest( "li" ) .css( "background-color", "#97be2e" );
        $( "#cust-chat9" ).closest( "li" ) .css( "background-color", "transparent" );
    });
    $('#cust-chat9').click(function(){
        $('.chatHistory').hide();
        $('.chatHistory1').hide();
        $('.chatHistory2').hide();
        $('.chatHistory3').hide();
        $('.chatHistory4').hide();
        $('.chatHistory5').hide();
        $('.chatHistory6').hide();
        $('.chatHistory7').hide();
        $('.chatHistory8').hide();
        $('.chatHistory9').show();

        $( "#cust-chat1" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat2" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat3" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat4" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat5" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat6" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat7" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat8" ).closest( "li" ) .css( "background-color", "transparent" );
        $( "#cust-chat9" ).closest( "li" ) .css( "background-color", "#97be2e" );
    });
    
    </script>

</body>
</html>