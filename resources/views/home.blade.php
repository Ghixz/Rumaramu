@extends('layout/start')

@section('title','Rumaramu Gift Parcel & Souvenir')

@section('container')

    <div class="isi">
        <div class="tem-sov bg-pink">
            <div>
                <h3 class="item-d">Temukan Souvenir yang Anda Cari Disini</h3>
            </div>
            <div class="intro">
                <h6 class="item-d">Temukan berbagai souvenir dan hadiah terbaik untuk momen terbaik dalam hidup Anda. <br>Rumaramu memberikan pelayanan dan kinerja yang terbaik untuk Anda.</h6>
                <a href="/kategori" class="lengkap bg-navy item-w">Selengkapnya</a>
            </div>
        </div>
        <div class="ke-ru">
            <div class="bg-navy">
                <div>
                    <h1 class="item-w">Keunggulan Rumaramu</h1>
                    <p class="item-p">Rumaramu selalu  berkomitmen  untuk  memberi  pengalaman berbelanja terbaik
                    </p>
                </div>
            </div>
            <div class="konten">
                <div class="bungkus">
                    <div class="bg-pink bg"></div>
                    <div class="item">
                        <h3>GRATIS ONGKIR</h3>
                        <img src="/img/blc.jpg" alt="">
                        <p>Dapatkan fasilitas GRATIS ongkir untuk pembelanjaan nominal tertentu</p>
                    </div>
                </div>
                <div class="bungkus">
                    <div class="bg-navy bg"></div>
                    <div class="item">
                        <h3>GARANSI</h3>
                        <img src="/img/blc.jpg" alt="">
                        <p>Dapatkan fasilitas GRATIS ongkir untuk pembelanjaan nominal tertentu</p>
                    </div>
                </div>
                <div class="bungkus">
                    <div class="bg-abu bg"></div>
                    <div class="item">
                        <h3>HARGA PROMO</h3>
                        <img src="/img/blc.jpg" alt="">
                        <p>Dapatkan fasilitas GRATIS ongkir untuk pembelanjaan nominal tertentu</p>
                    </div>
                </div>
                <div class="bungkus">
                    <div class="bg-pink-tua bg"></div>
                    <div class="item">
                        <h3>KIEMASAN MENARIK</h3>
                        <img src="/img/blc.jpg" alt="">
                        <p>Dapatkan fasilitas GRATIS ongkir untuk pembelanjaan nominal tertentu</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pro-ung kate">
            <h1 class="item-d">Produk <span class="item-pd">Unggulan</span></h1>
            <h6 class="item-d">Produk terlaris Rumaramu</h6>
            <div class="baris">
            @for($i=0; $i <= 5; $i++)
            @php 
            $coun=count($products); 
            $x=rand(0, $coun-1);
            @endphp
                <div class="item">
                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($products[$x]->gambar)) }}" alt="">
                    <h1 class="nama-pro item-pd">{{$products[$x]->nama}}</h1>
                    <p class="kategori-pro">
                    @if(empty($products[$x]->categories->kategori))
                    {{"Semua"}}
                    @else
                    {{$products[$x]->categories->kategori}}
                    @endif
                    </p>
                    <p class="harga-pro">{{$products[$x]->harga}}</p>
                    <a class="lengkap bg-pink" href="/detail/{{$products[$x]->id}}">Selengkapnya</a>
                </div>
            @endfor
            </div>
        </div>
        <div class="kat-pro bg-pink">
            <div class="desc">
                <h1 class="item-d">Kategori <span class="item-pd">Produk</span></h1>
                <p>Rumaramu menyediakan bebagai bingkisan untuk berbagai macam acara.<br>Cari produk yang Anda inginkan dengan lebih mudah dengan kategori</p>
                <a class="lengkap bg-navy item-w" href="/kategori">Selengkapnya</a>
            </div>
            <div class="pembungkus">
                <input type="radio" id="r1" name="r"checked>
                <input type="radio" id="r2" name="r">
                <div class="bungkus s1">
                    <div class="sekat">
                        <div class="ima-kp  ganjil">
                            <a class="kat" href="/kategori/{{1}}">Pernikahan</a>
                        </div>
                        <div class="ima-kp ">
                            <a class="kat" href="/kategori/{{2}}">Khitanan</a>
                        </div>
                    </div>
                    <div class="sekat">
                        <div class="ima-kp  ganjil" href="">
                            <a class="kat" href="/kategori/{{3}}">Wisuda</a>
                        </div>
                        <div class="ima-kp ">
                            <a class="kat" href="/kategori/{{4}}">Ulang Tahun</a>
                        </div>
                    </div>
                </div>
                <div class="bungkus s2">
                    <div class="sekat">
                        <div class="ima-kp  ganjil">
                            <a class="kat" href="/kategori/{{5}}">Tahlilan</a>
                        </div>
                        <div class="ima-kp ">
                            <a class="kat" href="/kategori/{{6}}">Pindah Tugas</a>
                        </div>
                    </div>
                    <div class="sekat">
                        <div class="ima-kp  ganjil" href="">
                            <a class="kat" href="/kategori/{{7}}">Parcel</a>
                        </div>
                        <div class="ima-kp ">
                            <a class="kat" href="/kategori/{{8}}">Custom</a>
                        </div>
                    </div>
                </div>
                <div class="navigation">
                    <label for="r1" class="bar b1"></label>
                    <label for="r2" class="bar b2"></label>
                </div>
            </div>
            
        </div>
        <div class="te-ka">
            <div class="bg-navy">
                <h1 class="item-p">Tentang <span class="item-pd">Kami</span></h1>
            </div>
            <div class="bag">
                <div class="photo">
                    <img src="{{ asset('img/Lokasi_1.jpg') }}" alt="">
                </div>
                <div class="jelas">
                    <h1>Rumaramu Gift Parcel & Souvenir</h1>
                    <p>Berdiri pada 7 Juli 2020 oleh Lita Subagio, berbasis di Kota Malang, Jawa Timur. Rumaramu bergerak pada industri pembuatan souvenir dan hadiah acara akbar seperti Pernikahan, Wisuda, Pelantikan dan Khitanan </p>
                    <a class="lengkap bg-pink-tua item-w" href="/tentang">Selengkapnya</a>
                </div>
            </div>
            <div class="sosial bg-pink">
                <h1 class="item-d">Temukan <span class="item-pd">Kami</span></h1>
                <ul>
                    <li><a class="item-w bg-navy" href="#"><i class="fa fa-envelope"></i></a></li>
                    <li><a class="item-w bg-navy" href="https://www.facebook.com/{{$contacts[2]->nama}}"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a class="item-w bg-navy" href="https://www.instagram.com/{{$contacts[1]->nama}}/"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="item-w bg-navy" href="https://api.whatsapp.com/send?phone={{$contacts[0]->nama}}"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="tes">
            <div class="atas">
            </div>
            <div class="bawah bg-navy">
                <div class="pembungkus">
                    <div class="slide hi-slide">
                        <div class="hi-prev"><i class="fa fa-angle-left item-w"></i></div>
                        <ul>
                        @foreach($testimonies as $ts)
                            <li>
                                <div class="photo">
                                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($ts->foto)) }}" alt="">
                                </div>
                                <div class="isi">
                                    <h3 class="pesan item-p">{{$ts->testimoni}}</h3>
                                    <h4 class="nama item-pd">{{$ts->nama}}</h4>
                                    <h6 class="jabatan item-p">{{$ts->jabatan}}</h6>
                                </div>
                            </li>
                        @endforeach
                        </ul>
                        <div class="hi-next"><i class="fa fa-angle-right item-w"></i></div>
                    </div>
                    
                    <!-- <input type="radio" id="t1" name="t"checked>
                    <input type="radio" id="t2" name="t">
                    <input type="radio" id="t3" name="t">
                    <div class="bungkus te1">
                        <label for="t3" class="b1 kiri"><i class="fas fa-angle-left item-p"></i></label>
                        <div class="photo">
                            <img src="/img/blc.jpg" alt="">
                        </div>
                        <div class="isi">
                            <h3 class="pesan item-p">“Pesan souvenir di Rumaramu sangat memuaskan dengan kualitas produk yang bagus, pelayanan ramah, dan pengerjaan cukup cepat.”</h3>
                            <h4 class="nama item-pd">AKBP Donny Alexander</h4>
                            <h6 class="jabatan item-p">Kapolresta Malang</h6>
                        </div>
                        <label for="t2" class="b2 kanan"><i class="fas fa-angle-right item-p"></i></label>
                    </div>
                    <div class="bungkus te2">
                        <label for="t1" class="b1 kiri"><i class="fas fa-angle-left item-p"></i></label>
                        <div class="photo">
                            <img src="/img/blc.jpg" alt="">
                        </div>
                        <div class="isi">
                            <h3 class="pesan item-p">“Bisa beli dengan ceri ya hanya di Rumaramu Gift Parcel & Souvenir”</h3>
                            <h4 class="nama item-pd">AKBP Donny Alexander</h4>
                            <h6 class="jabatan item-p">Kapolresta Malang</h6>
                        </div>
                        <label for="t3" class="b2 kanan"><i class="fas fa-angle-right item-p"></i></label>
                    </div>
                    <div class="bungkus te3">
                        <label for="t2" class="b1 kiri"><i class="fas fa-angle-left item-p"></i></label>
                        <div class="photo">
                            <img src="/img/blc.jpg" alt="">
                        </div>
                        <div class="isi">
                            <h3 class="pesan item-p">“Banyak sekali barang berkualitas yang dijual di Rumaramu, saya begitu senang ketika membeli di Rumaramu karena barang yang dijual selalu terjamin kualitasnya”</h3>
                            <h4 class="nama item-pd">AKBP Donny Alexander</h4>
                            <h6 class="jabatan item-p">Kapolresta Malang</h6>
                        </div>
                        <label for="t1" class="b2 kanan"><i class="fas fa-angle-right item-p"></i></label>
                    </div> -->
                </div>
            </div>
            
        </div>
    </div>
@endsection