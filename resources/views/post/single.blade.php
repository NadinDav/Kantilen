@extends('layouts.main')
@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{$post->updated_at}}</p>
            <div class="col-lg-9 mx-auto" data-aos="fade-up">
                <img src="{{asset('storage/' . $post->preview_image)}}" alt="featured image" class="w-100">
            </div>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <br><br>
                        <p>{{$post->content}}</p>
                    </div>
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                            <img src="{{asset('storage/' . $post->main_image)}}" alt="blog post" class="w-100">
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection



