@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Create Blog</h3>
                <form action="{{ route('blog.store') }}" method="post" enctype = "multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Blog Title</label>
                        <input name="blog_title" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter category name " required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea name="content" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Enter description here" required></textarea>
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
