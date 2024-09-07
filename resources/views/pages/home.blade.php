@extends('master')

@section('content')
    <div class="cotainer d-flex justify-content-center align-items-center ">
        <div class="col-md-8">
            <h3>CRUD Operation For Blog</h3>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            @if ($message = Session::get('danger'))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <a href="{{ route('blog.create') }}" class="btn btn-dark mb-3"> Create Blog</a>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                @foreach ($blogs as $data)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $data->id }}</th>
                            <td>{{ $data->blog_title }}</td>
                            <td>{{ $data->content }}</td>
                            <td>
                                <img width="70px" src="{{ url('/uploads/' . $data->image) }}" alt="image">
                            </td>
                            <td>
                                <a href="{{ route('blog.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('blog.delete', $data->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
