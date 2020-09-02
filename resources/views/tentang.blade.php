@extends('layout/main')

@section('title','Tentang')

@section('container')
<div class="container">
        <div class="row-t">
            <div class="isi">
                <div class="owner">
                    <div class="border-b">
                        <h1 class="item-d">Tentang <span class="item-pd">Kami</span></h1>
                    </div>
                    <img src="/img/support.png" alt="">
                    <h6 class="item-pd">Owner Rumaramu</h6>
                    <p>Lita Subagio</p>
                </div>
                <div class="sejarah">
                    <h1 class="hero item-p">Rumaramu</h1>
                    <div class="border-b">
                        <p>Rumaramu merupakan rumah produksi souvenir yang berdiri pada 7 Juli 2020 oleh Lita  Subagio,  berbasis  di  Kota  Malang, Jawa  Timur.  Rumaramu  bergerak  pada industry pembuatan souvenir dan hadiah acara akbar  seperti Pernikahan,  Wisuda, Pelantikan dan Khitanan.  Rumaramu  merupakan  rumah  produksi  souvenir  yang berdiri pada 7 Juli 2020 oleh Lita  Subagio,  berbasis  di  Kota  Malang,  Jawa  Timur  Rumaramu  bergerak  pada industry pembuatan souvenir dan hadiah  acara  akbar  seperti Pernikahan, Wisuda, Pelantikan dan Khitanan.</p>
                    </div>
                </div>
                <div class="galeri">
                    <h3 class="item-d">Galeri <span class="item-pd">Foto</span></h3>
                    <div class="slide hi-slide">
                        <div class="hi-prev"><i class="fa fa-angle-left item-d"></i></div>
                        <ul>
                            <li><img src="/img/Lokasi_1.jpg" alt=""></li>
                            <li><img src="/img/Lokasi_1.jpg" alt=""></li>
                            <li><img src="/img/Lokasi_1.jpg" alt=""></li>
                        </ul>
                        <div class="hi-next"><i class="fa fa-angle-right item-d"></i></div>
                    </div>
                </div>
                <div class="lokasi">
                    <h3 class="item-d">Lokasi <span class="item-pd">Rumaramu</span></h3>
                    <h3 class="item-d break">Gift Parcel & Souvenir</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.521526713783!2d112.6277992153094!3d-7.944933681345158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629dceb420f05%3A0xa35f88701d60b894!2sRumaramu%20Gift%20Parcel%20%26%20Souvenir!5e0!3m2!1sid!2sid!4v1598526139831!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="te-ka">
                    <h3 class="item-d">Temukan <span class="item-pd">Kami</span></h3>
                    <ul>
                        <li><a class="item-w bg-navy" href="#"><i class="fa fa-envelope"></i></a></li>
                        <li><a class="item-w bg-navy" href="#"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a class="item-w bg-navy" href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="item-w bg-navy" href="#"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection