@extends('layouts.master')
@section('content')

        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ asset('images/'.$featured_blog->photo) }}" alt="Photo" width="900" height="400" /></a>
                        
                        <div class="card-body">
                            <div class="small text-muted">{{ $featured_blog->created_at->format('F d, Y') }}</div>
                            <h2 class="card-title">{{ $featured_blog->title }}</h2>
                            <p class="card-text">{!!( \Illuminate\Support\Str::limit(@$featured_blog->description, 250, '...') )!!}
                                </p>
                            <a class="btn btn-primary" href="{{ url('detail', $featured_blog->id)}}">Read more →</a>
                        </div>
                    </div>

                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        @foreach ($data as $blog)
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{ asset('images/'.$blog->photo) }}" alt="Photo" width="700" height="200" /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $blog->created_at->format('F d, Y') }}</div>
                                    <h2 class="card-title h4">{{ $blog->title }}</h2>
                                    <p class="card-text">{!! ( \Illuminate\Support\Str::limit($blog->description, 40, '...') )!!}</p>
                                    <a class="btn btn-primary" href="{{ url('detail', $blog->id)}}">Read more →</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                
                    
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                      
                                @foreach ($categories as $category)

                                <div class="col-sm-6">

                                    <ul class="list-unstyled mb-0">
                                        <li><a href="{{ route('category_detail', $category) }}">{{$category->name}}</a></li>
                                        {{-- <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li> --}}
                                    </ul>

                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>
@endsection