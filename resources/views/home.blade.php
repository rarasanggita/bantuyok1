@extends('layout.master')

@section('title','Home')
@section('isi')
<br><br>
<div class="col-sm-12">
<div class="col-sm-2"></div>
<div class="container col-sm-8">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/sekolah/1.jpg" alt="Chania">
      </div>

      <div class="item">
        <img src="img/sekolah/2.jpg" alt="Chania">
      </div>
    
      <div class="item">
        <img src="img/sekolah/3.jpg" alt="Flower">
      </div>

      <div class="item">
        <img src="img/sekolah/4.jpg" alt="Flower">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

<div id="threads" class="col-sm-12"><br><br></div>

<div id="thread">
    <div class="judul">Thread<a href="{{ route('threadAdd.view')}}"><img src="{{URL::to('img/add.png')}}" class="ajar-size"/></a></div>
    <div class="row peng-row">
      <div class="col-sm-2"></div>
      <div class="col-md-8">


@foreach($threadz as $thr)
        <div class="col-sm-3">
            <div class="hovereffect">
                <img src="{{ route('getImageThr.view', ['filename' => $thr->photo ]) }}"  class="img-responsive" alt="">
                <div class="overlay">
                   <h2>{{ $thr->school_name }}</h2>
                   <a class="info" href="{{ route('thread.view', ['id' => $thr->id]) }}">Donasi <br> Rp 1.000.000<br>Lokasi <br>{{ $thr->address }}</a>
                </div>
                <br>
            </div>
        </div>
@endforeach

      </div>
      <div class="col-sm-2"></div>
    </div>
	
</div>

@endsection