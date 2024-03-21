@extends('layouts.main')
@section('content')

    <header class="edica-header ">
        <div class="edica-landing-header-content relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
            <div id="edicaLandingHeaderCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="0" class="active">1</li>
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="1">2</li>
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="2">3</li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="card bg-dark text-center mx-auto max-w-6xl px-6 lg:px-6">
                            <img class="card-img" src="{{asset('img/фон10.jpg')}}" alt="Card image">
                            <div class="position-absolute card-img-overlay" style="margin-top: 8%">
                                <h1 style="letter-spacing: 10px; color: #e6e1f281; font-size: 10vw;">Образцовый хор
                                    "Кантилена"</h1>
                                <h3 class="card-text">Детской музыкальной школы искусств №5 г.Минска</h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card bg-dark text-white text-center">
                            <img class="card-img" src="{{asset('img/фон9.jpg')}}" alt="Card image">
                            <div class="card-img-overlay" style="margin-top: 8%">
                                <h1 style="letter-spacing: 10px; color: #e6e1f2; font-size: 5vw;">"Кантилена" — хор,
                                    объединяющий души!</h1>
                                <h3>Детский хор - путевка в жизнь через музыку и любовь!</h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="card bg-dark text-white text-center">
                                <img class="card-img" src="{{asset('img/фон11.jpg')}}" alt="Card image">
                                <div class="card-img-overlay" style="margin-top: 10%">
                                    <h1 style="letter-spacing: 10px; color: #f9f7fcbd; font-size: 9vw;">Окунитесь в мир
                                        хорового искусства!</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="edica-landing-section edica-landing-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up-right">
                        <h4 class="edica-landing-section-subtitle-alt">О нас</h4>
                        <h2 class="edica-landing-section-title">Основан в 2006 году</h2>
                        <p>Хор ведет активную концертную деятельность, выступая нам самых
                            различных площадках города.</p>
                        <p>Работа коллектива направлена прежде всего на воспитание в
                            учениках высокого уровня культуры и эстетического вкуса, любви к
                            музыкальному искусству посредством хорового и сольного
                            исполнительства.</p>
                        <p>Концертная деятельность хора, подбор высокохудожественного
                            репертуара, поиск новых методов и средств в достижении высокого
                            уровня исполнительского мастерства являются практической
                            реализацией творческой идеи коллектива.</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up-left">
                        <img src=" {{asset('img/3.jpg')}} " width="468px" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-services">
            <div class="container">
                <h4 class="edica-landing-section-subtitle">Наш репертуар</h4>
                <h2 class="edica-landing-section-title">Лучшие произведения музыкальной классики</h2>
                <div class="row">
                    <div class="col-md-6 blog-post mb-1" data-aos="fade-right">
                        <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/frc1wGmjfa0?si=GPNWMAUChoAIUx9M"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6 blog-post mb-1" data-aos="fade-left">
                        <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/jh3aiYGgcA0?si=OtD6KJaYK_S_cX3F"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6 blog-post mb-1" data-aos="fade-right">
                        <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/FJAO6SWdibU?si=TAv1xdL84Ap718iD"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6 blog-post mb-1" data-aos="fade-left">
                        <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/VMpgVbN3FDw?si=KMx0aYZ022jXIU-O"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-testimonials" data-aos="fade-up">
            <div class="container">
                <div id="edicaLandingTestimonialCarousel" class="carousel slide landing-testimonial-carousel"
                     data-ride="carousel">
                    <div class="text-center py-4">
                        <img src=" {{asset('assets/images/quote.svg')}} " alt="quote" style="width: 70px">
                    </div>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item bg-white">
                            <blockquote class="testimonial">
                                <p>«Величие искусства, пожалуй, ярче всего проявляется в музыке, ибо она не имеет
                                    содержания, с которым нужно считаться. Она – все формы и наполнения. Она делает
                                    возвышенным и благородным все, что берется выразить»</p>
                                <footer class="blockquote-footer">Иоганн Вольфганг фон Гёте</footer>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>«Музыка своей мелодией доводит нас до самого края вечности и дает нам возможность в
                                    течение нескольких минут постичь ее величие».</p>
                                <footer class="blockquote-footer">Томас Карлейль</footer>
                            </blockquote>
                        </div>
                        <div class="carousel-item active">
                            <blockquote class="testimonial">
                                <p>«Музыка воплощает в себе чувство, не заставляя его утверждать и смешать с мыслью, как
                                    оно вынуждено в большинстве искусств, особенно в искусстве слова…»</p>
                                <footer class="blockquote-footer">Ференц Лист</footer>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>«Любите и изучайте великое искусство музыки. Оно откроет вам целый мир высоких
                                    чувств, страстей, мыслей. Оно сделает вас духовно богаче. Благодаря музыке вы
                                    найдете в себе новые, неведомые вам прежде силы. Вы увидите жизнь в новых тонах и
                                    красках».</p>
                                <footer class="blockquote-footer">Дмитрий Шостакович</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-blog">
            <div class="container">
                <h4 class="edica-landing-section-subtitle" data-aos="fade-up">Наши награды</h4>
                <h2 class="edica-landing-section-title" data-aos="fade-up">Малая часть достижений на площадках разного уровня</h2>
                <div class="row">
                    <div class="col-md-4 landing-blog-post" data-aos="fade-right">
                        <a href="{{asset('img/Д15.jpg')}}" data-toggle="lightbox"
                           data-gallery="gallery"  target="_blank">
                            <img src="{{asset('img/Д15.jpg')}}" class="img-fluid" alt="blog post">
                        </a>
                    </div>
                    <div class="col-md-4 landing-blog-post" data-aos="fade-up">
                        <a href="{{asset('img/Д14.jpg')}}" data-toggle="lightbox"
                           data-gallery="gallery"  target="_blank">
                            <img src="{{asset('img/Д14.jpg')}}" class="img-fluid" alt="blog post">
                        </a>
                    </div>
                    <div class="col-md-4 landing-blog-post" data-aos="fade-left">
                        <a href="{{asset('img/Д13.jpg')}}" data-toggle="lightbox"
                           data-gallery="gallery"  target="_blank">
                            <img src="{{asset('img/Д13.jpg')}}" class="img-fluid" alt="blog post">
                        </a>
                    </div>
                    <div class="col-md-4 landing-blog-post mt-3" data-aos="fade-right">
                        <a href="{{asset('img/Д12.jpg')}}" data-toggle="lightbox"
                           data-gallery="gallery" class="w-100" target="_blank">
                            <img src="{{asset('img/Д12.jpg')}}" class="img-fluid" alt="blog post">
                        </a>
                    </div>
                    <div class="col-md-4 landing-blog-post mt-3" data-aos="fade-up">
                        <a href="{{asset('img/Д11.jpg')}}" data-toggle="lightbox"
                           data-gallery="gallery" class="w-100" target="_blank">
                            <img src="{{asset('img/Д11.jpg')}}" class="img-fluid" alt="blog post">
                        </a>
                    </div>
                    <div class="col-md-4 landing-blog-post mt-3" data-aos="fade-left">
                        <a href="{{asset('img/Д10.jpg')}}" data-toggle="lightbox"
                           data-gallery="gallery" class="w-100" target="_blank">
                            <img src="{{asset('img/Д10.jpg')}}" class="img-fluid" alt="blog post">
                        </a>
                    </div>

                    <div class="col-md-4 landing-blog-post mt-3" data-aos="fade-right">
                        <a href="{{asset('img/Д9.jpg')}}" data-toggle="lightbox"
                           data-gallery="gallery" class="w-100" target="_blank">
                            <img src="{{asset('img/Д9.jpg')}}" class="img-fluid" alt="blog post">
                        </a>
                    </div>
                    <div class="col-md-4 landing-blog-post mt-3" data-aos="fade-up">
                        <a href="{{asset('img/Д8.jpg')}}" data-toggle="lightbox"
                           data-gallery="gallery" class="w-100" target="_blank">
                            <img src="{{asset('img/Д8.jpg')}}" class="img-fluid" alt="blog post">
                        </a>
                    </div>
                    <div class="col-md-4 landing-blog-post mt-3" data-aos="fade-left">
                        <a href="{{asset('img/Д6.jpg')}}" data-toggle="lightbox"
                           data-gallery="gallery" class="w-100" target="_blank">
                            <img src="{{asset('img/Д6.jpg')}}" class="img-fluid" alt="blog post">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


