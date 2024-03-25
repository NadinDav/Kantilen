@extends('layouts.main')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Наши награды</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($awards as $award)
                        <div class="col-md-4 landing-blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <a href="{{ asset('storage/' . $award->award)}}" data-toggle="lightbox"
                                   data-gallery="gallery" class="w-100" target="_blank">
                                    <img src="{{ asset('storage/' . $award->award)}}" class="img-fluid" alt="{{$award->title}}">
                                </a>
                                <br><br>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
@endsection



