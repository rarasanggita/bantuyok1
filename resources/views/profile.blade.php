@extends('layout.master')


@section('title','Profile')
@section('isi')
<br><br>
<div class="container">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{ $user->name }}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{ route('getImageThr.view', ['filename' => $user->photo ]) }}" class="img-circle img-responsive"> </div>
                
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Username  </td>
                        <td>{{ $user->username }}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>{{ $user->email }}</td>
                      </tr>
                      <tr>
                        <td>Nomor Telepon</td>
                        <td>{{ $user->phone }}</td>
                      </tr>
                   
                      <tr>
                        <td>Alamat</td>
                        <td>{{ $user->address }}</td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
             <div class="panel-footer">
                        @if($user->id == Auth::user()->id)
                        <a href="edit" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        <a type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        @endif
                </div>
            
          </div>
        </div>
</div>
        
@endsection