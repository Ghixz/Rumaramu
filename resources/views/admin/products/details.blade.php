@extends('layout/admin')

@section('title','Detail Produk')

@section('action2','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-d-p">
            <p class="title">Detail <span>Produk</span></p>
            

            <div class="product">
                <div class="gambar">
                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($product->gambar)) }}" alt="">
                </div>
                <div class="detail">
                    <a href="/products"><i class="close fa fa-times fa-2x"></i></a>
                    <div class="nama">
                        <p class="detail-list">{{ $product -> nama }}</p>
                    </div>
                    <div class="kategori">
                        <p class="detail-list">{{ $product -> kategori }}</p>
                    </div>
                    <div class="deskripsi">
                        <p class="detail-list">{{ $product -> deskripsi }}</p>
                    </div>
                    <div class="harga">
                        <p class="detail-list">Rp {{ $product -> harga }},-</p>
                    </div>
                    <div class="action">
                        <button type="button" class="delete btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalCenter">
                            Delete
                        </button>
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus data produk ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <form action="{{ $product->id }}" method="post" class="delete">
                                        @method ('delete')
                                        @csrf
                                        <button type="submit" class="delete btn btn-outline-danger">Ya</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ $product->id }}/edit" class="edit btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection