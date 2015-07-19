
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link rel="stylesheet" href="{{URL::to('Backend/bootstraps/css/bootstrap.min.css')}}" media="all">

<!-- jquery-ui Stylesheets -->
<link rel="stylesheet" href="{{URL::to('Backend/assets/jui/css/jquery-ui.css')}}" media="screen">
<link rel="stylesheet" href="{{URL::to('Backend/assets/jui/jquery-ui.custom.css')}}" media="screen">
<link rel="stylesheet" href="{{URL::to('Backend/assets/jui/timepicker/jquery-ui-timepicker.css')}}" media="screen">
  <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::to('Backend/assets/images/favicon-16x16.png')}}">
<!-- Uniform Stylesheet -->
<link rel="stylesheet" href="{{URL::to('Backend/plugins/uniform/css/uniform.default.css')}}" media="screen">

<!-- Plugin Stylsheets first to ease overrides -->

<!-- iButton -->
<link rel="stylesheet" href="{{URL::to('Backend/plugins/ibutton/jquery.ibutton.css')}}" media="screen">

<!-- Circular Stat -->
<link rel="stylesheet" href="{{URL::to('Backend/custom-plugins/circular-stat/circular-stat.css')}}">

<!-- Fullcalendar -->
<link rel="stylesheet" href="{{URL::to('Backend/plugins/fullcalendar/fullcalendar.css')}}" media="screen">
<link rel="stylesheet" href="{{URL::to('Backend/plugins/fullcalendar/fullcalendar.print.css')}}" media="print">

<!-- End Plugin Stylesheets -->

<!-- Main Layout Stylesheet -->
<link rel="stylesheet" href="{{URL::to('Backend/assets/css/fonts/icomoon/style.css')}}" media="screen">
<link rel="stylesheet" href="{{URL::to('Backend/assets/css/main-style.css')}}" media="screen">

               <!-- Pnotify --> 
        {{HTML::style('Backend/plugins/pnotify/jquery.pnotify.css')}}
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

   @yield('css')
<title>@if(isset($title))Kişisel Blog | {{$title}} @else Kişisel Blog | @endif </title>

</head>

<body data-show-sidebar-toggle-button="true" data-fixed-sidebar="false">


    <div id="wrapper">
        @include('backend.admin.layout.header')
        
        <div id="content-wrap">
        	<div id="content">
            	<div id="content-outer">
                	<div id="content-inner">
                    	@include('backend.admin.layout.sidebar')

                        <div id="sidebar-separator"></div>
                        
                        <section id="main" class="clearfix">
                        	@include('backend.admin.layout.breadcrumb')
                            
                                <div id="main-content">
                                    @yield('content')
                                    
                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        
        @include('backend.admin.layout.footer')
    </div>

    <script src="{{URL::to('Backend/assets/js/libs/jquery-1.8.3.min.js')}}"></script>
    <script src="{{URL::to('Backend/bootstraps/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('Backend/assets/js/libs/jquery.placeholder.min.js')}}"></script>
    <script src="{{URL::to('Backend/assets/js/libs/jquery.mousewheel.min.js')}}"></script>
    
    <!-- Template Script -->
    <script src="{{URL::to('Backend/assets/js/template.js')}}"></script>
    <script src="{{URL::to('Backend/assets/js/setup.js')}}"></script>

    <!-- Customizer, remove if not needed -->
    <script src="{{URL::to('Backend/assets/js/customizer.js')}}"></script>

    <!-- Uniform Script -->
    <script src="{{URL::to('Backend/plugins/uniform/jquery.uniform.min.js')}}"></script>
    
    <!-- jquery-ui Scripts -->
    <script src="{{URL::to('Backend/assets/jui/js/jquery-ui-1.9.2.min.js')}}"></script>
    <script src="{{URL::to('Backend/assets/jui/jquery-ui.custom.min.js')}}"></script>
    <script src="{{URL::to('Backend/assets/jui/timepicker/jquery-ui-timepicker.min.js')}}"></script>
    <script src="{{URL::to('Backend/assets/jui/jquery.ui.touch-punch.min.js')}}"></script>
    
    <!-- Plugin Scripts -->
    
    <!-- Flot -->
    <!--[if lt IE 9]>
    <script src="{{URL::to('Backend/assets/js/libs/excanvas.min.js')}}"></script>
    <![endif]-->
    <script src="{{URL::to('Backend/plugins/flot/jquery.flot.min.js')}}"></script>
    <script src="{{URL::to('Backend/plugins/flot/plugins/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{URL::to('Backend/plugins/flot/plugins/jquery.flot.pie.min.js')}}"></script>
    <script src="{{URL::to('Backend/plugins/flot/plugins/jquery.flot.resize.min.js')}}"></script>

    <!-- Circular Stat -->
    <script src="{{URL::to('Backend/custom-plugins/circular-stat/circular-stat.min.js')}}"></script>

    <!-- SparkLine -->
    <script src="{{URL::to('Backend/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    
   

    <!-- Full Calendar -->
    <script src="{{URL::to('Backend/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
    
    <!-- DataTables -->
    <script src="{{URL::to('Backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::to('Backend/plugins/datatables/TableTools/js/TableTools.min.js')}}"></script>
    <script src="{{URL::to('Backend/plugins/datatables/dataTables.bootstrap.js')}}"></script>
    
    <!--Validation -->
    <script src="{{URL::to('Backend/plugins/validate/jquery.validate.min.js')}}"></script>
    <script src="{{URL::to('Backend/plugins/validate/localization/messages_tr.js')}}"></script>
    
    <!-- Demo Scripts -->
    <script src="{{URL::to('Backend/assets/js/demo/dashboard.js')}}"></script>
    
    <!-- Pnotify -->
    {{HTML::script('Backend/plugins/pnotify/jquery.pnotify.min.js')}}
    
    <!-- Global Js-->
          {{HTML::script('Backend/global/global.js')}}    
  @if(Session::has('mesaj'))  
    <script>
    $.pnotify.defaults.history = false;
    
				$.pnotify({
				    title: '{{Session::get("title")}}',
				    text: '{{Session::get("text")}}',
				    type: '{{Session::get("type")}}'
				});
    </script>
    @endif
    
                @yield('js')

</body>

</html>
