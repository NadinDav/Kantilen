@extends('layouts.main')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Галерея</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($images as $image)
                        <div class="col-sm-3" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <a href="{{ asset('storage/' . $image->image)}}?text={{$image->title}}" data-toggle="lightbox"
                                   data-gallery="example-gallery" class="col-sm-4">
                                    <img src="{{ asset('storage/' . $image->image)}}?text={{$image->title}}" class="img-fluid" alt="image">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
@endsection



