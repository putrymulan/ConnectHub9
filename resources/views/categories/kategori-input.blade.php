@extends('layouts.app')

@section('title')
Tambah Kategori | ConnectHub Admin
@endsection

@section('content')
<h3>Input Kategori</h3>
<div class="form-login">
  <form action="{{ url('/kategori/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="categories">Kategori</label>
    <input class="input" type="text" name="nama" id="categories" placeholder="Categories" value="{{ old('nama') }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Harga</label>
    <input class="input" type="text" name="harga" id="price" placeholder="Price" value="{{ old('harga') }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="description">Deskripsi</label>
    <textarea class="input" name="deskripsi" id="description" placeholder="Description">{{ old('deskripsi') }}</textarea>
    @error('deskripsi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="photo">Gambar</label>
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection
