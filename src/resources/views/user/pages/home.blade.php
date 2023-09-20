@extends('user.blog')

@section('banner')
    @include('user.partials.banner')
@endsection

@section('content')
    <div class="col-lg-8  mb-5 mb-lg-0">
        <h2 class="h5 section-title">Recent Post</h2>
        <article class="card mb-4">
            <div class="post-slider">
                <img src="images/post/post-10.jpg" class="card-img-top" alt="post-thumb">
                <img src="images/post/post-1.jpg" class="card-img-top" alt="post-thumb">
            </div>
            <div class="card-body">
                <h3 class="mb-3"><a class="post-title" href="post-elements.html">Elements That You Can Use In This
                        Template.</a></h3>
                <ul class="card-meta list-inline">
                    <li class="list-inline-item">
                        <a href="author-single.html" class="card-meta-author">
                            <img src="images/john-doe.jpg" alt="John Doe">
                            <span>John Doe</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <i class="ti-timer"></i>3 Min To Read
                    </li>
                    <li class="list-inline-item">
                        <i class="ti-calendar"></i>15 jan, 2020
                    </li>
                    <li class="list-inline-item">
                        <ul class="card-meta-tag list-inline">
                            <li class="list-inline-item"><a href="tags.html">Demo</a></li>
                            <li class="list-inline-item"><a href="tags.html">Elements</a></li>
                        </ul>
                    </li>
                </ul>
                <p>Heading example Here is example of hedings. You can use this heading by following markdownify rules. For
                    example: use # for heading 1 and use ###### for heading 6.</p>
                <a href="post-elements.html" class="btn btn-outline-primary">Read More</a>
            </div>
        </article>
        @include('user.partials.pagination')
    </div>
@endsection

@section('sidebar')
    @include('user.layouts.sidebar')
@endsection
