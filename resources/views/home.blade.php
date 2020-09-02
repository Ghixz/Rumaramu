@extends('layout/start')

@section('title','Rumaramu Gift Parcel & Souvenir')

@section('container')

    <div class="isi">
        <div class="tem-sov bg-pink">
            <div>
                <h3 class="item-d">Temukan Souvenir yang Anda Cari Disini</h3>
            </div>
            <div class="pemisah">
            </div>
            <div class="intro">
                <h6 class="item-d">Temukan berbagai souvenir dan hadiah terbaik untuk momen terbaik dalam hidup Anda. <br>Rumaramu memberikan pelayanan dan kinerja yang terbaik untuk Anda.</h6>
                <a href="" class="lengkap bg-navy item-w">Selengkapnya</a>
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
            <div>
                <div class="baris">
                    <div class="item">
                        <img src="/img/blc.jpg" alt="">
                        <h1 class="nama-pro item-pd">Reed Difuser</h1>
                        <p class="kategori-pro"> Souvenir Pernikahan</p>
                        <p class="harga-pro">Rp10.000</p>
                        <a class="lengkap bg-pink" href="">Selengkapnya</a>
                    </div>
                    <div class="item">
                        <img src="/img/blc.jpg" alt="">
                        <h1 class="nama-pro item-pd">Tin Box Souvenir</h1>
                        <p class="kategori-pro">Souvenir Pernikahan</p>
                        <p class="harga-pro">Rp 8.000</p>
                        <a class="lengkap bg-pink" href="">Selengkapnya</a>
                    </div>
                    <div class="item">
                        <img src="/img/blc.jpg" alt="">
                        <h1 class="nama-pro item-pd">Aromatherapy Candle</h1>
                        <p class="kategori-pro">Souvenir Pernikahan</p>
                        <p class="harga-pro">Rp11.000</p>
                        <a class="lengkap bg-pink" href="">Selengkapnya</a>
                    </div>
                </div>
                <div class="baris">
                    <div class="item">
                        <img src="/img/blc.jpg" alt="">
                        <h1 class="nama-pro item-pd">Crystal / Diamond Souvenir</h1>
                        <p class="kategori-pro">Souvenir Pernikahan</p>
                        <p class="harga-pro">Rp5.000</p>
                        <a class="lengkap bg-pink" href="">Selengkapnya</a>
                    </div>
                    <div class="item">
                        <img src="/img/blc.jpg" alt="">
                        <h1 class="nama-pro item-pd">Towel</h1>
                        <p class="kategori-pro">Souvenir Pernikahan</p>
                        <p class="harga-pro">Rp7.000</p>
                        <a class="lengkap bg-pink" href="">Selengkapnya</a>
                    </div>
                    <div class="item">
                        <img src="/img/blc.jpg" alt="">
                        <h1 class="nama-pro item-pd">Memo & Notebook</h1>
                        <p class="kategori-pro">Souvenir Pernikahan</p>
                        <p class="harga-pro">Rp7.000</p>
                        <a class="lengkap bg-pink" href="">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kat-pro bg-pink">
            <div class="desc">
                <h1 class="item-d">Kategori <span class="item-pd">Produk</span></h1>
                <p>Rumaramu menyediakan bebagai bingkisan untuk berbagai macam acara.<br>Cari produk yang Anda inginkan dengan lebih mudah dengan kategori</p>
                <a class="lengkap bg-navy item-w" href="">Selengkapnya</a>
            </div>
            <div class="pembungkus">
                <input type="radio" id="r1" name="r"checked>
                <input type="radio" id="r2" name="r">
                <div class="bungkus s1">
                    <div class="ima-kp">
                        <a class="kat" href="">Pernikahan</a>
                    </div>
                    <div class="ima-kp">
                        <a class="kat" href="">Khitanan</a>
                    </div>
                    <div class="ima-kp" href="">
                        <a class="kat" href="">Wisuda</a>
                    </div>
                    <div class="ima-kp">
                        <a class="kat" href="">Ulang Tahun</a>
                    </div>
                </div>
                <div class="bungkus s2">
                    <div class="ima-kp">
                        <a class="kat" href="">Tahlilan</a>
                    </div>
                    <div class="ima-kp">
                        <a class="kat" href="">Pindah Tugas</a>
                    </div>
                    <div class="ima-kp" href="">
                        <a class="kat" href="">Parcel</a>
                    </div>
                    <div class="ima-kp">
                        <a class="kat" href="">Custom</a>
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
                    <img src="/img/blc.jpg" alt="">
                </div>
                <div class="jelas">
                    <h1>Rumaramu Gift Parcel & Souvenir</h1>
                    <p>Berdiri pada 7 Juli 2020 oleh Lita Subagio, berbasis di Kota Malang, Jawa Timur. Rumaramu bergerak pada industri pembuatan souvenir dan hadiah acara akbar seperti Pernikahan, Wisuda, Pelantikan dan Khitanan </p>
                    <a class="lengkap bg-pink-tua item-w" href="">Selengkapnya</a>
                </div>
            </div>
            <div class="sosial bg-pink">
                <h1 class="item-d">Temukan <span class="item-pd">Kami</span></h1>
                <ul>
                    <li><a class="item-w bg-navy" href="#"><i class="fa fa-envelope"></i></a></li>
                    <li><a class="item-w bg-navy" href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a class="item-w bg-navy" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="item-w bg-navy" href="#"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="tes">
            <div class="atas">
            </div>
            <div class="bawah bg-navy">
                <div class="pembungkus">
                    <input type="radio" id="t1" name="t"checked>
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
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection