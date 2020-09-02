@extends('layout/admin')

@section('title','Update Data Produk')

@section('action2','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-e-p">
            <p class="title">Form Ubah <span>Data Produk</span></p>
            <div class="form">
            <form method="post" action="/products/{{ $product->id }}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Produk</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Produk" name="nama" value="{{ $product->nama }}" style="color:#757575">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori Produk</label>
                        <select class="form-control @error('kategori') is-invalid @enderror" style="color: #777" id="kategori" placeholder="Masukkan Kategori Produk" name="kategori" value="{{ old('kategori') }}">
                            <option value="Pernikahan">Pernikahan</option>
                            <option value="Khitanan">Khitanan</option>
                            <option value="Wisuda">Wisuda</option>
                            <option value="Ulang Tahun">Ulang Tahun</option>
                            <option value="Tahlilan">Tahlilan</option>
                            <option value="Pindah Tugas">Pindah Tugas</option>
                            <option value="Parcel">Parcel</option>
                            <option value="Custom">Custom</option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Produk</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukkan Harga Produk" name="harga" value="{{ $product->harga }}" style="color:#757575">
                        @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Produk</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi Produk" name="deskripsi" style="color:#757575">{{ $product->deskripsi }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="gambar">Gambar Produk</label>
                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
                        @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="action d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                        <a href="/products/{{ $product->id }}" class="btn btn-link">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection