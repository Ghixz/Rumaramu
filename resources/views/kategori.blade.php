@extends('layout/main')

@section('title','Kategori')

@section('container')

<div class="kategori">
    <div class="up">
        <div class="heading">
            <div class="judul">
                <h1 class="item-d">Katalog <span class="item-pd">Produk</span></h1>
                <p>Katalog Produk Rumaramu</p>
            </div>
            <div class="judul-search">
                <form class="form-inline my-2 my-lg-0" action="/kategori/cari" method="GET">
                    <input  name="cari" type="text" placeholder="Search"  value="{{ old('cari') }}">
                    <button type="submit" class="search-btn bg-pink-tua"><i class="fa fa-search item-d"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="down">
        <div class="katpro">
            <div class="kat">
                <h3>KATEGORI</h3>
                <ul>
                    <li class="li"><a href="/kategori">Semua</a></li>
                    <li class="li"><a href="/kategori/{{1}}">Pernikahan</a></li>
                    <li class="li"><a href="/kategori/{{2}}">Khitanan</a></li>
                    <li class="li"><a href="/kategori/{{3}}">Wisuda</a></li>
                    <li class="li"><a href="/kategori/{{4}}">Ulang Tahun</a></li>
                    <li class="li"><a href="/kategori/{{5}}">Tahlilan</a></li>
                    <li class="li"><a href="/kategori/{{6}}">Pindah Tugas</a></li>
                    <li class="li"><a href="/kategori/{{7}}">Parcel</a></li>
                    <li class="li"><a href="/kategori/{{8}}">Custom</a></li>
                </ul> 
            </div>
        </div>
        <div class="pro">
            @foreach($products as $product)
            <div class="item">
                <img src="data:image/png;base64,{{ chunk_split(base64_encode($product->gambar)) }}" alt="">
                <h1 class="nama-pro item-pd">{{$product->nama}}</h1>
                <p class="kategori-pro">{{$product->kategori}}</p>
                <p class="harga-pro">{{$product->harga}}</p>
                <a class="lengkap bg-pink" href="/detail/{{$product->id}}">Selengkapnya</a>
            </div>
            @endforeach
        </div>
    </div>
</div>



@endsection