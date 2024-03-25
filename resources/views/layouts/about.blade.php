@extends('layouts.main')
@section('content')
    <main class="blog-post mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <h1 class="edica-page-title" data-aos="fade-up">О нас</h1>
                    <section class="edica-about-intro py-5">
                        <div class="row">
                            <blockquote class="col-md-6" data-aos="fade-right" data-aos-delay="150" style="border-left: .7rem solid #000000;">
                                <div class="text-left py-1">
                                    <img src=" {{asset('assets/images/quote.svg')}} " alt="quote" style="width: 90px">
                                </div>
                                <h2 class="intro-title pb-3 pb-md-0 mb-4 mb-md-0">«Хор – это высочайшее искусство и искренний разговор со слушателями»
                                </h2>
                            <footer class="blockquote-footer">В.Н. Минин, профессор, создатель и бессменный художественный руководитель Московского государственного академического камерного хора</footer>
                            </blockquote>
                            <div class="col-md-6 intro-content" data-aos="fade-left" data-aos-delay="150">
                                <p><span class="first-letter">Д</span>етский хор «Кантилена»- это творческий коллектив
                                    детей в возрасте от 10 до 16 лет, которых обьединяет любовь к музыке, пению, к
                                    искусству.
                                    <br>За время своего существования хор стал настоящей музыкальной семьей,
                                    формирующей и раскрывающей творческий потенциал учащихся, дающей возможность
                                    проявить себя каждому участнику хора.
                                </p>
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-vision py-5">
                        <div class="row">
                            <div class="col-md-6 pb-3 pb-md-0 mb-4 mb-md-0" data-aos="fade-right" data-aos-delay="200">
                                <img src=" {{asset('assets/images/024-229.jpg')}}" alt="vision" class="img-fluid">
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <h2 class="vision-title" data-aos="fade-left">Руководитель</h2>
                                <p class="vision-text" data-aos="fade-left">Хор «Кантилена» детской музыкальной школы
                                    искусств №5 г.Минска был образован в 2006 г. Звание «образцовый» получил в 2009.
                                    <br>Художественный руководитель – <strong>Моргачева Инна Сергеевна</strong>,
                                    выпускница УО "Минский государственный музыкальный колледж им. М.И. Глинки" и Белорусской государственной Академии Музыки.
                                    <br>Преподаватель высшей категории, лауреат международных конкурсов, преподаватель высшей категории.
                                </p>
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-goal py-5 mb-5">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0 d-flex flex-column justify-content-center"
                                 data-aos="fade-right">
                                <h2 class="goal-title">Концертмейстер</h2>
                                <p class="goal-text"><strong>Шичко Екатерина Петровна</strong> в 1993-2003 гг. обучалась в ГУО «Гимназия-колледж искусств имени И.О. Ахремчика» (класс фортепиано преподавателя А.А.Романович).
                                <br>В 2003-2008 гг. продолжила обучение в Белорусской государственной академии музыки (класс доцента Т.Г.Володько).
                                    <br>С 2016 года и по настоящее время работает в ГУО «Детская музыкальная школа искусств № 5 г. Минска»
                                    заведующей отделом концертмейстеров.
                                    <br>Принимала участие в международных и республиканских конкурсах.
                                Награждена дипломами за высокое профессиональное мастерство.</p>
                            </div>
                            <div class="col-md-6" data-aos="fade-left">
                                <img src=" {{asset('img/IMG_6169.jpeg')}}" alt="goal" class="img-fluid">
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-faq py-5 mb-5">
                        <h2 class="faq-title" data-aos="fade-up">Наши достижения</h2>
                        <p class="faq-section-text" data-aos="fade-up" data-aos-delay="100">Хор является лауреатом и
                            дипломантом таких фестивале и конкурсов, как:
                            <br> - «Рэха», первый Белорусский фестиваль-конкурс национальной хоровой музыки, лауреат III
                            степени,2011.
                            <br> - «Страна магнолий», международный фестиваль-конкурс (г.Сочи,Россия),лауреат II
                            степени,2009
                            <br>- «Праздник весны», международный конкурс (г.Прага,Чехия),лауреат II степени,2010
                            <br> -«Веснавы праменьчык» (г.Молодечно, Беларусь),открытый региональный конкурс,лауреат II
                            степени,2010
                            <br> -«Сияние талантов», первый открытый конкурс искусств (г.Минск),лауреат II степени,2011
                            <br> -«Сузорье», фестиваль народного творчества, диплом II степени.
                            <br> -«Вясновы спеу»,I Минский городской конкурс хоровых коллективов, лауреат II
                            степени,2014
                            <br> -«Песни над Невой», IX Международный конкурс хоровых коллективов
                            (г.Санкт-Петербург),лауреат I степени,2015.
                            <br> -«Вясновы спеу»,II Минский городской конкурс хоровых коллетивов, лауреат I степени,2016
                            <br> - Хоровые концерты в рамках года культуры Беларуси в Италии. Большой концертный тур по
                            г.Верона,Падуя,Венеция. 2017.
                            <br> -«Вясновы спеу», III Минский городской конкурс хоровых коллективов, лауреат II степени,
                            2018
                            <br> - XVI Mеждународный детско-юношеский фестиваль «Звучит Москва», лауреат 1 степени в
                            номинации «Академическое хоровое пение», лауреат 1 степени в номинации « Лучшее исполнение
                            произведений западноевропейской духовной музыки. 2018
                            <br> - XVI Mеждународный детско-юношеский фестиваль «Звучит Москва», лауреат 1 степени в
                            номинации «Академическое хоровое пение», лауреат 1 степени в номинации « Лучшее исполнение
                            произведений западноевропейской духовной музыки. 2018
                            <br> - RIGA SINGS ( Interkultur) - 2019 Международный конкурс и вручение премии им.И.Кокарса
                            <br> Номинация Детские хоры-золотой диплом
                            <br> Номинация Духовная музыка -серебряный диплом
                            <br> - «Millenium» III Международный многожанровый фестиваль-конкурс (г.Брест)- лауреат 1
                            степени
                            <br> - Фестиваль «Сузорье» лауреат 1 степени
                            <br> - «Вясновы спеу-2021» IV Минский открытый конкурс хоровых коллективов, вокалистов и
                            вокальных ансамблей, Гран-при
                            <br> - 1 Международный хоровой конкурс имени В.Ровдо. Победитель категории- «Детские хоры до
                            16 лет», лауреат 1 степени- категория «Духовная музыка»
                            <br> - VIII Всероссийский фестиваль-конкурс хорового искусства «Виват,хор!» (Москва 2022),
                            лауреат 1 степени в номинации : Академическй хор
                            <br> -IX Детско-юношеский хоровой чемпионат мира (г.Санкт-Петербург)- лауреат 1 степени и
                            золотой диплом. Специальные дипломы за «Лучшее исполнение духовной музыки» и за «Лучшее
                            исполнение современной музыки»
                            <br> - I Минский хоровой фестиваль-конкурс патриотической песни им.А.П.Грасса , лауреат 1
                            степени
                            <br> - XXI Mеждународный детско-юношеский фестиваль «Звучит Москва», лауреат 2 степени в
                            номинации «Академическое хоровое пение», лауреат 1 степени в номинации « Лучшее исполнение
                            произведений западноевропейской духовной музыки. 2023
                        </p>
                        <div class="accordion" id="edicaAboutFaqCollapse" role="tablist" aria-multiselectable="true">
                            <h2 class="faq-title" data-aos="fade-up">Мероприятия при участии сводного хора</h2>
                            <div class="card" data-aos="fade-up" data-aos-delay="200">
                                <div class="card-header" role="tab" id="edicaAboutFaq1">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse"
                                           href="#edicaAboutFaqContent1" aria-expanded="true"
                                           aria-controls="edicaAboutFaqContent1">
                                            Концерты ко Дню независимости и Дню города
                                        </a>
                                    </h5>
                                </div>
{{--                                <div id="edicaAboutFaqContent1" class="collapse in" role="tabpanel"--}}
{{--                                     aria-labelledby="edicaAboutFaq1">--}}
{{--                                    <div class="card-body">--}}
{{--                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit reiciendis quas--}}
{{--                                        quos ipsa hic cumque debitis, facere illum facilis alias quae, labore totam,--}}
{{--                                        voluptatibus aspernatur corrupti! Enim quo dolores quos.--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="300">
                                <div class="card-header" role="tab" id="edicaAboutFaq2">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse"
                                           href="#edicaAboutFaqContent2" aria-expanded="false"
                                           aria-controls="edicaAboutFaqContent1">
                                            Концерты к празднику 9 Мая
                                        </a>
                                    </h5>
                                </div>
{{--                                <div id="edicaAboutFaqContent2" class="collapse" role="tabpanel"--}}
{{--                                     aria-labelledby="edicaAboutFaq2">--}}
{{--                                    <div class="card-body">--}}
{{--                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque aut--}}
{{--                                        exercitationem dolor porro maiores fugiat enim vitae laboriosam, obcaecati earum--}}
{{--                                        doloremque quas sit tempora in veritatis? Nihil earum excepturi rerum.--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="400">
                                <div class="card-header" role="tab" id="edicaAboutFaq3">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse"
                                           href="#edicaAboutFaqContent3" aria-expanded="false"
                                           aria-controls="edicaAboutFaqContent1">
                                            Фестиваль-праздник «Пой,моя столица»
                                        </a>
                                    </h5>
                                </div>
{{--                                <div id="edicaAboutFaqContent3" class="collapse" role="tabpanel"--}}
{{--                                     aria-labelledby="edicaAboutFaq3">--}}
{{--                                    <div class="card-body">--}}
{{--                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad commodi ut saepe--}}
{{--                                        dolor ipsam hic nisi, accusamus fugit molestiae reiciendis dolores aspernatur--}}
{{--                                        incidunt officiis, explicabo assumenda? Pariatur itaque nostrum error.--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-header" role="tab" id="edicaAboutFaq4">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse"
                                           href="#edicaAboutFaqContent4" aria-expanded="false"
                                           aria-controls="edicaAboutFaqContent1">
                                            Общереспубликанская акция «Хоровое Вече»
                                        </a>
                                    </h5>
                                </div>
{{--                                <div id="edicaAboutFaqContent4" class="collapse" role="tabpanel"--}}
{{--                                     aria-labelledby="edicaAboutFaq4">--}}
{{--                                    <div class="card-body">--}}
{{--                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quos, fuga--}}
{{--                                        nemo quasi temporibus assumenda illo provident corporis, dolores rem ipsum odit--}}
{{--                                        animi voluptatem reiciendis accusamus maiores perspiciatis necessitatibus a?--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-header" role="tab" id="edicaAboutFaq5">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse"
                                           href="#edicaAboutFaqContent5" aria-expanded="false"
                                           aria-controls="edicaAboutFaqContent1">
                                            Концерты за «Духовное возрождение»
                                        </a>
                                    </h5>
                                </div>
{{--                                <div id="edicaAboutFaqContent5" class="collapse" role="tabpanel"--}}
{{--                                     aria-labelledby="edicaAboutFaq5">--}}
{{--                                    <div class="card-body">--}}
{{--                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quos, fuga--}}
{{--                                        nemo quasi temporibus assumenda illo provident corporis, dolores rem ipsum odit--}}
{{--                                        animi voluptatem reiciendis accusamus maiores perspiciatis necessitatibus a?--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
