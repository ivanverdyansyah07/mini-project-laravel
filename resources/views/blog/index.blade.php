@extends('templates.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
    </div>

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
                            <a href="/blog/{{ $blog->slug }}" class="btn btn-primary mt-4">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
