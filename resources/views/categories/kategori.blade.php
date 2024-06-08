@extends('layouts.app')

@section('title')
Kategori | ConnectHub Admin
@endsection

@section('content')
<h3>Kategori</h3>
<button type="button" class="btn btn-tambah">
  <a href="/kategori/tambah">Tambah Data</a>
</button>
<table class="table-data">
  <thead>
    <tr>
        <th scope="col" style="width: 20%">Gambar</th>
        <th>Kategori</th>
        <th scope="col" style="width: 15%">Deskripsi</th>
        <th scope="col" style="width: 30%">Harga</th>
        <th scope="col" style="width: 20%">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($categories as $kategori)
    <tr>
      <td><img src="{{ ('img_kategori/' . $kategori->gambar)  }}" alt="" width="300px"></td>
      <td>{{ $kategori->nama }}</td>
      <td>Rp. {{ number_format($kategori->harga) }}</td>
      <td>{{ $kategori->deskripsi }}</td>
      <td>
        <a class='btn-edit' href="/kategori/edit/{{ $kategori->id_categories }}">Edit</a>
        |
        <a class='btn-delete' href="/kategori/hapus/{{ $kategori->id_categories }}">Hapus</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection
