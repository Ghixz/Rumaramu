@extends('layout/admin')

@section('title','Detail Testimoni')

@section('action3','active')

@section('container')
    <div class="container d-flex justify-content-between ">
        <div class="row-d-t">
            <p class="title">Detail <span>Testimoni</span></p>
            <div class="testi">
                <div class="foto">
                    <img class="card-img-top" src="data:image/png;base64,{{ chunk_split(base64_encode($testimony->foto)) }}" alt="Card image cap">
                </div>
                <div class="detail">
                    <a href="/testimonies"><i class="close fa fa-times fa-2x"></i></a>
                    <div class="nama">
                        <p class="detail-list">{{ $testimony -> nama }}</p>
                    </div>
                    <div class="jabatan">
                        <p class="detail-list">{{ $testimony -> jabatan }}</p>
                    </div>
                    <div class="testimoni">
                        <p class="detail-list">" {{ $testimony -> testimoni }} "</p>
                    </div>
                    <div class="action">
                        <button type="button" class="delete btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalCenter">
                            Delete
                        </button>
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Hapus Produk</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus data testimoni ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <form action="{{ $testimony->id }}" method="post" class="delete">
                                        @method ('delete')
                                        @csrf
                                        <button type="submit" class="delete btn btn-outline-danger">Ya</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ $testimony->id }}/edit" class="edit btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection