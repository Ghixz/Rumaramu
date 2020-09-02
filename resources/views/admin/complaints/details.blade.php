@extends('layout/admin')

@section('title','Detail Keluhan')

@section('action5','active')

@section('container')
    <div class="container d-flex justify-content-between ">
        <div class="row-d-c">
            <p class="title">Detail <span>Keluhan</span></p>
            <div class="keluhan">
                <div class="tutup">
                    <a href="/complaints"><i class="close fa fa-times fa-2x"></i></a>
                </div>
                <div class="surat">
                    <div class="intro">
                        <p>Dear, {{auth()->user()->name}} </p>
                        <p>Terdapat kritik serta saran dari pelanggan dengan tanggapan:</p>
                    </div>
                    <div class="isi">
                        <div class="nama">
                            <p class="detail-list">Nama : {{ $complaint -> nama }}</p>
                        </div>
                        <div class="whatsapp">
                            <p class="detail-list">No. Whatsapp : {{ $complaint -> whatsapp }}</p>
                        </div>
                        <div class="detail">
                            <p class="detail-list">Keluhan : {{ $complaint -> keluhan }}</p>
                        </div>
                    </div>
                    <div class="penutup">
                        <p>Besar harapan mereka untuk mendapat pelayanan yang terbaik. Mohon segera ditanggapi!</p>
                    </div>
                    <div class="action">
                        <button type="button" class="delete btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalCenter">
                            Telah Ditanggapi
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
                                    Apakah anda yakin telah menanggapi keluhan ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <form action="{{ $complaint->id }}" method="post" class="delete">
                                        @method ('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger">Ya</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection