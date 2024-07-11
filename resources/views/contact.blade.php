<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HVAC | Template</title>

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
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__links">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <h2>Let’s Work Together</h2>
                            <p>To make requests for further information, contact us via our social channels.</p>
                        </div>
                        <ul>
                            <li><span>Weekday</span> 08:00 am to 18:00 pm</li>
                            <li><span>Saturday:</span> 10:00 am to 16:00 pm</li>
                            <li><span>Sunday:</span> Closed</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                            </div>
                            <input type="text" placeholder="Subject">
                            <textarea placeholder="Your Question"></textarea>
                            <button type="submit" class="site-btn">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Contact Address Begin -->
    <div class="contact-address">
        <div class="container">
            <div class="contact__address__text">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h4>Depok Showroom</h4>
                            <p>Jl. Itu No.34 Depok, Jawa Barat, Indonesia</p>
                            <span>+62 8456 6789 1002</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h4>Bogor Showroom</h4>
                            <p>Jl. Sana No.42 Bogor, Jawa Barat, Indonesia</p>
                            <span>+62 8124 5678 9100</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h4>Bandung Showroom</h4>
                            <p>Jl. Itu No.12 Bandung, Jawa Barat, Indonesia</p>
                            <span>+62 8456 6785 9100</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Address End -->

    @include('layouts.footer')



    <!-- Js Plugins -->
    @include('layouts.scripts')

</body>

</html>
