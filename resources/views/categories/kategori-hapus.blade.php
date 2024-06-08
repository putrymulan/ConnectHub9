@extends('layouts.app')

@section('title')
Hapus Kategori | ConnectHub Admin
@endsection

@section('content')
<h3>Hapus Kategori</h3>
<div class="form-login">
  <h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href={{ url('/kategori/destroy/' . $kategori->id_categories ) }}>
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/kategori">
      No
    </a>
  </button>
</div>
@endsection
