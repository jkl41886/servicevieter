<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{$title}}</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">@if(Auth::user() AND session()->has('api-token'))

    <meta name="api-token" content="{{ session('api-token') }}">
@endif
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('frameworks/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('css/plugin.css')}}" media="all" rel="stylesheet" type="text/css">
    <link href="{{asset('css/custom.css')}}" media="all" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style2.css')}}" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style3.css')}}">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="{{asset('frameworks/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300%7CMaterial+Icons" rel="stylesheet" type="text/css">



    @yield('head')
</head>


<body>
    <div class="wrapper" id="app">


        @include('partials.user_panel.sidebar')

        <div class="main-panel">

            @include('partials.user_panel.header')



                @yield('content')


            </div>

            @include('partials.user_panel.footer')
            </div>
            <!--   Core JS Files   -->
            <script type="text/javascript" async="" src="{{asset('http://www.google-analytics.com/ga.js')}}"></script><script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('js/header.js')}}"></script>
            <!--  PerfectScrollbar Library -->
            <script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
            <!-- Material Dashboard javascript methods -->
            <script src="{{asset('js/material-dashboard5438-v=1.2.0.js')}}"></script>

            <script src="{{asset('js/app.js')}}"></script>

            <script>
                $(document).ready(function() {
                    /***************/
                    var tabName = window.location.hash;
                    if (tabName != '') {
                        $('#Statics.tab-pane.active').removeClass('active');
                        $(tabName).addClass('active');
                        $(tabName + ' .tab-pane:first-child').addClass('active');
                    }
                    $('.show-details-btn').on('click', function(e) {
                        e.preventDefault();
                        $(this).closest('tr').next().toggleClass('open')
                        $(this).find('.ace-icon').toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                    });
                    /***************/
                });
                // $('body').on('click', '.save', function(e) {
                //     $('input', $(this).parent().parent()).each(function() {
                //         var x = $(this);
                //         /*console.log(x);*/
                //         var id = x.attr('id');
                //         var v = x.val();
                //         var input = "<div class='form-value'><span id='" + id + "'>" + v + "<\/span><\/div>";
                //         x.parent().replaceWith(input);
                //     });
                //     var edit = "<a href='javascript:void(0)' class='edit'>Edit<\/a>";
                //     $(this).parent('.sc_btn').replaceWith(edit);
                // });
                // $('body').on('click', '.edit', function() {
                //     $('span', $(this).parent()).each(function() {
                //         var x = $(this);
                //         var id = x.attr('id');
                //         var v = x.text().trim();
                //         var span = '<input type="text" class="form-control" name="' + id + '" id="' + id + '" value="' + v + '">';
                //         var hidden_el = "<span style='display:none;' class='or_value' id='" + id + "'>" + v + "<\/span>";
                //         x.replaceWith(span + hidden_el);
                //         /* console.log(x);*/
                //     });
                //     var save_cancel = "<div class='sc_btn'><a href='javascript:void(0)' class='save'>Save<\/a> <a href='javascript:void(0)' class='cancel'> cancel<\/a><\/div>";
                //     $(this).replaceWith(save_cancel);
                // });
                // $('body').on('click', '.cancel', function(e) {
                //     $('.or_value', $(this).parent().parent()).each(function() {
                //         var x = $(this);
                //         var id = x.attr('id');
                //         var v = x.text();
                //         var input = "<div class='form-value'><span id='" + id + "'>" + v + "<\/span><\/div>";
                //         x.parent('div').replaceWith(input);
                //     });
                //     var edit = "<a href='javascript:void(0)' class='edit'>Edit<\/a>";
                //     $(this).parent('.sc_btn').replaceWith(edit);
                // });
            </script>

            @yield('footer')


        </body>
        </html>