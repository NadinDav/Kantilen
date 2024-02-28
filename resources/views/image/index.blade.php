@extends('layouts.main')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Галерея</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($images as $image)
                        <div class="col-md-4 blog-post mb-1" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <a href="{{ asset('storage/' . $image->image)}}" data-toggle="lightbox"
                                   data-gallery="gallery" class="w-100">
                                    <img src="{{ asset('storage/' . $image->image)}}" class="img-fluid" alt="{{$image->title}}">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
@endsection



