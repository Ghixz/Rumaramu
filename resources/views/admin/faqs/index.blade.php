@extends('layout/admin')

@section('title','Data FAQ')

@section('action4','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-i-f">
            <p class="title">Data <span>FAQ</span></p>
            <div class="faq">
                <a href="/faqs/create" class="btn btn-primary my-3">Tambah Data FAQ</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @foreach( $faqs as $faq )
                    <div class="accordion">
                        <div class="accordion-item" id="{{ $faq->id }}">
                            <a class="accordion-link" href="#{{ $faq->id }}">
                                {{ $faq->pertanyaan }}
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </a>
                            <div class="answer">
                                <p>
                                    {{ $faq->jawaban }}
                                </p>
                                <div class="detail d-flex justify-content-end mr-1 mt-3 mb-1">
                                    <a href="/faqs/{{ $faq->id }}/edit" class="btn btn-primary mr-1">Edit</a>
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
                                                Apakah anda yakin ingin menghapus data pertanyaan ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                <form action="/faqs/{{ $faq->id }}" method="post" class="d-inline">
                                                    @method ('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-danger mr-1">Ya</button>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection