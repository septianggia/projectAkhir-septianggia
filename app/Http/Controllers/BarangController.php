<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BarangController extends Controller
{
    //
    public function index()
        {
            $barang=Barang::all();
            return view('barang.index',[
                "title"=>"Barang",
                "data"=>$barang
            ]);
        }
    public function create():View
    {
        return view('barang.create')->with([
            "title" => "Tambah Data Barang"
        ]);
    }
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            "name"=>"required",
            "description"=>"nullable",
            "tgl_peminjaman"=>"required",
            "price"=>"required"
        ]);
        Barang::create($request->all());

    return redirect()->route('barang.index')->with('success', 'Data Barang Berhasil Ditambahkan');
    }
    public function edit(Barang $barang):View
    {
        return view('barang.edit',compact('barang'))->with([
            "title" => "Ubah Data Barang",
            "data" => Barang::all()
        ]);
    }
    public function update(Barang $barang, Request $request):RedirectResponse
    {
        $request->validate([
            "name"=>"required",
            "description"=>"nullable",
            "tgl_peminjaman"=>"required",
            "price"=>"required"
        ]);
        $barang->update($request->all());
        return redirect()->route('barang.index')->with('updated','Data Barang Berhasil Diubah');
    }
    public function show():View
    {
        $barang=Barang::all();
        return view('barang.show')->with([
            "title" => "Tampil Data Produk",
            "data" =>$barang
        ]);
    }
    public function destroy($id):RedirectResponse
    {
        Barang::where('id',$id)->delete();
        return redirect()->route('barang.index')->with('delete','Data Barang Berhasil Dihapus');
    }
}
