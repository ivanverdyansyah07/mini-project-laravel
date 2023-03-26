@extends('templates.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h4 class="m-0 font-weight-bold text-primary">{{ $blog->title }}</h4>
                </div>
                <div class="card-body">
                    <h6 class="fs-bold">By: <a href="/users/{{ $blog->user->email }}">{{ $blog->user->name }}</a> in <a
                            href="/categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a></h6>
                    <p>{{ $blog->body }}</p>
                    <a href="/blog" class="btn btn-secondary mt-4">Back to All Page</a>
                </div>
            </div>
        </div>
    </div>
@endsection
