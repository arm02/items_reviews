 <!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    .center {
    margin: auto;
    width: 50%;    
    padding: 10px;}
  </style>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Review</title>

    <!-- Bootstrap core CSS -->
    <link href="../../csss/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../csss/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('header')
  </head>

  <body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->

                    <a class="navbar-brand" href="{{ url('/') }}">
                       <span class="glyphicon glyphicon-sunglasses"></span> Review
                    </a>
                </div>

           

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li><a href="{{url('/barang/beranda')}}"><span class="glyphicon glyphicon-home">
                        </span>&nbsp;&nbsp;Beranda</li></a></b>
                        <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-search">
                        </span>&nbsp;&nbsp;Cari Sesuatu</li></a></b>
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Sign In</a></li>
                            <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;&nbsp;Sign Up</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="{{url('images/'.Auth::user()->sampul)}}" class="img-circle" width="20" height="20">&nbsp;&nbsp;{{ Auth::user()->name }}&nbsp;<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/user/{{Auth::user()->id}}/profile"><span class="glyphicon glyphicon-user"></span> Profile</li>
                                    <li><a href="/user/{{Auth::user()->id}}/edit"><span class="glyphicon glyphicon-cog"></span> Setting</li>
                                    <li><a href="/barang/add"><span class="glyphicon glyphicon-plus"></span> AddReview</span></li>
                                    <li><a href="/barang/list"><span class="glyphicon glyphicon-th-list"></span> ListReview</li>
                                    <li role="separaator" class="divider"></li>

                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span class="glyphicon glyphicon-log-out"></span> Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;"> 
                                        {{ csrf_field() }}
                                        </form>

                                    </li>
                                </ul>


                            </li>

                        @endif

                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    </body>
    </html>