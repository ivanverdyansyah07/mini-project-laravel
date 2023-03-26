@extends('templates.main')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Users</h1>
    </div>

    <div class="row">
        @foreach ($users as $user)
            <div class="col-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $user->name }}</h6>
                    </div>
                    <div class="card-body">
                        <p>{{ $user->description }}</p>
                        <div class="wrapper d-flex justify-content-between">
                            <a href="/users/{{ $user->email }}" class="btn btn-secondary mt-4">View Blogs</a>
                            <p onshow="hpver()">{{ $user->blogs_count }} blogs found</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
