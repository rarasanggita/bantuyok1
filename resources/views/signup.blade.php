<!-- app/views/duck-form.blade.php -->
<!doctype html>
<html>
<head>
    <title>Sign Up</title>

    <!-- load bootstrap -->
    @section('referensi')
        @include('layout.css')
    @show
    <style>
        body    { padding-bottom:40px; padding-top:40px; }
    </style>
</head>
<body class="container signup-body">

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 signup-user">

        <div class="page-header">
            <h1>REGISTER YOURSELF <span class="glyphicon glyphicon-pencil"></span> </h1>
        </div>

        <!-- @if ($errors->has())
            <div class="alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
    @endif -->

    <!-- FORM STARTS HERE -->
        <form method="POST" action="signup" novalidate class="signup-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group @if ($errors->has('name')) has-error @endif">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name" placeholder="What's your name?" value="{{ Input::old('name') }}">
            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif    
            </div>

            <div class="form-group @if ($errors->has('username')) has-error @endif">
                <label for="username">Username</label>
                <input type="text" id="username" class="form-control" name="username" placeholder="What's your username?" value="{{ Input::old('username') }}">
            @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif    
            </div>

            <div class="form-group @if ($errors->has('email')) has-error @endif">
                <label for="email">Email</label>
                <input type="text" id="email" class="form-control" name="email" placeholder="example@something.any" value="{{ Input::old('email') }}">
            @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif   
            </div>

            <div class="form-group @if ($errors->has('phone')) has-error @endif">
                <label for="telephone">Phone Number</label>
                <input type="text" id="phone" class="form-control" name="phone" placeholder="+6281703123456" value="{{ Input::old('phone') }}">
            @if ($errors->has('phone')) <p class="help-block">{{ $errors->first('phone') }}</p> @endif   
            </div>

            <div class="form-group @if ($errors->has('password')) has-error @endif">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password">
            @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
            </div>

            <div class="form-group @if ($errors->has('password_confirm')) has-error @endif">
                <label for="password_confirm">Confirm Password</label>
                <input type="password" id="password_confirm" class="form-control" name="password_confirm">
            @if ($errors->has('password_confirm')) <p class="help-block">{{ $errors->first('password_confirm') }}</p> @endif
            </div>

            <button type="submit" class="btn btn-success submit-signup">Sign Up!</button>

        </form>

    </div>
    <div class="col-sm-2"></div>
</div>

</body>
</html>