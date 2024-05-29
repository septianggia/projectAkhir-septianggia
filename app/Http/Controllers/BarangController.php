<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
}
