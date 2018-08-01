@php
$title = "UserSection"
@endphp

@extends('layouts.master')

@section('head')
  <style>.table-striped .btn {
            margin: 10px 0 0;
            padding: 5px 18px;
            width: 26px;
        }

        .btn:not(.btn-just-icon):not(.btn-fab) .fa, .navbar .navbar-nav > li > a.btn:not(.btn-just-icon):not(.btn-fab) .fa {
            font-size: 18px;
            margin-top: -2px;
            position: relative;
            top: 2px;
            left: 0px;
            padding: 5px;
        }

        .modal-open .modal {
            overflow-x: unset;
            overflow-y: unset;
        }
        .btn, .navbar .navbar-nav > li > a.btn {
            padding: 5px;
        }
        .card-content button .fa.fa-file-pdf-o{
            background-color: transparent;
        }
    </style>
@endsection
@section('extended-header')

<tabs>



  <tab name="Services Warranty" :selected="true" icon="fa fa-percent" id="MyWarrantyAreaOurFollower"></tab>

  <tab name="Work Warranty" icon="fa fa-heart-o" id="MyWarrantyAreaAboutUs"></tab>

</tabs>

@endsection

@section('content')
<div role="tabpanel" class="tab-pane " id="MyWarrantyArea">
  <div class="border-box">
    <div class=" custom-page-content">

    </div>
    <!--  My Warranty table -->
    <div class="main-content">
      <div class="tab-section">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container" style="background: #eee;">
            <div class=" bhoechie-tab">
              <div class="bhoechie-tab-content">
                <div>
                  <div class="tab-content no-t-m">

                    <div role="tabpanel" id="MyWarrantyAreaOurFollower" style="margin-bottom: 15px;" class="tab-pane">
                      <!--second section-->
                      <div class="vd_content-section clearfix no-t-m" style=" border-top: 1px solid #eee;">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="tab-content no-bd mrgn0 pdng0">
                              <div class="tab-pane active fade in" id="category1">
                                <div class="panel widget container-fluid" style="background: #eee;">
                                  <div class="row">
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-md-12">
                                                                                                <!-- <div class="row pdng10-0 searchBar" style="background: white; width: 100%;margin: 0;">
        <form>
          <div class="col-md-2 col-md-offset-2">
            <div>
              <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
              </span>
              <input class="ui-autocomplete-input" type="text" placeholder="Contract ID" id="project-autocomplete" autocomplete="off">
            </div>
          </div>
          <div class="col-md-2">
            <div>
              <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
              </span>
              <input class="ui-autocomplete-input" type="text" placeholder="User Name" id="company-autocomplete" autocomplete="off">
            </div>
          </div>
          <div class="col-md-2">
            <div>
              <select>
                <option value="" disabled="" selected="">Status
                </option>
                <option value="1">On Hold
                </option>
                <option value="2">Denied
                </option>
                <option value="3">Blocked
                </option>
                <option value="4">Removed
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

      </div> -->
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
                  <th>No</th>
                  <th>Title</th>
                  <th>Company Name</th>
                  <th>Work Time</th>
                  <th>Delivery Time</th>
                  <th>Warranty</th>
                  <th>Status</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input class="checkthis" type="checkbox"></td>
                  <td>01</td>
                  <td>01.07.2017</td>
                  <td>Job</td>
                  <td>Repaire mobile</td>
                  <td>1000,-€</td>
                  <td>1000,-€</td>
                  <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Active</button></td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#viewinvoice" rel="tooltip" class="btn btn-preview" data-original-title="" title="">
                      <i class="fa fa-file-pdf-o"></i>
                      <div class="ripple-container"></div>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td><input class="checkthis" type="checkbox"></td>
                  <td>01</td>
                  <td>01.07.2017</td>
                  <td>Job</td>
                  <td>Repaire mobile</td>
                  <td>1000,-€</td>
                  <td>1000,-€</td>
                  <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal2">Expire</button></td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#viewinvoice" rel="tooltip" class="btn btn-preview" data-original-title="" title="">
                      <i class="fa fa-file-pdf-o"></i>
                      <div class="ripple-container"></div>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td><input class="checkthis" type="checkbox"></td>
                  <td>01</td>
                  <td>01.07.2017</td>
                  <td>Job</td>
                  <td>Repaire mobile</td>
                  <td>1000,-€</td>
                  <td>1000,-€</td>
                  <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Active</button></td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#viewinvoice" rel="tooltip" class="btn btn-preview" data-original-title="" title="">
                      <i class="fa fa-file-pdf-o"></i>
                      <div class="ripple-container"></div>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td><input class="checkthis" type="checkbox"></td>
                  <td>01</td>
                  <td>01.07.2017</td>
                  <td>Job</td>
                  <td>Repaire mobile</td>
                  <td>1000,-€</td>
                  <td>1000,-€</td>
                  <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Active</button></td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#viewinvoice" rel="tooltip" class="btn btn-preview" data-original-title="" title="">
                      <i class="fa fa-file-pdf-o"></i>
                      <div class="ripple-container"></div>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td><input class="checkthis" type="checkbox"></td>
                  <td>01</td>
                  <td>01.07.2017</td>
                  <td>Job</td>
                  <td>Repaire mobile</td>
                  <td>1000,-€</td>
                  <td>1000,-€</td>
                  <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal2">Expire</button></td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#viewinvoice" rel="tooltip" class="btn btn-preview" data-original-title="" title="">
                      <i class="fa fa-file-pdf-o"></i>
                      <div class="ripple-container"></div>
                    </button>
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
          <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan">                                                                                                                                </textarea>
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

