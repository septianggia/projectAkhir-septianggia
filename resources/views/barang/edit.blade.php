@extends('layouts.template')
@section('judulh1','Admin - Product')


@section('konten')
<div class="col-md-6">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Barang</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('barang.update',$barang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=" card-body">
                <div class="form-group">
                    <label for="name">Nama Barang</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder=""
                        value="{{$barang->name}}">
                </div>
                </div>
                <div class="form-group">
                    <label for="tgl_peminjaman">Tanggal Pinjam</label>
                    <input type="date" class="form-control" id="tgl_peminjaman" name="tgl_peminjaman" value="{{$barang->tgl_peminjaman}}">
                </div>
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{$barang->price}}">
                </div>
                
                <div class=" form-group">
                    <label for="description">Deskripsi</label>
                    <textarea id="description" name="description" class=" form-control"
                        rows="4">{{ $barang->description }}</textarea>
                </div>
            </div>
            <!-- /.card-body -->


            <div class="card-footer">
                <button type="submit" class="btn btn-warning float-right">Ubah</button>
            </div>
        </form>
    </div>




</div>




@endsection
