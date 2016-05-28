<!-- app/views/duck-form.blade.php -->
<!doctype html>
<html>
<head>
    <title>Log In Petugas</title>

    <!-- load bootstrap -->
    @section('referensi')
        @include('layout.css')
    @show
    <style>
        body    { padding-bottom:40px; padding-top:40px; }
    </style>
</head>
<body class="container login-petugas-body">

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 login-petugas">

        <div class="page-header">
            <h1><span class="glyphicon glyphicon-lock"></span> LOGIN</h1>
        </div>

    <!-- FORM STARTS HERE -->
        <form method="POST" action="login" novalidate class="signup-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group @if ($errors->has('username')) has-error @endif">
                <label for="username">Username</label>
                <input type="text" id="username" class="form-control" name="username" placeholder="What's your username?" value="{{ Input::old('username') }}">
            @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif    
            </div>

            <div class="form-group @if ($errors->has('password')) has-error @endif">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password">
            @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
            </div>

            <button type="submit" class="btn btn-success submit-login-petugas"><span class="glyphicon glyphicon-lock"></span> Log In!</button>

        </form>

    </div>
    <div class="col-sm-3"></div>
</div>

</body>
</html>