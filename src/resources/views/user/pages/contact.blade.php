@extends('user.blog')

@section('content')
    <div class="col-lg-8  mt-5 mb-5 mb-lg-0">
        <h2 class="h4 section-title">Contact</h2>
        <article class="card mb-4">
            <div class="post-slider">
                <img src="images/post/post-10.jpg" class="card-img-top" alt="post-thumb">
                <img src="images/post/post-1.jpg" class="card-img-top" alt="post-thumb">
            </div>
            <div class="card-body">
                @include('user.partials.contact-form')
            </div>
        </article>
    </div>
@endsection
