
{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{$title}}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/blogs">
            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
              </div>
        </form>
    </div>
</div>


@if ($blogs->count())
<div class="card mb-3">
    @if ($blogs[0]->image)
        <div style="max-height: 400px; overflow:hidden;">
            <img src="{{ asset('storage/' . $blogs[0]->image )}}" class="img-fluid" alt="{{ $blogs[0]->category->name }}">
        </div>
    @else
        <img src="https://source.unsplash.com/1200x400?({{ $blogs[0]->category->name }})" class="card-img-top" alt="{{ $blogs[0]->category->name }}">
    @endif
    <div class="card-body text-center">
      <h5 class="card-title">
          <a href="/blogs/{{ $blogs[0]->slug }}" class="text-decoration-none text-dark">
              {{ $blogs[0]->title }}
            </a>
        </h5>
      <small class="text-muted">
      <p>By. 
          <a href="/blogs?author={{ $blogs[0]->author->username }}" class="text-decoration-none">{{ $blogs[0]->author->name }}</a> 
          <a href="/blogs?category={{ $blogs[0]->category->slug }}" class="text-decoration-none">{{ $blogs[0]->category->name }}</a>
          {{ $blogs[0]->created_at->diffForHumans() }}
        </p>
      </small>
      <p class="card-text">{{ $blogs[0]->excerpt }}</p>
      <a href="/blogs/{{ $blogs[0]->slug }}" class="text-decoration-none btn btn-primary">Read More...</a>
    </div>
</div>


<div class="container">
    <div class="row">
        @foreach ($blogs->skip(1) as $blog)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)">
                        <a href="/blogs?category={{ $blog->category->slug }}" class="text-white text-decoration-none">{{ $blog->category->name }}</a>
                    </div>
                    @if ($blog->image)
                        <div style="max-height: 500px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $blog->image )}}" class="img-fluid" alt="{{ $blog->category->name }}">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/500x400?({{ $blog->category->name }})" class="card-img-top" alt="{{ $blog->category->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>

                        <small class="text-muted">
                        <p>By. 
                            <a href="/blogs?author={{ $blog->author->username }}" class="text-decoration-none">{{ $blog->author->name }}</a> 
                            {{ $blog->created_at->diffForHumans() }}
                        </p>
                        </small>
                        <p class="card-text">{{ $blog->excerpt }}</p>
                        <a href="/blogs/{{ $blog->slug }}" class="text-decoration-none">Read More...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@else
    <p class="text-center fs-4">No post found.</p>
@endif

<div class="d-flex justify-content-end">
    {{  $blogs->links() }}
</div>

@endsection
