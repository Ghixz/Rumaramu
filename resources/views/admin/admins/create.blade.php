@extends('layout/admin')

@section('title','Data Admin')

@section('action6','active')

@section('container')

<div class="container d-flex justify-content-between">
        <div class="row-c-p">
            <p class="title">Form Tambah <span>Admin</span></p>
            <div class="form">
                <form method="post" action="/admins/store" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="action d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        <a href="/admins" class="btn btn-link">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection