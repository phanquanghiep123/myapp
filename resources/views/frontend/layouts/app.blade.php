<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('meta')

    @yield('title')

    <!-- Bootstrap -->
    <link href="{{ asset('skins/frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('skins/frontend/fonts/icons/style.css') }}" rel="stylesheet">
    <link href="{{ asset('skins/frontend/fonts/awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('skins/frontend/libs/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('skins/frontend/libs/data-table/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('skins/frontend/css/grid.css') }}" rel="stylesheet">
    <link href="{{ asset('skins/frontend/css/animation.css') }}" rel="stylesheet">
    <link href="{{ asset('skins/frontend/css/style.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('styles')

</head>
<body>
    <div class="site">
        <header class="site-header" role="banner">

            @include($_SEFF->_VIEWFOLDER.'.layouts.includes.header-bar')
            @yield('header-menu')

        </header>
        <!-- #masthead -->
        <div id="content" class="site-content container">
            @yield('content')
        </div>
        <!-- #content -->

        <footer id="colophon" class="site-footer pt-15-xs pb-15-xs" role="contentinfo">
            <div class="container">
                <p class="copyright text-center text-lighter text-uppercase mb-0-xs">© 2018 all rights reserved My PP</p>
            </div>
        </footer>
        <!-- #colophon -->
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('skins/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('skins/frontend/libs/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('skins/frontend/libs/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('skins/frontend/js/main.js') }}"></script>

    @yield('scripts')
</body>
</html>
