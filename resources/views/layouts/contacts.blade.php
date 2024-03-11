@extends('layouts.main')
@section('content')
    {{--        @if (session('success'))--}}
    {{--            <div class="alert alert-success" role="alert">--}}
    {{--                {{ session('success') }}--}}
    {{--            </div>--}}
    {{--        @endif--}}
    {{--        @if ($errors->any())--}}
    {{--            <div class="alert alert-danger" role="alert">--}}
    {{--                <ul>--}}
    {{--                    @foreach($errors->all() as $error)--}}
    {{--                        <li>{{ $error }}</li>--}}
    {{--                    @endforeach--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--        @endif--}}
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <h1 class="edica-page-title" data-aos="fade-up">Контакты</h1>
                    <section class="edica-contact py-5 mb-5">
                        <div class="row">
                            <form method="post" action="{{ route('contacts.send') }}" class="row">
                                @csrf
                                <div class="col-md-8 contact-form-wrapper">
                                    <div class="row">
                                        <div class="form-group col-md-6" data-aos="fade-up">
                                            <label for="name">ИМЯ</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                   placeholder="Полное имя" required maxlength="100"
                                                   value="{{ old('name') ?? '' }}">
                                        </div>
                                        <div class="form-group col-md-6" data-aos="fade-up">
                                            <label for="phone">НОМЕР ТЕЛЕФОНА</label>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                   placeholder="Номер телефона">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                            <label for="email">EMAIL</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                   placeholder="Email" required maxlength="100"
                                                   value="{{ old('email') ?? '' }}">
                                        </div>
                                        <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                            <label for="subject">ТЕМА</label>
                                            <input type="text" class="form-control" id="subject" name="subject"
                                                   placeholder="Тема сообщения" required maxlength="500"
                                                   value="{{ old('message') ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12" data-aos="fade-up" data-aos-delay="200">
                                            <label for="message">СООБЩЕНИЕ</label>
                                            <textarea name="message" id="message" rows="9" class="form-control">Текст сообщения</textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-warning btn-lg" data-aos="fade-up"
                                            data-aos-delay="300">Отправить сообщение
                                    </button>
                                </div>

                                <div class="col-md-4 contact-sidebar" data-aos="fade-left">
                                    <h5>Наш адрес</h5>
                                    <p>Образцовый хор "Кантилена", Минск, создан на базе ГУО «Детская музыкальная школа
                                        искусств № 5 г. Минска»</p>
                                    <p>ул. Пономаренко, 10<br> г.Минск, Республика Беларусь</p>
                                    <div class="embed-responsive embed-responsive-1by1 contact-map">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2351.1303160657203!2d27.48996307676528!3d53.89388767245311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbdaadcb3de155%3A0x6e3eb7bf43da10cb!2z0JzRg9C30YvQutCw0LvRjNC90LDRjyDRiNC60L7Qu9CwIOKEliA1!5e0!3m2!1sru!2sby!4v1709036132342!5m2!1sru!2sby"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
