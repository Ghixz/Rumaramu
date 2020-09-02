@extends('layout/admin')

@section('title','Dashboard')

@section('action1','active')

@section('container')
    <div class="container">
        <div class="row-d">
            <p class="title">Selamat Datang <span>{{auth()->user()->name}}</span> , di Database Rumaramu.</p>
            <div class="laporan">
                <div class="produk">
                    <div class="card">
                        <div class="card-header">
                            <p>Produk</p>
                        </div>
                        <div class="card-body">
                            <p>Total Produk : </p>
                            <div class="button">
                                <div class="action">
                                    <a href="/products" class="info">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimoni">
                    <div class="card">
                        <div class="card-header">
                            <p>Testimoni</p>
                        </div>
                        <div class="card-body">
                            <p>Total Testimoni : </p>
                            <div class="button">
                                <div class="action">
                                    <a href="/testimonies" class="info">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq">
                    <div class="card">
                        <div class="card-header">
                            <p>FAQ</p>
                        </div>
                        <div class="card-body">
                            <p>Total FAQ : </p>
                            <div class="button">
                                <div class="action">
                                    <a href="/faqs" class="info">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="komplain">
                    <div class="card">
                        <div class="card-header">
                            <p>Keluhan</p>
                        </div>
                        <div class="card-body">
                            <p>Total Keluhan : </p>
                            <div class="button">
                                <div class="action">
                                    <a href="/complaints" class="info">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection