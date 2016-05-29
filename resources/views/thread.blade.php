@extends('layout.master')


@section('title','Sekolah')
@section('isi')
<br><br>
<div class="container">
	<div class="text-center">
		<h1 class="judulthread">{{ $thread->title }}</h1>
	</div>
	<br>
	<div class="row">
	  <div class="col-sm-4"></div>
	  <div class="col-sm-4"><img src="{{ route('getImageThr.view', ['filename' => $thread->photo ]) }}" class="thread" style="width:100%"/></div>
	  <div class="col-sm-4"></div>
	</div>
	<br><br>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" >
			<table class="table">
				<tr>
					<td>Nama Sekolah</td>
					<td>{{ $thread->school_name }}</td>
				</tr>
				<tr>
					<td>Alamat Sekolah</td>
					<td>{{ $thread->address }}</td>
				</tr>
				<tr>
					<td>Nomor Telepon Sekolah</td>
					<td>{{ $thread->phone }}</td>
				</tr>

			</table>
		</div>
		<div class="col-sm-4"></div>
	</div>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<p id="isi-thread">{{ $thread->description }}</p>
		</div>
		<div class="col-sm-2"></div>
	</div>
  <br>
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <a href=""></a>
      <p>Diterbitkan oleh : {{ $thread->user->name }}</p>
    </div>
    <div class="col-sm-2"></div>
  </div>
	<br>
<br>
<div class="judul">Pengajar<a data-toggle="modal" href="#" onclick="popupAjar()"><img src="{{URL::to('img/add.png')}}" class="ajar-size"/></a></div>
<div class="row peng-row">
  <div class="col-sm-2"></div>
  <div class="col-md-8">

    @foreach($thread->lectures as $lecture)
    <div class="col-sm-3"><a href="{{ route('profile.view', ['username' => $lecture->username])}}"><img src="{{ route('getImageThr.view', ['filename' => $lecture->photo ]) }}" class="ajar-round"/><p class="nama-ajar">{{ $lecture->name }}</p></a></div>
    @endforeach
    
    @if($thread->lectures->count() == 0)
    <div class="col-sm-3"><p>Tidak ada pengajar</p></div>
    @endif


  </div>
  <div class="col-sm-2"></div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2" id="logout">
        <div class="page-header">
            <h4 class="reviews">Leave your comment</h4>
            <a href="#add-comment" class="scroll-anne reviews"><h4 style="text-align: right">Add Comment</h4></a>
        </div>
        <div class="comment-tabs">      
            <div class="tab-content">
                <div class="tab-pane active" id="comments-logout">                
                    <ul class="media-list">
                      <!-- COMMENT 2 -->
@foreach($comm as $com)
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="{{ route('getImageThr.view', ['filename' => $com->user->photo ]) }}" alt="profile" width="150px">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h5 class="media-heading text-uppercase reviews">{{ $com->user->name }}</h5>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">{{ date('F d, Y', strtotime($com->created_at)) }}</li><!-- 
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li> -->
                              </ul>
                              <p class="media-comment">
                                {{ $com->comment }}
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" data-toggle="collapse" href="#{{ $com->id }}" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                              <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#{{ $com->id }}"><span class="glyphicon glyphicon-comment"></span> {{ $com->subComments->count() }} comments</a>
                          </div>              
                        </div>   
                        <!-- REPLY -->
                        <div class="collapse" id="{{ $com->id }}">
                            <ul class="media-list">
                              @foreach($com->subComments as $subComment)
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object-sub img-circle" src="{{ route('getImageThr.view', ['filename' => $subComment->user->photo ]) }}" alt="profile" width="130px">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h5 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span>{{ $subComment->user->name }}</h5>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">{{ date('F d, Y', strtotime($subComment->created_at)) }}</li><!-- 
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li> -->
                                          </ul>
                                          <p class="media-comment">
                                            {{ $subComment->sub_comment }}
                                          </p>
                                      </div>              
                                    </div>
                                </li>
                              @endforeach
                                <li class="media media-replied">
                                    <form action="{{ route('addSubComment.view') }}" class="form-horizontal" role="form" method="post">
                                      {{ csrf_field() }}
                                      <div class="form-group">
                                        <label class="control-label col-sm-2" for="email"><span class="glyphicon glyphicon-plus-sign"></span> Comment</label>
                                        <div class="col-sm-8">
                                          <input type="hidden" name="idThread" value="{{ $thread->id }}">
                                          <input type="hidden" name="comId" value="{{$com->id}}">
                                          <input type="text" name="subCom" class="form-control" id="email" placeholder="Masukkan Sub-Comment">
                                        </div>
                                        <div class="col-sm-2">
                                          <button type="submit" class="btn btn-success">Add</button>
                                        </div>
                                      </div>
                                    </form>
                                </li>
                            </ul>  
                        </div>
                      </li>                         
@endforeach

                <!-- COMMENT -->
                <div class="tab-pane" id="add-comment">
                    <form action="{{ route('addComment.view') }}" method="post" class="form-horizontal" id="commentForm" role="form"> 
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Comment</label>
                            <div class="col-sm-10">
                              <input type="hidden" name="idThread" value="{{ $thread->id }}">
                              <textarea class="form-control" name="addComment" id="addComment" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Submit comment</button>
                            </div>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
	</div>
</div>

<div class="isi-master">
    <div class="modal fade" id="tambah-pengajar" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <br>
                    <h4>Anda yakin ingin menjadi pengajar di sekolah ini <span class="glyphicon glyphicon-question-sign"></span></h4>
<br>
  <a href="{{ route('addLectures.view', ['thread_id' => $thread->id])  }}"><button type="button" class="btn btn-success btn-lg">Ya!</a></button>
  <button type="button" class="btn btn-danger btn-lg">Tidak</button>

                    </div>
              </div>
        </div>
    </div>
</div>
	<div id="testt">

	</div>
	

</div>
@endsection