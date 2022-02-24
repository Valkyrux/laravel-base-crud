@extends('admin.layouts.base')

@section('page_title')
    Edit an existing comic
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fs-4 text-secondary">Edit an existing comic</h1>
                <form action="{{route('comics.update', $comic)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                      <label for="title">Title:</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}" placeholder="Enter title">
                    </div>
                    <div class="form-group mb-3">
                      <label for="image">Image:</label>
                      <input type="text" class="form-control" id="image" name="image" value="{{$comic->image}}" placeholder="Enter an image URL">
                    </div>
                    <div class="form-group mb-3">
                      <label for="edition">Edition:</label>
                      <input type="number" class="form-control" id="edition" name="edition" value="{{$comic->edition}}" placeholder="Enter the edition's number">
                    </div>
                    <div class="form-group mb-3">
                      <label for="authors">Authors:</label>
                      <input type="text" class="form-control" id="authors" name="authors" value="{{$comic->authors}}" placeholder="Enter authors">
                    </div>
                    <div class="form-group mb-3">
                      <label for="artists">Artists:</label>
                      <input type="text" class="form-control" id="artists" name="artists" value="{{$comic->artists}}" placeholder="Enter artists">
                    </div>
                    <div class="form-group mb-3">
                      <label for="description">Description:</label>
                      <input type="text-area" class="form-control" id="description" name="description" value="{{$comic->description}}" placeholder="Enter description">
                    </div>
                    <div class="form-group mb-3">
                      <label for="price">Price:</label>
                      <input type="number" class="form-control" id="price" name="price" value="{{$comic->price}}" placeholder="Enter price">
                    </div>
                    <button type="submit" class="btn btn-success">Submit Your Changes</button>
                    <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>
                  </form>
            </div>
        </div>
    </div>
@endsection