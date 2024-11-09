@extends('master.master')

@section('css')
    <link href="{{ url('/') }}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/styles/blog_single.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/styles/blog_single_responsive.css" />
@endsection

@section('body')

    <!-- Home -->
    <div class="home">
        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('news.index') }}">Blog</a></li>
                                <li>{{ $news->title }}</li>
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
                <!-- Blog Content -->
                <div class="col-lg-8">
                    <div class="blog_content">
                        <div class="blog_title">{{ $news->title }}</div>
                        <div class="blog_meta">
                            <ul>
                                <li>Post on <a href="#">{{ $news->created_at->format('F d, Y') }}</a></li>
                                <li>By <a href="#">{{ $news->author ?? 'Admin' }}</a></li>
                            </ul>
                        </div>
                        <div class="blog_image">
                            <img src="{{ asset($news->image) }}" alt="{{ $news->title }}" />
                        </div>
                        <p>{{ $news->content }}</p>
                    </div>

                    <!-- Optional: Comments Section -->
                    <!-- You can implement a comments section if needed, using a similar structure as in the static example -->

                </div>

                <!-- Blog Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!-- Optional: Categories, Latest News, Tags, etc. -->
                        <!-- This can be populated dynamically if you have categories or tags associated with your news articles -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
