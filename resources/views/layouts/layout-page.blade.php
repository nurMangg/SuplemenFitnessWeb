<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @stack('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suplemen Fitness | {{ $title }}</title>
    <link rel="shortcut icon" href="{{ url('images/icon2.svg') }}" type="image/x-icon/svg">
    <link rel="shortcut icon" href="{{ url('images/icon2.svg') }}" type="image/png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <script src="https://kit.fontawesome.com/0faa490725.js" crossorigin="anonymous"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

    html,
    body {
        height: 100%
    }

    body {
        display: grid;
        background: #fff;
        font-family: 'Times New Roman', Times, serif;
    }

    .mydiv {
        margin-top: 50px;
        margin-bottom: 50px
    }

    .cross {
        font-size: 10px
    }

    .padding-0 {
        padding-right: 5px;
        padding-left: 5px
    }

    .img-style {
        margin-left: -11px;
        box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        max-width: 104% !important
    }

    .m-t-20 {
        margin-top: 20px
    }

    .bbb_background {
        background-color: #E0E0E0 !important
    }

    .ribbon {
        width: 150px;
        height: 150px;
        overflow: hidden;
        position: absolute
    }

    .ribbon span {
        position: absolute;
        display: block;
        width: 34px;
        border-radius: 50%;
        padding: 8px 0;
        background-color: #3498db;
        box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
        color: #fff;
        font: 100 18px/1 'Lato', sans-serif;
        text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
        text-transform: uppercase;
        text-align: center
    }

    .ribbon-top-right {
        top: -10px;
        right: -10px
    }

    .ribbon-top-right::before,
    .ribbon-top-right::after {
        border-top-color: transparent;
        border-right-color: transparent
    }

    .ribbon-top-right::before {
        top: 0;
        left: 17px
    }

    .ribbon-top-right::after {
        bottom: 17px;
        right: 0
    }


    .ribbon-top-right span {
        right: 17px;
        top: 17px
    }

    div {
        display: block;
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    .bbb_deals_featured {
        width: 100%
    }


    .bbb_deals_title {
        position: absolute;
        top: 10px;
        left: 22px;
        font-size: 18px;
        font-weight: 500;
        color: #000000
    }

    .bbb_deals_slider_container {
        width: 100%
    }

    .bbb_deals_item {
        width: 100% !important
    }

    .bbb_deals_image {
        width: 100%
    }

    .bbb_deals_image img {
        width: 100%
    }

    .bbb_deals_content {
        margin-top: 33px
    }

    .bbb_deals_item_category a {
        font-size: 14px;
        font-weight: 400;
        color: rgba(0, 0, 0, 0.5)
    }

    .bbb_deals_item_price_a {
        font-size: 14px;
        font-weight: 400;
        color: rgba(0, 0, 0, 0.6)
    }

    .bbb_deals_item_price_a strike {
        color: red
    }

    .bbb_deals_item_name {
        font-size: 18px;
        font-weight: 400;
        color: #000000
    }

    .bbb_deals_item_price {
        font-size: 20px;
        font-weight: 500;
        color: #6d6e73
    }

    .available {
        margin-top: 19px
    }


    @media only screen and (max-width: 991px) {
        .bbb_deals {
            width: 100%;
            margin-right: 0px
        }
    }

    @media only screen and (max-width: 1200px) {
        .topheader {
            overflow: hidden;
        }
    }

    @media only screen and (max-width: 575px) {
        .bbb_deals {
            padding-left: 15px;
            padding-right: 15px
        }

        .bbb_deals_title {
            left: 15px;
            font-size: 16px
        }

        .bbb_deals_slider_nav_container {
            right: 5px
        }

        .bbb_deals_item_name,
        .bbb_deals_item_price {
            font-size: 20px
        }
    }


    /* CSS subheading */
    .subheading {
        background: url('images/backgroundd.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    @media only screen and (max-width: 500px) {
        .subheading {
            background: url('images/background-mobile.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

    }

</style>

<body>
    <section class="topheader text-light" style="background-color: #1f1f1f">
        <div class="top-header">
            <div class="container">
                <div class="row mt-2 mb-2">
                    <div class="col-3">
                        <strong>Website Pemilihan Suplemen Fitness</strong>
                    </div>
                    <div class="col-3">

                    </div>
                    <div class="col-3"></div>
                    <div class="col-3">
                        Nur Rohman
                    </div>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg bg-light p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Suplemen Fitness</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 {{ ($title === 'Home') ? 'active' : '' }}" aria-current="page"
                            href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 {{ ($title === 'Product') ? 'active' : '' }}"
                            href="{{ url('/product') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 {{ ($title === 'Recommendation') ? 'active' : '' }}"
                            href="{{ url('/spk') }}">Recommendation</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link mx-2 {{ ($title === 'Contact') ? 'active' : '' }}"
                            href="{{ url('/contact') }}">Contact</a>
                    </li>

                </ul>
                <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                    <li class="nav-item mx-2">
                        <a class="nav-link h5" style="color: black" href="https://www.github.com/nurMangg"
                            target="blank"><i class="fa-brands fa-github" style="color: #000000;"></i></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-dark h5" href="https://www.linkedin.com/in/nurMangg" target="blank"><i
                                class="fa-brands fa-linkedin" style="color: #000000;"></i></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-dark h5" href="https://www.facebook.com/nurMangg" target="blank"><i
                                class="fab fa-facebook-square"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="">
        @yield('content')
    </main>


    <?php $info = DB::table('account_info')->get(); ?>


    <footer class="p-2 text-dark bg-opacity-10" style="background-color: #1f1f1f">
        <div class="container mt-5">
            <footer class="py-5">
                <div class="row">
                    <div class="col-md-4 mb-3 text-light">
                        <h5><b>Suplemen Fitness</b></h5>
                        @foreach ($info as $item)
                        <p style="text-align: justify">Pemilihan suplemen fitness yang tepat dapat memberikan manfaat
                            tambahan dalam mencapai tujuan kesehatan dan kebugaran. Namun, penting untuk diingat bahwa
                            suplemen tidak boleh digunakan sebagai pengganti pola makan yang seimbang dan gaya hidup
                            sehat secara keseluruhan.</p>
                        <p>
                            <i class="fa fa-envelope me-2" aria-hidden="true"></i>
                            {{ $item->email }}
                        </p>
                        <p>
                            <i class="fa fa-whatsapp me-2" aria-hidden="true"></i>
                            {{ $item->nohp }}
                        </p>
                        @endforeach

                    </div>


                    <div class="col-md-3  col-lg-2 mb-3 text-light">
                        <h5>Menus</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-light">Home</a></li>
                            <li class="nav-item mb-2"><a href="/product" class="nav-link p-0 text-light">Product</a>
                            </li>
                            <li class="nav-item mb-2"><a href="/spk" class="nav-link p-0 text-light">Recommendation</a>
                            </li>
                            <li class="nav-item mb-2"><a href="/contact" class="nav-link p-0 text-light">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 offset-md-1 mb-3 text-light">
                        <form>
                            <h5>Subscribe to our newsletter</h5>
                            <p>Monthly digest of what's new and exciting from us.</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top text-light">
                    <p>Copyright © 2023 Suplemen Fitness. All Rights Reserved.
                        Designed & Developed by <a href="https://wa.me/6285713050749">studywithmangg</a></p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><i class="fa fa-facebook-square" aria-hidden="true"></i></li>
                        <li class="ms-3"><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li class="ms-3"><i class="fa fa-github" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </footer>
        </div>
    </footer>

    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>
</body>

</html>
