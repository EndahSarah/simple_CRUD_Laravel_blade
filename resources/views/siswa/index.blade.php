<i class="fa fa-y-combinatoryo" aria-hidden="true"></i>@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h1 style="text-align: left;">Daftar Siswa SD N Notog</h1>

            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <a href="/siswa/create" class="btn btn-dark">+ Tambah Siswa</a>
                    </div>
                    <div class="form-group form-inline col-md-6">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search Nama Siswa" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </div>
                </div>
                @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
            </form>
            <div class="col mt-2"></div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $siswa as $s )
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$s->nis}}</td>
                        <td>{{$s->nama}}</td>
                        <td>{{$s->kelas}}</td>
                        <td>{{$s->alamat}}</td>
                        <td><a href="{{$s->id}}/edit" class="btn btn-success">Edit</a>
                            <form action="{{$s->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                        </td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection