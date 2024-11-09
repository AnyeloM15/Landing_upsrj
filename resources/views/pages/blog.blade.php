@extends('master.master')

@section('css')
    <link href="{{ url('plugins/video-js/video-js.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ url('styles/blog.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('styles/blog_responsive.css') }}" />
@endsection

@section('body')
    <div class="home">
        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="blog_post_container">
                        <!-- Blog Posts -->
                        @foreach($news as $post)
                            <div class="blog_post trans_200">
                                @if($post->image)
                                    <div class="blog_post_image">
                                        <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" />
                                    </div>
                                @endif
                                
                                @if($post->video)
                                    <div class="blog_post_video_container">
                                        <video class="blog_post_video video-js" data-setup='{"controls": true, "autoplay": false, "preload": "auto", "poster": "{{ asset($post->image ?? 'images/default.jpg') }}"}'>
                                            <source src="{{ asset($post->video) }}" type="video/mp4" />
                                            Your browser does not support HTML5 video.
                                        </video>
                                    </div>
                                @endif

                                <div class="blog_post_body">
                                    <div class="blog_post_title">
                                        <a href="{{ route('news.show', $post->id) }}">{{ $post->title }}</a>
                                    </div>
                                    <div class="blog_post_meta">
                                        <ul>
                                            <li><a href="#">{{ $post->author ?? 'admin' }}</a></li>
                                            <li><a href="#">{{ $post->created_at->format('F d, Y') }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog_post_text">
                                        <p>{{ Str::limit($post->content, 100) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="row">
                <div class="col text-center">
                    <div class="load_more trans_200"><a href="#">Load More</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ url('plugins/masonry/masonry.js') }}"></script>
    <script src="{{ url('plugins/video-js/video.min.js') }}"></script>
    <script src="{{ url('js/blog.js') }}"></script>
@endsection
