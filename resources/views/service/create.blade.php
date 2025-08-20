@extends('layouts.app')

@section('title', 'Form Tambah Data Catalog')

@section('data')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="col-md-12">Title</label>
                    <input type="text" class="form-control" name="nama" placeholder="Title Produk">
                    @error('nama')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="col-md-12">Foto</label>
                    <input type="file" class="form-control" name="foto">
                    @error('gambar')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="col-md-12">Category</label>
                    <input type="text" class="form-control" name="title" placeholder="Category Produk">
                    @error('role')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="col-md-12">Deskripsi</label>
                    <textarea id="mytexarea" class="form-control" name="deskripsi" placeholder="Deskripsi Produk"cols="50" rows="5"></textarea>
                    @error('role')
                    <small style="color:red;">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info">Simpan</button>
                <a href="/service" class="btn btn-primary">Kembali</a>
            </form>
        </div>
    </div>
</div>

@endsection
