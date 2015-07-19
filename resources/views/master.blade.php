<!DOCTYPE html>
<html>
<head>
    <title>Snipp</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/vendor.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img alt="Brand" src="/favicon.ico"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-7">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('home') }}">Home</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if(Auth::user())
                            <li><a href="{{ url('auth/login') }}"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
                        @else
                            <li><a href="{{ url('auth/login') }}">Sign in</a></li>
                            <li><a href="{{ url('auth/register') }}">Register</a></li>

                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="title">Snipp</div>
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>

