@extends('layouts.template')
@section('judulh1','Admin - Barang')


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

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Barang</h3>
        </div>
        <!-- /.card-header -->

        <div class=" card-body">
            <table>
                <tr>
                    <th>Nama Barang</th>
                    <td>:</td>
                    <td>{{ $data[0]->name }}</td>
                </tr>
                    <th>Harga</th>
                    <td>:</td>
                    <td>@money($data[0]->price)</td>
                </tr>
                <tr>
                    <th>Tanggal Pinjam</th>
                    <td>:</td>
                    <td>{{ $data[0]->tgl_peminjaman }}</td>
                <tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>:</td>
                    <td>{{ $data[0]->description}}</td>
                </tr>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection
