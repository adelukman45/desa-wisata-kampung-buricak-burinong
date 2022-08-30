@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->name }}</h2>
            </div>
        </div>
    </div>

    <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"> </span>
        Back to all my products</a>
    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> <span data-feather="edit"> </span>
        Edit</a>
    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger border-0" onclick="return confirm('Are you sure ?')"><span
                data-feather="x-circle"></span> Delete</button>
    </form>

    @if ($post->image)
        <div style="max-height: 350px; overflow: hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name }}" class="img-fluid mt-3">
        </div>
    @elseif ($post->link)
        <div style="max-height: 350px; overflow: hidden;">
            <img src="{{ $post->link }}" alt="{{ $post->name }}" class="img-fluid mt-3">
        </div>
    @else
        <img src="https://source.unsplash.com/1200x400/?{{ $post->name }}" alt="{{ $post->name }}"
            class="img-fluid mt-3">
    @endif

    <article class="my-3">
        {!! $post->desc !!}
    </article>
@endsection
