@extends('templates.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h4 class="m-0 font-weight-bold text-primary">Edit Blog</h4>
                </div>
                <div class="card-body">
                    <form action="/profile/blog/{{ $blog->id }}" method="post">
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" id="title"
                                        class="form-control @error('title') is-invalid @enderror" placeholder="Enter title"
                                        name="title" required value="{{ old('title', $blog->title) }}">
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" id="slug"
                                        class="form-control @error('slug') is-invalid @enderror" placeholder="Enter slug"
                                        name="slug" required value="{{ old('slug', $blog->slug) }}">
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        @foreach ($categories as $category)
                                            @if (old('category_id', $blog->category_id) == $category->id)
                                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="body" class="form-label">Body</label>
                                    <textarea id="body" class="form-control @error('body') is-invalid @enderror" required placeholder="Enter body"
                                        name="body" cols="30" rows="6">{{ old('body', $blog->body) }}</textarea>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <a href="/profile/blog" class="btn btn-secondary">Back to Profile</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const titleInput = document.querySelector('#title');
        const slugInput = document.querySelector('#slug');

        titleInput.addEventListener('change', function() {
            let input = titleInput.value;
            input = input.toLowerCase();
            input = input.split(" ");
            input = input.toString();
            slugInput.value = input.replaceAll(',', '-');
        });
    </script>
@endsection
