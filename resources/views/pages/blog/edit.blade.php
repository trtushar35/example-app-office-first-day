@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Edit Blog Information</h3>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <form action="{{ route('blog.update', $blogs->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Blog Title</label>
                        <input value="{{ $blogs->blog_title }}" name="blog_title" type="text" class="form-control"
                            id="exampleFormControlInput1" placeholder="Enter category name " required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea name="content" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Enter description here" required>{{ $blogs->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Upload Image: </label>
                        <input name="image" type="file" class="form-control">
                    </div>
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
