<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/all.min.css')}}">
    <link href="{{asset('assets/vendors/aos/aos.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/loader.js')}}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    {{--    <div class="container">--}}
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent" style="flex-wrap: nowrap">
        <a class="navbar-brand" href="/" style="margin-right: -7px"><img src="{{asset('assets/images/kant.svg')}}"
                                                                         alt="Кантилена" style="width: 12%">
            <img
                src="{{asset('assets/images/Гардения2.jpeg')}}"
                alt="Кантилена" style="width: 20%"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="edicaMainNav">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Главная<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/about" id="pagesDropdown" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Коллектив</a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="/about">О нас</a>
                        <a class="dropdown-item" href="/award">Наши награды</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/posts">Новости</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Медиа</a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="/image">Галерея</a>
                        <a class="dropdown-item" href="/video">Видео</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacts">Контакты</a>
                </li>
                <li class="nav-item mt-lg-1 ml-4">
                    <a href="https://www.youtube.com/channel/UCpec_AHsTNLEUDRa87h0XdA"><i class="fab fa-youtube"
                                                                                          style="color:black"></i></a>
                </li>
                <li class="nav-item mt-lg-1 ml-4">
                    <a href="https://www.instagram.com/kantilena_hor?igsh=MXFveXptZWhvbjFlNA=="><i
                            class="fab fa-instagram"
                            style="color:black"></i></a>
                </li>
                <li class="nav-item mt-lg-1 ml-4">
                    <a href="https://uk.minsk.gov.by/shkoly/guo-detskaya-muzykalnaya-shkola-iskusstv-5-g-minska"><i
                            class="fas fa-globe" style="color:black"></i></a>
                </li>
            </ul>
            {{--            <ul class="navbar-nav mt-2 mt-lg-0">--}}
            {{--                <li class="nav-item">--}}
            {{--                    <a class="nav-link" href="{{route('login')}}">Войти</a>--}}
            {{--                </li>--}}
            {{--                <li class="nav-item">--}}
            {{--                    <form action="{{ route('logout') }}" method="post">--}}
            {{--                        @csrf--}}
            {{--                        @method('POST')--}}
            {{--                        <input class="btn btn-outline-primary" type="submit" value="Выйти">--}}
            {{--                    </form>--}}
            {{--                </li>--}}
            {{--            </ul>--}}
        </div>
    </nav>
    {{--    </div>--}}
</header>

@yield('content')

<footer class="edica-footer mt-4" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-4">
                <a href="/" class="footer-brand-wrapper">
                    <img src="{{asset('assets/images/kant.svg')}}" alt="logo">
                </a>
                <p class="contact-details">Образцовый хор "Кантилена"</p>
                {{--                <p class="contact-details">kantilena.music@gmail.com</p>--}}
                <p class="contact-details">kantilena-minsk@ya.ru</p>

                <div class="footer-bottom-nav pt-3">

                    <a href="https://uk.minsk.gov.by/" class="footer-brand-wrapper d-inline">
                        <img src="{{asset('assets/images/Minsk2.png')}}" alt="logo"
                             style="width: 25%">
                    </a>
                    <a href="https://uk.minsk.gov.by/" class="footer-brand-wrapper d-inline pl-3">
                        <img src="{{asset('assets/images/rb.png')}}" alt="logo" style="width: 30%">
                    </a>
                </div>


                <nav class="footer-social-links">
                    <a href="https://www.youtube.com/channel/UCpec_AHsTNLEUDRa87h0XdA"><i class="fab fa-youtube"
                                                                                          style="color:black"></i></a>
                    <a href="https://www.instagram.com/kantilena_hor?igsh=MXFveXptZWhvbjFlNA=="><i
                            class="fab fa-instagram"
                            style="color:black"></i></a>
                    <a href="https://uk.minsk.gov.by/shkoly/guo-detskaya-muzykalnaya-shkola-iskusstv-5-g-minska"><i
                            class="fas fa-globe" style="color:black"></i></a>
                </nav>
            </div>
            <div class="col-md-4">
                <nav class="footer-nav">
                    <a href="/" class="nav-link">Главная</a>
                    <a href="/about" class="nav-link">О нас</a>
                    <a href="/posts" class="nav-link">Новости</a>
                    <a href="/image" class="nav-link">Галерея</a>
                    <a href="/video" class="nav-link">Видео</a>
                    <a href="/contacts" class="nav-link">Контакты</a>
                </nav>
            </div>
            <div class="col-md-4">
                <p>Образцовый хор "Кантилена"</p>
                <p>г.Минск, ул.Пономаренко, 10</p>
                <p>ГУО «Детская музыкальная школа искусств № 5 г. Минска»</p>
                <div class="embed-responsive embed-responsive-1by1 contact-map w-50">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2351.1303160657203!2d27.48996307676528!3d53.89388767245311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbdaadcb3de155%3A0x6e3eb7bf43da10cb!2z0JzRg9C30YvQutCw0LvRjNC90LDRjyDRiNC60L7Qu9CwIOKEliA1!5e0!3m2!1sru!2sby!4v1709036132342!5m2!1sru!2sby"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assets/vendors/popper.js/popper.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendors/aos/aos.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    AOS.init({
        duration: 2000
    });
</script>
</body>
</html>
