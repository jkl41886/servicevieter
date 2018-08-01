<header>
                <div class="w-100">
                    <!--first-menu-->
                    <div class="topnav" id="myTopnav">
                        <div class="logo">
                            <a href="dashboard.html" class="simple-text">
                                <img src="{{asset('img/sidebar/logo.png.jpeg')}}">
                            </a>
                        </div>
                        <a class="responsive-logo">
                            <img src="{{asset('img/header/logo.jpeg')}}">
                        </a>
                        <a href="#Statics" aria-controls="Statics" role="tab" data-toggle="tab"><i class="fa fa-bar-chart" style="width:auto" aria-hidden="true"></i></a>
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

                                    <input class="checkbox" id="size_1" value="small" checked="" type="checkbox">
                                    <label class="notification new" for="size_1"><em>1</em> new <a href="">guest account(s)</a> have been created.<i class="material-icons dp48 right">clear</i></label>

                                    <input class="checkbox" id="size_2" value="small" checked="" type="checkbox">
                                    <label class="notification new" for="size_2"><em>3</em> new <a href="">lead(s)</a> are available in the system.<i class="material-icons dp48 right">clear</i></label>

                                    <input class="checkbox" id="size_3" value="small" checked="" type="checkbox">
                                    <label class="notification" for="size_3"><em>5</em> new <a href="">task(s)</a>.<i class="material-icons dp48 right">clear</i></label>

                                    <input class="checkbox" id="size_4" value="small" checked="" type="checkbox">
                                    <label class="notification" for="size_4"><em>9</em> new <a href=""> event(s)</a> are scheduled for today.<i class="material-icons dp48 right">clear</i></label>

                                    <input class="checkbox" id="size_5" value="small" checked="" type="checkbox">
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
                        <a href="{{ route('chat') }}">
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

                                    <input class="checkbox" id="size_1" value="small" checked="" type="checkbox">
                                    <label class="notification new" for="size_1"><em>1</em> new <a href="">guest account(s)</a> have been created.<i class="material-icons dp48 right">clear</i></label>

                                    <input class="checkbox" id="size_2" value="small" checked="" type="checkbox">
                                    <label class="notification new" for="size_2"><em>3</em> new <a href="">lead(s)</a> are available in the system.<i class="material-icons dp48 right">clear</i></label>

                                    <input class="checkbox" id="size_3" value="small" checked="" type="checkbox">
                                    <label class="notification" for="size_3"><em>5</em> new <a href="">task(s)</a>.<i class="material-icons dp48 right">clear</i></label>

                                    <input class="checkbox" id="size_4" value="small" checked="" type="checkbox">
                                    <label class="notification" for="size_4"><em>9</em> new <a href=""> event(s)</a> are scheduled for today.<i class="material-icons dp48 right">clear</i></label>

                                    <input class="checkbox" id="size_5" value="small" checked="" type="checkbox">
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

                                    <input class="checkbox" id="size_1" value="small" checked="" type="checkbox">
                                    <label class="notification new" for="size_1"><em>1</em> new <a href="">guest account(s)</a> have been created.<i class="material-icons dp48 right">clear</i></label>

                                    <input class="checkbox" id="size_2" value="small" checked="" type="checkbox">
                                    <label class="notification new" for="size_2"><em>3</em> new <a href="">lead(s)</a> are available in the system.<i class="material-icons dp48 right">clear</i></label>

                                    <input class="checkbox" id="size_3" value="small" checked="" type="checkbox">
                                    <label class="notification" for="size_3"><em>5</em> new <a href="">task(s)</a>.<i class="material-icons dp48 right">clear</i></label>

                                    <input class="checkbox" id="size_4" value="small" checked="" type="checkbox">
                                    <label class="notification" for="size_4"><em>9</em> new <a href=""> event(s)</a> are scheduled for today.<i class="material-icons dp48 right">clear</i></label>

                                    <input class="checkbox" id="size_5" value="small" checked="" type="checkbox">
                                    <label class="notification" for="size_5"><em>1</em> blog post <a href="">comment(s)</a> need approval.<i class="material-icons dp48 right">clear</i></label>

                                </div>
                            </div>
                        </div>

                        <a href="favorite.html" aria-controls="favorite"><i class="fa fa-star" style="width:auto; color: #777" aria-hidden="true"></i> </a>
                        <a href="#ServiceOffers" aria-controls="ServiceOffers" role="tab" data-toggle="tab"><i class="fa fa-handshake-o" aria-hidden="true" style="width:auto"></i>                              <span class="noty-bubble">
                                2
                            </span>
                        </a>
                        <a href="#JobsOffers" aria-controls="JobsOffers" role="tab" data-toggle="tab"><i class="fa fa-briefcase" aria-hidden="true"></i>                               <span class="noty-bubble">
                                2
                            </span></a>
                        <a href="supportticket.html"><i class="fa fa-life-ring" aria-hidden="true"></i>                              <span class="noty-bubble">
                                2
                            </span></a>
                        <a href="http://servicebieter.de/PostJob" class="post-job-btn">
                            <i aria-hidden="true" class="fa fa-plus-square">
                            </i>
                            <span>Post Your Job</span>

                        </a>

                        <a href="javascript:void(0);" style="font-size:-webkit-xxx-large;" class="icon" onclick="responsive_header()">☰</a>
                    </div>
                    <!--fm-end-->
                </div>

                @yield('extended-header')
            </header>