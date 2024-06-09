@extends('layouts.app')

@section('title')
    Informasi | ConnectHub Admin
@endsection
@section('content')
    <h3>Informasi</h3>
    <button type="button" class="btn btn-tambah">
        <a href="/informasi/cetak">Cetak</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Seat</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($information as $informasi)
                <tr>
                    <td>{{ $informasi->updated_at }}</td>
                    <td>{{ $informasi->nama }}</td>
                    <td>{{ $informasi->kategori }}</td>
                    <td>{{ $informasi->seat }}</td>
                    <td>Rp. {{ number_format($informasi->harga) }}</td>
                    <td>{{ $informasi->status }}</td>
                    <td style='display: none;'>{{ $informasi->nomorhp }}</td>
                    <td>
                    <a class='btn-edit' href=edit-informasi.php?id=$data[id]>
                               Edit
                        </a> | 
                        <a class='btn-delete' href=hapus-informasi.php?id=$data[id]>
                            Hapus
                        </a>
                    </td>
                @empty
                <tr>
                    <td colspan="6" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
