<!DOCTYPE html>
<html>
<head>
    <title>Petugas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('referensi')
        @include('layout.css')
    @show
</head>
<body id="admin-body">
<nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="petugas"><img src="{{URL::to('img/logo.png')}}" class="img-responsive" width="90" height="39"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="#thread" onclick="navAdmin(1)">Thread</a></li>
                <li><a href="#donasi" onclick="navAdmin(2)">Donasi</a></li>
                <li><a href="logout">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav hidden-xs">
            <a href="petugas"><img src="{{URL::to('img/logo.png')}}" class="img-responsive" width="300" height="128"></a>
            <ul class="nav nav-pills nav-stacked">
                <li><h2><a href="#thread" onclick="navAdmin(1)" id="adm-thread"><span class="glyphicon glyphicon-book"></span> Thread</a></h2></li>
                <li><h2><a href="#donasi" onClick="navAdmin(2)" id="adm-donasi"><span class="glyphicon glyphicon-piggy-bank"></span> Donasi</a></h2></li>
                <li><h2><a href="logout" id="adm-logout"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></h2></li>
            </ul><br>
        </div>
        <br>

        <div class="col-sm-9">
            <div id="home">
                
            </div>
            <div id="thread" style="display:none;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <thead>
                        <tr>
                            <th>ID Thread</th>
                            <th>Nama Sekolah</th>
                            <th>Foto Sekolah</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>SDN LALALALAALLA</td>
                            <td><img src="{{URL::to('img/1.jpg')}}" class="img-thumbnail img-responsive" width="204" height="136"></td>
                            <td><a href="petugas/see"><span class="glyphicon glyphicon-eye-open"></span></a> <a href="petugas/acc"><span class="glyphicon glyphicon-ok"></span></a> <a href="petugas/delete"><span class="glyphicon glyphicon-remove"></span></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="donasi" style="display:none;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>Country</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Anna</td>
                            <td>Pitt</td>
                            <td>35</td>
                            <td>New York</td>
                            <td>USA</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