<div role="tabpanel" class="tab-pane" id="MyWarrantyAreaAboutUs">
  <!--second section-->
  <div class="vd_content-section clearfix no-t-m" style=" border-top: 1px solid #eee;">
    <div class="row">
      <div class="col-md-12">
        <div class="tab-content no-bd mrgn0 pdng0">
          <div class="tab-pane active fade in" id="category1">
            <div class="panel widget container-fluid" style="background: #eee;">
              <div class="row">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                                                                                                <!-- <div class="row pdng10-0 searchBar" style="background: white; width: 100%;margin: 0;">
        <form>
          <div class="col-md-2 col-md-offset-2">
            <div>
              <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
              </span>
              <input class="ui-autocomplete-input" type="text" placeholder="Contract ID" id="project-autocomplete" autocomplete="off">
            </div>
          </div>
          <div class="col-md-2">
            <div>
              <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">
              </span>
              <input class="ui-autocomplete-input" type="text" placeholder="User Name" id="company-autocomplete" autocomplete="off">
            </div>
          </div>
          <div class="col-md-2">
            <div>
              <select>
                <option value="" disabled="" selected="">Status
                </option>
                <option value="1">On Hold
                </option>
                <option value="2">Denied
                </option>
                <option value="3">Blocked
                </option>
                <option value="4">Removed
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

      </div> -->
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
                  <th>No</th>
                  <th>Title</th>
                  <th>Company Name</th>
                  <th>Work Time</th>
                  <th>Delivery Time</th>
                  <th>Warranty</th>
                  <th>Status</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input class="checkthis" type="checkbox"></td>
                  <td>01</td>
                  <td>01.07.2017</td>
                  <td>Job</td>
                  <td>Repaire mobile</td>
                  <td>1000,-€</td>
                  <td>1000,-€</td>
                  <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Active</button></td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#viewinvoice" rel="tooltip" class="btn btn-preview" data-original-title="" title="">
                      <i class="fa fa-file-pdf-o"></i>
                      <div class="ripple-container"></div>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td><input class="checkthis" type="checkbox"></td>
                  <td>01</td>
                  <td>01.07.2017</td>
                  <td>Job</td>
                  <td>Repaire mobile</td>
                  <td>1000,-€</td>
                  <td>1000,-€</td>
                  <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal2">Expire</button></td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#viewinvoice" rel="tooltip" class="btn btn-preview" data-original-title="" title="">
                      <i class="fa fa-file-pdf-o"></i>
                      <div class="ripple-container"></div>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td><input class="checkthis" type="checkbox"></td>
                  <td>01</td>
                  <td>01.07.2017</td>
                  <td>Job</td>
                  <td>Repaire mobile</td>
                  <td>1000,-€</td>
                  <td>1000,-€</td>
                  <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Active</button></td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#viewinvoice" rel="tooltip" class="btn btn-preview" data-original-title="" title="">
                      <i class="fa fa-file-pdf-o"></i>
                      <div class="ripple-container"></div>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td><input class="checkthis" type="checkbox"></td>
                  <td>01</td>
                  <td>01.07.2017</td>
                  <td>Job</td>
                  <td>Repaire mobile</td>
                  <td>1000,-€</td>
                  <td>1000,-€</td>
                  <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Active</button></td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#viewinvoice" rel="tooltip" class="btn btn-preview" data-original-title="" title="">
                      <i class="fa fa-file-pdf-o"></i>
                      <div class="ripple-container"></div>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td><input class="checkthis" type="checkbox"></td>
                  <td>01</td>
                  <td>01.07.2017</td>
                  <td>Job</td>
                  <td>Repaire mobile</td>
                  <td>1000,-€</td>
                  <td>1000,-€</td>
                  <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal2">Expire</button></td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#viewinvoice" rel="tooltip" class="btn btn-preview" data-original-title="" title="">
                      <i class="fa fa-file-pdf-o"></i>
                      <div class="ripple-container"></div>
                    </button>
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
          <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan">                                                                                                                                </textarea>
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







