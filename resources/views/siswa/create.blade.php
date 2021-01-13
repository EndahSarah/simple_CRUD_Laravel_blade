@extends('layout')

@section('title', 'Form Tambah Data')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h1 style="text-align: center;">Form Tambah Data Siswa</h1>
            <form method="POST" action="/siswa">
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">NIS</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" id="formGroupExampleInput" placeholder="Input Nomor Induk Siswa" name="nis" value="{{old('nip')}}">
                    @error('nis')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="formGroupExampleInput2" placeholder="Input Nama" name="nama" value="{{old('nama')}}">
                    @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Kelas</label>
                    <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="formGroupExampleInput2" placeholder="Input Kelas" name="kelas" value="{{old('kelas')}}">
                    @error('kelas')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="formGroupExampleInput2" placeholder="Input Alamat" name="alamat" value="{{old('alamat')}}">
                    @error('alamat')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit Data</button>

            </form>
        </div>
    </div>
</div>
@endsection