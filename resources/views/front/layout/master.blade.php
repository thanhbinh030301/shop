<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | CodeGym</title>

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Josefin+Sans%3A400%2C500%2C600%2C700%7CSource+Serif+Pro%3A400%2C400i%2C600%2C700%2C700i&subset=latin%2Clatin-ext&display=swap"
        rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

    <!-- Css Styles -->
    <link rel="stylesheet" href="/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/front/css/themify-icons.css">
    <link rel="stylesheet" href="/front/css/elegant-icons.css">
    <link rel="stylesheet" href="/front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/front/css/nice-select.css">
    <link rel="stylesheet" href="/front/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/front/css/slicknav.min.css">
    <link rel="stylesheet" href="/front/css/style.css">
    <link rel="stylesheet" href="/front/css/header/index.css">
</head>

<body>
    <!-- Start coding here -->
    <div class="menu-overlay"></div>

    <div id="wrapper">
        <!-- Header Section Begin -->
        <header class="header-section mt-2">
            <div class="container container-logo">
                <div class="burger-icon" id="burger">
                    <svg class="ularge icon open">
                        <use xlink:href="#menu-icon"></use>
                    </svg>
                    <svg class="ularge icon close">
                        <use xlink:href="#close-icon"></use>
                    </svg>
                </div>

                <div class="social-group-icon">
                    <a href="#" class="button social-icon facebook" target="_blank" aria-label="Facebook"
                        rel="nofollow noopener"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="button social-icon twitter" target="_blank" aria-label="Twitter"
                        rel="nofollow noopener"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="button social-icon instagram" target="_blank" aria-label="Instagram"
                        rel="nofollow noopener"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="button social-icon rss" target="_blank" aria-label="RSS"
                        rel="nofollow noopener"><i class="fa fa-rss"></i></a>
                </div>
                <div class="logo">
                    <a href="{{ route('home') }}" class="title ularge black no-margin">
                        <span>Maktub</span>
                    </a>
                </div>
                <div class="search">
                    <a href="#" class="epcl-search-button button circle"><svg class="icon">
                            <use xlink:href="#search-icon"></use>
                        </svg></a>
                </div>
            </div>

            <nav class="container main-nav nav-open grid-container">
                <div class="row">
                    <ul id="menu-header" class="menu">
                        <li class="menu-item">
                            <a href={{ route('home') }}>Home</a>
                        </li>
                        @foreach ($nav as $item)
                            <li class="menu-item">
                                <a href={{ route('detail_feature', ['slug' => $item['slug']]) }}>{{ $item['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                data-amp-original-style="display: none;" class="d-none">

                <symbol id="copy-icon" viewBox="0 0 24 24">
                    <g>
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path
                            d="M7 6V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-3v3c0 .552-.45 1-1.007 1H4.007A1.001 1.001 0 0 1 3 21l.003-14c0-.552.45-1 1.007-1H7zM5.003 8L5 20h10V8H5.003zM9 6h8v10h2V4H9v2z">
                        </path>
                    </g>
                </symbol>

                <symbol id="comments-outline-icon" viewBox="0 0 24 24">
                    <g>
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path
                            d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655z">
                        </path>
                    </g>
                </symbol>

                <symbol id="views-outline-icon" viewBox="0 0 24 24">
                    <g>
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path
                            d="M12 23a7.5 7.5 0 0 0 7.5-7.5c0-.866-.23-1.697-.5-2.47-1.667 1.647-2.933 2.47-3.8 2.47 3.995-7 1.8-10-4.2-14 .5 5-2.796 7.274-4.138 8.537A7.5 7.5 0 0 0 12 23zm.71-17.765c3.241 2.75 3.257 4.887.753 9.274-.761 1.333.202 2.991 1.737 2.991.688 0 1.384-.2 2.119-.595a5.5 5.5 0 1 1-9.087-5.412c.126-.118.765-.685.793-.71.424-.38.773-.717 1.118-1.086 1.23-1.318 2.114-2.78 2.566-4.462z">
                        </path>
                    </g>
                </symbol>

                <symbol id="search-icon" viewBox="0 0 24 24">
                    <g>
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path
                            d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z">
                        </path>
                    </g>
                </symbol>

                <symbol id="star-icon" viewBox="0 0 24 24">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path
                        d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928L12 18.26zm0-2.292l4.247 2.377-.949-4.773 3.573-3.305-4.833-.573L12 5.275l-2.038 4.42-4.833.572 3.573 3.305-.949 4.773L12 15.968z">
                    </path>
                </symbol>

                <symbol id="menu-icon" viewBox="0 0 24 24">
                    <g>
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M3 4h18v2H3V4zm0 7h12v2H3v-2zm0 7h18v2H3v-2z"></path>
                    </g>
                </symbol>

                <symbol id="close-icon" viewBox="0 0 24 24">
                    <g>
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path
                            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z">
                        </path>
                    </g>
                </symbol>

                <symbol id="tiktok-icon" viewBox="0 0 512 512">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path
                        d="m480.32 128.39c-29.22 0-56.18-9.68-77.83-26.01-24.83-18.72-42.67-46.18-48.97-77.83-1.56-7.82-2.4-15.89-2.48-24.16h-83.47v228.08l-.1 124.93c0 33.4-21.75 61.72-51.9 71.68-8.75 2.89-18.2 4.26-28.04 3.72-12.56-.69-24.33-4.48-34.56-10.6-21.77-13.02-36.53-36.64-36.93-63.66-.63-42.23 33.51-76.66 75.71-76.66 8.33 0 16.33 1.36 23.82 3.83v-62.34-22.41c-7.9-1.17-15.94-1.78-24.07-1.78-46.19 0-89.39 19.2-120.27 53.79-23.34 26.14-37.34 59.49-39.5 94.46-2.83 45.94 13.98 89.61 46.58 121.83 4.79 4.73 9.82 9.12 15.08 13.17 27.95 21.51 62.12 33.17 98.11 33.17 8.13 0 16.17-.6 24.07-1.77 33.62-4.98 64.64-20.37 89.12-44.57 30.08-29.73 46.7-69.2 46.88-111.21l-.43-186.56c14.35 11.07 30.04 20.23 46.88 27.34 26.19 11.05 53.96 16.65 82.54 16.64v-60.61-22.49c.02.02-.22.02-.24.02z">
                    </path>
                </symbol>

                <symbol id="tool-icon" viewBox="0 0 24 24">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path
                        d="M6.94 14.036c-.233.624-.43 1.2-.606 1.783.96-.697 2.101-1.139 3.418-1.304 2.513-.314 4.746-1.973 5.876-4.058l-1.456-1.455 1.413-1.415 1-1.001c.43-.43.915-1.224 1.428-2.368-5.593.867-9.018 4.292-11.074 9.818zM17 9.001L18 10c-1 3-4 6-8 6.5-2.669.334-4.336 2.167-5.002 5.5H3C4 16 6 2 21 2c-1 2.997-1.998 4.996-2.997 5.997L17 9.001z">
                    </path>
                </symbol>

            </svg>
        </header>
        <!-- Header Section End -->
        <header class="sticky-nav">
            <nav class="container main-nav">
                <div class="logo ">
                    <a href="{{ route('home') }}" class="title black no-margin">
                        <span>Maktub</span>
                    </a>
                </div>
                <ul id="menu-header" class="menu">
                    @foreach ($nav as $item)
                        <li class="menu-item">
                            <a href={{ route('detail_feature', ['slug' => $item['slug']]) }}>{{ $item['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </header>

        {{-- Body here --}}
        @yield('body')

        <!-- Footer Section Begin -->
        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-left">
                            <div class="footer-logo">
                                <a href="index.html">
                                    {{-- <img src="front/img/footer-logo.png" height="25" alt=""> --}}
                                </a>
                            </div>
                            <ul>
                                <li>xã Tân Hiệp, Hóc Môn</li>
                                <li>Phone: +84 987654321</li>
                                <li>Email: shopchuong@gmail.com</li>
                            </ul>
                            <div class="footer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1">
                        <div class="footer-widget">
                            <h5>Information</h5>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Serivius</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <h5>My account</h5>
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                <li><a href="#">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="newslatter-item">
                            <h5>Join Our Newsletter Now</h5>
                            <p>Get E-mail updates about our lastest shop and special offers.</p>
                            <form action="#" class="subscribe-form">
                                <input type="text" placeholder="Enter Your Mail">
                                <button type="button">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-reserved">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-text">
                                Copyright @
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#"
                                    target="_blank">CodeLean</a>
                            </div>
                            <div class="payment-pic">
                                <img src="front/img/payment-method.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="/front/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="/front/js/plugins/bootstrap.min.js"></script>
    <script src="/front/js/plugins/jquery-ui.min.js"></script>
    <script src="/front/js/plugins/jquery.countdown.min.js"></script>
    <script src="/front/js/plugins/jquery.nice-select.min.js"></script>
    <script src="/front/js/plugins/jquery.zoom.min.js"></script>
    <script src="/front/js/plugins/jquery.dd.min.js"></script>
    <script src="/front/js/plugins/jquery.slicknav.js"></script>
    <script src="/front/js/plugins/owl.carousel.min.js"></script>
    <script src="/front/js/main.js"></script>
    <script src="/front/js/header/index.js"></script>
</body>

</html>
