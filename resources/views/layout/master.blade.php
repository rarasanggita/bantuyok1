<!doctype html>
<html>
<head>
    <title>Bantu-Yok! - @yield('title')</title>
    @section('referensi')
        @include('layout.css')
    @show

</head>
<body id="home">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!--     <div class="navbar-header">
              <a class="navbar-brand" href="#">WebSiteName</a>
            </div> -->
        <ul class="nav navbar-nav">
            <li><a href="{{ route('root.view')}}">Home</a></li>
            <li><a href="{{ route('homeThr.view')}}">Thread</a></li>
            @if (Auth::check())
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Riwayat
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#" class="scroll">Thread</a></li>
                    <li><a href="#">Donasi</a></li>
                    <li><a href="#">Mengajar</a></li>
                </ul>
            </li>
            @endif
        </ul>
        @if (Auth::check())
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('profile.view', ['username' => Auth::user()->username])}}"><span class="glyphicon glyphicon-user"></span> Hello, {{Auth::user()->username}}</a></li>
            <li><a href="{{ route('logout.view')}}"><span class="glyphicon glyphicon-log-out"></span> Logout
        </ul>
        @else
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('signup.view')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a data-toggle="modal" href="#myModal"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
        </ul>
        @endif
    </div>
</nav>

<div class="isi-master">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" action="{{ route('login.view')}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group @if ($errors->has('username')) has-error @endif">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="{{ Input::old('username') }}">
                            @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif 
                        </div>
                        <div class="form-group @if ($errors->has('password')) has-error @endif">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                            <input type="password" class="form-control" id="psw" placeholder="Enter password" name="password">
                            @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="" checked name="remember">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block login-button"><span class="glyphicon glyphicon-off"></span> Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <p>Not a member? <a href="bantuinyok/signup">Sign Up</a></p>
                </div>
            </div>

        </div>
    </div>
    @yield('isi')
</div>

</body>
</html>