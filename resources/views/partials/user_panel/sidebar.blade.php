<div class="sidebar" data-color="purple" data-image="img/sidebar-1.jpg.html">
            <div class="sidebar-wrapper">
                <div class="user-dropdown show" style="z-index:6;">
                    <a class="btn btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle"></i> <span class="user-profile-text">{{trim(Auth::user()->first_name ." " .Auth::user()->last_name)}}<i class="fa fa-angle-down"></i></span></a>

                    <div style="z-index:5; left: 10px !important; top: 71px" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <div style="padding:8px" class="btn-group btn-group-justified btn-group-sm" data-ng-click="$event.stopPropagation()" data-eo-halt="check($event)">
                            <label id="online" class="btn btn-default ng-untouched ng-valid ng-not-empty ng-dirty ng-valid-parse active" style="background-color: #9ac034" data-ng-model="dash.visibility" data-ng-click="setVisibility('VISIBLE')" data-eo-btn-radio="'VISIBLE'">Online</label>
                            <label id="invisible" class="btn btn-light ng-untouched ng-valid ng-not-empty ng-dirty label-bg-2" data-ng-model="dash.visibility" data-ng-click="setVisibility('INVISIBLE')" data-eo-btn-radio="'INVISIBLE'" title="Appear offline to other users">Invisible</label>
                        </div>

                        <li><a class="dropdown-item" href="#"><i class="fa fa-user-circle"></i><span> {{trim(Auth::user()->first_name ." " .Auth::user()->last_name)}}</span></a></li>
                        <li><a class="dropdown-item" href="{{ route('settings') }}"><i class="fa fa-cogs setting-icon"></i> Setting</a></li>
                        <li><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </div>
                </div>
                <!--<div class="user-img">-->
                <!--<img src="img/sidebar/user.png" class="img-responsive">-->
                <!--</div>-->
                @php
                    $active = "class=active";
                @endphp

                <sidebar>
                    <sidebar-item name="Home" href="{{ route('welcome') }}" icon="fa fa-home" selected="{{Request::routeIs('welcome')}}"></sidebar-item>

                    <sidebar-item name="My Proposals" href="{{ route('myproposals') }}" icon="fa fa-bullhorn" selected="{{Request::routeIs('myproposals')}}"></sidebar-item>

                    <sidebar-item name="My Posts" href="{{ route('myposts') }}" icon="fa fa-paint-brush" selected="{{Request::routeIs('myposts')}}"></sidebar-item>

                    <sidebar-item name="My Contrats" href="{{ route('mycontracts') }}" icon="fa fa-handshake-o" selected="{{Request::routeIs('mycontracts')}}"></sidebar-item>

                    <sidebar-item name="My Job Tasks" href="{{ route('myjobtasks') }}" icon="fa fa-tasks" selected="{{Request::routeIs('myjobtasks')}}"></sidebar-item>

                    <sidebar-item name="My Purchase" href="{{ route('mypurchase') }}" icon="fa fa-shopping-cart" selected="{{Request::routeIs('mypurchase')}}"></sidebar-item>

                    <sidebar-item name="My Payments" href="{{ route('mypayments') }}" icon="fa fa-money" selected="{{Request::routeIs('mypayments')}}"></sidebar-item>

                    <sidebar-item name="My Warranty" href="{{ route('mywarranty') }}" icon="fa fa-cogs" selected="{{Request::routeIs('mywarranty')}}"></sidebar-item>

                    <sidebar-item name="My Reviews" href="{{ route('myreviews') }}" icon="fa fa-comments-o" selected="{{Request::routeIs('myreviews')}}"></sidebar-item>

                    <sidebar-item name="My Appointments" href="{{ route('myappointments') }}" icon="fa fa-calendar-check-o" selected="{{Request::routeIs('myappointments')}}"></sidebar-item>

                    <sidebar-item name="Search A Job" href="{{ route('job.search') }}" icon="fa fa-briefcase" selected="{{Request::routeIs('job.search')}}"></sidebar-item>

                </sidebar>

                <ul class="nav" style="margin-top: 74px;">


                </ul>
            </div>
        </div>