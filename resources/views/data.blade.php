@extends('layouts.master')

@section('title', 'Data Sampah')

@section('content')
<a href="/" class="btn btn-primary mb-2 btn-block">Tambah</a>
<div class="row">
@foreach($sampahs as $sampah)
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$sampah->nama}}</h5>
        <div class="row">
            <div class="col-sm-6">
                <p class="secondary card-text">{{$sampah->kategori}}</p>
            </div>
            <div class="col-sm-6 text-right">
                <a href="/delete/{{$sampah->id}}" class="delete">Hapus</a>
            </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
</div>
@stop