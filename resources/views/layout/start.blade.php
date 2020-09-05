<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="/css/home.css">
    

    <title>@yield('title')</title>
</head>

<body>
    <div class="head">
        <header class="container-r">
            <div class="logo">
                <a class="item-w w-hov hero" href="#">Rumaramu</a>
            </div>
            <nav class="menu-bar">
                <ul>
                    <li>
                        <a class="item-w active w-hov" href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a class="item-w w-hov" href="{{url('/kategori')}}">Kategori</a>
                        <div class="sub">
                            <ul>
                                <li>
                                    <a class="item-w w-hov" href="/kategori">Semua Produk</a>
                                </li>
                                <li>
                                    <a class="item-w w-hov" href="/kategori/{{2}}">Pernikahan</a>
                                </li>
                                <li>
                                    <a class="item-w w-hov" href="/kategori/{{3}}">Khitanan</a>
                                </li>
                                <li>
                                    <a class="item-w w-hov" href="/kategori/{{4}}">Ulang Tahun</a>
                                </li>
                                <li>
                                    <a class="item-w w-hov" href="/kategori/{{5}}">Tahlilan</a>
                                </li>
                                <li>
                                    <a class="item-w w-hov" href="/kategori/{{6}}">Pindah Tugas</a>
                                </li>
                                <li>
                                    <a class="item-w w-hov" href="/kategori/{{7}}">Parcel</a>
                                </li>
                                <li>
                                    <a class="item-w w-hov" href="/kategori/{{8}}">Custom</a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="item-w w-hov" href="{{url('/track')}}">Tracking</a>
                    </li>
                    <li> 
                        <a class="item-w w-hov" href="/faq">Keluhan</a>
                    </li>
                    <li>
                        <a class="item-w w-hov" href="/faq#faq">FAQ</a>
                    </li>
                    <li>
                        <a class="item-w w-hov" href="/tentang">Tentang</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="p-jumbo">
            <h1 class="item-w">Selamat Datang di Rumaramu Gift Parcel & Souvenir</h1>
            <div class="search-box">
                <form action="/kategori" method="GET">
                    <input type="text" class="search-txt" name="cari" placeholder="Cari disini">
                    <button type="submit" class="search-btn bg-navy"><i class="fas fa-search item-w"></i></button>
                </form>
            </div>
        </div>
    </div>

    @yield('container')

    <footer class="footer">
      <div class="container-f">
        <div class="left box">
          <div class="content">
            <h3>About</h3>
            <p>Jl. Cengger Ayam 1A No. 33, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141</p>
          </div>
        </div>
        <div class="middle box">
          <div class="content">
            <ul>
              <h3>Menu</h3>
              <li><a class="item-d" href="/">Home</a></li>
              <li><a class="item-d" href="/kategori">Kategori</a></li>
              <li><a class="item-d" href="/faq#faq">FAQ</a></li>
              <li><a class="item-d" href="/faq">Keluhan</a></li>
              <li><a class="item-d" href="/tentang">Tentang</a></li>
            </ul>
          </div>
        </div>
        <div class="right box">
          <div class="content">
            <ul>
              <h3>About us</h3>
              <li><a class="item-d" href="#"><i class="fa fa-envelope"></i>rumaramu@gmail.com</a></li>
              <li><a class="item-d" href="#"><i class="fab fa-facebook-square"></i>Rumaramu Malang</a></li>
              <li><a class="item-d" href="#"><i class="fab fa-instagram"></i>rumaramu_mlg</a></li>
              <li><a class="item-d" href="#"><i class="fab fa-whatsapp"></i>08123215912</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="js/jquery.hislide.testimoni.js"></script>
    <script>
      $('.slide').hiSlide();
    </script>

</body>

</html>