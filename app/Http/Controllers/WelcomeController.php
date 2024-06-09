<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Informasi;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Kategori::all();

        return view('welcome', compact('categories'));
    }
    public function CreateInformasi(Request $request)
    {
        $test=$this->validate($request, [
            'id_categories' => 'required|integer',
            'detail-harga' => 'required',
            'detail-nama' => 'required',
            'detail-nomor' => 'required',
            'detail-seat' => 'required',
            'status' => 'required',
            'detail-kategori' => 'required',
        ]);
        Informasi::create([
            'nama' => $request->input('detail-nama'),
            'kategori' => $request->input('detail-kategori'),
            'nomorhp' => $request->input('detail-nomor'),
            'seat' => $request->input('detail-seat'),
            'category_id' => $request->input('id_categories'),
            'harga' => $request->input('detail-harga'),
            'status' => $request->input('status'),
        ]);
        return redirect('/');
    }
}