{{-- modal done --}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                  <div style="height: 10px; width: 100%;background-color: green; margin-top:-8px; border-radius-top:5px"></div>
                        <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

                            <div class="modal-header" style="padding: 8px;">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                <h4 class="modal-title custom_align text-center2" id="Heading">Work Warranty</h4>
                            </div>
                            <div class="ourteamdiver2" style="margin-top:0px;">
                                <div class="overflowhidde2">
                                    <div class="ourteamblur22"></div>
                                </div>
                                <hr class="rulerourtema">
                                <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;"><img src="img/sidebar/logo.png.jpeg"></div>
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
                            <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">

                                    <button class="search-employer-acc" type="button" data-toggle="modal" data-target="#StatusWaitinginterviewuser2" data-dismiss="modal" style="text-align: left;
                                        width: 80px !important;padding: 4px;border-radius: 24px;color: black;background: white;border: 1px solid #cbcbcb; margin-left:40%">
                                        <span class="append-icon" style="text-align:left;margin-right:42"><img src="img/true.png" style="width:20px; text-align:center">O.K</span>
                                    </button>
                            </div>
                        </div>

                </div>
                </div>



                {{-- modal 2 --}}
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div style="height: 10px; width: 100%;background-color: red; margin-top:-8px; border-radius-top:5px"></div>
    <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px;">

        <div class="modal-header" style="padding: 8px;">

            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align text-center2" id="Heading">Work Warranty</h4>
        </div>
        <div class="ourteamdiver2" style="margin-top:0px;">
            <div class="overflowhidde2">
                <div class="ourteamblur22"></div>
            </div>
            <hr class="rulerourtema">
            <div class="imgeourteamperson2" style="border-radius:5px !important; width: 280px;"><img src="img/sidebar/logo.png.jpeg"></div>
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
        <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">

                <button class="search-employer-acc" type="button" data-toggle="modal" data-target="#StatusWaitinginterviewuser2" data-dismiss="modal" style="text-align: left;
                    width: 80px !important;padding: 4px;border-radius: 24px;color: black;background: white;border: 1px solid #cbcbcb; margin-left:40%">
                    <span class="append-icon" style="text-align:left;margin-right:42"><img src="img/true.png" style="width:20px; text-align:center">O.K</span>
                </button>
        </div>
    </div>

</div>
</div>















<div class="modal right fade infoModal" id="viewinvoice" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="z-index: 1041; display: none;">
        <button type="button" class=" close " data-dismiss="modal" aria-label="Close" style="background-color: #fff; margin-left: 53px; float:left;opacity:1;font-size:4rem;padding: 10px">
            <span aria-hidden="true">X</span>
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header vd_bg-green text-center relative modal-header-projects" style="padding: 0">

                </div>
                <div class="modal-body h100" style="padding: 0; background: #ebebeb;">
                    <button class="btn btn-info btn-bg" style="position:absolute; left:10px; top:20px;width:143px">Print</button>
                    <button class="btn btn-info btn-bg" style="position:absolute; left:10px; top:80px; width:143px">Sent As E-Mail</button>
                    <page size="A4" layout="portrait">
                        <div class="header" align="center">
                            <img src="img/sidebar/logo.png.jpeg" width="200" height="50">
                        </div>

                        <div class="page-heading">
                            <h3>Invoice to User</h3>
                        </div>

                        <div class="first-content">
                            <table width="100%">
                                <tbody><tr>
                                    <td align="left">
                                        <div class="identity">
                                            <p align="left">
                                                Shop Name <br>
                                                Username / Lastname <br>
                                                Shop Address &nbsp;     Houseno. <br><br>

                                                City - Zipcode

                                            </p>
                                        </div>
                                    </td>

                                    <td align="right">
                                        <div class="status" align="right">
                                            <table width="60%">
                                                <tbody><tr>
                                                    <th align="left">Company</th>
                                                    <td align="right">Shop Name</td>
                                                </tr>
                                                <tr>
                                                    <th align="left">Company ID</th>
                                                    <td align="right">De-10001</td>
                                                </tr>
                                                <tr>
                                                    <th align="left">Invoice No.</th>
                                                    <td align="right">Yami-10001</td>
                                                </tr>
                                                <tr>
                                                    <th align="left">Date - Time</th>
                                                    <td align="right">31.11.2017 – 00:00</td>
                                                </tr>
                                                <tr>
                                                    <th align="left">Invoice For</th>
                                                    <td style="font-weight:bold;" align="right">Assignments</td>
                                                </tr>
                                                <tr>
                                                    <th align="left">Status</th>
                                                    <td style="font-weight:bold;" align="right">Paid</td>
                                                </tr>
                                            </tbody></table>
                                        </div>
                                    </td>
                                </tr>
                            </tbody></table>
                        </div>
                        <br>
                        <div id="main-content">
                            <h3>Assignment Payment Invoice 17.07.2017</h3>

                            <table class="main" border="1" width="100%">
                                <tbody><tr>
                                    <th>#</th>
                                    <th>Job ID</th>
                                    <th>Assignment Title</th>
                                    <th>Budget</th>
                                    <th>Paid To</th>
                                </tr>
                                <tr bgcolor=" #f2f2f2">
                                    <td>01</td>
                                    <td>AS-10002</td>
                                    <td>Create Logo</td>
                                    <td>2.000,00 €</td>
                                    <td>Milestone</td>
                                </tr>
                            </tbody></table>
                        </div>

                        <div class="right-table">
                            <hr style="width: 39.5%;" align="right"><table class="sub-total" cellspacing="0" border="0" align="right" width="40%">
                                
                                <tbody><tr class="border_top">
                                    <td style="font-weight: bold;">Sub Total</td>
                                    <td style="font-weight: bold;" align="right">2.000,00 €</td>
                                </tr>

                                <tr style="background-color: #F2F2F2;">
                                    <td style="border-top: 2px solid #d9d9d9;">+ 19 %</td>
                                    <td style="border-top: 2px solid #d9d9d9;" align="right">380,00 €</td>
                                </tr>

                                <tr class="border_bottom">
                                    <td style="font-weight: bold; font-size: large;">Total</td>
                                    <td style="font-weight: bold; font-size: large;" align="right">2.000,00 €</td>
                                </tr>
                            </tbody></table>
                        </div>

                        <br>
                        <div class="bottom-table">
                            <table border="1" width="100%">
                                <tbody><tr>
                                    <th>Notifications</th>
                                </tr>
                                <tr style="background-color: #d9d9d9;;">
                                    <td>Payment can´t be Released without your Permission</td>
                                </tr>

                            </tbody></table>
                        </div>
                    </page>

                </div>

            </div>
        </div>
    </div>
@endsection