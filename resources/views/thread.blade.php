@extends('layout.master')


@section('title','Sekolah')
@section('isi')
<div class="container">
	<div class="text-center">
		<h1 class="judulthread">INI JUDULNYAAAA</h1>
	</div>
	<br>
	<div class="row">
	  <div class="col-sm-4"></div>
	  <div class="col-sm-4"><img src="{{URL::to('img/1.jpg')}}" class="thread" style="width:100%"/></div>
	  <div class="col-sm-4"></div>
	</div>
	<br><br>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" >
			<table class="table">
				<tr>
					<td>Nama Sekolah</td>
					<td>SMA LALALALA</td>
				</tr>
				<tr>
					<td>Alamat Sekolah</td>
					<td>Jalan blablabla</td>
				</tr>
				<tr>
					<td>Nomor Telepon Sekolah</td>
					<td>040923158613</td>
				</tr>

			</table>
		</div>
		<div class="col-sm-4"></div>
	</div>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<p id="isi-thread">ini isinyaaaa, blbablalasfasdvjnsdajkvjkdsabakjsdbvka  You can also use the data-placement attribute with a value of "auto", which will let the browser decide the position of the popover. For example, if the value is "auto left", the popover will display on the left side when possible, otherwise on the right.</p>
		</div>
		<div class="col-sm-2"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<a href="#add-comment" class="scroll-anne">comment</a>
			<!-- <p>ini isinyaaaa, blbablalasfasdvjnsdajkvjkdsabakjsdbvka  You can also use the data-placement attribute with a value of "auto", which will let the browser decide the position of the popover. For example, if the value is "auto left", the popover will display on the left side when possible, otherwise on the right.</p> -->
		</div>
		<div class="col-sm-2"></div>
	</div>
<br>
<div class="judul">Pengajar<a data-toggle="modal" href="#" onclick="popupAjar()"><img src="{{URL::to('img/add.png')}}" class="ajar-size"/></a></div>
<div class="row peng-row">
  <div class="col-sm-2"></div>
  <div class="col-md-8">
    <div class="col-sm-3"><img src="{{URL::to('img/1.jpg')}}" class="ajar-round"/><p class="nama-ajar">dia</p></div>
    <div class="col-sm-3"><img src="{{URL::to('img/2.jpg')}}" class="ajar-round"/><p class="nama-ajar">dia</p></div>
    <div class="col-sm-3"><img src="{{URL::to('img/3.jpg')}}" class="ajar-round"/><p class="nama-ajar">dia</p></div>
    <div class="col-sm-3"><img src="{{URL::to('img/4.jpg')}}" class="ajar-round"/><p class="nama-ajar">dia</p></div>
    <div class="col-sm-3"><img src="{{URL::to('img/5.jpg')}}" class="ajar-round"/><p class="nama-ajar">dia</p></div>
    <div class="col-sm-3"><img src="{{URL::to('img/6.jpg')}}" class="ajar-round"/><p class="nama-ajar">dia</p></div>
    <div class="col-sm-3"><img src="{{URL::to('img/7.jpg')}}" class="ajar-round"/><p class="nama-ajar">dia</p></div>
  </div>
  <div class="col-sm-2"></div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2" id="logout">
        <div class="page-header">
            <h4 class="reviews">Leave your comment</h4>
        </div>
        <div class="comment-tabs">      
            <div class="tab-content">
                <div class="tab-pane active" id="comments-logout">                
                    <ul class="media-list">
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h5 class="media-heading text-uppercase reviews">Marco </h5>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li>
                              </ul>
                              <p class="media-comment">
                                Great snippet! Thanks for sharing.
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                              <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span> 2 comments</a>
                          </div>              
                        </div>
                        <!-- REPLY -->
                        <div class="collapse" id="replyOne">
                            <ul class="media-list">
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object-sub img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h5 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h5>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Nice job Maria.
                                          </p>
                                      </div>              
                                    </div>
                                </li>
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object-sub img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h5 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h5>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Nice job Maria.
                                          </p>
                                      </div>              
                                    </div>
                                </li>
                            </ul>  
                        </div>
                      </li>          
                        <!-- REPLY -->
                        <div class="collapse" id="replyOne">
                            <ul class="media-list">
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object-sub img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h5 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h5>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Nice job Maria.
                                          </p>
                                      </div>              
                                    </div>
                                </li>
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object-sub img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h5 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h5>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Nice job Maria.
                                          </p>
                                      </div>              
                                    </div>
                                </li>
                            </ul>  
                        </div>
                      </li>   

                      <!-- COMMENT 2 -->
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h5 class="media-heading text-uppercase reviews">Marco </h5>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd">22</li>
                                <li class="mm">09</li>
                                <li class="aaaa">2014</li>
                              </ul>
                              <p class="media-comment">
                                Great snippet! Thanks for sharing.
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                              <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyOne1"><span class="glyphicon glyphicon-comment"></span> 2 comments</a>
                          </div>              
                        </div>
                        <!-- REPLY -->
                        <div class="collapse" id="replyOne">
                            <ul class="media-list">
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object-sub img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h5 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h5>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Nice job Maria.
                                          </p>
                                      </div>              
                                    </div>
                                </li>
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object-sub img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h5 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h5>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Nice job Maria.
                                          </p>
                                      </div>              
                                    </div>
                                </li>
                            </ul>  
                        </div>
                      </li>          
                        <!-- REPLY -->
                        <div class="collapse" id="replyOne1">
                            <ul class="media-list">
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object-sub img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h5 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h5>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Nice job Maria.
                                          </p>
                                      </div>              
                                    </div>
                                </li>
                                <li class="media media-replied">
                                    <a class="pull-left" href="#">
                                      <img class="media-object-sub img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/ManikRathee/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                      <div class="well well-lg">
                                          <h5 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> The Hipster</h5>
                                          <ul class="media-date text-uppercase reviews list-inline">
                                            <li class="dd">22</li>
                                            <li class="mm">09</li>
                                            <li class="aaaa">2014</li>
                                          </ul>
                                          <p class="media-comment">
                                            Nice job Maria.
                                          </p>
                                      </div>              
                                    </div>
                                </li>
                            </ul>  
                        </div>
                      </li>                         


                <!-- COMMENT -->
                <div class="tab-pane" id="add-comment">
                    <form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Comment</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" name="addComment" id="addComment" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
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
  <button type="button" class="btn btn-success btn-lg">Ya!</button>
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