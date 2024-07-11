<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="HVAC Template" />
    <meta name="keywords" content="HVAC, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Showroom Car</title>

    <!-- Google Font -->

    <!-- Css Styles -->
    @include('layouts.links')

</head>

<body>
    @include('layouts.header')

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="{{ asset('src/assets/img/hero-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero__text">
                        <div class="hero__text__title">
                            <span>TEMUKAN MOBIL IMPIAN ANDA</span>
                            <h2>Toyota Alphard</h2>
                        </div>
                        <div class="hero__text__price">
                            <div class="car-model">Model 2023</div>
                            <h2>Rp15.000.000<span>/Bulan</span></h2>
                        </div>
                        <a href="#" class="primary-btn"><img src="{{ asset('src/assets/img/wheel.png') }}"
                                alt="" /> Test Drive</a>
                        <a href="#" class="primary-btn more-btn">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Layanan Kami</span>
                        <h2>Apa yang Kami Tawarkan</h2>
                        <p>
                            Temukan berbagai layanan unggulan kami yang dirancang untuk
                            memenuhi kebutuhan Anda.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="{{ asset('src/assets/img/services/services-1.png') }}" alt="Sewa Mobil" />
                        <h5>Sewa Mobil</h5>
                        <p>
                            Nikmati kenyamanan menyewa mobil dengan berbagai pilihan model
                            dan harga yang terjangkau.
                        </p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="{{ asset('src/assets/img/services/services-2.png') }}" alt="Beli Mobil" />
                        <h5>Beli Mobil</h5>
                        <p>
                            Dapatkan mobil impian Anda dengan proses pembelian yang mudah
                            dan cepat serta harga kompetitif.
                        </p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="{{ asset('src/assets/img/services/services-3.png') }}" alt="Perawatan Mobil" /') }}>
                        <h5>Perawatan Mobil</h5>
                        <p>
                            Layanan perawatan mobil yang profesional untuk memastikan mobil
                            Anda selalu dalam kondisi prima.
                        </p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="{{ asset('src/assets/img/services/services-4.png') }}" alt="Dukungan 24/7" />
                        ') }} <h5>Dukungan 24/7</h5>
                        <p>
                            Layanan dukungan pelanggan yang siap membantu Anda kapan saja,
                            di mana saja.
                        </p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Feature Section Begin -->
    <section class="feature spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature__text">
                        <div class="section-title">
                            <span>Tentang Kami</span>
                            <h2>Kami Adalah Nama Terpercaya di Otomotif</h2>
                        </div>
                        <div class="feature__text__desc">
                            <p>
                                Kami menyediakan berbagai fitur unggulan untuk memastikan Anda
                                mendapatkan yang terbaik dari mobil Anda.
                            </p>
                            <p>
                                Dengan berbagai pilihan dan layanan yang tersedia, kami siap
                                memenuhi kebutuhan otomotif Anda. Percayakan kendaraan Anda
                                kepada kami dan nikmati pengalaman berkendara yang optimal.
                            </p>
                        </div>
                        <div class="feature__text__btn">
                            <a href="#" class="primary-btn">Tentang Kami</a>
                            <a href="#" class="primary-btn partner-btn">Mitra Kami</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="{{ asset('src/assets/img/feature/feature-1.png') }}" alt="Mesin" />
                                </div>
                                <h6>Mesin</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="{{ asset('src/assets/img/feature/feature-2.png') }}" alt="Turbo" />
                                </div>
                                <h6>Turbo</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="{{ asset('src/assets/img/feature/feature-3.png') }}" alt="Pendinginan" />
                                </div>
                                <h6>Pendinginan</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="{{ asset('src/assets/img/feature/feature-4.png') }}" alt="Suspensi" />
                                </div>
                                <h6>Suspensi</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="{{ asset('src/assets/img/feature/feature-5.png') }}" alt="Kelistrikan" />
                                </div>
                                <h6>Kelistrikan</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="{{ asset('src/assets/img/feature/feature-6.png') }}" alt="Rem" />
                                </div>
                                <h6>Rem</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->

    <!-- Car Section Begin -->
    <section class="car spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Mobil Kami</span>
                        <h2>Penawaran Kendaraan Terbaik</h2>
                    </div>
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Paling Banyak Dicari</li>
                        <li data-filter=".sale">Terbar p-2u untuk Dijual</li>
                    </ul>
                </div>
            </div>
            <div class="row car-filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('src/assets/img/cars/car-1.jpg') }}" alt="Porsche Cayenne Turbo S" />
                            <img src="{{ asset('src/assets/img/cars/car-8.jpg') }}" alt="Porsche Cayenne Turbo S" />
                            <img src="{{ asset('src/assets/img/cars/car-6.jpg') }}" alt="Porsche Cayenne Turbo S" />
                            <img src="{{ asset('src/assets/img/cars/car-3.jpg') }}" alt="Porsche Cayenne Turbo S" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2016</div>
                                <h5><a href="#">Porsche Cayenne Turbo S</a></h5>
                                <ul>
                                    <li><span>35,000</span> km</li>
                                    <li>Otomatis</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option p-2">Untuk Disewa</span>
                                <h6>3.200.000<span>/Bulan</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('src/assets/img/cars/car-2.jpg') }}"
                                alt="Toyota Camry ASV50L-JETEKU" />
                            <img src="{{ asset('src/assets/img/cars/car-8.jpg') }}"
                                alt="Toyota Camry ASV50L-JETEKU" />
                            <img src="{{ asset('src/assets/img/cars/car-6.jpg') }}"
                                alt="Toyota Camry ASV50L-JETEKU" />
                            <img src="{{ asset('src/assets/img/cars/car-4.jpg') }}"
                                alt="Toyota Camry ASV50L-JETEKU" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2020</div>
                                <h5><a href="#">Toyota Camry ASV50L-JETEKU</a></h5>
                                <ul>
                                    <li><span>35,000</span> km</li>
                                    <li>Otomatis</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option sale p-2">Untuk Dijual</span>
                                <h6>1.100.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('src/assets/img/cars/car-3.jpg') }}" alt="BMW S1000RR 2019 M" />
                            <img src="{{ asset('src/assets/img/cars/car-8.jpg') }}" alt="BMW S1000RR 2019 M" />
                            <img src="{{ asset('src/assets/img/cars/car-6.jpg') }}" alt="BMW S1000RR 2019 M" />
                            <img src="{{ asset('src/assets/img/cars/car-5.jpg') }}" alt="BMW S1000RR 2019 M" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2017</div>
                                <h5><a href="#">BMW S1000RR 2019 M</a></h5>
                                <ul>
                                    <li><span>35,000</span> km</li>
                                    <li>Otomatis</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option p-2">Untuk Disewa</span>
                                <h6>4.400.000<span>/Bulan</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('src/assets/img/cars/car-4.jpg') }}" alt="Lamborghini Huracan Evo" />
                            <img src="{{ asset('src/assets/img/cars/car-8.jpg') }}" alt="Lamborghini Huracan Evo" />
                            <img src="{{ asset('src/assets/img/cars/car-2.jpg') }}" alt="Lamborghini Huracan Evo" />
                            <img src="{{ asset('src/assets/img/cars/car-1.jpg') }}" alt="Lamborghini Huracan Evo" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2019</div>
                                <h5><a href="#">Lamborghini Huracan Evo</a></h5>
                                <ul>
                                    <li><span>35,000</span> km</li>
                                    <li>Otomatis</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option sale p-2">Untuk Dijual</span>
                                <h6>1.800.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('src/assets/img/cars/car-5.jpg') }}" alt="Audi Q8 2020" />
                            <img src="{{ asset('src/assets/img/cars/car-8.jpg') }}" alt="Audi Q8 2020" />
                            <img src="{{ asset('src/assets/img/cars/car-7.jpg') }}" alt="Audi Q8 2020" />
                            <img src="{{ asset('src/assets/img/cars/car-2.jpg') }}" alt="Audi Q8 2020" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2018</div>
                                <h5><a href="#">Audi Q8 2020</a></h5>
                                <ul>
                                    <li><span>35,000</span> km</li>
                                    <li>Otomatis</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option p-2">Untuk Disewa</span>
                                <h6>4.700.000<span>/Bulan</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('src/assets/img/cars/car-6.jpg') }}" alt="Mustang Shelby GT500" />
                            <img src="{{ asset('src/assets/img/cars/car-8.jpg') }}" alt="Mustang Shelby GT500" />
                            <img src="{{ asset('src/assets/img/cars/car-3.jpg') }}" alt="Mustang Shelby GT500" />
                            <img src="{{ asset('src/assets/img/cars/car-1.jpg') }}" alt="Mustang Shelby GT500" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2016</div>
                                <h5><a href="#">Mustang Shelby GT500</a></h5>
                                <ul>
                                    <li><span>35,000</span> km</li>
                                    <li>Otomatis</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option sale p-2">Untuk Dijual</span>
                                <h6>10.500.000.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('src/assets/img/cars/car-7.jpg') }}"
                                alt="Lamborghini Aventador A90" />
                            <img src="{{ asset('src/assets/img/cars/car-2.jpg') }}"
                                alt="Lamborghini Aventador A90" />
                            <img src="{{ asset('src/assets/img/cars/car-4.jpg') }}"
                                alt="Lamborghini Aventador A90" />
                            <img src="{{ asset('src/assets/img/cars/car-1.jpg') }}"
                                alt="Lamborghini Aventador A90" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2020</div>
                                <h5><a href="#">Lamborghini Aventador A90</a></h5>
                                <ul>
                                    <li><span>35,000</span> km</li>
                                    <li>Otomatis</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option p-2">Untuk Disewa</span>
                                <h6>6.200.000<span>/Bulan</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('src/assets/img/cars/car-8.jpg') }}" alt="Porsche Cayenne Turbo S" />
                            <img src="{{ asset('src/assets/img/cars/car-3.jpg') }}" alt="Porsche Cayenne Turbo S" />
                            <img src="{{ asset('src/assets/img/cars/car-5.jpg') }}" alt="Porsche Cayenne Turbo S" />
                            <img src="{{ asset('src/assets/img/cars/car-2.jpg') }}" alt="Porsche Cayenne Turbo S" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2017</div>
                                <h5><a href="#">Porsche Cayenne Turbo S</a></h5>
                                <ul>
                                    <li><span>35,000</span> km</li>
                                    <li>Otomatis</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option p-2">Untuk Disewa</span>
                                <h6>4.700.000<span>/Bulan</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Car Section End -->

    <!-- Chooseus Section Begin -->
    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="chooseus__text">
                        <div class="section-title">
                            <h2>Mengapa Memilih Kami</h2>
                            <p>
                                Kami menyediakan layanan terbaik dengan kendaraan berkualitas
                                tinggi dan dukungan pelanggan yang memuaskan.
                            </p>
                        </div>
                        <ul>
                            <li>
                                <i class="fa fa-check-circle"></i> Mobil berkualitas tinggi
                                dengan perawatan yang terjamin.
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i> Proses pembelian dan
                                penyewaan yang mudah dan cepat.
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i> Harga kompetitif dengan
                                berbagai pilihan kendaraan.
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i> Dukungan pelanggan yang
                                responsif dan ramah.
                            </li>
                        </ul>
                        <a href="#" class="primary-btn">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="chooseus__video set-bg">
            <img src="{{ asset('src/assets/img/chooseus-video.png') }}" alt="Video Kami" />
        </div>
    </section>
    <!-- Chooseus Section End -->

    @include('layouts.footer')

    <!-- Js Plugins -->
    @include('layouts.scripts')
</body>

</html>
