@extends('templates.main')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Category</h1>
    </div>

    <div class="row">
        @foreach ($categories as $category)
            <div class="col-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $category->name }}</h6>
                    </div>
                    <div class="card-body">
                        <p>{{ $category->description }}</p>
                        <a href="categories/{{ $category->slug }}" class="btn btn-secondary mt-4">View Blogs</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
