{{-- @dump($blog); --}}
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $blog->title }}</h1>

            <p>By. 
                <a href="/blogs?author={{ $blog->author->username }}" class="text-decoration-none">{{ $blog->author->name }}</a>
             in <a href="/blogs?category={{ $blog->category->slug }}" class="text-decoration-none">{{ $blog->category->name }}</a></p>
            @if ($blog->image)
             <div style="max-height: 350px; overflow:hidden;">
                 <img src="{{ asset('storage/' . $blog->image )}}" class="img-fluid" alt="{{ $blog->category->name }}">
             </div>
            @else
             <img src="https://source.unsplash.com/1200x400?({{ $blog->category->name }})" class="img-fluid mt-3" alt="{{ $blog->category->name }}">
            @endif    
        <article class="my-3 fs-6">
            {!!  $blog->body !!}
        </article>
            <a href="/blogs" class="d-block mt-3">Back to Post</a>
        </div>
    </div>
</div>


@endsection