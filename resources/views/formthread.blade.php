@extends('layout.master')

@section('title','Form Thread')
@section('isi')

<div class="row form-thread-body">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 form-thread">

        <div class="page-header">
            <h1>FORM TAMBAH THREAD <span class="glyphicon glyphicon-edit"></span></h1>
        </div>

        <!-- @if ($errors->has())
            <div class="alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
    @endif -->

    <!-- FORM STARTS HERE -->
        <form method="POST" action="{{ route('threadAdd.view')}}" novalidate class="add-thread-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group @if ($errors->has('judul')) has-error @endif">
                <label for="judul">Judul Thread</label>
                <input type="text" id="judul" class="form-control" name="judul" placeholder="Apa judul thread Anda?" value="{{ Input::old('judul') }}">
            @if ($errors->has('judul')) <p class="help-block">{{ $errors->first('judul') }}</p> @endif    
            </div>

            <div class="form-group @if ($errors->has('nama')) has-error @endif">
                <label for="namasekolah">Nama Sekolah</label>
                <input type="text" id="namasekolah" class="form-control" name="nama" placeholder="Apa nama sekolah?" value="{{ Input::old('namasekolah') }}">
            @if ($errors->has('nama')) <p class="help-block">{{ $errors->first('nama') }}</p> @endif    
            </div>

            <div class="form-group @if ($errors->has('alamat')) has-error @endif">
                <label for="alamatsekolah">Alamat Sekolah</label>
                <input type="text" id="alamatsekolah" class="form-control" name="alamat" placeholder="Jl. Mawar No 1 Surabaya" value="{{ Input::old('alamatsekolah') }}">
            @if ($errors->has('alamat')) <p class="help-block">{{ $errors->first('alamat') }}</p> @endif   
            </div>

            <div class="form-group @if ($errors->has('phone')) has-error @endif">
                <label for="phone">No Telp Sekolah</label>
                <input type="text" id="phone" class="form-control" name="phone" placeholder="+6281703123456" value="{{ Input::old('phone') }}">
            @if ($errors->has('phone')) <p class="help-block">{{ $errors->first('phone') }}</p> @endif   
            </div>

            <div class="form-group @if ($errors->has('keterangan')) has-error @endif">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" rows="5" id="keterangan" name="keterangan"></textarea>
            @if ($errors->has('keterangan')) <p class="help-block">{{ $errors->first('keterangan') }}</p> @endif
            </div>

            <button type="submit" class="btn btn-success submit-thread">Tambah Sekolah!</button>

        </form>

    </div>
    <div class="col-sm-2"></div>
</div>

@endsection