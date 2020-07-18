@extends('layouts.master')

@section('title', 'Input Sampah')

@section('content')
<form action="/prosesInput" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleFormControlSelect1">Kategori Sampah</label>
        <select name="kategori" class="form-control" id="exampleFormControlSelect1">
        <option value="" selected>Kategori</option>
        <option value="Organik">Organik</option>
        <option value="Anorganik">Anorganik</option>
        <option value="Beracun">Beracun</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nama Sampah</label>
        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Sampah">
    </div>
    <button type="submit" class="btn btn-primary mb-2 btn-block">Simpan</button>
</form>
@stop