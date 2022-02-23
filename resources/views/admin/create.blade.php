@extends('layouts.admin_base')

@section('page_title')
    a title
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('comics.store')}}">
                    <div class="form-group mb-3">
                      <label for="title">Title:</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                    </div>
                    <div class="form-group mb-3">
                      <label for="image">Image:</label>
                      <input type="text" class="form-control" id="image" name="image" placeholder="Enter an image URL">
                    </div>
                    <div class="form-group mb-3">
                      <label for="edition">Edition:</label>
                      <input type="number" class="form-control" id="edition" name="edition" placeholder="Enter the edition's number">
                    </div>
                    <div class="form-group mb-3">
                      <label for="authors">Authors:</label>
                      <input type="text" class="form-control" id="authors" name="authors" placeholder="Enter authors">
                    </div>
                    <div class="form-group mb-3">
                      <label for="artists">Artists:</label>
                      <input type="text" class="form-control" id="artists" name="artists" placeholder="Enter artists">
                    </div>
                    <div class="form-group mb-3">
                      <label for="description">Description:</label>
                      <input type="text-area" class="form-control" id="description" name="description" placeholder="Enter description">
                    </div>
                    <div class="form-group mb-3">
                      <label for="price">Price:</label>
                      <input type="number" class="form-control" id="price" name="price" placeholder="Enter price">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection