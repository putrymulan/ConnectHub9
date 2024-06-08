@extends('layouts.app')

@section('title')
Edit Kategori | ConnectHub Admin
@endsection

@section('content')
<h3>Edit Kategori</h3>
<div class="form-login">
  <form action="{{ url('/kategori/update/' . $kategori->id_categories) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="categories">Kategori</label>
    <input class="input" type="text" name="nama" id="categories" placeholder="Categories"
      value="{{ old('nama', $kategori->nama) }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Harga</label>
    <input class="input" type="text" name="harga" id="price" placeholder="Price"
      value="{{ old('harga', $kategori->harga) }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="description">Deskripsi</label>
    <textarea class="input" name="deskripsi" id="description"
      placeholder="Description">{{ old('deskripsi', $kategori->deskripsi) }}</textarea>
    @error('deskripsi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <label for="photo">Gambar</label>
    <img src="{{ ('img_kategori/' . $kategori->gambar) }}" alt="" width="200px">
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
