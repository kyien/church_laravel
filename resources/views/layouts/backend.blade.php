<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
 
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend_css/material-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend_css/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend_css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend_css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fonts.googleapis.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('css/backend_css/toastr.min.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('css/loading.min.css') }}" rel="stylesheet" type='text/css'>
   
   
</head>
<body>
 <div class="wrapper">
         @if(Auth::guard('admins')->check())

    @include('partials.sidebar')

    @endif
     <div class="main-panel">

        @if(Auth::guard('admins')->check())

        @include('partials.navbar')

        @else

        @include('partials.unauth_nav')

        @endif
    
      
       @yield('content')

   @if(Auth::guard('admins')->check())
    @include('partials.footer')

    @endif

    </div>
    </div>


<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

   
    <script src="{{asset('js/backend_js/material.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/backend_js/toastr.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('js/jquery.loading.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript"  src="{{ asset('js/backend_js/custom.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/all_users.js') }}"></script>

<!--  Charts Plugin -->
<script src="{{asset('js/backend_js/chartist.min.js')}}" type="text/javascript"></script>
<!--  Dynamic Elements plugin -->
<script src="{{asset('js/backend_js/arrive.min.js')}}" type="text/javascript"></script>
<!--  PerfectScrollbar Library -->
<script src="{{asset('js/backend_js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('js/backend_js/bootstrap-notify.js')}}" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('js/backend_js/material-dashboard.js')}}" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
{{--  <script src="{{asset('js/backend_js/demo.js')}}"></script>  --}}

<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
</body>
</html>