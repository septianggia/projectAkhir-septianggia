<?php

namespace App\Http\Controllers;
use App\Models\Peminjam;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PeminjamController extends Controller
{
    //
    public function index()
    {
        return view('peminjam.tabel',[
            "title" => "Peminjam",
            "data" => Peminjam::all()
        ]);
    }

    public function create():View
    {
        return view('peminjam.tambah')->with(["title" => "Tambah Data Peminjam"]);
    }

    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "phone"=>"required",
            "address"=>"nullable"
        ]);
        Peminjam::create($request->all());
        return redirect()->route('pelanggan.index')->with('success','Data Peminjam Berhasil Ditambahkan');
    }

    public function edit(Peminjam $pelanggan):View
    {
        return view('peminjam.edit',compact('pelanggan'))->with(["title" => "Ubah Data Peeminjam"]);
    }
    public function update(Request $request,Peminjam $pelanggan):RedirectResponse
    {
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "phone"=>"required",
            "address"=>"nullable"
        ]);
        $pelanggan->update($request->all());
        return redirect()->route('pelanggan.index')
                        ->with('updated'.'Data Pelanggan Berhasil Diubah');
    }

    public function show(Peminjam $pelanggan):View
    {
        return view('peminjam.tampil',compact('pelanggan'))
        ->with(["title" => "Data Peminjam"]);
    }
}
