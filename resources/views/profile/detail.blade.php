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

                    <div class="wrapper d-flex justify-content-between mt-4">
                        <a href="/profile/blog" class="btn btn-secondary">Back to Profile</a>
                        <div class="wrapper">
                            <a href="" class="btn btn-warning btn-sm"><i class="fa-regular fa-pen-to-square fa-sm"
                                    style="color: #ffffff;"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can fa-sm"
                                    style="color: #ffffff;"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
