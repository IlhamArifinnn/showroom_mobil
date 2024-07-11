<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About - Showroom Car</title>

    <!-- Google Font -->
    @include('layouts.links')
</head>

<body>
    @include('layouts.header')

    <!-- Breadcrumb End -->
    <div class="breadcrumb-option set-bg" data-setbg="{{ asset('src/assets/img/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>About Us</h2>
                        <div class="breadcrumb__links">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->
    <!-- About Us Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title about-title">
                        <h2>Selamat Datang di Showroom Car <br />Kami Menyediakan Segala Kebutuhan untuk Mobil Anda</h2>
                        <p>Pertama-tama, saya akan menjelaskan apa itu iklan kontekstual. Iklan kontekstual berarti
                            mengiklankan produk di situs web sesuai dengan konten yang ditampilkan halaman tersebut.
                            Misalnya, jika konten situs web adalah informasi tentang truk Ford, maka iklan yang muncul
                            akan relevan dengan truk tersebut.</p>
                    </div>
                </div>
            </div>
            <div class="about__feature">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="about__feature__item">
                            <img src="{{ asset('src/assets/img/about/af-1.png') }}" alt="">
                            <h5>Sistem Jaminan Kualitas</h5>
                            <p>Tampaknya beberapa masalah terbesar dengan tren periklanan internet adalah kurangnya
                                sistem jaminan kualitas.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="about__feature__item">
                            <img src="{{ asset('src/assets/img/about/af-2.png') }}" alt="">
                            <h5>Proses Pengujian Akurat</h5>
                            <p>Di mana Anda mendaftarkan keluhan Anda? Bagaimana Anda bisa memprotes dalam bentuk apapun
                                terhadap perusahaan yang Anda tidak setuju dengan teknik periklanannya?</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="about__feature__item">
                            <img src="{{ asset('src/assets/img/about/af-3.png') }}" alt="">
                            <h5>Teknologi Integrasi Infrastruktur</h5>
                            <p>Jadi dalam analisis akhir: benar, saya benci orang yang mengintip, tetapi jika saya harus
                                memilih, saya akan memilih salah satu daripada tidak sama sekali.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__pic">
                        <img src="{{ asset('src/assets/img/about/about-pic.jpg') }}" alt="Tentang Kami">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about__item">
                        <h5>Misi Kami</h5>
                        <p>Sekarang, saya bukan seperti Robin, orang aneh dari kelas antropologi budaya saya; saya
                            berpikir bahwa iklan adalah sesuatu yang memiliki tempat di masyarakat kita; yang untuk
                            lebih baik atau lebih buruk, disusun di sepanjang ekonomi pasar. Tetapi, hanya karena saya
                            merasa iklan berhak ada, tidak berarti saya menyukai atau setuju dengannya.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about__item">
                        <h5>Visi Kami</h5>
                        <p>Di mana Anda mendaftarkan keluhan Anda? Bagaimana Anda bisa memprotes dalam bentuk apapun
                            terhadap perusahaan yang teknik periklanannya tidak Anda setujui? Anda tidak bisa. Dan pada
                            titik perbedaan lain antara produk tradisional dan iklannya dan yang bersifat internet,
                            hanya mengabaikan iklan internet adalah </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->


    <!-- Counter Begin -->
    <div class="counter spad set-bg" data-setbg="{{ asset('src/assets/img/counter-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <h2 class="counter-num">122</h2>
                        <p>Vehicles Stock</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <h2 class="counter-num">150</h2>
                        <p>Vehicles Sale</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <h2 class="counter-num">122</h2>
                        <p>Dealer Reviews</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <h2 class="counter-num">100</h2>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter End -->

    @include('layouts.footer')


    <!-- Js Plugins -->
    @include('layouts.scripts')

</body>

</html>
