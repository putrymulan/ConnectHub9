<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KategoriController extends Controller
{
    public function index()
    {
        $categories = Kategori::all();
        return view('categories.kategori', compact('categories'));
    }

    public function create()
    {
        return view('categories.kategori-input');
    }

    public function store(Request $request)
    {
       $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $tujuan_upload = 'img_kategori';
        $gambar->move($tujuan_upload, $nama_gambar);

        Kategori::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar,
        ]);

        return redirect('kategori');
    }

    public function edit($id_categories)
    {
        $kategori = Kategori::find($id_categories);
        return view('categories.kategori-edit', compact('kategori'));
    }

    public function update(Request $request, $id_categories)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $kategori = Kategori::find($id_categories);

        if($request->hasFile('gambar')){

            File::delete('img_kategori/'.$kategori->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $tujuan_upload = 'img_kategori';
            $gambar->move($tujuan_upload, $nama_gambar);
            $kategori->gambar = $nama_gambar;
        }

        $kategori->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('kategori');
    }

    public function delete($id_categories)
    {
        $kategori = Kategori::find($id_categories);
        return view('categories.kategori-hapus', compact('kategori'));
    }

    public function destroy($id_categories)
    {
        $kategori = Kategori::find($id_categories);
        File::delete('img_kategori/'.$kategori->gambar);
        $kategori->delete();
        return redirect('kategori');
    }

}