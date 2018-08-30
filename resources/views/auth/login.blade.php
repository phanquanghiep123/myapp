<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="{{ asset('layouts/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('layouts/fonts/icons/style.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/grid.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/style.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="page-login">
<div class="site">
    <div id="content" class="site-content flex-xs justify-content-center align-items-center bg-primary">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-4">
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group has-error">
                                    <label class="text-primary" for="staff-id">STAFF ID</label>
                                    <input type="text" class="form-control dark" id="staff-id" name="staff_id" value="{{ old('staff_id') }}" required autofocus>
                                    @if ($errors->has('staff_id'))
                                        <span class="help-block">{{ $errors->first('staff_id') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-30-xs  mb-40-md">
                                    <label class="text-primary" for="password">PASSWORD</label>
                                    <input type="password" class="form-control dark" id="password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mb-20-xs">LOGIN</button>
                                <a href="#" class="small text-uppercase">Forgotten Password?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- #content -->

    <footer id="colophon" class="site-footer bg-primary lighter pt-15-xs pb-15-xs" role="contentinfo">
        <div class="container">
            <p class="copyright text-center text-white text-uppercase mb-0-xs">© 2018  all rights reserved My PP</p>
        </div>
    </footer>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('layouts/js/bootstrap.min.js') }}"></script>
</body>

</html>