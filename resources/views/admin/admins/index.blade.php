@extends('layout/admin')

@section('title','Data Admin')

@section('action6','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-i-p">
            <p class="title">Data <span>Admin</span></p>
            <div class="product">
                <a href="/admins/create" class="btn btn-primary my-2">Tambah Admin</a>
                
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="col">{{$loop->iteration}}</th>
                            <th scope="col">{{$user->name}}</th>
                            <th scope="col">{{$user->email}}</th>
                            <th scope="col">
                            <div class="action">
                                <form action="/admins/destroy/{{$user->id}}" method="post" class="delete">
                                    @csrf
                                    <button type="submit" class="delete btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Admin Ini?');"> Delete </button>
                                    <a href="/admins/edit/{{$user->id}}" class="edit btn btn-primary">Edit</a>
                                    </form>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection