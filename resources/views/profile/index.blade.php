@extends('templates.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <a href="/profile/blog/create" class="btn btn-primary">Create New</a>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-4">
                <div class="card shadow mb-4">
                    <a href="#{{ $blog->slug }}" class="d-block card-header py-3" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="{{ $blog->slug }}">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $blog->title }}</h6>
                    </a>
                    <div class="collapse show" id="{{ $blog->slug }}">
                        <div class="card-body">
                            <h6>By: <a href="/users/{{ $blog->user->email }}">{{ $blog->user->name }}</a> in <a
                                    href="/categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a></h6>
                            <p>{{ $blog->excerpt }}</p>
                            <div class="wrapper mt-4 d-flex">
                                <a href="/profile/blog/{{ $blog->id }}" class="btn btn-primary btn-sm"><i
                                        class="fa-regular fa-eye fa-sm" style="color: #ffffff;"></i></a>
                                <a href="/profile/blog/{{ $blog->id }}/edit" class="btn btn-warning btn-sm mx-1"><i
                                        class="fa-regular fa-pen-to-square fa-sm" style="color: #ffffff;"></i></a>
                                <form action="/profile/blog/{{ $blog->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm d-inline-block"><i
                                            class="fa-regular fa-trash-can fa-sm" style="color: #ffffff;"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection