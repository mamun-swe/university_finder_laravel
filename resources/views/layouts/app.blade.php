<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UVPicker</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/select2.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('admin/css/wickedpicker.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/datepicker.min.css') }}" rel="stylesheet"> -->
    
    <!-- Custom styles for this template-->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <!-- <script src="{{ asset('admin/js/wickedpicker.js') }}"></script>
    <script src="{{ asset('admin/js/datepicker.min.js') }}"></script> -->
</head>
<body>
    <div id="app">
            @if(Auth::user())
                @include('layouts.admin-sidebar') 
            @endif
                <main class="pb-4">
                    @yield('content')
                </main>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#sidebarToggleTop').click(function(){
            $(".sidebar").toggle();
        });
        $('.select2').select2();
        // $('.timepicker').wickedpicker(options);
        // var options = { 
        //     twentyFour: true,
        //     upArrow: 'wickedpicker__controls__control-up', 
        //     downArrow: 'wickedpicker__controls__control-down', 
        //     close: 'wickedpicker__close',
        //     hoverState: 'hover-state', 
        //     title: 'Game Time', 
        //     showSeconds: false, 
        //     secondsInterval: 1, 
        //     minutesInterval: 1,
        //     beforeShow: null, 
        //     show: null,
        //     clearable: false,
        // };
        // $('.datepicker').datepicker({
        //     date: new Date(),
        //     format: 'yyyy.mm.dd'
        // });
    </script>
</body>
</html>
