@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Create Category</h3>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Category Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter category name ">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Category Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
